<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
    jQuery(function($) {
        $('.popup_image').click(function() {
            $(".img_popup_bg").remove();
            $(".img_popup_cntnt").remove();
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

<script>
    if (window.innerWidth < 840) {
        $(".right").hide();
    } else {
        $(".right").show();
    }
</script>

<script>
    $(document).ready(function() {
        var $window = $(window);

        function checkWidth() {
            if ($window.width() < 840) {
                $(".right").hide();
            } else {
                $(".right").show();
            }
        }
        checkWidth();
    }, 1000);
</script>

<style>
    .img_popup_bg {
        margin: 0 auto;
        background: rgba(0, 0, 0, 0.8);
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 999;
        font-family: Arial, Helvetica, sans-serif;
        overflow: auto;
        padding: 3px;


        display: flex;
        justify-content: center;
        align-items: center;
    }

    .img_popup_cntnt {
        max-width: 50%;
        max-height: 100%;
        width: auto;
        height: auto;
        border-radius: 4px;
        overflow: auto;
        padding-right: 5px;
    }

    .close-btn_popimg {
        background: orangered;
        color: white;
        width: 25px;
        height: 25px;
        line-height: 25px;
        text-align: center;
        cursor: pointer;
        float: right;
        margin-top: 0px;
        margin-left: 0px;
        position: fixed;
        border-radius: 2px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
            0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .popup_image {
        cursor: pointer;
        text-align: left;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
            0 2px 4px -1px rgba(0, 0, 0, 0.06);
        outline: none;
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

        .img_popup_cntnt {
            max-width: 70%;
            width: auto;
            height: auto;
        }

    }

    @media screen and (max-width: 750px) {
        .right {
            display: none;
        }

        .rightnow {
            display: none;
        }

        .leftColumn {
            display: block;
        }


    }

    @media screen and (max-width: 620px) {
        .img_popup_cntnt {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }

        .menu_ops {
            display: block;
        }
    }
</style>

<div style="margin: auto;">
    <div class="posting">
        <div class="post_heading">Post Something...</div>
        <textarea rows="3" type="text"></textarea>
        <input type="file" name="file" id="file" class="inputfile" accept="image/*" onchange="previewImage();">
        <label class="atchmnt" for="file"><img src="image/png/attach-pic.png" style="height: 30px; width: 30px;"></label>
        <div class="prv_img">
            <img id="preview">
        </div>
    </div>
    <div class="bton" style="text-align: left;">
        <button>POST</button>
    </div>
</div>



<p style="text-align: left;margin-bottom: -20px;margin-top: 30px;font-weight: 600;">Your Team
    Members (<a href="#" style="color: #2799e2;text-decoration: underline;">See
        all members</a>)</p>
<div class="member_thumb" style="margin-bottom: 40px;">
    <div style="display: inline-flex; float: left;">
        <a href="1" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/user2.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Sharier</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Web Developer</p>
            </div>
        </a>
        <a href="2" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/2.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Himu</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Telecast Operator</p>
            </div>
        </a>
        <a href="3" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/3.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Adrita</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Video Editor</p>
            </div>
        </a>
        <a href="1" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/user2.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Sharier</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Web Developer</p>
            </div>
        </a>
        <a href="2" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/2.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Himu</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Telecast Operator</p>
            </div>
        </a>
        <a href="3" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/3.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Adrita</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Video Editor</p>
            </div>
        </a>
        <a href="1" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/user2.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Sharier</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Web Developer</p>
            </div>
        </a>
        <a href="2" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/2.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Himu</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Telecast Operator</p>
            </div>
        </a>
        <a href="3" style="text-decoration: none; color: #333">
            <div style="width: 110px;background-color: #fff;padding: 3px;display: block;margin-right: 10px;border-radius: 4px;
                    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.25);">
                <img src="image/user/3.jpg" style="border-radius: 4px; height: 110px; width: 110px;" />
                <p style="font-size: 14px;font-weight: 600;margin-top: 5px;">Adrita</p>
                <p style="font-size: 11px;color: #333;margin-top: -10px;">Video Editor</p>
            </div>
        </a>

    </div>
</div>

<div class="post" style="border-bottom: 2px solid orangered; text-align: center;">
<a style="text-align: left; margin-left: 0px; font-size: 16px; padding: 3px 15px; font-weight: 600; background-color: orangered; color: #ffffff; border-radius: 4px;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-top: 20px;">Notice</a>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero vitae hic fugit illo alias eligendi, deleniti amet distinctio saepe aspernatur. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero vitae hic fugit illo alias eligendi, deleniti amet distinctio saepe aspernatur.</p>
</div>

<div class="post">
    <div class="post_usr_img">
        <a href="#"><img src="image/user/user2.jpg" style="height: 40px; width: 40px" /></a>
        <div style="padding: 5px 50px; width: 100%;">
            <a href="#">Sharier Himu</a>
            <p style="font-size: 11px; margin-top: 0px; color: #165983;">Web Developer</p>
        </div>
    </div>
    <div class="post_up_img">
        <img class="popup_image" src="image/programme/2.jpg" />
    </div>
    <p style="text-align: center; font-size: 12px; color: rgb(97, 97, 97); margin-top: 10px; font-weight: 400; padding: 3px 5px; background-color: #fff; width: 125px; border-radius: 20px; border: 1px solid #ccc">12-11-2020, 01:09 AM</p>
    <a href="#" style="text-decoration: none;">
        <div style="text-decoration: none; cursor: pointer;">
            <p class="seenhov" style="padding: 5px 10px; border: 1px solid #53a6eb; float: right; border-radius: 25px; background: #ffffff;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-top: -32px;">
                <img src="image/seen.png" width="20px" />
                <a style="font-size: 18px; font-weight: 400; color: blueviolet; cursor: pointer;">2355</a>
            </p>
        </div>
    </a>
</div>

<div class="post">
    <div class="post_usr_img">
        <a href="#"><img src="image/user/3.jpg" style="height: 35px; width: 35px" /></a>
        <div style="padding: 5px 47px; width: 100%;">
            <a href="#">Adrita Hossain</a>
            <p style="font-size: 11px; margin-top: 0px; color: #165983;">Radio Jockey</p>
        </div>
    </div>
    <div style="text-align: left; margin-bottom: 20px;">
        <a>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde enim placeat itaque repudiandae molestiae saepe voluptates nulla veniam! Ducimus, facere iste aliquid debitis maiores praesentium asperiores itaque dolore, harum placeat voluptate? Nulla, ea. Id itaque veritatis commodi quidem aperiam debitis? Iusto voluptates commodi, iste pariatur necessitatibus nesciunt quia? Et, quisquam.</a>
    </div>
    <div class="post_up_img">
        <img class="popup_image" src="image/programme/1.jpg" />
    </div>
    <p style="text-align: center; font-size: 12px; color: rgb(97, 97, 97); margin-top: 10px; font-weight: 400; padding: 3px 5px; background-color: #fff; width: 125px; border-radius: 20px; border: 1px solid #ccc">12-11-2020, 01:09 AM</p>
    <a href="#" style="text-decoration: none; cursor: pointer;">
        <p style="padding: 5px 10px; border: 1px solid #ccc; float: right; border-radius: 25px; background: #ffffff;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-top: -32px;">
            <img src="image/seen2.png" width="20px" />
            <a style="font-size: 18px; font-weight: 400; color: rgb(97, 97, 97); cursor: pointer;">22</a>
        </p>
    </a>
</div>

<div class="post">
    <div class="post_usr_img">
        <a href="#"><img src="image/user/2.jpg" style="height: 35px; width: 35px" /></a>
        <div style="padding: 5px 47px; width: 100%;">
            <a href="#">Sharier Kabir</a>
            <p style="font-size: 11px; margin-top: 0px; color: #165983;">Telecast Operator</p>
        </div>
    </div>
    <div style="text-align: left; margin-bottom: 20px;">
        <a>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde enim placeat itaque repudiandae molestiae saepe voluptates nulla veniam! Ducimus, facere iste aliquid debitis maiores praesentium asperiores itaque dolore, harum placeat voluptate? Nulla, ea. Id itaque veritatis commodi quidem aperiam debitis? Iusto voluptates commodi, iste pariatur necessitatibus nesciunt quia? Et, quisquam.</a>
    </div>
    <p style="text-align: center; font-size: 12px; color: rgb(97, 97, 97); margin-top: 10px; font-weight: 400; padding: 3px 5px; background-color: #fff; width: 125px; border-radius: 20px; border: 1px solid #ccc">12-11-2020, 01:09 AM</p>
    <a href="#" style="text-decoration: none;">
        <div style="text-decoration: none; cursor: pointer;">
            <p class="seenhov" style="padding: 5px 10px; border: 1px solid #53a6eb; float: right; border-radius: 25px; background: #ffffff;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-top: -32px;">
                <img src="image/seen.png" width="20px" />
                <a style="font-size: 18px; font-weight: 400; color: blueviolet; cursor: pointer;">23</a>
            </p>
        </div>
    </a>
</div>

<div class="post">
    <div class="post_usr_img">
        <a href="#"><img src="image/user/user2.jpg" style="height: 35px; width: 35px" /></a>
        <div style="padding: 5px 47px; width: 100%;">
            <a href="#">Sharier Himu</a>
            <p style="font-size: 11px; margin-top: 0px; color: #165983;">Web Developer</p>
        </div>
    </div>
    <div class="post_up_img_two">
        <img class="popup_image" src="image/programme/1.jpg" />
        <img class="popup_image" src="image/programme/2.jpg" />
    </div>
    <p style="text-align: center; font-size: 12px; color: rgb(97, 97, 97); margin-top: 10px; font-weight: 400; padding: 3px 5px; background-color: #fff; width: 125px; border-radius: 20px; border: 1px solid #ccc">12-11-2020, 01:09 AM</p>
    <a href="#" style="text-decoration: none; cursor: pointer;">
        <p style="padding: 5px 10px; border: 1px solid #ccc; float: right; border-radius: 25px; background: #ffffff;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-top: -32px;">
            <img src="image/seen2.png" width="20px" />
            <a style="font-size: 18px; font-weight: 400; color: rgb(97, 97, 97); cursor: pointer;">22</a>
        </p>
    </a>
</div>

<div class="post">
    <div class="post_usr_img">
        <a href="#"><img src="image/user/user2.jpg" style="height: 35px; width: 35px" /></a>
        <div style="padding: 5px 47px; width: 100%;">
            <a href="#">Sharier Himu</a>
            <p style="font-size: 11px; margin-top: 0px; color: #165983;">Web Developer</p>
        </div>
    </div>
    <div class="post_up_img_multi">
        <img class="popup_image" src="image/programme/1.jpg" />
        <img class="popup_image" src="image/programme/2.jpg" />
        <img class="popup_image" src="image/programme/3.jpeg" />
    </div>
    <p style="text-align: center; font-size: 12px; color: rgb(97, 97, 97); margin-top: 10px; font-weight: 400; padding: 3px 5px; background-color: #fff; width: 125px; border-radius: 20px; border: 1px solid #ccc">12-11-2020, 01:09 AM</p>
    <a href="#" style="text-decoration: none;">
        <div style="text-decoration: none; cursor: pointer;">
            <p class="seenhov" style="padding: 5px 10px; border: 1px solid #53a6eb; float: right; border-radius: 25px; background: #ffffff;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-top: -32px;">
                <img src="image/seen.png" width="20px" />
                <a style="font-size: 18px; font-weight: 400; color: blueviolet; cursor: pointer;">23</a>
            </p>
        </div>
    </a>
</div>

<div class="post">
    <div class="post_usr_img">
        <a href="#"><img src="image/user/user2.jpg" style="height: 35px; width: 35px" /></a>
        <div style="padding: 5px 47px; width: 100%;">
            <a href="#">Sharier Himu</a>
            <p style="font-size: 11px; margin-top: 0px; color: #165983;">Web Developer</p>
        </div>
    </div>
    <div class="post_up_img_multi">
        <img class="popup_image" src="image/programme/1.jpg" />
        <img class="popup_image" src="image/programme/2.jpg" />
        <img class="popup_image" src="image/programme/3.jpeg" />
        <img class="popup_image" src="image/days/pic.jpg" />
        <img class="popup_image" src="image/days/pic2.jpg" />
        <img class="popup_image" src="image/days/pic3.jpg" />
    </div>
    <p style="text-align: center; font-size: 12px; color: rgb(97, 97, 97); margin-top: 10px; font-weight: 400; padding: 3px 5px; background-color: #fff; width: 125px; border-radius: 20px; border: 1px solid #ccc">12-11-2020, 01:09 AM</p>
    <a href="#" style="text-decoration: none; cursor: pointer;">
        <p style="padding: 5px 10px; border: 1px solid #ccc; float: right; border-radius: 25px; background: #ffffff;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-top: -32px;">
            <img src="image/seen2.png" width="20px" />
            <a style="font-size: 18px; font-weight: 400; color: rgb(97, 97, 97); cursor: pointer;">22</a>
        </p>
    </a>
</div>

<div class="post">
    <div class="post_usr_img">
        <a href="#"><img src="image/user/user2.jpg" style="height: 35px; width: 35px" /></a>
        <div style="padding: 5px 47px; width: 100%;">
            <a href="#">Sharier Himu</a>
            <p style="font-size: 11px; margin-top: 0px; color: #165983;">Web Developer</p>
        </div>
    </div>
    <div class="post_up_img_multiT">
        <img class="popup_image" src="image/programme/1.jpg" />
        <img class="popup_image" src="image/programme/2.jpg" />
        <img class="popup_image" src="image/programme/3.jpeg" />
        <img class="popup_image" src="image/days/pic.jpg" />
        <img class="popup_image" src="image/days/pic2.jpg" />
        <img class="popup_image" src="image/days/pic3.jpg" />
    </div>
    <p style="text-align: center; font-size: 12px; color: rgb(97, 97, 97); margin-top: 10px; font-weight: 400; padding: 3px 5px; background-color: #fff; width: 125px; border-radius: 20px; border: 1px solid #ccc">12-11-2020, 01:09 AM</p>
    <a href="#" style="text-decoration: none;">
        <div style="text-decoration: none; cursor: pointer;">
            <p class="seenhov" style="padding: 5px 10px; border: 1px solid #53a6eb; float: right; border-radius: 25px; background: #ffffff;box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06); margin-top: -32px;">
                <img src="image/seen.png" width="20px" />
                <a style="font-size: 18px; font-weight: 400; color: blueviolet; cursor: pointer;">23</a>
            </p>
        </div>
    </a>
</div>


<script>
    var textarea = document.querySelector('textarea');

    textarea.addEventListener('keydown', autosize);

    function autosize() {
        var el = this;
        setTimeout(function() {
            el.style.cssText = 'height:auto; padding:0';
            // for box-sizing other than "content-box" use:
            // el.style.cssText = '-moz-box-sizing:content-box';
            el.style.cssText = 'height:' + el.scrollHeight + 'px';
        }, 0);
    }
</script>

<script>
    function previewImage() {
        var file = document.getElementById("file").files;
        if (file.length > 0) {
            var fileReader = new FileReader();

            fileReader.onload = function(event) {
                document.getElementById("preview").setAttribute("src", event.target.result);
            };

            fileReader.readAsDataURL(file[0]);
        }
    }
</script>