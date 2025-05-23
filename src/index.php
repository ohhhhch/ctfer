<?php
include 'function/FormDate.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>首页</title>
	<link rel="stylesheet" href="static/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
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
                                    <a href="index.php" class="no_after">
                                            <span>
											<span>主页</span>
                                            <span class="suffix">//</span>
                                            </span>
                                    </a>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#0">
                                            <span>
											<span>后台功能</span>
                                            <span class="suffix">//</span>
                                            </span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="user.php?file=api/postBlog"><span><span>发布文章</span></span></a></li>
                                        <li class="menu-item"><a href="user.php?file=api/BlogInfo"><span><span>个人信息</span></span></a></li>
                                        <?php
                                            //登陆检测
                                            // 检查用户是否已登录
                                            
                                            if(isset($_SESSION['username'])) {
                                                // 用户已登录，显示退出链接
                                                echo '<li class="menu-item"><a href="api/logout.php">
                                                        <span><span>退出</span></span>
                                                      </a></li>';
                                            } else {
                                                // 用户未登录，显示登录链接
                                                echo '<li class="menu-item"><a href="login.php">
                                                        <span><span>登录</span></span>
                                                      </a></li>';
                                            }
                                        ?>
                                    </ul>
                                </li>
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
                        <input type="text" placeholder="别搜了，没做这个功能..." name="s" autocomplete="off">
                    </div>
                    <div class="search">
                        <input type="submit" class="pe-7s-search" value="搜索">
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

