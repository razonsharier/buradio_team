<script>
    $(".right").hide();

</script>

<style>
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
        max-width: 840px;
        margin-top: 10px;
    }

    .left {
        max-width: 840px;
    }

    iframe {
            height: 1100px;
        }

    @media screen and (max-width: 873px) {
        iframe {
            height: 2150px;
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

    }

    @media screen and (max-width: 500px) {
        .left {
            margin: 0 auto;
            padding-left: 5px;
        }
    }

</style>
<div class="post"> <!-- schedule/index.html -- http://demo.buradio.org/a/ -->
<iframe src="schedule/index.html" style="top:0; left:0; bottom:0; right:0; width:100%; border:none; margin:0; padding:0; overflow:hidden;" title="Iframe Example"></iframe>
</div>
