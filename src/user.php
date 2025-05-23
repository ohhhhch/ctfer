<?php
session_start();

if (!$_SESSION['username']){
    //echo "<script>alert('请先登录');window.history.go(-1)</script>";
    header("location: login.php");
}else{
    if ($_SESSION['is_admin'] == 0){
        echo "<h1>flag1{17013e65-4e6f-b9</h1>";
    }else{
        echo "<h1>f6-a308-ce3878e8212c}</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>博客管理界面</title>
    <!--================= Favicon =================-->

    <!--================= Magnific Popup CSS =================-->
    <link rel="stylesheet" href="static/css/magnific.popup.css">
    <!--================= Base CSS =================-->
    <link rel="stylesheet" href="static/css/base.css">
    <!--================= Inline CSS =================-->
    <link rel="stylesheet" href="static/css/inline.css">
    <!--================= Fontello CSS =================-->
    <link rel="stylesheet" href="static/css/fontello.css">
    <!--================= Widgets CSS =================-->
    <link rel="stylesheet" href="static/css/widgets.css">
    <!--================= Swiper CSS =================-->
    <link rel="stylesheet" href="static/css/swiper.css">
    <!--================= Style CSS =================-->
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>

<div class="xoxo_fn_stickynav ajax_enable">
    <div class="progress"></div>
    <div class="container">
        <div class="transform_hedaer">
            <div class="sticky_header">
                <div class="xoxo_fn_nav sticky_nav">
                    <div class="menu">
                        <div class="menu-main-menu-container">
                            <ul class="xoxo_fn_main_nav">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-117 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-130">
                                    <a href="#0">
                                            <span>
											<span>Home</span>
                                            <span class="suffix">//</span>
                                            </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-menu-item"><a href="index.html"><span><span>Home #1</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="index-two.html"><span><span>Home #2</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="index-three.html"><span><span>Home #3</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="index-four.html"><span><span>Home #4</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="index-five.html"><span><span>Home #5</span><span class="suffix">//</span></span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#0">
                                            <span>
											<span>Post Styles</span>
                                            <span class="suffix">//</span>
                                            </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="quote-post.html"><span><span>Quote Post</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="link-post.html"><span><span>Link Post</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="audio-post.html"><span><span>Audio Post</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="gallery-post.html"><span><span>Gallery Post</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="video-post.html"><span><span>Video Post</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="status-post.html"><span><span>Status Post</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="standard-post.html"><span><span>Standard Post</span><span class="suffix">//</span></span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#0">
                                            <span>
											<span>Categories</span>
                                            <span class="suffix">//</span>
                                            </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="fashion.html"><span><span>Fashion</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="food.html"><span><span>Food</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="health.html"><span><span>Health</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="interior.html"><span><span>Interior</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="lifestyle.html"><span><span>Lifestyle</span><span class="suffix">//</span></span></a></li>
                                        <li class="menu-item"><a href="travel.html"><span><span>Travel</span><span class="suffix">//</span></span></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href=""><span><span>Contact</span><span class="suffix">//</span></span></a></li>
                            </ul>
                        </div>
                        <div class="more">
                            <a href="#0">
                                <span>More...</span>
                            </a>
                            <ul class="sub-menu">
                                <!-- Comes from JS -->
                            </ul>
                        </div>
                    </div>
                    <div class="icon_bar">
                        <div class="icon_bar__item icon_bar__home">
                            <a href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="429.000000pt" viewbox="0 0 512.000000 429.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                                    <g transform="translate(0.000000,429.000000) scale(0.100000,-0.100000)" stroke="none">
                                        <path d="M1335 3349 c-671 -517 -1246 -960 -1277 -984 l-58 -45 177 -229 177 -230 35 28 c20 16 516 398 1104 849 l1067 821 1068 -821 c587 -451 1083 -833 1103 -849 l35 -28 176 229 176 228 -21 20 c-12 10 -176 137 -364 282 l-343 262 0 464 0 464 -367 -2 -368 -3 -3 -172 c-1 -95 -5 -173 -8 -173 -3 0 -248 187 -544 415 -297 228 -541 415 -542 414 -2 0 -552 -423 -1223 -940z"></path>
                                        <path d="M1678 2502 l-878 -676 0 -908 0 -908 705 0 705 0 0 665 0 665 380 0 380 0 0 -665 0 -665 675 0 675 0 0 908 0 908 -876 675 c-482 371 -880 675 -883 676 -3 1 -401 -303 -883 -675z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="icon_bar__item icon_bar__share">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="428.000000pt" height="470.000000pt" viewbox="0 0 428.000000 470.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                                    <g transform="translate(0.000000,470.000000) scale(0.100000,-0.100000)" stroke="none">
                                        <path d="M3308 4690 c-31 -5 -84 -16 -118 -25 -361 -93 -630 -450 -618 -818 l3 -97 -573 -382 c-408 -272 -577 -379 -586 -373 -204 155 -375 212 -600 202 -141 -7 -208 -23 -331 -81 -248 -117 -422 -348 -470 -621 -19 -110 -19 -180 0 -290 61 -346 328 -621 674 -690 101 -21 291 -16 386 10 83 22 231 96 293 144 28 23 55 41 59 41 4 0 264 -171 577 -379 l569 -379 -2 -94 c-5 -218 74 -417 229 -581 118 -125 252 -205 415 -248 112 -29 298 -30 410 0 300 78 533 307 621 611 29 100 27 337 -4 443 -83 287 -300 506 -587 593 -79 24 -108 27 -230 28 -116 0 -153 -3 -218 -22 -181 -52 -323 -142 -439 -280 l-36 -43 -535 356 -534 357 20 61 c30 90 30 344 0 434 l-20 61 533 356 534 356 72 -75 c418 -441 1146 -315 1393 242 67 149 88 372 51 526 -91 378 -403 640 -787 661 -52 2 -120 1 -151 -4z"></path>
                                    </g>
                                </svg>
                            </a>
                            <div class="xoxo_fn_social_list">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M2960 5104 c-394 -57 -704 -271 -868 -599 -118 -238 -142 -383 -142 -876 l0 -349 -339 0 c-188 0 -351 -4 -364 -9 -14 -6 -35 -20 -46 -32 -21 -22 -21 -29 -21 -483 0 -422 2 -463 18 -482 34 -43 47 -44 406 -44 l346 0 0 -1080 0 -1080 29 -32 29 -33 466 -3 c411 -2 470 -1 497 13 62 32 59 -18 59 1150 l0 1065 400 0 c288 0 406 3 425 12 55 25 55 29 55 517 l0 451 -29 32 -29 33 -412 3 -411 3 3 323 3 322 30 59 c33 64 88 107 162 127 21 6 169 12 328 14 160 3 301 7 313 10 13 3 35 17 48 31 l24 26 0 432 c0 424 0 432 -21 454 -11 12 -32 26 -46 32 -40 15 -801 9 -913 -7z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M3367 4624 c-408 -74 -731 -372 -838 -776 -19 -69 -23 -110 -23 -248 -1 -91 2 -184 7 -208 l7 -44 -67 7 c-441 40 -797 141 -1152 326 -328 171 -669 440 -878 691 -32 38 -62 67 -67 65 -6 -2 -27 -42 -48 -90 -144 -325 -117 -700 70 -992 55 -85 145 -186 218 -244 l75 -61 -41 0 c-88 0 -271 50 -370 100 -21 11 -43 20 -47 20 -14 0 4 -183 27 -271 91 -345 347 -618 688 -732 56 -19 96 -37 88 -40 -45 -17 -193 -29 -308 -25 l-130 6 7 -26 c11 -44 85 -184 131 -248 176 -248 465 -418 747 -441 42 -3 77 -9 77 -14 0 -16 -224 -155 -361 -223 -312 -155 -621 -222 -984 -214 l-185 4 52 -33 c77 -48 309 -165 413 -208 561 -233 1216 -286 1834 -149 909 202 1658 834 2036 1719 161 378 242 750 251 1150 l3 180 73 58 c92 75 196 174 275 262 67 76 165 207 159 212 -2 2 -32 -8 -67 -22 -133 -54 -440 -132 -486 -123 -11 2 -3 12 26 31 76 50 211 189 268 275 50 74 123 221 123 247 0 6 -61 -20 -136 -57 -136 -66 -313 -130 -451 -163 l-73 -17 -61 56 c-234 217 -571 316 -882 260z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M2365 5114 c-266 -29 -428 -61 -617 -125 -759 -253 -1364 -859 -1617 -1617 -223 -667 -157 -1424 175 -2025 259 -469 649 -848 1106 -1074 59 -29 110 -53 113 -53 3 0 5 48 5 108 0 155 18 330 46 462 13 63 93 405 177 760 l153 645 -22 55 c-78 192 -76 505 5 693 51 118 161 240 256 283 139 64 305 46 398 -44 81 -78 117 -173 117 -307 0 -105 -23 -207 -113 -515 -102 -346 -105 -356 -116 -427 -20 -126 19 -244 110 -335 158 -158 442 -155 658 8 146 110 293 352 370 614 57 190 75 330 76 580 0 201 -2 234 -22 307 -93 346 -333 585 -678 673 -231 59 -534 54 -767 -14 -427 -124 -760 -508 -833 -959 -20 -120 -19 -298 1 -395 19 -94 78 -223 138 -303 63 -83 64 -102 23 -258 -49 -186 -74 -208 -184 -157 -211 99 -361 292 -437 563 -40 142 -50 227 -50 408 0 184 16 290 70 451 103 310 337 616 627 821 331 234 859 359 1318 313 289 -30 545 -121 783 -280 315 -211 527 -516 614 -884 24 -102 26 -129 26 -321 0 -290 -34 -501 -119 -745 -137 -391 -395 -701 -720 -863 -212 -105 -518 -146 -725 -97 -159 39 -321 137 -400 243 -30 40 -36 44 -42 28 -3 -10 -45 -169 -92 -353 -47 -184 -99 -374 -117 -424 -34 -98 -116 -267 -179 -369 -22 -36 -40 -69 -40 -73 0 -5 48 -20 108 -35 550 -136 1136 -87 1644 138 787 349 1359 1084 1492 1916 67 422 35 854 -94 1240 -308 919 -1115 1592 -2070 1724 -111 15 -473 28 -555 19z"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M1218 5109 c-167 -20 -364 -85 -514 -170 -388 -223 -644 -611 -693 -1052 -15 -133 -15 -2521 0 -2654 71 -643 579 -1151 1222 -1222 133 -15 2521 -15 2654 0 643 71 1151 579 1222 1222 15 133 15 2521 0 2654 -71 643 -579 1151 -1222 1222 -118 13 -2554 13 -2669 0z m2892 -671 c150 -45 265 -177 290 -334 30 -185 -83 -378 -261 -445 -152 -58 -333 -17 -443 101 -231 247 -88 646 249 693 40 5 121 -2 165 -15z m-1366 -493 c309 -41 577 -174 802 -399 550 -550 550 -1422 0 -1972 -550 -550 -1422 -550 -1972 0 -550 550 -550 1422 0 1972 315 314 734 457 1170 399z">
                                                    </path>
                                                    <path d="M3965 4153 c-32 -8 -74 -54 -81 -89 -8 -46 19 -98 63 -119 46 -22 91 -13 128 25 45 47 36 130 -18 164 -27 17 -65 25 -92 19z">
                                                    </path>
                                                    <path d="M2394 3645 c-233 -36 -441 -142 -609 -310 -431 -430 -431 -1120 0 -1550 430 -431 1120 -431 1550 0 431 430 431 1120 0 1550 -249 249 -597 364 -941 310z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="icon_bar__item icon_bar__search">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="488.000000pt" height="488.000000pt" viewbox="0 0 488.000000 488.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                                    <g transform="translate(0.000000,488.000000) scale(0.100000,-0.100000)" stroke="none">
                                        <path d="M2140 4874 c-165 -20 -218 -28 -303 -45 -263 -54 -570 -183 -792 -332 -179 -121 -378 -299 -510 -457 -271 -326 -444 -714 -511 -1150 -22 -142 -25 -488 -6 -630 92 -667 461 -1257 1019 -1631 538 -362 1205 -477 1842 -318 181 45 304 92 501 191 163 82 179 88 235 88 103 -1 126 -17 395 -284 216 -214 253 -246 310 -271 57 -26 77 -30 160 -30 86 0 101 3 162 32 89 42 151 101 191 182 30 62 32 72 32 176 0 104 -2 114 -33 180 -29 61 -60 96 -267 305 -258 259 -274 282 -275 385 0 56 6 72 88 235 99 197 146 320 191 501 174 699 17 1434 -427 1994 -78 98 -241 264 -347 353 -312 262 -725 447 -1137 508 -99 14 -446 27 -518 18z m476 -823 c401 -82 743 -312 970 -651 360 -540 333 -1254 -66 -1769 -306 -393 -781 -612 -1274 -587 -700 35 -1268 524 -1418 1220 -18 85 -22 133 -21 296 0 170 3 210 25 310 63 286 195 534 397 744 251 259 562 412 941 460 85 11 348 -3 446 -23z">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Sticky Menu End Here =================-->

<div class="xoxo_fn_searchbox">
    <a href="#" class="search_closer"><span></span></a>
    <div class="container">
        <div class="search_content">
            <div class="search_wrapper">
                <form class="main_form" action="#" method="get">
                    <div class="input">
                        <input type="text" placeholder="Type at least one character to search..." name="s" autocomplete="off">
                    </div>
                    <div class="search">
                        <input type="submit" class="pe-7s-search" value="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="488.000000pt" height="488.000000pt" viewbox="0 0 488.000000 488.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                            <g transform="translate(0.000000,488.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M2140 4874 c-165 -20 -218 -28 -303 -45 -263 -54 -570 -183 -792 -332 -179 -121 -378 -299 -510 -457 -271 -326 -444 -714 -511 -1150 -22 -142 -25 -488 -6 -630 92 -667 461 -1257 1019 -1631 538 -362 1205 -477 1842 -318 181 45 304 92 501 191 163 82 179 88 235 88 103 -1 126 -17 395 -284 216 -214 253 -246 310 -271 57 -26 77 -30 160 -30 86 0 101 3 162 32 89 42 151 101 191 182 30 62 32 72 32 176 0 104 -2 114 -33 180 -29 61 -60 96 -267 305 -258 259 -274 282 -275 385 0 56 6 72 88 235 99 197 146 320 191 501 174 699 17 1434 -427 1994 -78 98 -241 264 -347 353 -312 262 -725 447 -1137 508 -99 14 -446 27 -518 18z m476 -823 c401 -82 743 -312 970 -651 360 -540 333 -1254 -66 -1769 -306 -393 -781 -612 -1274 -587 -700 35 -1268 524 -1418 1220 -18 85 -22 133 -21 296 0 170 3 210 25 310 63 286 195 534 397 744 251 259 562 412 941 460 85 11 348 -3 446 -23z">
                                </path>
                            </g>
                        </svg>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="xoxo_fn_pagetitle">
    <div class="container">
        <div class="pagetitle">
            <h3 class="fn__title">我的博客</h3>
            <div class="xoxo_fn_breadcrumbs">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li class="item-home">
                        <a class="bread-link bread-home" href="index.php" title="主页">首页</a>
                    </li>
                    <li class="separator separator-home"> <span></span></li>
                    <li class="item-current item-cat"><span class="bread-current bread-cat"><a class="nav-item" href="api/logout.php">退出</a></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--================= Breadcrumbs End Here =================-->
<!--================= Breadcrumbs End =================-->

<!--================= Contact Section Start =================-->
<div class="xoxo_fn_full_page_in">
    <div class="xoxo_fn_hassidebar">
        <div class="container">
            <div class="sidebarpage">
                <div class="xoxo_fn_rightsidebar">
                    <div class="sidebar_in">
                        <div class="xoxo_fn_sidebar">
                            <div class="widget_block clear widget_xoxo_author">
                                <div class="wid-title">
                                    <span class="text">关于我</span>
                                    <span class="icon"></span>
                                </div>
                                <div class="xoxo_fn_widget_author">
                                    <div class="info_img" style="background-image: url(static/img/1.jpg);">
                                        <a class="full_link" href="#0"></a>
                                        <div class="abs_img">
                                            <!--                                            <img src="static/img/1.jpg">-->
                                        </div>
                                    </div>
                                    <div class="info_desc">
                                        <div class="author_top">
                                            <h3 class="fn_title">
                                                <a href="#0"><?php echo $_SESSION['username'];?></a>
                                            </h3>
                                            <p style="font-weight: 550"> 划水高手
                                            </p>
                                        </div>
                                        <div class="author_bottom">
                                            <ul class="author_social">
                                                <li>
                                                    <a href="javascript:">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                                <path d="M2960 5104 c-394 -57 -704 -271 -868 -599 -118 -238 -142 -383 -142 -876 l0 -349 -339 0 c-188 0 -351 -4 -364 -9 -14 -6 -35 -20 -46 -32 -21 -22 -21 -29 -21 -483 0 -422 2 -463 18 -482 34 -43 47 -44 406 -44 l346 0 0 -1080 0 -1080 29 -32 29 -33 466 -3 c411 -2 470 -1 497 13 62 32 59 -18 59 1150 l0 1065 400 0 c288 0 406 3 425 12 55 25 55 29 55 517 l0 451 -29 32 -29 33 -412 3 -411 3 3 323 3 322 30 59 c33 64 88 107 162 127 21 6 169 12 328 14 160 3 301 7 313 10 13 3 35 17 48 31 l24 26 0 432 c0 424 0 432 -21 454 -11 12 -32 26 -46 32 -40 15 -801 9 -913 -7z"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                                <path d="M3367 4624 c-408 -74 -731 -372 -838 -776 -19 -69 -23 -110 -23 -248 -1 -91 2 -184 7 -208 l7 -44 -67 7 c-441 40 -797 141 -1152 326 -328 171 -669 440 -878 691 -32 38 -62 67 -67 65 -6 -2 -27 -42 -48 -90 -144 -325 -117 -700 70 -992 55 -85 145 -186 218 -244 l75 -61 -41 0 c-88 0 -271 50 -370 100 -21 11 -43 20 -47 20 -14 0 4 -183 27 -271 91 -345 347 -618 688 -732 56 -19 96 -37 88 -40 -45 -17 -193 -29 -308 -25 l-130 6 7 -26 c11 -44 85 -184 131 -248 176 -248 465 -418 747 -441 42 -3 77 -9 77 -14 0 -16 -224 -155 -361 -223 -312 -155 -621 -222 -984 -214 l-185 4 52 -33 c77 -48 309 -165 413 -208 561 -233 1216 -286 1834 -149 909 202 1658 834 2036 1719 161 378 242 750 251 1150 l3 180 73 58 c92 75 196 174 275 262 67 76 165 207 159 212 -2 2 -32 -8 -67 -22 -133 -54 -440 -132 -486 -123 -11 2 -3 12 26 31 76 50 211 189 268 275 50 74 123 221 123 247 0 6 -61 -20 -136 -57 -136 -66 -313 -130 -451 -163 l-73 -17 -61 56 c-234 217 -571 316 -882 260z"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                                <path d="M2365 5114 c-266 -29 -428 -61 -617 -125 -759 -253 -1364 -859 -1617 -1617 -223 -667 -157 -1424 175 -2025 259 -469 649 -848 1106 -1074 59 -29 110 -53 113 -53 3 0 5 48 5 108 0 155 18 330 46 462 13 63 93 405 177 760 l153 645 -22 55 c-78 192 -76 505 5 693 51 118 161 240 256 283 139 64 305 46 398 -44 81 -78 117 -173 117 -307 0 -105 -23 -207 -113 -515 -102 -346 -105 -356 -116 -427 -20 -126 19 -244 110 -335 158 -158 442 -155 658 8 146 110 293 352 370 614 57 190 75 330 76 580 0 201 -2 234 -22 307 -93 346 -333 585 -678 673 -231 59 -534 54 -767 -14 -427 -124 -760 -508 -833 -959 -20 -120 -19 -298 1 -395 19 -94 78 -223 138 -303 63 -83 64 -102 23 -258 -49 -186 -74 -208 -184 -157 -211 99 -361 292 -437 563 -40 142 -50 227 -50 408 0 184 16 290 70 451 103 310 337 616 627 821 331 234 859 359 1318 313 289 -30 545 -121 783 -280 315 -211 527 -516 614 -884 24 -102 26 -129 26 -321 0 -290 -34 -501 -119 -745 -137 -391 -395 -701 -720 -863 -212 -105 -518 -146 -725 -97 -159 39 -321 137 -400 243 -30 40 -36 44 -42 28 -3 -10 -45 -169 -92 -353 -47 -184 -99 -374 -117 -424 -34 -98 -116 -267 -179 -369 -22 -36 -40 -69 -40 -73 0 -5 48 -20 108 -35 550 -136 1136 -87 1644 138 787 349 1359 1084 1492 1916 67 422 35 854 -94 1240 -308 919 -1115 1592 -2070 1724 -111 15 -473 28 -555 19z"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                                <path d="M1218 5109 c-167 -20 -364 -85 -514 -170 -388 -223 -644 -611 -693 -1052 -15 -133 -15 -2521 0 -2654 71 -643 579 -1151 1222 -1222 133 -15 2521 -15 2654 0 643 71 1151 579 1222 1222 15 133 15 2521 0 2654 -71 643 -579 1151 -1222 1222 -118 13 -2554 13 -2669 0z m2892 -671 c150 -45 265 -177 290 -334 30 -185 -83 -378 -261 -445 -152 -58 -333 -17 -443 101 -231 247 -88 646 249 693 40 5 121 -2 165 -15z m-1366 -493 c309 -41 577 -174 802 -399 550 -550 550 -1422 0 -1972 -550 -550 -1422 -550 -1972 0 -550 550 -550 1422 0 1972 315 314 734 457 1170 399z"></path>
                                                                <path d="M3965 4153 c-32 -8 -74 -54 -81 -89 -8 -46 19 -98 63 -119 46 -22 91 -13 128 25 45 47 36 130 -18 164 -27 17 -65 25 -92 19z"></path>
                                                                <path d="M2394 3645 c-233 -36 -441 -142 -609 -310 -431 -430 -431 -1120 0 -1550 430 -431 1120 -431 1550 0 431 430 431 1120 0 1550 -249 249 -597 364 -941 310z"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget_block clear widget_xoxo_custom_categories">
                                <div>
                                    <div class="wid-title">
                                        <span class="text">管理功能</span>
                                        <span class="icon"></span>
                                    </div>
                                    <div class="xoxo_fn_ccategories">
                                        <ul>
                                            <li>
                                                <div class="category__item">
                                                    <a class="full_link" href="javascript:"></a>
                                                    <span class="cat_title">
                                                            <span class="name">更改头像</span>
                                                        <span class="count">1</span>
                                                        </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="category__item">
                                                    <a class="full_link" href="?file=api/changePassword"></a>
                                                    <span class="cat_title">
                                                            <span class="name">更改密码</span>
                                                        <span class="count">2</span>
                                                        </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="category__item">
                                                    <a class="full_link" href="?file=api/BlogInfo"></a>
                                                    <span class="cat_title">
                                                            <span class="name">文章管理</span>
                                                        <span class="count">3</span>
                                                        </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="category__item">
                                                    <a class="full_link" href="?file=api/postBlog"></a>
                                                    <span class="cat_title">
                                                            <span class="name">添加文章</span>
                                                        <span class="count">4</span>
                                                        </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget_block clear widget_xoxo_followers">
                                <div>
                                    <div class="wid-title"><span class="text">粉丝量</span><span class="icon"></span></div>
                                    <div class="xoxo_fn_widget_followers">
                                        <ul>
                                            <li>
                                                <div class="item">
                                                    <a href="#"></a>
                                                    <span class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                                    <path d="M2960 5104 c-394 -57 -704 -271 -868 -599 -118 -238 -142 -383 -142 -876 l0 -349 -339 0 c-188 0 -351 -4 -364 -9 -14 -6 -35 -20 -46 -32 -21 -22 -21 -29 -21 -483 0 -422 2 -463 18 -482 34 -43 47 -44 406 -44 l346 0 0 -1080 0 -1080 29 -32 29 -33 466 -3 c411 -2 470 -1 497 13 62 32 59 -18 59 1150 l0 1065 400 0 c288 0 406 3 425 12 55 25 55 29 55 517 l0 451 -29 32 -29 33 -412 3 -411 3 3 323 3 322 30 59 c33 64 88 107 162 127 21 6 169 12 328 14 160 3 301 7 313 10 13 3 35 17 48 31 l24 26 0 432 c0 424 0 432 -21 454 -11 12 -32 26 -46 32 -40 15 -801 9 -913 -7z"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    <span class="count">9,368</span>
                                                    <span class="subtitle">脸书</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="#"></a>
                                                    <span lass="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                                    <path d="M3367 4624 c-408 -74 -731 -372 -838 -776 -19 -69 -23 -110 -23 -248 -1 -91 2 -184 7 -208 l7 -44 -67 7 c-441 40 -797 141 -1152 326 -328 171 -669 440 -878 691 -32 38 -62 67 -67 65 -6 -2 -27 -42 -48 -90 -144 -325 -117 -700 70 -992 55 -85 145 -186 218 -244 l75 -61 -41 0 c-88 0 -271 50 -370 100 -21 11 -43 20 -47 20 -14 0 4 -183 27 -271 91 -345 347 -618 688 -732 56 -19 96 -37 88 -40 -45 -17 -193 -29 -308 -25 l-130 6 7 -26 c11 -44 85 -184 131 -248 176 -248 465 -418 747 -441 42 -3 77 -9 77 -14 0 -16 -224 -155 -361 -223 -312 -155 -621 -222 -984 -214 l-185 4 52 -33 c77 -48 309 -165 413 -208 561 -233 1216 -286 1834 -149 909 202 1658 834 2036 1719 161 378 242 750 251 1150 l3 180 73 58 c92 75 196 174 275 262 67 76 165 207 159 212 -2 2 -32 -8 -67 -22 -133 -54 -440 -132 -486 -123 -11 2 -3 12 26 31 76 50 211 189 268 275 50 74 123 221 123 247 0 6 -61 -20 -136 -57 -136 -66 -313 -130 -451 -163 l-73 -17 -61 56 c-234 217 -571 316 -882 260z"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    <span class="count">17,055</span>
                                                    <span class="subtitle">推特</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="#"></a>
                                                    <span class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                                    <path d="M2365 5114 c-266 -29 -428 -61 -617 -125 -759 -253 -1364 -859 -1617 -1617 -223 -667 -157 -1424 175 -2025 259 -469 649 -848 1106 -1074 59 -29 110 -53 113 -53 3 0 5 48 5 108 0 155 18 330 46 462 13 63 93 405 177 760 l153 645 -22 55 c-78 192 -76 505 5 693 51 118 161 240 256 283 139 64 305 46 398 -44 81 -78 117 -173 117 -307 0 -105 -23 -207 -113 -515 -102 -346 -105 -356 -116 -427 -20 -126 19 -244 110 -335 158 -158 442 -155 658 8 146 110 293 352 370 614 57 190 75 330 76 580 0 201 -2 234 -22 307 -93 346 -333 585 -678 673 -231 59 -534 54 -767 -14 -427 -124 -760 -508 -833 -959 -20 -120 -19 -298 1 -395 19 -94 78 -223 138 -303 63 -83 64 -102 23 -258 -49 -186 -74 -208 -184 -157 -211 99 -361 292 -437 563 -40 142 -50 227 -50 408 0 184 16 290 70 451 103 310 337 616 627 821 331 234 859 359 1318 313 289 -30 545 -121 783 -280 315 -211 527 -516 614 -884 24 -102 26 -129 26 -321 0 -290 -34 -501 -119 -745 -137 -391 -395 -701 -720 -863 -212 -105 -518 -146 -725 -97 -159 39 -321 137 -400 243 -30 40 -36 44 -42 28 -3 -10 -45 -169 -92 -353 -47 -184 -99 -374 -117 -424 -34 -98 -116 -267 -179 -369 -22 -36 -40 -69 -40 -73 0 -5 48 -20 108 -35 550 -136 1136 -87 1644 138 787 349 1359 1084 1492 1916 67 422 35 854 -94 1240 -308 919 -1115 1592 -2070 1724 -111 15 -473 28 -555 19z"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    <span class="count">13,542</span>
                                                    <span class="subtitle">拼趣</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <a href="#"></a>
                                                    <span class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                                                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                                    <path d="M1218 5109 c-167 -20 -364 -85 -514 -170 -388 -223 -644 -611 -693 -1052 -15 -133 -15 -2521 0 -2654 71 -643 579 -1151 1222 -1222 133 -15 2521 -15 2654 0 643 71 1151 579 1222 1222 15 133 15 2521 0 2654 -71 643 -579 1151 -1222 1222 -118 13 -2554 13 -2669 0z m2892 -671 c150 -45 265 -177 290 -334 30 -185 -83 -378 -261 -445 -152 -58 -333 -17 -443 101 -231 247 -88 646 249 693 40 5 121 -2 165 -15z m-1366 -493 c309 -41 577 -174 802 -399 550 -550 550 -1422 0 -1972 -550 -550 -1422 -550 -1972 0 -550 550 -550 1422 0 1972 315 314 734 457 1170 399z"></path>
                                                                    <path d="M3965 4153 c-32 -8 -74 -54 -81 -89 -8 -46 19 -98 63 -119 46 -22 91 -13 128 25 45 47 36 130 -18 164 -27 17 -65 25 -92 19z"></path>
                                                                    <path d="M2394 3645 c-233 -36 -441 -142 -609 -310 -431 -430 -431 -1120 0 -1550 430 -431 1120 -431 1550 0 431 430 431 1120 0 1550 -249 249 -597 364 -941 310z"></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    <span class="count">22,893</span>
                                                    <span class="subtitle">照片墙</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xoxo_fn_leftsidebar">
                      <?php
                          error_reporting(0);
                          $file = $_GET['file'];
                          include $file.".php";

                      ?>


                </div>
            </div>
        </div>
    </div>


</div>

<footer id="xoxo_fn_footer">
    <div class="xoxo_fn_footer">
        <div class="footer_top">
            <div class="container">
                <div class="footer_subscribe_form">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path d="M3445 4650 c-1693 -506 -1613 -479 -1601 -545 7 -33 39 -65 65 -65 10 0 546 157 1191 350 646 192 1175 348 1177 346 2 -1 -223 -121 -500 -266 -276 -145 -869 -456 -1319 -691 l-816 -429 -234 121 c-431 224 -483 251 -491 258 -4 4 142 52 325 107 190 56 340 107 350 117 35 34 14 108 -35 121 -30 7 -881 -246 -908 -270 -22 -20 -25 -72 -7 -96 7 -9 216 -121 463 -249 248 -127 454 -235 459 -239 4 -5 44 -322 87 -707 43 -384 81 -712 84 -730 7 -37 38 -63 74 -63 20 0 119 94 461 435 l435 435 437 -235 c290 -156 447 -235 467 -235 19 0 36 8 48 24 32 40 1453 2882 1453 2905 0 29 -43 71 -72 70 -13 0 -729 -211 -1593 -469z m748 -1118 c-350 -698 -623 -1231 -630 -1229 -18 3 -1112 591 -1112 597 0 3 276 223 614 490 388 306 618 495 625 511 9 21 8 33 -4 57 -16 31 -34 42 -70 42 -23 0 -114 -71 -944 -727 -402 -319 -424 -338 -447 -388 -78 -176 -369 -795 -372 -791 -2 2 -33 255 -68 562 -47 420 -60 562 -52 570 7 6 552 293 1212 639 660 345 1242 650 1293 677 50 27 92 48 92 45 0 -3 -104 -87 -231 -187 -127 -101 -236 -193 -241 -206 -21 -46 36 -113 84 -100 13 4 212 156 443 340 231 183 421 333 423 331 1 -1 -276 -556 -615 -1233z m-1737 -808 l104 -56 -79 -86 c-44 -48 -159 -166 -256 -262 l-176 -175 46 100 c198 426 249 535 252 535 2 0 51 -25 109 -56z"></path>
                            <path d="M4115 1784 c-313 -55 -561 -210 -875 -545 -246 -262 -391 -401 -475 -457 -313 -208 -631 -244 -973 -112 -141 54 -308 167 -471 316 l-54 50 135 135 c222 221 250 270 192 324 -44 40 -61 33 -153 -67 -47 -51 -130 -136 -185 -189 l-101 -97 -47 42 c-192 166 -344 255 -483 283 -322 65 -636 -205 -612 -524 14 -183 139 -305 341 -334 206 -28 418 51 704 263 l93 69 92 -82 c263 -234 431 -329 682 -386 130 -30 332 -36 455 -14 171 31 343 105 489 209 120 86 208 170 405 386 235 258 340 352 487 439 163 96 330 147 510 154 223 10 392 -48 524 -180 298 -298 177 -742 -242 -891 -143 -50 -225 -60 -458 -50 -364 15 -557 11 -650 -14 -177 -48 -309 -142 -362 -259 -22 -47 -27 -73 -27 -136 -1 -71 1 -81 23 -98 55 -45 121 -10 121 64 0 149 112 251 319 293 68 13 116 15 250 10 506 -19 524 -19 630 -2 343 54 591 241 676 508 93 292 -23 602 -288 775 -173 113 -436 159 -672 117z m-3496 -470 c89 -20 205 -87 327 -189 l95 -80 -28 -23 c-121 -100 -323 -214 -438 -248 -89 -26 -216 -24 -280 5 -136 60 -193 191 -137 314 41 93 165 190 283 221 70 19 96 19 178 0z"></path>
                        </g>
                    </svg>
                    <h3 class="fsf_title">随时获取最新消息</h3>
                    <p class="fsf_desc">让最新的优质帖子发送到您的邮箱</p>
                    <script>
                        (function() {
                            window.mc4wp = window.mc4wp || {
                                listeners: [],
                                forms: {
                                    on: function(evt, cb) {
                                        window.mc4wp.listeners.push({
                                            event: evt,
                                            callback: cb
                                        });
                                    }
                                }
                            }
                        })();
                    </script>
                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-162" method="post" data-id="162" data-name="Footer Subscribe Form">
                        <div class="mc4wp-form-fields">
                            <div class="fn__subscribe">
                                <input type="email" name="EMAIL" placeholder="在此键入您的邮箱 *" required="">
                                <input type="submit" value="提交">
                            </div>
                        </div>
                        <label style="display: none !important;">Leave this field empty if you're human:
                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
                        </label>
                        <input type="hidden" name="_mc4wp_timestamp" value="1673931253">
                        <input type="hidden" name="_mc4wp_form_id" value="162">
                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                        <div class="mc4wp-response"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="footer_btm_in">
                    <span class="wing_left"></span>
                    <span class="wing_right"></span>
                    <div class="footer_copyright">
                        <p>版权所有 &copy; 2023.xxx(自己取名)保留所有权利
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================= Footer Area End =================-->
<!--================= Footer Area End Here =================-->

<!--================= Script Start Here =================-->
<!--================= Mouse Effect Start =================-->
<div class="frenify-cursor cursor-outer" data-default="yes" data-link="yes" data-slider="no" style="visibility: visible; transform: translate(1591px, 538px);"><span class="fn-cursor"></span></div>
<div class="frenify-cursor cursor-inner" data-default="yes" data-link="yes" data-slider="no" style="visibility: visible; transform: translate(360px, 544px);"><span class="fn-cursor"><span class="fn-left"></span><span class="fn-right"></span></span></div>
<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--================= Mouse Effect Start =================-->


<!--================= Scroll to Top Start =================-->
<a class="xoxo_fn_totop active">
        <span class="progress_wrapper">
        <span class="progress" style="height: 91.8187%;"></span>
        </span>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 557.97 1061" style="enable-background:new 0 0 557.97 1061;" xml:space="preserve" class="fn__svg  replaced-svg">
            <path d="M557.97,554.2c0,4.13,0,8.26,0,12.39c-0.37,2.83-0.75,5.66-1.11,8.49c-2.47,19.12-10.14,35.74-23.81,49.46  c-1.02,1.02-2.42,1.87-3.79,2.31c-8.96,2.89-18.12,3.28-27.38,1.91c-13.68-2.03-26.18-7.3-38.1-14.08  c-21.62-12.31-40.29-28.39-57.82-45.86c-28.44-28.34-53.31-59.63-76.03-92.68c-0.61-0.89-1.29-1.73-2.3-3.08  c-0.1,1.2-0.17,1.63-0.17,2.06c0.03,32.31-0.98,64.6-3.29,96.83c-1.56,21.73-3.32,43.46-5.57,65.13  c-2.71,26.12-6.58,52.09-11.66,77.88c-6.4,32.52-15.07,64.34-28.3,94.82c-22.74,52.42-51.12,101.67-83.67,148.55  c-17.42,25.09-35.96,49.32-57.81,70.77c-14.1,13.84-28.57,27.36-48.82,31.92c-1.97,0-3.95,0-5.92,0c-3.98-1.33-7.87-2.73-10.95-5.86  c-5.86-5.95-8.47-13.2-8.88-21.34c-0.68-13.44,2.95-26.11,7.27-38.6c7.44-21.55,17.29-42.09,27.01-62.67  c14.89-31.52,29.92-62.97,43.1-95.26c17.4-42.65,30.2-86.59,37.18-132.14c3.19-20.81,5.97-41.71,8.22-62.64  c2.09-19.52,3.54-39.12,4.7-58.73c1.05-17.73,1.42-35.5,1.92-53.26c0.95-34.02,0.14-68.02-1.36-102c-0.16-3.52-0.46-7.03-0.7-10.54  c-1.06,0.87-1.57,1.78-2.04,2.72c-18.76,36.7-39.4,72.27-63.39,105.83c-13.17,18.43-27.28,36.08-44.08,51.41  c-9.45,8.62-19.55,16.34-31.6,21.09c-7.23,2.86-14.69,4.16-22.4,2.77c-13.71-2.47-20.98-11.51-24.1-24.42  c-1.07-4.42-1.54-8.97-2.29-13.47c0-4.49,0-8.98,0-13.46c0.18-0.86,0.42-1.72,0.53-2.59c1.04-8.27,1.79-16.58,3.14-24.79  c3.57-21.68,9.15-42.91,15.05-64.05c9.97-35.71,20.36-71.3,30.05-107.09c9.64-35.6,17.21-71.58,18.86-108.63  c1.27-28.54,0.95-57.05,0.09-85.58c-0.86-28.33-2.7-56.65-1.36-85.02c0.56-11.84,1.68-23.63,4.84-35.09  C75.99,20.25,84.24,5.72,102.87,0c1.8,0,3.59,0,5.39,0c5.02,1.57,10.2,2.77,15.04,4.79c10.07,4.19,19.11,10.23,27.92,16.58  c22.42,16.14,42.81,34.66,62.61,53.83c49.96,48.37,96.11,100.26,141.08,153.24c9.64,11.35,18.66,23.27,28.83,34.13  c38.53,41.13,74.39,84.4,106,131.1c19.59,28.93,37.26,58.96,50.61,91.35c7.53,18.28,13.53,37.01,16.13,56.7  C557.02,545.87,557.47,550.04,557.97,554.2z">
            </path>
        </svg>
</a>
<!--================= Scroll to Top End =================-->



<!--================= jquery lastest version =================-->
<script src="static/js/jquery.min.js"></script>
<!--================= Isotop JS =================-->
<script src="static/js/isotope.js"></script>
<!--================= Magnific Popup JS =================-->
<script src="static/js/magnific.popup.js"></script>
<!--================= Modernizr JS =================-->
<script src="static/js/modernizr.custom.js"></script>
<!--================= Swiper JS =================-->
<script src="static/js/swiper.js"></script>
<!--================= Main JS =================-->
<script src="static/js/main.js"></script>
<!--================= Script End Here =================-->
</body>

</html>