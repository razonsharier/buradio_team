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
    }

    .left {
        max-width: 840px;
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
<div class="post">Your Settings Page (username edit, designation update, dark mode)</div>