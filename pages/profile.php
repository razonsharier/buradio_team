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


    /******************* profile page styles */

    .button_add {
    min-width: 50px;
    background-color: #2799e2;
    border: 0;
    color: #ffffff;
    cursor: pointer;
    outline: none;
    border: 1px solid #298ac7;
    padding: 3px 10px;
    border-radius: 2px;
}

.button_add:hover {
    background-color: #298ac7;
}

.user-pic-dtls {
    margin-top: 20px;
    overflow: auto;
    display: inline-flex;
}

.user-pic-dtls a img {
    width: 100px;
    border-radius: 50%;
    border: 1px solid #2799e2;
    padding: 3px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.user-pic-dtls .usr_tpoints {
    text-align: center; 
    margin-left: -85px; 
    margin-top: 10px; 
    background-color: #178e17; 
    width: 50px; 
    padding: 3px; 
    border-radius: 25px; 
    color: #ffffff; 
    font-size: 14px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
        0 2px 4px -1px rgba(0, 0, 0, 0.06);
    font-weight: 600;
    }

.all_info {
    width: 150px;
    border-bottom: 1px solid #ccc;
    font-size: 18px;
    font-weight: 600;
    margin: auto;
    margin-top: 20px;
    color: #2799e2;
}

    




        table {
    border-collapse:collapse;
    border-spacing:0; 
    font-size: 14px;
    max-width:500px;
}

td,th {
    padding:10px;
    max-width:400px;
}


.responstable {
    margin: 1em 0;
    width: 100%;
    overflow: hidden;
    background: #FFF;
    color: #024457;
    margin-bottom: 50px;
    margin: auto;
}

.responstable tr {
    border: 1px solid #D9E4E6;
    height: 30px;
    width: 400px;
    width: 100%;
    text-align: left;
    padding: 10px;
}

.responstable th {
    border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
    background-color: #EAF3F3;
    
}


.responstable td:first-child {
    display: table-cell;
    text-align: left;
    border-right: 1px solid #D9E4E6;   
}



/****************************************** */
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

    @media screen and (max-width: 340px) {
        .user-pic-dtls a img {
            width: 80px;
            margin-top: 7px;
        }

        .user-pic-dtls .usr_tpoints {
            margin-left: -75px;
            margin-top: 0px;
        }

    }

</style>

<div class="post" style="margin-top: 10px;">
<div style="overflow: auto; border-bottom: 1px solid #ccc; padding: 0px 0px 5px 0px;">
<a style="float: left; font-weight: 600; font-size: 20px; margin-left: 3px;">Profile</a>
<a class="button_add" style="float: right; font-size: 14px;">Edit Profile</a>
</div>

<div class="user-pic-dtls">
    <a><img src="image/user/user2.jpg" width="70px" /></a>
    <div>
        <div style="margin-top: 20px;">
        <a style="font-size: 20px; font-weight: 600; padding: 10px;">B. M. Sharier Kabir</a> <br/>
        </div>
        <div style="margin-top: 10px; font-size: 14px; text-align: left; padding-left: 10px; color: orangered;">
        <a>Web Developer</a><br/>
        <a>Telecast Operator</a><br/>
        </div>
        <p class="usr_tpoints">27</p>
    </div>
</div>

<div class="all_info">
    <a>All Info</a>
</div>

<div style="overflow: auto; margin-top: 20px;">

<div style="margin: auto;">
<table class="responstable">
  <tbody>
      
  <tr>
    <td style="width: 80px;"><b>Name</b></td>
    <td>B. M. Sharier Kabir (Himu)</td>   
  </tr>
      <tr>
    <td><b>Mobile</b></td>
    <td>01867849219</td>   
  </tr>
      <tr>
    <td><b>Email</b></td>
    <td>himusharier@gmail.com</td>
  </tr>
      <tr>
    <td><b>Department</b></td>
    <td>Botany</td>
  </tr>
      <tr>
    <td><b>Session</b></td>
    <td>2017-18</td>
  </tr>
      <tr>
    <td><b>Email</b></td>
    <td>Web Developer</td>
  </tr>
      <tr>
    <td><b>Mobile</b></td>
    <td>01867849219</td>   
  </tr>
      <tr>
    <td><b>Email</b></td>
    <td>himusharier@gmail.com</td>
  </tr>
      <tr>
    <td><b>Department</b></td>
    <td>Botany</td>
  </tr>
      <tr>
    <td><b>Session</b></td>
    <td>2017-18</td>
  </tr>
      <tr>
    <td><b>Email</b></td>
    <td>Web Developer</td>
  </tr>
      <tr>
    <td><b>Mobile</b></td>
    <td>01867849219</td>   
  </tr>
      <tr>
    <td><b>Email</b></td>
    <td>himusharier@gmail.com</td>
  </tr>
      <tr>
    <td><b>Department</b></td>
    <td>Botany</td>
  </tr>
      <tr>
    <td><b>Session</b></td>
    <td>2017-18</td>
  </tr>
      <tr>
    <td><b>Email</b></td>
    <td>Web Developer</td>
  </tr>
 
</tbody>
</table>
</div>


</div>

</div>