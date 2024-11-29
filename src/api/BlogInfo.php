<!--                <div class="content-title">文章管理</div>-->
<!--                <table class="content-table">-->
<!--                    <tr>-->
<!--                        <th>标题</th>-->
<!--                        <th>作者</th>-->
<!--                        <th>日期</th>-->
<!--                        <th>操作</th>-->
<!--                    </tr>-->
<?php
session_start();
include "function/Posts.php";
include 'function/FormDate.php';
static $num = 0;
$posts = new Posts();
$result = $posts->getOne($_SESSION['username']);

?>
<!--            </table>-->
<!--            </div>-->
<div class="featured_posts_wrapper post_item">
    <div class="featured_post_item">
        <div class="fp_heading">
            <h3>
                                        <span class="text_wrapper">
                                        <span class="text">文章列表</span>
                                        </span>
            </h3>
        </div>
        <div class="fp_content">
            <ul>
                <?php
                    if ($result > 0) {
                        foreach ($result as $row) {
                            $num++;
                            ?>
                            <li>
                                        <div class="fp__item">
                                            <span class="fp_count"><span>
                                                    <?php
                                                        if($num < 10){
                                                            echo "0".$num;
                                                        } else{
                                                            echo $num;
                                                        }
                                                    ?></span></span>
                                            <h4>标题：<?php echo $row['title']; ?></h4>
                                            <h4>作者：<?php echo $row['author']; ?></h4>
                                            <h4>时间：<?php $time=new FormDate();
                                                        $formtime = $time->FormTime($row['update_time']);
                                                        echo $formtime;
                                                    ?>
                                            </h4>
                                            <div class="xoxo_fn_pagination">
                                                <div class="container">
                                                    <div class="pag_in">
                                                        <div class="pag_inner">
                                                            <ul>
                                                                <li><a href='api/updateBlog.php?id=<?php echo $row["id"]; ?>' class="inactive">编辑</a></li>
                                                                <li><a href='api/removeBlog.php?id=<?php echo $row["id"]; ?>' class="inactive">删除</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </li>
<!--//                            echo "<td>" . $row["title"] . "</td>";-->
<!--//                            echo "<td>" . $row["author"] . "</td>";-->
<!--//                            echo "<td>" . $row["update_time"] . "</td>";-->
<!--//                            echo "<td><a href='./" . $row['img_path'] . "'></td>";-->
<!--//                            echo "<td><a href='api/updateBlog.php?id=" . $row["id"] . "'>编辑</a> | <a href='api/removeBlog.php?id=" . $row["id"] . "'>删除</a></td>";-->
<!--//                            echo "</tr>";-->
                <?php
                        }
                    }
                ?>


            </ul>
        </div>
    </div>
</div>