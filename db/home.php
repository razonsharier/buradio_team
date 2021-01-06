<?php
session_start();

?>

<?php

$test = "test"; ////////////////////////////////////////////// extra code for test

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')

    $linkchk = "";

$linkchk = $_SERVER['HTTP_HOST'];

$linkchk = $_SERVER['REQUEST_URI'];


if ($linkchk == "/buradio_team/home") {
    $activehm = "active_menu_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/notification") {
    $activent = "active_menu_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/mailbox") {
    $activeml = "active_menu_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/profile") {
    $activepf = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/posts") {
    $activept = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/score") {
    $activesr = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/activitylog") {
    $activeal = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/attendence") {
    $activeat = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/notice") {
    $activenc = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/schedule") {
    $activese = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/members") {
    $activemm = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/settings") {
    $activest = "sub_active_tab_snn";
    $cklnk = "ok";
} elseif ($linkchk == "/buradio_team/ajax/wrong-url") {
    echo "<script type='text/javascript'> document.location = '../home.php'; </script>";
    exit;
} elseif ($linkchk == "/buradio_team/db/wrong-url") {
    echo "<script type='text/javascript'> document.location = '../home.php'; </script>";
    exit;
} elseif ($linkchk == "/buradio_team/pages/wrong-url") {
    echo "<script type='text/javascript'> document.location = '../home.php'; </script>";
    exit;
} else {
    echo "<script type='text/javascript'> document.location = 'wrong-url'; </script>";
    exit;
}

?>

