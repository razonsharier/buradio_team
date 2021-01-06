<?php
session_start();

include "db/db.php";

$sqlindx    = "SELECT * FROM index_page WHERE about = 'bg_img' AND id = '1'";
$resultindx = mysqli_query($db, $sqlindx);
$countindx  = mysqli_num_rows($resultindx);
$rowindx    = mysqli_fetch_array($resultindx, MYSQLI_ASSOC);

date_default_timezone_set('Asia/Dhaka');
$today = date('d F');

$systemdate = date('d-m');

$sqltdy    = "SELECT * FROM on_this_day WHERE date = '$systemdate'";
$resulttdy = mysqli_query($db, $sqltdy);
$counttdy  = mysqli_num_rows($resulttdy);
if (0 == $counttdy) {
 $dyhid = "display: none;";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_index.css">

    <style>
        html,
        body {
            margin: 0;
            background-color: #39a1ff;
            font-family: arial, sans-serif;
            color: #333;

            background: url(image/<?php echo $rowindx['link']; ?>) no-repeat fixed;
            background-size: cover;
            background-position: 50%;
        }
    </style>

</head>

<body>
    <div class="page_container">
        <div class="main_container">
            <div class="all_cntr">
                <div class="fst_container" style="<?php echo $dyhid; ?>">
                    <div class="close-btn_m">X</div>
                    <p class="reminder">
                        <img src="image/cal.png" width="15px" />
                        <a>Today, <?php echo $today; ?></a>
                    </p>

                    <?php

$systemdate = date('d-m');

$sqltdy    = "SELECT * FROM on_this_day WHERE date = '$systemdate'";
$resulttdy = mysqli_query($db, $sqltdy);
$counttdy  = mysqli_num_rows($resulttdy);
while ($rowtdy = mysqli_fetch_array($resulttdy, MYSQLI_ASSOC)) {
 ?>

                        <img src="image/days/<?php echo $rowtdy['link']; ?>" />

                    <?php
}
?>


                </div>
                <div style="margin: auto;" class="snd_container">
                    <div class="team_title">
                        <ul>
                            <li><img src="image/logo.png" height="50px" /></li>
                            <li><a class="team_title_text">BURADiO - Team</a></li>
                        </ul>
                    </div>
                    <div id="message"></div>
                    <div class="login_form">
                        <label>Mobile Number</label>
                        <input type="text" autocomplete="off" name="mobile" id="mobile">
                        <div style="margin-top: 10px;"></div>
                        <label>Password</label>
                        <input type="password" name="password" id="password">
                        <button style="overflow: hidden;" type="submit" name="login" id="sub">LOG IN</button>
                    </div>
                    <div class="forget_pass">
                        <a href="home.php">Forget Password?</a>
                    </div>
                </div>

                <div class="modal" style="<?php echo $dyhid; ?>">
                    <!-- style="display: none" -->
                    <div class="modal-form">
                        <div class="close-btn">X</div>

                        <div class="fst_container_sw" id="scrollbar">
                            <p class="reminder">
                                <img src="image/cal.png" />
                                <a>Today, <?php echo $today; ?></a>
                            </p>

                            <?php

$systemdate = date('d-m');

$sqltdy    = "SELECT * FROM on_this_day WHERE date = '$systemdate'";
$resulttdy = mysqli_query($db, $sqltdy);
$counttdy  = mysqli_num_rows($resulttdy);
while ($rowtdy = mysqli_fetch_array($resulttdy, MYSQLI_ASSOC)) {
 ?>

                                <img src="image/days/<?php echo $rowtdy['link']; ?>" max-width="400px" />

                            <?php
}
?>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <script type="text/javascript" src="js/jquery.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                $("#sub").click(function() {
                    var mobile = $("#mobile").val().trim();
                    var password = $("#password").val().trim();

                    if (mobile != "" && password != "") {
                        $.ajax({
                            url: 'login_ajax',
                            type: 'POST',
                            data: {
                                mobile: mobile,
                                password: password
                            },
                            beforeSend: function() {
                                $("#sub").html('<img src="image/abc.gif" width="35px" />');
                            },
                            success: function(response) {
                                var msg = "";
                                if (response == 1) {
                                    $("#sub").html('<img src="image/abc.gif" width="35px" />');
                                    setTimeout(' window.location.href = "home"; ', 2000);
                                } else {
                                    msg = "<div class='error_msg'>Wrong Mobile or Password!</div>";
                                    $("#sub").html('LOG IN');
                                }
                                $("#message").html(msg);
                            }
                        });
                    }
                });

            });
        </script>

        <script type="text/javascript">
            $(".close-btn").on("click", function() {
                $(".modal").hide();
                $(".modal").fadeOut("slow");
                document.body.style.overflow = "auto";
            });
        </script>

        <script type="text/javascript">
            $(".close-btn_m").on("click", function() {
                $(".fst_container").hide();
                $(".fst_container").fadeOut("slow");
                $(".modal").hide();
            });
        </script>

    </div>
    <div class="credit">
        <p>Developed By: <a href="#" target="_blank"><em>Sharier Himu</em></a></p>
    </div>
</body>

</html>