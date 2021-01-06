<script>
    $(".right").hide();

</script>




<style>
    .active_menu {
        border-bottom: 0px;
    }

    .right {
        display: none;
    }

    .leftColumn {
        display: block;
        border-right: 1px dashed #ccc;
        max-width: 160px;
        width: 100%;
    }

    .post {
        max-width: 450px;
    }

    .left {
        max-width: 840px;
    }



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
        .img_popup_cntnt {
            max-width: 70%;
            width: auto;
            height: auto;
        }

    }

    @media screen and (min-width: 750px) {
        .menu_ops {
            display: none;
            clear: both;
        }

    }

    @media screen and (max-width: 620px) {
        .left {
            padding-left: 5px;
        }

        .img_popup_cntnt {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }

    }

    @media screen and (max-width: 500px) {
        .left {
            margin: 0 auto;
            padding-left: 5px;
        }
    }

</style>

<p style="text-align: left; font-size: 22px; font-weight: 600; color: #333; margin-top: 5px; margin-bottom: -10px;">Your Posts</p>

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