<?php
if (empty($activehm)) {
    $activehm = "";
}
if (empty($activent)) {
    $activent = "";
}
if (empty($activeml)) {
    $activeml = "";
}
if (empty($activepf)) {
    $activepf = "";
}
if (empty($activept)) {
    $activept = "";
}
if (empty($activesr)) {
    $activesr = "";
}
if (empty($activeal)) {
    $activeal = "";
}
if (empty($activeat)) {
    $activeat = "";
}
if (empty($activenc)) {
    $activenc = "";
}
if (empty($activese)) {
    $activese = "";
}
if (empty($activemm)) {
    $activemm = "";
}
if (empty($activest)) {
    $activest = "";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_home.css">
    <style>
        .profile {
            cursor: pointer;
        }

        @media screen and (max-width: 840px) {

            .leftColumn {
                display: block;
            }

            .left {
                max-width: 500px;
            }

            .menu_ops {
                display: none;
            }

            .right {
                display: none;
            }

        }

        @media screen and (max-width: 620px) {
            .menu_ops {
                display: block;
            }
        }
    </style>


    <script type="text/javascript">
        jQuery(function() {
            $('.popup_image').click(function() {
                $(".img_popup_bg").show();
                $(".img_popup_cntnt").show();
                document.body.style.overflow = "hidden";
                var img = $(this).attr("src");
                var appear_image = "";
                appear_image = appear_image.concat("<div onClick='closeImage()' class='img_popup_bg'><div class='img_popup_cntnt'><div class='close-btn_popimg' onClick='closeImage()'>X</div><img style='border-radius: 2px;' width='100%' height='100%' src='" + img + "' /></div></div>");
                $('body').append(appear_image);
            });
        });

        function closeImage() {
            $('.img_popup_bg').remove();
            $(".img_popup_cntnt").remove();
            document.body.style.overflow = "auto";
        }
    </script>

</head>

<body>

    <div class="header">
        <div class="page_container">
            <div class="header_content">

                <div class="site_logo">
                    <a href="login"><img src="image/logo.png" style="height: 50px; width: 50px" /></a>
                </div>

                <div class="top_menu">
                    <ul>
                        <li class="<?php echo $activehm; ?>">
                            <!-- class="active_menu" -->
                            <a id="feed" onClick="chargue('.left', 'pages/feed')">
                                <div class="active_hover">
                                    <!-- class="active_menu_hover" -->
                                    <img src="image/png/home.png" style="height: 30px; width: 30px" />
                                </div>
                            </a>
                        </li>
                        <li class="<?php echo $activent; ?>">
                            <a id="noti" onClick="chargue('.left', 'pages/notification')">
                                <div class="active_hover">
                                    <img src="image/png/bell.png" style="height: 30px; width: 30px" />
                                    <div class="noti_cunt">07</div>
                                </div>
                            </a>
                        </li>
                        <li class="<?php echo $activeml; ?>">
                            <a id="mail" onClick="chargue('.left', 'pages/mailbox')">
                                <div class="active_hover">
                                    <img src="image/png/inbox.png" style="height: 30px; width: 30px" />
                                    <div class="noti_cunt">05</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a>
                                <div class="active_hover non_hover menu_ops">
                                    <img src="image/png/menu.png" style="height: 30px; width: 30px" />
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="profile_pic">
                    <div class="for_button">
                        <img src="image/user/user2.jpg" style="width: 40px; height: 40px" />
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div style="margin-top: 70px;"></div>

    <div class="page_cntnt_container">
        <div class="sndlftclm">
            <div class="leftColumn">
                <div class="left_usr_img">
                    <img src="image/user/user2.jpg" style="height: 30px; width: 30px" />
                    <a>Sharier</a>
                </div>
                <ul>
                    <li class="<?php echo $activepf; ?>"><a class="profile" onClick="chargue('.left', 'pages/profile')">Profile</a></li>
                    <li class="<?php echo $activept; ?>"><a class="posts" onClick="chargue('.left', 'pages/posts')">Posts</a></li>
                    <li class="<?php echo $activesr; ?>"><a class="score" onClick="chargue('.left', 'pages/score')">Score</a></li>
                    <li class="<?php echo $activeal; ?>"><a class="activity" onClick="chargue('.left', 'pages/activity')">Activity Log</a></li>
                    <li class="<?php echo $activeat; ?>"><a class="attend" onClick="chargue('.left', 'pages/attendence')">Attendence</a></li>
                    <li class="<?php echo $activenc; ?>"><a class="notice" onClick="chargue('.left', 'pages/notice')">Notice</a></li>
                    <li class="<?php echo $activese; ?>"><a class="schedule" onClick="chargue('.left', 'pages/schedule')">Schedule</a></li>
                    <li class="<?php echo $activemm; ?>"><a class="members" onClick="chargue('.left', 'pages/members')">Members</a></li>
                    <li class="<?php echo $activest; ?>"><a class="settings" onClick="chargue('.left', 'pages/settings')">Settings</a></li>
                    <li></li>
                    <div style="border-top: 1px solid #ccc; margin-bottom: 10px;"></div>

                    <!-- ////////////////////////////////////////// extra code for test -->
                    <li><a class="<?php echo $test; ?>" onClick="chargue('.left', 'pages/<?php echo $test; ?>')">rj hunt 2020 admin page</a></li>

                    <li><a>item 2</a></li>
                </ul>
            </div>
        </div>

        <div id="loader" style="display: none;margin: 0 auto;"><img src="image/abc.gif" /></div>
        <div class="left">





            <?php

            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')

                $link = "";

            $link = $_SERVER['HTTP_HOST'];

            $link = $_SERVER['REQUEST_URI'];


            if ($link == "/buradio_team/home") {
                include_once('pages/feed.php');
            } elseif ($link == "/buradio_team/notification") {
                include_once('pages/notification.php');
            } elseif ($link == "/buradio_team/mailbox") {
                include_once('pages/mailbox.php');
            } elseif ($link == "/buradio_team/profile") {
                include_once('pages/profile.php');
            } elseif ($link == "/buradio_team/posts") {
                include_once('pages/posts.php');
            } elseif ($link == "/buradio_team/score") {
                include_once('pages/score.php');
            } elseif ($link == "/buradio_team/activitylog") {
                include_once('pages/activity.php');
            } elseif ($link == "/buradio_team/attendence") {
                include_once('pages/attend.php');
            } elseif ($link == "/buradio_team/notice") {
                include_once('pages/notice.php');
            } elseif ($link == "/buradio_team/schedule") {
                include_once('pages/schedule.php');
            } elseif ($link == "/buradio_team/members") {
                include_once('pages/members.php');
            } elseif ($link == "/buradio_team/settings") {
                include_once('pages/settings.php');
            } else {
                echo "<script type='text/javascript'> document.location = 'login'; </script>";
                exit;
            }

            ?>





            <div style="margin-bottom: 50px;"></div>
        </div>



        <div class="right rightnow">
            <div>
                <div style="margin-bottom: 10px;">
                    <strong>Today, 29 October</strong>
                </div>
                <div class="program">
                    <img class="popup_image" src="image/days/pic2.jpg" />
                    <img class="popup_image" src="image/days/pic3.jpg" />
                </div>
            </div>
            <div style="margin-top: 30px;">
                <div style="margin-bottom: 10px;">
                    <strong>Today's Programme</strong>
                </div>
                <div class="program">
                    <img class="popup_image" src="image/programme/1.jpg" />
                    <img class="popup_image" src="image/programme/2.jpg" />
                    <img class="popup_image" src="image/programme/3.jpeg" />
                </div>
            </div>
        </div>


    </div>






    <div class="loader-user_menus_head">
        <div class="loader-user_menus">
            <div class="user_menus">
                <div class="close-btn">X</div>
                <div class="sndlftclmModal">
                    <div class="leftColumnModal">
                        <div class="left_usr_img">
                            <img src="image/user/user2.jpg">
                            <a>Sharier</a>
                        </div>
                        <ul>
                            <li class="<?php echo $activepf; ?>"><a class="profile" onClick="chargue('.left', 'pages/profile')">Profile</a></li>
                            <li class="<?php echo $activept; ?>"><a class="posts" onClick="chargue('.left', 'pages/posts')">Posts</a></li>
                            <li class="<?php echo $activesr; ?>"><a class="score" onClick="chargue('.left', 'pages/score')">Score</a></li>
                            <li class="<?php echo $activeal; ?>"><a class="activity" onClick="chargue('.left', 'pages/activity')">Activity Log</a></li>
                            <li class="<?php echo $activeat; ?>"><a class="attend" onClick="chargue('.left', 'pages/attendence')">Attendence</a></li>
                            <li class="<?php echo $activenc; ?>"><a class="notice" onClick="chargue('.left', 'pages/notice')">Notice</a></li>
                            <li class="<?php echo $activese; ?>"><a class="schedule" onClick="chargue('.left', 'pages/schedule')">Schedule</a></li>
                            <li class="<?php echo $activemm; ?>"><a class="members" onClick="chargue('.left', 'pages/members')">Members</a></li>
                            <li class="<?php echo $activest; ?>"><a class="settings" onClick="chargue('.left', 'pages/settings')">Settings</a></li>
                    <li></li>
                            <div style="border-top: 1px solid #ccc; margin-bottom: 10px;"></div>

                            <!-- ////////////////////////////////////////// extra code for test -->
                            <li><a class="<?php echo $test; ?>" onClick="chargue('.left', 'pages/<?php echo $test; ?>')">rj hunt 2020 admin page</a></li>


                            <li><a>item 2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="loader-profile_menus_head">
        <div class="loader-profile_menus">
            <div class="profile_menus">
                <div class="close-btn">X</div>
                <div class="profileModal">
                    <div class="profile_pic">
                        <img src="image/user/user2.jpg" />
                        <div class="point_cunt">999</div>
                    </div>
                    <div class="name_pad">B. M. Sharier Kabir (Himu)</div>
                    <div class="desig_nam">
                        <a>Web Developer</a>
                        <a>Telecast Operator</a>
                    </div>
                    <div class="prfil-btns">
                        <button style="pro_button" style="max-width: 130px;"><a style="text-decoration: none; color: #ffffff;" class="profile" onClick="chargue('.left', 'pages/profile')">View Profile</a></button>
                        <button style="background-color: red;border: none;">Log Out</button>
                    </div>
                    <br />
                    <a>time tracking notification</a><br />
                    <a>stop timer when user do nothing and show this pop-up</a>
                </div>
            </div>
        </div>
    </div>






    <script type="text/javascript" src="js/jquery.js"></script>

    <script>
        $(".menu_ops").on("click", function() {
            $(".loader-user_menus_head").fadeIn('fast');
            $(".user_menus").show();
            document.body.style.overflow = "hidden";
        });

        $(".close-btn").on("click", function() {
            $(".loader-user_menus_head").fadeOut('fast');
            document.body.style.overflow = "auto";
        });
    </script>

    <script>
        $(".for_button").on("click", function() {
            $(".loader-profile_menus_head").fadeIn('fast');
            $(".profile_menus").show();
            document.body.style.overflow = "hidden";
        });

        $(".close-btn").on("click", function() {
            $(".loader-profile_menus_head").fadeOut('fast');
            document.body.style.overflow = "auto";
        });
    </script>


    <script>
        function changeUrl(title, url) {
            if (typeof(history.pushState) != "undefined") {
                var obj = {
                    Title: title,
                    Url: url
                };
                history.pushState(obj, obj.Title, obj.Url);
            } else {
                alert("Browser does not support HTML5.")
            }
        }

        $(function() {
            $('#feed').click(function() {
                changeUrl('Home Page', 'home');
            });
        });

        $(function() {
            $('#noti').click(function() {
                changeUrl('Notification Page', 'notification');
            });
        });

        $(function() {
            $('#mail').click(function() {
                changeUrl('MailBox Page', 'mailbox');
            });
        });





        $(function() {
            $('.profile').click(function() {
                $(".loader-profile_menus_head").hide();
                changeUrl('Profile Page', 'profile');
            });
        });

        $(function() {
            $('.activity').click(function() {
                changeUrl('Activity Log Page', 'activitylog');
            });
        });

        $(function() {
            $('.posts').click(function() {
                changeUrl('Your Posts Page', 'posts');
            });
        });

        $(function() {
            $('.score').click(function() {
                changeUrl('Your Score Page', 'score');
            });
        });

        $(function() {
            $('.attend').click(function() {
                changeUrl('Your Attendence Page', 'attendence');
            });
        });

        $(function() {
            $('.notice').click(function() {
                changeUrl('Notice Page', 'notice');
            });
        });

        $(function() {
            $('.schedule').click(function() {
                changeUrl('Schedule Page', 'schedule');
            });
        });

        $(function() {
            $('.members').click(function() {
                changeUrl('Member Page', 'members');
            });
        });

        $(function() {
            $('.settings').click(function() {
                changeUrl('Settings Page', 'settings');
            });
        });

        ///////////////////////////////////////////////// extra code for test -->
        $(function() {
            $('.<?php echo $test; ?>').click(function() {
                changeUrl('Settings Page', '<?php echo $test; ?>');
            });
        });
    </script>

    <script>
        function chargue(div, url) {
            $('.left').hide();
            $('#loader').show();
            $(div).load(url, function(response, status, xhr) {
                if (status == 'success') {
                    $('#loader').hide();
                    $('.left').show();
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $("#noti").click(function() {
                $(".right").hide();
            })
        });


        $(document).ready(function() {
            $("#mail").click(function() {
                $(".right").hide();
            })
        });
    </script>

    <script>
        $('.top_menu > ul > li > #feed').click(function() {
            $('.top_menu > ul > li > #feed').parent().addClass('active_menu')
            $('.top_menu > ul > li > #noti').parent().removeClass('active_menu')
            $('.top_menu > ul > li > #noti').parent().removeClass('active_menu_snn')
            $('.top_menu > ul > li > #mail').parent().removeClass('active_menu_snn')
            $('.top_menu > ul > li > #mail').parent().removeClass('active_menu')
            $('.leftColumn > ul > li').removeClass('sub_active_tab')
            $('.leftColumn > ul > li').removeClass('sub_active_tab_snn')
            $('.leftColumnModal > ul > li').removeClass('sub_active_tab_modal')

        });

        $('.top_menu > ul > li > #noti').click(function() {
            $('.top_menu > ul > li > #noti').parent().addClass('active_menu')
            $('.top_menu > ul > li > #feed').parent().removeClass('active_menu')
            $('.top_menu > ul > li > #feed').parent().removeClass('active_menu_snn')
            $('.top_menu > ul > li > #mail').parent().removeClass('active_menu_snn')
            $('.top_menu > ul > li > #mail').parent().removeClass('active_menu')
            $('.leftColumn > ul > li').removeClass('sub_active_tab')
            $('.leftColumn > ul > li').removeClass('sub_active_tab_snn')
            $('.leftColumnModal > ul > li').removeClass('sub_active_tab_modal');
        });

        $('.top_menu > ul > li > #mail').click(function() {
            $('.top_menu > ul > li > #mail').parent().addClass('active_menu')
            $('.top_menu > ul > li > #feed').parent().removeClass('active_menu')
            $('.top_menu > ul > li > #feed').parent().removeClass('active_menu_snn')
            $('.top_menu > ul > li > #noti').parent().removeClass('active_menu_snn')
            $('.top_menu > ul > li > #noti').parent().removeClass('active_menu')
            $('.leftColumn > ul > li').removeClass('sub_active_tab')
            $('.leftColumn > ul > li').removeClass('sub_active_tab_snn')
            $('.leftColumnModal > ul > li').removeClass('sub_active_tab_modal');
        });
    </script>

    <script>
        $('.leftColumn > ul > li > a').click(function() {
            $('.leftColumn > ul > li').removeClass();
            $(this).parent().addClass('sub_active_tab')
            $('.top_menu > ul > li').removeClass('active_menu')
            $('.top_menu > ul > li').removeClass('active_menu_snn');
            $(".right").hide();
        });
    </script>



    <script>
        $('.leftColumnModal > ul > li > a').click(function() {
            $('.leftColumnModal > ul > li').removeClass();
            $(this).parent().addClass('sub_active_tab_modal')
            $(".loader-user_menus_head").fadeOut('fast');
            document.body.style.overflow = "auto";
            $(".right").hide();
            $('.top_menu > ul > li').removeClass('active_menu')
            $('.top_menu > ul > li').removeClass('active_menu_snn');
        });
    </script>


    <script>
        $(document).ready(function() {
            var $window = $(window);

            function checkWidth() {
                if ($window.width() < 840) {
                    $(".right").hide();
                }
            }
            checkWidth();
        });
    </script>





</body>

</html>