<!--================= Header Start Here =================-->
<header id="xoxo_fn_header">
    <div class="xoxo_fn_header">
        <div class="container">
            <div class="header_top">
                <span class="wing_left"></span>
                <span class="wing_right"></span>
                <!-- Social List -->
                <div class="social">
                    <div class="xoxo_fn_social_list">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                            <path d="M2960 5104 c-394 -57 -704 -271 -868 -599 -118 -238 -142 -383 -142 -876 l0 -349 -339 0 c-188 0 -351 -4 -364 -9 -14 -6 -35 -20 -46 -32 -21 -22 -21 -29 -21 -483 0 -422 2 -463 18 -482 34 -43 47 -44 406 -44 l346 0 0 -1080 0 -1080 29 -32 29 -33 466 -3 c411 -2 470 -1 497 13 62 32 59 -18 59 1150 l0 1065 400 0 c288 0 406 3 425 12 55 25 55 29 55 517 l0 451 -29 32 -29 33 -412 3 -411 3 3 323 3 322 30 59 c33 64 88 107 162 127 21 6 169 12 328 14 160 3 301 7 313 10 13 3 35 17 48 31 l24 26 0 432 c0 424 0 432 -21 454 -11 12 -32 26 -46 32 -40 15 -801 9 -913 -7z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                            <path d="M3367 4624 c-408 -74 -731 -372 -838 -776 -19 -69 -23 -110 -23 -248 -1 -91 2 -184 7 -208 l7 -44 -67 7 c-441 40 -797 141 -1152 326 -328 171 -669 440 -878 691 -32 38 -62 67 -67 65 -6 -2 -27 -42 -48 -90 -144 -325 -117 -700 70 -992 55 -85 145 -186 218 -244 l75 -61 -41 0 c-88 0 -271 50 -370 100 -21 11 -43 20 -47 20 -14 0 4 -183 27 -271 91 -345 347 -618 688 -732 56 -19 96 -37 88 -40 -45 -17 -193 -29 -308 -25 l-130 6 7 -26 c11 -44 85 -184 131 -248 176 -248 465 -418 747 -441 42 -3 77 -9 77 -14 0 -16 -224 -155 -361 -223 -312 -155 -621 -222 -984 -214 l-185 4 52 -33 c77 -48 309 -165 413 -208 561 -233 1216 -286 1834 -149 909 202 1658 834 2036 1719 161 378 242 750 251 1150 l3 180 73 58 c92 75 196 174 275 262 67 76 165 207 159 212 -2 2 -32 -8 -67 -22 -133 -54 -440 -132 -486 -123 -11 2 -3 12 26 31 76 50 211 189 268 275 50 74 123 221 123 247 0 6 -61 -20 -136 -57 -136 -66 -313 -130 -451 -163 l-73 -17 -61 56 c-234 217 -571 316 -882 260z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                            <path d="M2365 5114 c-266 -29 -428 -61 -617 -125 -759 -253 -1364 -859 -1617 -1617 -223 -667 -157 -1424 175 -2025 259 -469 649 -848 1106 -1074 59 -29 110 -53 113 -53 3 0 5 48 5 108 0 155 18 330 46 462 13 63 93 405 177 760 l153 645 -22 55 c-78 192 -76 505 5 693 51 118 161 240 256 283 139 64 305 46 398 -44 81 -78 117 -173 117 -307 0 -105 -23 -207 -113 -515 -102 -346 -105 -356 -116 -427 -20 -126 19 -244 110 -335 158 -158 442 -155 658 8 146 110 293 352 370 614 57 190 75 330 76 580 0 201 -2 234 -22 307 -93 346 -333 585 -678 673 -231 59 -534 54 -767 -14 -427 -124 -760 -508 -833 -959 -20 -120 -19 -298 1 -395 19 -94 78 -223 138 -303 63 -83 64 -102 23 -258 -49 -186 -74 -208 -184 -157 -211 99 -361 292 -437 563 -40 142 -50 227 -50 408 0 184 16 290 70 451 103 310 337 616 627 821 331 234 859 359 1318 313 289 -30 545 -121 783 -280 315 -211 527 -516 614 -884 24 -102 26 -129 26 -321 0 -290 -34 -501 -119 -745 -137 -391 -395 -701 -720 -863 -212 -105 -518 -146 -725 -97 -159 39 -321 137 -400 243 -30 40 -36 44 -42 28 -3 -10 -45 -169 -92 -353 -47 -184 -99 -374 -117 -424 -34 -98 -116 -267 -179 -369 -22 -36 -40 -69 -40 -73 0 -5 48 -20 108 -35 550 -136 1136 -87 1644 138 787 349 1359 1084 1492 1916 67 422 35 854 -94 1240 -308 919 -1115 1592 -2070 1724 -111 15 -473 28 -555 19z">
                                            </path>
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
                <!-- !Social List -->

                <div class="search_opener">
                    <a href="#">
                        <span class="text">搜索</span>
                        <span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="488.000000pt" height="488.000000pt" viewbox="0 0 488.000000 488.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
								<g transform="translate(0.000000,488.000000) scale(0.100000,-0.100000)" stroke="none">
									<path d="M2140 4874 c-165 -20 -218 -28 -303 -45 -263 -54 -570 -183 -792 -332 -179 -121 -378 -299 -510 -457 -271 -326 -444 -714 -511 -1150 -22 -142 -25 -488 -6 -630 92 -667 461 -1257 1019 -1631 538 -362 1205 -477 1842 -318 181 45 304 92 501 191 163 82 179 88 235 88 103 -1 126 -17 395 -284 216 -214 253 -246 310 -271 57 -26 77 -30 160 -30 86 0 101 3 162 32 89 42 151 101 191 182 30 62 32 72 32 176 0 104 -2 114 -33 180 -29 61 -60 96 -267 305 -258 259 -274 282 -275 385 0 56 6 72 88 235 99 197 146 320 191 501 174 699 17 1434 -427 1994 -78 98 -241 264 -347 353 -312 262 -725 447 -1137 508 -99 14 -446 27 -518 18z m476 -823 c401 -82 743 -312 970 -651 360 -540 333 -1254 -66 -1769 -306 -393 -781 -612 -1274 -587 -700 35 -1268 524 -1418 1220 -18 85 -22 133 -21 296 0 170 3 210 25 310 63 286 195 534 397 744 251 259 562 412 941 460 85 11 348 -3 446 -23z">
									</path>
								</g>
							</svg>
						</span>
                    </a>
                </div>
            </div>
            <!--================= Nav Start =================-->
            <div class="header_bottom">
                <div class="bottom_fixer">
                    <div class="xoxo_fn_nav main_nav">
                        <span class="wing"></span>
                        <div class="menu">
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="xoxo_fn_main_nav">
                                    <li class="menu-item menu-item-has-children">
                                        <a href="./index.php" class="no_after">
                                                <span>
                                                <span>主页</span>
                                                <span class="suffix">//</span>
                                                </span>
                                        </a>
                                    </li>

                                    <li class="menu-item menu-item-has-children">
                                        <a href="#0">
                                                <span>
                                                <span>后台功能</span>
                                                <span class="suffix">//</span>
                                                </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="user.php?file=api/postBlog"><span><span>发布文章</span></span></a></li>
                                            <li class="menu-item"><a href="user.php?file=api/BlogInfo"><span><span>个人信息</span></span></a></li>
                                            <?php
                                            //登陆检测
                                            // 检查用户是否已登录
                                            
                                            if(isset($_SESSION['username'])) {
                                                // 用户已登录，显示退出链接
                                                echo '<li class="menu-item"><a href="api/logout.php">
                                                        <span><span>退出</span></span>
                                                      </a></li>';
                                            } else {
                                                // 用户未登录，显示登录链接
                                                echo '<li class="menu-item"><a href="login.php">
                                                        <span><span>登录</span></span>
                                                      </a></li>';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="more">
                                <a href="#">
                                    <span>More...</span>
                                </a>
                                <ul class="sub-menu">
                                    <!-- Comes from JS -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Nav End =================-->
        </div>
    </div>
</header>
<!--================= Header End Here =================-->
<!--================= Header One End =================-->
<!--================= Mobile Menu Start Here =================-->
<div class="xoxo_fn_mobnav">
    <div class="mob_top">
        <div class="right__triggerr">
            <a class="mobsearch_opener" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="488.000000pt" height="488.000000pt" viewbox="0 0 488.000000 488.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                    <g transform="translate(0.000000,488.000000) scale(0.100000,-0.100000)" stroke="none">
                        <path d="M2140 4874 c-165 -20 -218 -28 -303 -45 -263 -54 -570 -183 -792 -332 -179 -121 -378 -299 -510 -457 -271 -326 -444 -714 -511 -1150 -22 -142 -25 -488 -6 -630 92 -667 461 -1257 1019 -1631 538 -362 1205 -477 1842 -318 181 45 304 92 501 191 163 82 179 88 235 88 103 -1 126 -17 395 -284 216 -214 253 -246 310 -271 57 -26 77 -30 160 -30 86 0 101 3 162 32 89 42 151 101 191 182 30 62 32 72 32 176 0 104 -2 114 -33 180 -29 61 -60 96 -267 305 -258 259 -274 282 -275 385 0 56 6 72 88 235 99 197 146 320 191 501 174 699 17 1434 -427 1994 -78 98 -241 264 -347 353 -312 262 -725 447 -1137 508 -99 14 -446 27 -518 18z m476 -823 c401 -82 743 -312 970 -651 360 -540 333 -1254 -66 -1769 -306 -393 -781 -612 -1274 -587 -700 35 -1268 524 -1418 1220 -18 85 -22 133 -21 296 0 170 3 210 25 310 63 286 195 534 397 744 251 259 562 412 941 460 85 11 348 -3 446 -23z">
                        </path>
                    </g>
                </svg>
            </a>
            <a class="mobmenu_opener" href="#">
                <span><span></span></span>
            </a>
        </div>
    </div>
    <div class="mob_bot" style="display: none;">
        <div class="xoxo_fn_social_list">
            <ul>
                <li>
                    <a href="#" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M2960 5104 c-394 -57 -704 -271 -868 -599 -118 -238 -142 -383 -142 -876 l0 -349 -339 0 c-188 0 -351 -4 -364 -9 -14 -6 -35 -20 -46 -32 -21 -22 -21 -29 -21 -483 0 -422 2 -463 18 -482 34 -43 47 -44 406 -44 l346 0 0 -1080 0 -1080 29 -32 29 -33 466 -3 c411 -2 470 -1 497 13 62 32 59 -18 59 1150 l0 1065 400 0 c288 0 406 3 425 12 55 25 55 29 55 517 l0 451 -29 32 -29 33 -412 3 -411 3 3 323 3 322 30 59 c33 64 88 107 162 127 21 6 169 12 328 14 160 3 301 7 313 10 13 3 35 17 48 31 l24 26 0 432 c0 424 0 432 -21 454 -11 12 -32 26 -46 32 -40 15 -801 9 -913 -7z">
                                </path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M3367 4624 c-408 -74 -731 -372 -838 -776 -19 -69 -23 -110 -23 -248 -1 -91 2 -184 7 -208 l7 -44 -67 7 c-441 40 -797 141 -1152 326 -328 171 -669 440 -878 691 -32 38 -62 67 -67 65 -6 -2 -27 -42 -48 -90 -144 -325 -117 -700 70 -992 55 -85 145 -186 218 -244 l75 -61 -41 0 c-88 0 -271 50 -370 100 -21 11 -43 20 -47 20 -14 0 4 -183 27 -271 91 -345 347 -618 688 -732 56 -19 96 -37 88 -40 -45 -17 -193 -29 -308 -25 l-130 6 7 -26 c11 -44 85 -184 131 -248 176 -248 465 -418 747 -441 42 -3 77 -9 77 -14 0 -16 -224 -155 -361 -223 -312 -155 -621 -222 -984 -214 l-185 4 52 -33 c77 -48 309 -165 413 -208 561 -233 1216 -286 1834 -149 909 202 1658 834 2036 1719 161 378 242 750 251 1150 l3 180 73 58 c92 75 196 174 275 262 67 76 165 207 159 212 -2 2 -32 -8 -67 -22 -133 -54 -440 -132 -486 -123 -11 2 -3 12 26 31 76 50 211 189 268 275 50 74 123 221 123 247 0 6 -61 -20 -136 -57 -136 -66 -313 -130 -451 -163 l-73 -17 -61 56 c-234 217 -571 316 -882 260z">
                                </path>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg replaced-svg">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M2365 5114 c-266 -29 -428 -61 -617 -125 -759 -253 -1364 -859 -1617 -1617 -223 -667 -157 -1424 175 -2025 259 -469 649 -848 1106 -1074 59 -29 110 -53 113 -53 3 0 5 48 5 108 0 155 18 330 46 462 13 63 93 405 177 760 l153 645 -22 55 c-78 192 -76 505 5 693 51 118 161 240 256 283 139 64 305 46 398 -44 81 -78 117 -173 117 -307 0 -105 -23 -207 -113 -515 -102 -346 -105 -356 -116 -427 -20 -126 19 -244 110 -335 158 -158 442 -155 658 8 146 110 293 352 370 614 57 190 75 330 76 580 0 201 -2 234 -22 307 -93 346 -333 585 -678 673 -231 59 -534 54 -767 -14 -427 -124 -760 -508 -833 -959 -20 -120 -19 -298 1 -395 19 -94 78 -223 138 -303 63 -83 64 -102 23 -258 -49 -186 -74 -208 -184 -157 -211 99 -361 292 -437 563 -40 142 -50 227 -50 408 0 184 16 290 70 451 103 310 337 616 627 821 331 234 859 359 1318 313 289 -30 545 -121 783 -280 315 -211 527 -516 614 -884 24 -102 26 -129 26 -321 0 -290 -34 -501 -119 -745 -137 -391 -395 -701 -720 -863 -212 -105 -518 -146 -725 -97 -159 39 -321 137 -400 243 -30 40 -36 44 -42 28 -3 -10 -45 -169 -92 -353 -47 -184 -99 -374 -117 -424 -34 -98 -116 -267 -179 -369 -22 -36 -40 -69 -40 -73 0 -5 48 -20 108 -35 550 -136 1136 -87 1644 138 787 349 1359 1084 1492 1916 67 422 35 854 -94 1240 -308 919 -1115 1592 -2070 1724 -111 15 -473 28 -555 19z">
                                </path>
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
        <div class="menu-main-menu-container">
            <ul id="menu-main-menu-1" class="mobile_menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-117 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-130">
                    <a href="login.php" class="no_after">
                            <span>
                            <span>主页</span>
                            </span>
                    </a>

                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9">
                    <a href="#">
                            <span>
                            <span>后台功能</span>
                            </span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-140">
                            <a href="user.php?file=api/postBlog">
                                    <span>
                                    <span>发布文章</span>
                                    </span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-141">
                            <a href="user.php?file=api/BlogInfo">
                                    <span>
                                    <span>个人信息</span>
                                    </span>
                            </a>
                        </li>
                        <?php
                        //登陆检测
                        // 检查用户是否已登录
                        
                        if(isset($_SESSION['username'])) {
                            // 用户已登录，显示退出链接
                            echo '<li class="menu-item"><a href="api/logout.php">
                                                        <span><span>退出</span></span>
                                                      </a></li>';
                        } else {
                            // 用户未登录，显示登录链接
                            echo '<li class="menu-item"><a href="login.php">
                                                        <span><span>登录</span></span>
                                                      </a></li>';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--================= Mobile Menu Start Here =================-->

<!--================= Home One Start =================-->
<div class="xoxo_fn_content">
    <!--================= Slider Area Start Here =================-->
    <div class="fn__bp_slider">
        <div class="container">
            <div class="bp_slider_in">
                <div class="swiper swiper-container ready swiper-container-horizontal">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="item" data-swiper-parallax="0">
                                <div class="img_wrap">
                                    <div class="img_holder">
                                        <div class="abs_img" data-swiper-parallax="500" style="background-image: url(static/assets/images/blog/01.jpg);">
                                        </div>
                                    </div>
                                </div>
                                <div class="title_holder">
                                    <h3>
                                        <a href="javascript:">滑雪的乐趣</a>
                                    </h3>
                                    <div class="fn__meta">
                                        <p>
                                                <span class="meta_item meta_date">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="470.000000pt" height="470.000000pt" viewbox="0 0 470.000000 470.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                                                        <g transform="translate(0.000000,470.000000) scale(0.100000,-0.100000)" stroke="none">
                                                            <path d="M1224 4666 l-34 -34 0 -210 0 -211 -412 -3 -413 -3 -75 -36 c-136 -65 -236 -182 -272 -318 -13 -51 -17 -110 -17 -253 l-1 -188 2350 0 2350 0 0 181 c0 211 -14 288 -66 376 -54 90 -118 149 -213 196 l-84 42 -414 3 -413 3 0 211 0 210 -34 34 -34 34 -146 0 -146 0 -32 -29 -33 -29 -3 -216 -3 -216 -730 0 -729 0 0 195 c0 293 -2 295 -218 295 l-144 0 -34 -34z"></path>
                                                            <path d="M0 1802 c0 -1179 2 -1376 15 -1425 47 -182 180 -315 362 -362 50 -13 309 -15 1973 -15 2099 0 1966 -4 2089 58 73 36 163 128 201 202 63 125 60 41 60 1542 l0 1368 -2350 0 -2350 0 0 -1368z m1390 483 l0 -305 -305 0 -305 0 0 298 c0 164 3 302 7 305 3 4 141 7 305 7 l298 0 0 -305z m1260 0 l0 -305 -300 0 -300 0 0 305 0 305 300 0 300 0 0 -305z m1268 -2 l2 -303 -305 0 -305 0 0 305 0 305 303 -2 302 -3 3 -302z m-2528 -1273 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z m1260 0 l0 -300 -300 0 -300 0 0 300 0 300 300 0 300 0 0 -300z m1270 0 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z"></path>
                                                        </g>
                                                    </svg>
                                                    2023-12
                                                </span>
                                            <span class="meta_item meta_category">
                                                    <a class=" fn_last_category" href="javascript:">探险</a>
                                                </span>
                                            <span class="meta_item meta_author">
                                                    <a href="javascript:;">旅行</a>
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item" data-swiper-parallax="0">
                                <div class="img_wrap">
                                    <div class="img_holder">
                                        <div class="abs_img" data-swiper-parallax="500" style="background-image: url(static/assets/images/blog/02.jpg)">
                                        </div>
                                    </div>
                                </div>
                                <div class="title_holder">
                                    <h3>
                                        <a href="javascript:">薯条的灵魂，番茄酱？</a>
                                    </h3>
                                    <div class="fn__meta">
                                        <p>
                                                <span class="meta_item meta_date">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="470.000000pt" height="470.000000pt" viewbox="0 0 470.000000 470.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                                                        <g transform="translate(0.000000,470.000000) scale(0.100000,-0.100000)" stroke="none">
                                                            <path d="M1224 4666 l-34 -34 0 -210 0 -211 -412 -3 -413 -3 -75 -36 c-136 -65 -236 -182 -272 -318 -13 -51 -17 -110 -17 -253 l-1 -188 2350 0 2350 0 0 181 c0 211 -14 288 -66 376 -54 90 -118 149 -213 196 l-84 42 -414 3 -413 3 0 211 0 210 -34 34 -34 34 -146 0 -146 0 -32 -29 -33 -29 -3 -216 -3 -216 -730 0 -729 0 0 195 c0 293 -2 295 -218 295 l-144 0 -34 -34z"></path>
                                                            <path d="M0 1802 c0 -1179 2 -1376 15 -1425 47 -182 180 -315 362 -362 50 -13 309 -15 1973 -15 2099 0 1966 -4 2089 58 73 36 163 128 201 202 63 125 60 41 60 1542 l0 1368 -2350 0 -2350 0 0 -1368z m1390 483 l0 -305 -305 0 -305 0 0 298 c0 164 3 302 7 305 3 4 141 7 305 7 l298 0 0 -305z m1260 0 l0 -305 -300 0 -300 0 0 305 0 305 300 0 300 0 0 -305z m1268 -2 l2 -303 -305 0 -305 0 0 305 0 305 303 -2 302 -3 3 -302z m-2528 -1273 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z m1260 0 l0 -300 -300 0 -300 0 0 300 0 300 300 0 300 0 0 -300z m1270 0 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z"></path>
                                                        </g>
                                                    </svg>
                                                2023-12
                                                </span>
                                            <span class="meta_item meta_category">
                                                    <a class=" fn_last_category" href="javascript:">生活</a>
                                                </span>
                                            <span class="meta_item meta_author">
                                                    <a href="javascript:">美食</a>
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item" data-swiper-parallax="0">
                                <div class="img_wrap">
                                    <div class="img_holder">
                                        <div class="abs_img" data-swiper-parallax="500" style="background-image: url(static/assets/images/blog/03.jpg)">
                                        </div>
                                    </div>
                                </div>
                                <div class="title_holder">
                                    <h3>
                                        <a href="javascript:">嘿，这套穿搭有没有Get到</a>
                                    </h3>
                                    <div class="fn__meta">
                                        <p>
                                                <span class="meta_item meta_date">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="470.000000pt" height="470.000000pt" viewbox="0 0 470.000000 470.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                                                        <g transform="translate(0.000000,470.000000) scale(0.100000,-0.100000)" stroke="none">
                                                            <path d="M1224 4666 l-34 -34 0 -210 0 -211 -412 -3 -413 -3 -75 -36 c-136 -65 -236 -182 -272 -318 -13 -51 -17 -110 -17 -253 l-1 -188 2350 0 2350 0 0 181 c0 211 -14 288 -66 376 -54 90 -118 149 -213 196 l-84 42 -414 3 -413 3 0 211 0 210 -34 34 -34 34 -146 0 -146 0 -32 -29 -33 -29 -3 -216 -3 -216 -730 0 -729 0 0 195 c0 293 -2 295 -218 295 l-144 0 -34 -34z"></path>
                                                            <path d="M0 1802 c0 -1179 2 -1376 15 -1425 47 -182 180 -315 362 -362 50 -13 309 -15 1973 -15 2099 0 1966 -4 2089 58 73 36 163 128 201 202 63 125 60 41 60 1542 l0 1368 -2350 0 -2350 0 0 -1368z m1390 483 l0 -305 -305 0 -305 0 0 298 c0 164 3 302 7 305 3 4 141 7 305 7 l298 0 0 -305z m1260 0 l0 -305 -300 0 -300 0 0 305 0 305 300 0 300 0 0 -305z m1268 -2 l2 -303 -305 0 -305 0 0 305 0 305 303 -2 302 -3 3 -302z m-2528 -1273 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z m1260 0 l0 -300 -300 0 -300 0 0 300 0 300 300 0 300 0 0 -300z m1270 0 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z"></path>
                                                        </g>
                                                    </svg>
                                                    2023-12
                                                </span>
                                            <span class="meta_item meta_category">
                                                    <a class="fn_last_category" href="javascript:">时尚</a>
                                                </span>
                                            <span class="meta_item meta_author">
                                                    <a href="javascript:;">穿搭</a>
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item" data-swiper-parallax="0">
                                <div class="img_wrap">
                                    <div class="img_holder" data-swiper-parallax="500">
                                        <div class="abs_img" style="background-image: url(static/assets/images/blog/04.jpg)">
                                        </div>
                                    </div>
                                </div>
                                <div class="title_holder">
                                    <h3>
                                        <a href="javascript:">如何养出好皮肤？</a>
                                    </h3>
                                    <div class="fn__meta">
                                        <p>
                                                <span class="meta_item meta_date">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="470.000000pt" height="470.000000pt" viewbox="0 0 470.000000 470.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                                                        <g transform="translate(0.000000,470.000000) scale(0.100000,-0.100000)" stroke="none">
                                                            <path d="M1224 4666 l-34 -34 0 -210 0 -211 -412 -3 -413 -3 -75 -36 c-136 -65 -236 -182 -272 -318 -13 -51 -17 -110 -17 -253 l-1 -188 2350 0 2350 0 0 181 c0 211 -14 288 -66 376 -54 90 -118 149 -213 196 l-84 42 -414 3 -413 3 0 211 0 210 -34 34 -34 34 -146 0 -146 0 -32 -29 -33 -29 -3 -216 -3 -216 -730 0 -729 0 0 195 c0 293 -2 295 -218 295 l-144 0 -34 -34z"></path>
                                                            <path d="M0 1802 c0 -1179 2 -1376 15 -1425 47 -182 180 -315 362 -362 50 -13 309 -15 1973 -15 2099 0 1966 -4 2089 58 73 36 163 128 201 202 63 125 60 41 60 1542 l0 1368 -2350 0 -2350 0 0 -1368z m1390 483 l0 -305 -305 0 -305 0 0 298 c0 164 3 302 7 305 3 4 141 7 305 7 l298 0 0 -305z m1260 0 l0 -305 -300 0 -300 0 0 305 0 305 300 0 300 0 0 -305z m1268 -2 l2 -303 -305 0 -305 0 0 305 0 305 303 -2 302 -3 3 -302z m-2528 -1273 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z m1260 0 l0 -300 -300 0 -300 0 0 300 0 300 300 0 300 0 0 -300z m1270 0 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z"></path>
                                                        </g>
                                                    </svg>
                                                    2023-12
                                                </span>
                                            <span class="meta_item meta_category">
                                                    <a class="fn_last_category" href="javascript:">生活</a>
                                                </span>
                                            <span class="meta_item meta_author">
                                                    <a href="javascript:;">护肤</a>
                                                </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__nav">
                    <a href="#" class="slider_nav prev" tabindex="0" role="button" aria-label="Previous slide">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 557.97 1061" style="enable-background:new 0 0 557.97 1061;" xml:space="preserve" class="fn__svg  replaced-svg">
                                <path d="M557.97,554.2c0,4.13,0,8.26,0,12.39c-0.37,2.83-0.75,5.66-1.11,8.49c-2.47,19.12-10.14,35.74-23.81,49.46  c-1.02,1.02-2.42,1.87-3.79,2.31c-8.96,2.89-18.12,3.28-27.38,1.91c-13.68-2.03-26.18-7.3-38.1-14.08  c-21.62-12.31-40.29-28.39-57.82-45.86c-28.44-28.34-53.31-59.63-76.03-92.68c-0.61-0.89-1.29-1.73-2.3-3.08  c-0.1,1.2-0.17,1.63-0.17,2.06c0.03,32.31-0.98,64.6-3.29,96.83c-1.56,21.73-3.32,43.46-5.57,65.13  c-2.71,26.12-6.58,52.09-11.66,77.88c-6.4,32.52-15.07,64.34-28.3,94.82c-22.74,52.42-51.12,101.67-83.67,148.55  c-17.42,25.09-35.96,49.32-57.81,70.77c-14.1,13.84-28.57,27.36-48.82,31.92c-1.97,0-3.95,0-5.92,0c-3.98-1.33-7.87-2.73-10.95-5.86  c-5.86-5.95-8.47-13.2-8.88-21.34c-0.68-13.44,2.95-26.11,7.27-38.6c7.44-21.55,17.29-42.09,27.01-62.67  c14.89-31.52,29.92-62.97,43.1-95.26c17.4-42.65,30.2-86.59,37.18-132.14c3.19-20.81,5.97-41.71,8.22-62.64  c2.09-19.52,3.54-39.12,4.7-58.73c1.05-17.73,1.42-35.5,1.92-53.26c0.95-34.02,0.14-68.02-1.36-102c-0.16-3.52-0.46-7.03-0.7-10.54  c-1.06,0.87-1.57,1.78-2.04,2.72c-18.76,36.7-39.4,72.27-63.39,105.83c-13.17,18.43-27.28,36.08-44.08,51.41  c-9.45,8.62-19.55,16.34-31.6,21.09c-7.23,2.86-14.69,4.16-22.4,2.77c-13.71-2.47-20.98-11.51-24.1-24.42  c-1.07-4.42-1.54-8.97-2.29-13.47c0-4.49,0-8.98,0-13.46c0.18-0.86,0.42-1.72,0.53-2.59c1.04-8.27,1.79-16.58,3.14-24.79  c3.57-21.68,9.15-42.91,15.05-64.05c9.97-35.71,20.36-71.3,30.05-107.09c9.64-35.6,17.21-71.58,18.86-108.63  c1.27-28.54,0.95-57.05,0.09-85.58c-0.86-28.33-2.7-56.65-1.36-85.02c0.56-11.84,1.68-23.63,4.84-35.09  C75.99,20.25,84.24,5.72,102.87,0c1.8,0,3.59,0,5.39,0c5.02,1.57,10.2,2.77,15.04,4.79c10.07,4.19,19.11,10.23,27.92,16.58  c22.42,16.14,42.81,34.66,62.61,53.83c49.96,48.37,96.11,100.26,141.08,153.24c9.64,11.35,18.66,23.27,28.83,34.13  c38.53,41.13,74.39,84.4,106,131.1c19.59,28.93,37.26,58.96,50.61,91.35c7.53,18.28,13.53,37.01,16.13,56.7  C557.02,545.87,557.47,550.04,557.97,554.2z">
                                </path>
                            </svg>
                    </a>
                    <a href="#" class="slider_nav next" tabindex="0" role="button" aria-label="Next slide">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 557.97 1061" style="enable-background:new 0 0 557.97 1061;" xml:space="preserve" class="fn__svg  replaced-svg">
                                <path d="M557.97,554.2c0,4.13,0,8.26,0,12.39c-0.37,2.83-0.75,5.66-1.11,8.49c-2.47,19.12-10.14,35.74-23.81,49.46  c-1.02,1.02-2.42,1.87-3.79,2.31c-8.96,2.89-18.12,3.28-27.38,1.91c-13.68-2.03-26.18-7.3-38.1-14.08  c-21.62-12.31-40.29-28.39-57.82-45.86c-28.44-28.34-53.31-59.63-76.03-92.68c-0.61-0.89-1.29-1.73-2.3-3.08  c-0.1,1.2-0.17,1.63-0.17,2.06c0.03,32.31-0.98,64.6-3.29,96.83c-1.56,21.73-3.32,43.46-5.57,65.13  c-2.71,26.12-6.58,52.09-11.66,77.88c-6.4,32.52-15.07,64.34-28.3,94.82c-22.74,52.42-51.12,101.67-83.67,148.55  c-17.42,25.09-35.96,49.32-57.81,70.77c-14.1,13.84-28.57,27.36-48.82,31.92c-1.97,0-3.95,0-5.92,0c-3.98-1.33-7.87-2.73-10.95-5.86  c-5.86-5.95-8.47-13.2-8.88-21.34c-0.68-13.44,2.95-26.11,7.27-38.6c7.44-21.55,17.29-42.09,27.01-62.67  c14.89-31.52,29.92-62.97,43.1-95.26c17.4-42.65,30.2-86.59,37.18-132.14c3.19-20.81,5.97-41.71,8.22-62.64  c2.09-19.52,3.54-39.12,4.7-58.73c1.05-17.73,1.42-35.5,1.92-53.26c0.95-34.02,0.14-68.02-1.36-102c-0.16-3.52-0.46-7.03-0.7-10.54  c-1.06,0.87-1.57,1.78-2.04,2.72c-18.76,36.7-39.4,72.27-63.39,105.83c-13.17,18.43-27.28,36.08-44.08,51.41  c-9.45,8.62-19.55,16.34-31.6,21.09c-7.23,2.86-14.69,4.16-22.4,2.77c-13.71-2.47-20.98-11.51-24.1-24.42  c-1.07-4.42-1.54-8.97-2.29-13.47c0-4.49,0-8.98,0-13.46c0.18-0.86,0.42-1.72,0.53-2.59c1.04-8.27,1.79-16.58,3.14-24.79  c3.57-21.68,9.15-42.91,15.05-64.05c9.97-35.71,20.36-71.3,30.05-107.09c9.64-35.6,17.21-71.58,18.86-108.63  c1.27-28.54,0.95-57.05,0.09-85.58c-0.86-28.33-2.7-56.65-1.36-85.02c0.56-11.84,1.68-23.63,4.84-35.09  C75.99,20.25,84.24,5.72,102.87,0c1.8,0,3.59,0,5.39,0c5.02,1.57,10.2,2.77,15.04,4.79c10.07,4.19,19.11,10.23,27.92,16.58  c22.42,16.14,42.81,34.66,62.61,53.83c49.96,48.37,96.11,100.26,141.08,153.24c9.64,11.35,18.66,23.27,28.83,34.13  c38.53,41.13,74.39,84.4,106,131.1c19.59,28.93,37.26,58.96,50.61,91.35c7.53,18.28,13.53,37.01,16.13,56.7  C557.02,545.87,557.47,550.04,557.97,554.2z">
                                </path>
                            </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--================= Slider Area End Here =================-->

    <!--================= Blog Area End Here =================-->
    <div class="xoxo_fn_nosidebar">
        <div class="container blog_layout_classic_container">
            <div class="xoxo_fn_bloglist blog_layout_classic">
                <ul>
                    <?php
                        // 连接数据库，读取posts表中的数据
                        include "function/Posts.php";
                        $Posts = new Posts();
                        $result = $Posts->getAll();
                        if ($result > 0) {
                            // 如果posts表中有数据，显示每一篇文章
                            foreach ($result as $row) {
    //                            echo '<div class="post">';
    //                            echo '<h2>'.$row['title'].'</h2>';
    //                            echo '<small>作者：'.$row['author'].'<br>更新时间：'.$row['update_time'].'</small>';
    //                            echo '<p>'.$row['content'].'</p>';
    //                            if (strlen($row['img_path'])>5) {
    //                                echo "<img height='200' width='200'src='" . $row['img_path'] . "'>";
    //                            }
    //                            echo '</div>';
                    ?>
                                <li class="post_item">
                                    <div class="blog__item blog__item_classic">
                                <span class="post_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">

                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                            <path d="M2485 4991 c-16 -10 -37 -27 -46 -37 -9 -10 -157 -369 -329 -798 -173 -428 -318 -779 -324 -781 -6 -2 -382 -29 -836 -60 -922 -63 -885 -58 -929 -136 -29 -51 -25 -115 10 -158 13 -17 296 -260 629 -541 333 -282 618 -524 633 -539 l28 -27 -206 -822 c-113 -452 -205 -832 -205 -844 0 -37 42 -99 80 -119 19 -11 54 -19 77 -19 37 0 110 43 767 454 l726 455 728 -455 727 -456 51 4 c67 6 107 35 130 95 l18 46 -207 829 c-114 456 -205 833 -202 838 3 4 293 252 644 550 436 369 645 553 655 575 22 46 20 90 -6 136 -43 76 -8 71 -938 136 l-835 58 -315 782 c-174 430 -324 791 -335 803 -47 52 -134 66 -190 31z">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                                        <div class="fn__meta">
                                            <p>
                                        <span class="meta_item meta_date">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="470.000000pt" height="470.000000pt" viewbox="0 0 470.000000 470.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">
                                                <g transform="translate(0.000000,470.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M1224 4666 l-34 -34 0 -210 0 -211 -412 -3 -413 -3 -75 -36 c-136 -65 -236 -182 -272 -318 -13 -51 -17 -110 -17 -253 l-1 -188 2350 0 2350 0 0 181 c0 211 -14 288 -66 376 -54 90 -118 149 -213 196 l-84 42 -414 3 -413 3 0 211 0 210 -34 34 -34 34 -146 0 -146 0 -32 -29 -33 -29 -3 -216 -3 -216 -730 0 -729 0 0 195 c0 293 -2 295 -218 295 l-144 0 -34 -34z"></path>
                                                    <path d="M0 1802 c0 -1179 2 -1376 15 -1425 47 -182 180 -315 362 -362 50 -13 309 -15 1973 -15 2099 0 1966 -4 2089 58 73 36 163 128 201 202 63 125 60 41 60 1542 l0 1368 -2350 0 -2350 0 0 -1368z m1390 483 l0 -305 -305 0 -305 0 0 298 c0 164 3 302 7 305 3 4 141 7 305 7 l298 0 0 -305z m1260 0 l0 -305 -300 0 -300 0 0 305 0 305 300 0 300 0 0 -305z m1268 -2 l2 -303 -305 0 -305 0 0 305 0 305 303 -2 302 -3 3 -302z m-2528 -1273 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z m1260 0 l0 -300 -300 0 -300 0 0 300 0 300 300 0 300 0 0 -300z m1270 0 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z"></path>
                                                </g>
                                            </svg>
                                            <?php $time=new FormDate();
                                                    $formtime = $time->FormTime($row['update_time']);
                                                    echo $formtime;
                                            ?>
                                        </span>
                                                <span class="meta_item meta_category">
                                            <a class=" fn_last_category" href="javascript:;">随手记</a>
                                        </span>
                                            </p>
                                        </div>
                                        <div class="bottom_holder">
                                            <?php
                                                if (strlen($row['img_path'])>5) {
                                            ?>
                                            <div class="blog__image">
                                                <a href="javascript:;"><img src="<?php echo $row['img_path']; ?>" alt="Post Image"></a>
                                            </div>
                                                    <?php
                                                    }
                                                ?>
                                            <div class="title_holder">
                                                <div class="title">
                                                    <h3><a href="javascript:"><?php echo $row['title'];?></a></h3>
                                                </div>
                                                <div class="author"><a href="javascript:;"><?php echo $row["author"];?></a>
                                                </div>
                                                <div class="desc">
                                                    <p>
                                                        <?php
                                                            echo $row['content'];
                                                        ?>
                                                    </p>
                                                </div>
                                                <div class="read_more">
                                                    <div class="read_in">
                                                        <a href="javascript:;"><span class="text">关注作者</span><span class="triple"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                    <?php
                            }
                        }
                    ?>

                    <li class="post_item">
                        <div class="blog__item blog__item_classic">
                            <div class="blog__quote_item">
                                    <span class="blog__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                <path d="M1080 4235 c-552 -104 -943 -597 -916 -1155 13 -273 117 -516 307 -714 140 -147 302 -246 486 -299 46 -13 85 -26 88 -29 9 -9 -49 -140 -111 -252 -81 -145 -169 -273 -298 -436 -98 -122 -117 -152 -128 -198 -23 -103 26 -204 121 -254 76 -40 131 -38 275 12 733 253 1231 784 1415 1511 61 242 75 358 76 624 0 185 -3 244 -17 302 -106 432 -408 757 -810 869 -78 22 -119 26 -253 30 -111 2 -183 -1 -235 -11z">
                                                </path>
                                                <path d="M3611 4229 c-367 -77 -675 -333 -811 -673 -64 -160 -74 -213 -74 -421 -1 -178 1 -196 27 -289 107 -384 412 -691 780 -786 59 -15 71 -21 69 -37 -2 -10 -32 -77 -68 -149 -80 -162 -213 -365 -340 -520 -110 -134 -133 -178 -134 -252 0 -65 17 -108 65 -160 81 -91 173 -93 390 -12 910 339 1438 1120 1439 2130 0 208 -8 264 -59 416 -131 390 -463 684 -858 759 -113 21 -308 19 -426 -6z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                <blockquote>如果你已经退休，或者开始期待退休，我们将告诉你一个好消息：幸福的高峰年龄是在生命的后期
                                </blockquote>
                                <h4>帕特里克福利</h4>
                            </div>
                        </div>
                    </li>
                    <li class="featured_posts_wrapper post_item">
                        <div class="featured_post_item">
                            <div class="fp_heading">
                                <h3>
                                        <span class="text_wrapper">
                                            <span class="icon__before">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">

                                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                        <path d="M1955 5106 c-16 -7 -40 -24 -52 -38 -13 -14 -229 -557 -533 -1343 -557 -1439 -532 -1362 -480 -1435 44 -62 22 -60 785 -60 588 0 695 -2 695 -14 0 -8 -112 -467 -250 -1021 -137 -554 -250 -1025 -250 -1047 0 -100 92 -168 189 -139 20 6 47 21 58 33 30 32 2112 3275 2130 3318 29 68 -6 158 -73 186 -27 11 -144 14 -634 14 -330 0 -600 3 -600 6 0 3 135 312 300 686 237 538 300 690 300 723 0 51 -31 101 -80 126 -33 18 -73 19 -755 19 -578 -1 -726 -3 -750 -14z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </span>
                                        <span class="text">点滴生活</span>
                                        <span class="icon__after">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">

                                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                        <path d="M1955 5106 c-16 -7 -40 -24 -52 -38 -13 -14 -229 -557 -533 -1343 -557 -1439 -532 -1362 -480 -1435 44 -62 22 -60 785 -60 588 0 695 -2 695 -14 0 -8 -112 -467 -250 -1021 -137 -554 -250 -1025 -250 -1047 0 -100 92 -168 189 -139 20 6 47 21 58 33 30 32 2112 3275 2130 3318 29 68 -6 158 -73 186 -27 11 -144 14 -634 14 -330 0 -600 3 -600 6 0 3 135 312 300 686 237 538 300 690 300 723 0 51 -31 101 -80 126 -33 18 -73 19 -755 19 -578 -1 -726 -3 -750 -14z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </span>
                                </h3>
                            </div>
                            <div class="fp_content">
                                <ul>
                                    <li>
                                        <div class="fp__item">
                                            <span class="fp_count"><span>01</span></span>
                                            <h4><a href="#0">多倾听，少说话，更不要做无谓的争论，吸取知识比赢过别人重要</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="fp__item">
                                            <span class="fp_count"><span>02</span></span>
                                            <h4><a href="#0">看树，靠近树，种树。感受它们平静而伟大的生命力</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="fp__item"><span class="fp_count"><span>03</span></span>
                                            <h4><a href="#0">最后，勇敢、坚强、呼吸、活下去。你会感谢每一天努力的自己</a></h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="post_item">
                        <div class="blog__item blog__item_classic">
                            <div class="blog__link_item">
                                    <span class="blog__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="512.000000pt" height="512.000000pt" viewbox="0 0 512.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                                <path d="M3160 5109 c-324 -37 -642 -169 -904 -377 -96 -75 -518 -497 -548 -547 -164 -268 -46 -604 248 -705 114 -40 277 -24 384 38 25 14 153 132 285 261 250 246 308 291 439 340 154 57 342 69 491 31 293 -75 522 -304 595 -595 26 -102 28 -271 5 -374 -45 -197 -101 -279 -386 -567 -211 -213 -231 -236 -266 -309 -33 -70 -38 -90 -41 -173 -3 -69 0 -111 13 -158 61 -224 297 -375 527 -336 134 23 183 55 387 256 235 231 345 355 432 485 131 194 227 431 271 669 26 140 31 435 10 567 -132 808 -754 1405 -1557 1495 -105 11 -278 11 -385 -1z">
                                                </path>
                                                <path d="M3243 3815 c-127 -35 -108 -17 -1010 -918 -908 -907 -893 -891 -928 -1022 -86 -333 218 -646 557 -574 133 29 106 4 1025 922 682 681 859 863 882 908 103 192 72 408 -79 559 -119 119 -290 167 -447 125z">
                                                </path>
                                                <path d="M1083 3476 c-107 -26 -159 -63 -342 -241 -322 -314 -455 -480 -561 -698 -326 -675 -201 -1461 319 -2000 587 -609 1534 -711 2236 -243 136 92 258 200 490 437 200 205 234 255 257 386 43 255 -144 510 -398 542 -115 14 -223 -9 -319 -67 -22 -13 -139 -122 -260 -242 -224 -221 -266 -257 -345 -302 -219 -122 -513 -133 -738 -28 -188 88 -341 248 -416 435 -83 206 -75 454 19 652 55 118 87 157 320 393 266 270 294 310 314 453 45 326 -258 600 -576 523z">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                <a href="javascript:;">#</a>
                            </div>
                        </div>
                    </li>
                    <li class="post_item">
                        <div class="blog__item blog__item_classic">
                            <div class="fn__meta">
                                <p>
                                        <span class="meta_item meta_date">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="470.000000pt" height="470.000000pt" viewbox="0 0 470.000000 470.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">

                                                <g transform="translate(0.000000,470.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M1224 4666 l-34 -34 0 -210 0 -211 -412 -3 -413 -3 -75 -36 c-136 -65 -236 -182 -272 -318 -13 -51 -17 -110 -17 -253 l-1 -188 2350 0 2350 0 0 181 c0 211 -14 288 -66 376 -54 90 -118 149 -213 196 l-84 42 -414 3 -413 3 0 211 0 210 -34 34 -34 34 -146 0 -146 0 -32 -29 -33 -29 -3 -216 -3 -216 -730 0 -729 0 0 195 c0 293 -2 295 -218 295 l-144 0 -34 -34z">
                                                    </path>
                                                    <path d="M0 1802 c0 -1179 2 -1376 15 -1425 47 -182 180 -315 362 -362 50 -13 309 -15 1973 -15 2099 0 1966 -4 2089 58 73 36 163 128 201 202 63 125 60 41 60 1542 l0 1368 -2350 0 -2350 0 0 -1368z m1390 483 l0 -305 -305 0 -305 0 0 298 c0 164 3 302 7 305 3 4 141 7 305 7 l298 0 0 -305z m1260 0 l0 -305 -300 0 -300 0 0 305 0 305 300 0 300 0 0 -305z m1268 -2 l2 -303 -305 0 -305 0 0 305 0 305 303 -2 302 -3 3 -302z m-2528 -1273 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z m1260 0 l0 -300 -300 0 -300 0 0 300 0 300 300 0 300 0 0 -300z m1270 0 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z">
                                                    </path>
                                                </g>
                                            </svg>
                                            2023-10-9
                                        </span>
                                    <span class="meta_item meta_category">
                                            <a class=" fn_last_category" href="javascript:">风景集</a>
                                        </span>
                                </p>
                            </div>
                            <div class="bottom_holder">
                                <div class="blog__image">
                                    <a href="javascript:" class="fn__audio_popup">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="478.000000pt" height="512.000000pt" viewbox="0 0 478.000000 512.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">

                                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                <path d="M3130 4705 c-894 -228 -1626 -414 -1627 -414 -2 -1 -3 -613 -3 -1361 l0 -1360 -62 46 c-73 53 -167 102 -255 132 -158 54 -379 55 -543 3 -296 -95 -520 -330 -602 -631 -19 -72 -23 -108 -22 -230 1 -127 4 -156 28 -233 96 -318 325 -542 641 -628 110 -30 316 -33 425 -5 273 70 499 255 611 501 15 35 39 96 51 137 l23 73 3 1170 c1 643 6 1173 10 1177 5 5 2644 678 2659 678 2 0 3 -331 3 -735 l0 -735 -51 40 c-74 59 -162 105 -265 139 -470 158 -972 -97 -1133 -576 -55 -163 -55 -383 0 -545 106 -316 370 -549 689 -608 88 -17 259 -15 345 3 331 70 593 318 687 652 l23 80 3 1823 c1 1002 -1 1822 -5 1821 -5 -1 -739 -187 -1633 -414z">
                                                </path>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="javascript:"><img src="static/picture/11.jpg" alt="Post Image"></a>
                                </div>
                                <div class="title_holder">
                                    <div class="title">
                                        <h3><a href="javascript:">枫叶的轻语</a></h3>
                                    </div>
                                    <div class="author">
                                        <a href="javascript:;">佚名</a>
                                    </div>
                                    <div class="desc">
                                        <p>十月，最美是枫叶。枫叶红了，漫山红遍、层林尽染：晚风习习，闭上眼，满脑子都是河湖碧透泉瀑流清般的诗情画意。月已落下，乌鸦仍然在啼叫着，幕色朦胧漫天霜色，夜泊枫桥的张继对着江边的枫树和船上的渔火独自感叹，辗转反侧...
                                        </p>
                                    </div>
                                    <div class="read_more">
                                        <div class="read_in">
                                            <a href="javascript:"><span class="text">了解详情</span><span class="triple"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="post_item">
                        <div class="blog__item blog__item_classic">
                            <div class="fn__meta">
                                <p>
                                        <span class="meta_item meta_date">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="470.000000pt" height="470.000000pt" viewbox="0 0 470.000000 470.000000" preserveaspectratio="xMidYMid meet" class="fn__svg  replaced-svg">

                                                <g transform="translate(0.000000,470.000000) scale(0.100000,-0.100000)" stroke="none">
                                                    <path d="M1224 4666 l-34 -34 0 -210 0 -211 -412 -3 -413 -3 -75 -36 c-136 -65 -236 -182 -272 -318 -13 -51 -17 -110 -17 -253 l-1 -188 2350 0 2350 0 0 181 c0 211 -14 288 -66 376 -54 90 -118 149 -213 196 l-84 42 -414 3 -413 3 0 211 0 210 -34 34 -34 34 -146 0 -146 0 -32 -29 -33 -29 -3 -216 -3 -216 -730 0 -729 0 0 195 c0 293 -2 295 -218 295 l-144 0 -34 -34z">
                                                    </path>
                                                    <path d="M0 1802 c0 -1179 2 -1376 15 -1425 47 -182 180 -315 362 -362 50 -13 309 -15 1973 -15 2099 0 1966 -4 2089 58 73 36 163 128 201 202 63 125 60 41 60 1542 l0 1368 -2350 0 -2350 0 0 -1368z m1390 483 l0 -305 -305 0 -305 0 0 298 c0 164 3 302 7 305 3 4 141 7 305 7 l298 0 0 -305z m1260 0 l0 -305 -300 0 -300 0 0 305 0 305 300 0 300 0 0 -305z m1268 -2 l2 -303 -305 0 -305 0 0 305 0 305 303 -2 302 -3 3 -302z m-2528 -1273 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z m1260 0 l0 -300 -300 0 -300 0 0 300 0 300 300 0 300 0 0 -300z m1270 0 l0 -300 -305 0 -305 0 0 300 0 300 305 0 305 0 0 -300z">
                                                    </path>
                                                </g>
                                            </svg>
                                            2023-11-11
                                        </span>
                                    <span class="meta_item meta_category"><a class=" fn_last_category" href="javascript:">职场技能</a></span>
                                </p>
                            </div>
                            <div class="bottom_holder">
                                <div class="fn__gallery_format">
                                    <div class="swiper-container ready swiper-container-horizontal">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item" data-swiper-parallax="700" style="background-image: url(static/assets/images/blog/12.jpg)">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item" data-swiper-parallax="700" style="background-image: url(static/assets/images/blog/13.jpg)">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item" data-swiper-parallax="700" style="background-image: url(static/assets/images/blog/14.jpg)">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item" data-swiper-parallax="700" style="background-image: url(static/img/15.jpg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider__nav">
                                            <a href="#" class="slider_nav prev" tabindex="0" role="button" aria-label="Previous slide">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 557.97 1061" style="enable-background:new 0 0 557.97 1061;" xml:space="preserve" class="fn__svg  replaced-svg">
                                                        <path d="M557.97,554.2c0,4.13,0,8.26,0,12.39c-0.37,2.83-0.75,5.66-1.11,8.49c-2.47,19.12-10.14,35.74-23.81,49.46  c-1.02,1.02-2.42,1.87-3.79,2.31c-8.96,2.89-18.12,3.28-27.38,1.91c-13.68-2.03-26.18-7.3-38.1-14.08  c-21.62-12.31-40.29-28.39-57.82-45.86c-28.44-28.34-53.31-59.63-76.03-92.68c-0.61-0.89-1.29-1.73-2.3-3.08  c-0.1,1.2-0.17,1.63-0.17,2.06c0.03,32.31-0.98,64.6-3.29,96.83c-1.56,21.73-3.32,43.46-5.57,65.13  c-2.71,26.12-6.58,52.09-11.66,77.88c-6.4,32.52-15.07,64.34-28.3,94.82c-22.74,52.42-51.12,101.67-83.67,148.55  c-17.42,25.09-35.96,49.32-57.81,70.77c-14.1,13.84-28.57,27.36-48.82,31.92c-1.97,0-3.95,0-5.92,0c-3.98-1.33-7.87-2.73-10.95-5.86  c-5.86-5.95-8.47-13.2-8.88-21.34c-0.68-13.44,2.95-26.11,7.27-38.6c7.44-21.55,17.29-42.09,27.01-62.67  c14.89-31.52,29.92-62.97,43.1-95.26c17.4-42.65,30.2-86.59,37.18-132.14c3.19-20.81,5.97-41.71,8.22-62.64  c2.09-19.52,3.54-39.12,4.7-58.73c1.05-17.73,1.42-35.5,1.92-53.26c0.95-34.02,0.14-68.02-1.36-102c-0.16-3.52-0.46-7.03-0.7-10.54  c-1.06,0.87-1.57,1.78-2.04,2.72c-18.76,36.7-39.4,72.27-63.39,105.83c-13.17,18.43-27.28,36.08-44.08,51.41  c-9.45,8.62-19.55,16.34-31.6,21.09c-7.23,2.86-14.69,4.16-22.4,2.77c-13.71-2.47-20.98-11.51-24.1-24.42  c-1.07-4.42-1.54-8.97-2.29-13.47c0-4.49,0-8.98,0-13.46c0.18-0.86,0.42-1.72,0.53-2.59c1.04-8.27,1.79-16.58,3.14-24.79  c3.57-21.68,9.15-42.91,15.05-64.05c9.97-35.71,20.36-71.3,30.05-107.09c9.64-35.6,17.21-71.58,18.86-108.63  c1.27-28.54,0.95-57.05,0.09-85.58c-0.86-28.33-2.7-56.65-1.36-85.02c0.56-11.84,1.68-23.63,4.84-35.09  C75.99,20.25,84.24,5.72,102.87,0c1.8,0,3.59,0,5.39,0c5.02,1.57,10.2,2.77,15.04,4.79c10.07,4.19,19.11,10.23,27.92,16.58  c22.42,16.14,42.81,34.66,62.61,53.83c49.96,48.37,96.11,100.26,141.08,153.24c9.64,11.35,18.66,23.27,28.83,34.13  c38.53,41.13,74.39,84.4,106,131.1c19.59,28.93,37.26,58.96,50.61,91.35c7.53,18.28,13.53,37.01,16.13,56.7  C557.02,545.87,557.47,550.04,557.97,554.2z">
                                                        </path>
                                                    </svg>
                                            </a>
                                            <a href="#" class="slider_nav next" tabindex="0" role="button" aria-label="Next slide">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewbox="0 0 557.97 1061" style="enable-background:new 0 0 557.97 1061;" xml:space="preserve" class="fn__svg  replaced-svg">
                                                        <path d="M557.97,554.2c0,4.13,0,8.26,0,12.39c-0.37,2.83-0.75,5.66-1.11,8.49c-2.47,19.12-10.14,35.74-23.81,49.46  c-1.02,1.02-2.42,1.87-3.79,2.31c-8.96,2.89-18.12,3.28-27.38,1.91c-13.68-2.03-26.18-7.3-38.1-14.08  c-21.62-12.31-40.29-28.39-57.82-45.86c-28.44-28.34-53.31-59.63-76.03-92.68c-0.61-0.89-1.29-1.73-2.3-3.08  c-0.1,1.2-0.17,1.63-0.17,2.06c0.03,32.31-0.98,64.6-3.29,96.83c-1.56,21.73-3.32,43.46-5.57,65.13  c-2.71,26.12-6.58,52.09-11.66,77.88c-6.4,32.52-15.07,64.34-28.3,94.82c-22.74,52.42-51.12,101.67-83.67,148.55  c-17.42,25.09-35.96,49.32-57.81,70.77c-14.1,13.84-28.57,27.36-48.82,31.92c-1.97,0-3.95,0-5.92,0c-3.98-1.33-7.87-2.73-10.95-5.86  c-5.86-5.95-8.47-13.2-8.88-21.34c-0.68-13.44,2.95-26.11,7.27-38.6c7.44-21.55,17.29-42.09,27.01-62.67  c14.89-31.52,29.92-62.97,43.1-95.26c17.4-42.65,30.2-86.59,37.18-132.14c3.19-20.81,5.97-41.71,8.22-62.64  c2.09-19.52,3.54-39.12,4.7-58.73c1.05-17.73,1.42-35.5,1.92-53.26c0.95-34.02,0.14-68.02-1.36-102c-0.16-3.52-0.46-7.03-0.7-10.54  c-1.06,0.87-1.57,1.78-2.04,2.72c-18.76,36.7-39.4,72.27-63.39,105.83c-13.17,18.43-27.28,36.08-44.08,51.41  c-9.45,8.62-19.55,16.34-31.6,21.09c-7.23,2.86-14.69,4.16-22.4,2.77c-13.71-2.47-20.98-11.51-24.1-24.42  c-1.07-4.42-1.54-8.97-2.29-13.47c0-4.49,0-8.98,0-13.46c0.18-0.86,0.42-1.72,0.53-2.59c1.04-8.27,1.79-16.58,3.14-24.79  c3.57-21.68,9.15-42.91,15.05-64.05c9.97-35.71,20.36-71.3,30.05-107.09c9.64-35.6,17.21-71.58,18.86-108.63  c1.27-28.54,0.95-57.05,0.09-85.58c-0.86-28.33-2.7-56.65-1.36-85.02c0.56-11.84,1.68-23.63,4.84-35.09  C75.99,20.25,84.24,5.72,102.87,0c1.8,0,3.59,0,5.39,0c5.02,1.57,10.2,2.77,15.04,4.79c10.07,4.19,19.11,10.23,27.92,16.58  c22.42,16.14,42.81,34.66,62.61,53.83c49.96,48.37,96.11,100.26,141.08,153.24c9.64,11.35,18.66,23.27,28.83,34.13  c38.53,41.13,74.39,84.4,106,131.1c19.59,28.93,37.26,58.96,50.61,91.35c7.53,18.28,13.53,37.01,16.13,56.7  C557.02,545.87,557.47,550.04,557.97,554.2z">
                                                        </path>
                                                    </svg>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="title_holder">
                                    <div class="title">
                                        <h3><a href="javascript:">居家办公后，为什么你的工作效率变低了？</a></h3>
                                    </div>
                                    <div class="author"><a href="javascript:;">佚名</a>
                                    </div>
                                    <div class="desc">
                                        <p>据艾媒咨询《2020中国职场新春居家办公报告》的数据显示，41.1%居家办公受访者反馈“日均办公时长延长”。有趣的是，尽管相当多的居家办公受访者反馈工作时间延长了，但受访的高管/负责人们，却有42.9%的人认为居家办公弊大于利...
                                        </p>
                                    </div>
                                    <div class="read_more">
                                        <div class="read_in">
                                            <a href="javascript:"><span class="text">了解详情</span><span class="triple"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= Blog Area Start Here =================-->
</div>
<!--================= Home One End =================-->

<!--================= Footer Area Start Here =================-->
<!--================= Footer Area Start =================-->
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