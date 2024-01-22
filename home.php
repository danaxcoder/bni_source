<?php
?>
<html>
    <head>
        <title>BNI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/common/css/ripple.css">
        <link rel="stylesheet" href="assets/common/css/global.css">
        <link rel="stylesheet" href="assets/common/css/home.css">
        <script>
            const module = {};
        </script>
        <script src="assets/common/js/jquery.js"></script>
        <script type="module" src="assets/common/js/home.js"></script>
    </head>
    <body>
        <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center;">
            <div style="width: 100%; display: flex; flex-direction: column; background-color: #ff7f08;">
                <div style="width: calc(100% - 20px); display: flex; flex-direction: row; justify-content: space-between; align-items: center; margin-left: 10px; margin-right: 10px; margin-top: 10px;">
                    <img src="assets/common/img/bni_logo.png" width="100px" height="50px">
                    <div style="color: #ffffff; font-size: 15px; font-weight: bold;">Menu</div>
                    <div style="width: 100px; height: 50px;"></div>
                </div>
                <div style="width: 100%; height: 4px; background-color: #ffffff; display: flex; flex-direction; row; justify-content: flex-end; margin-bottom: 10px; margin-top: 10px;">
                    <div style="width: 50px; height: 100%; background-color: #27a3a6;"></div>
                </div>
            </div>
            <div style="color: #0d5961; font-size: 15px; font-weight: bold; margin-top: 20px;">Selamat datang di BNI Reward POIN</div>
            <img src="assets/common/img/logo.png" width="80px" height="30px" style="margin-top: 10px;">
            <div style="color: #444444; font-size: 12px; font-weight: bold; margin-top: 60px; text-align: center;">Apakah Anda sudah terdaftar di BNI Mobile Banking?</div>
            <div class="ripple" style="width: 150px; padding: 20px; border-radius: 10px; background-color: #f15a23; display: flex; flex-direction: column; align-items: center; color: #ffffff; margin-top: 20px;" onclick="module.haveCard()">
                Iya, Sudah Terdaftar<br/>
                <b>Mobile Banking</b>
            </div>
            <div class="ripple" style="width: 150px; padding: 20px; border-radius: 10px; background-color: #00b5e4; display: flex; flex-direction: column; align-items: center; color: #ffffff; margin-top: 10px;" onclick="module.regNewCard()">
                Belum, Terdaftar<br/>
                <b>Mobile Banking</b>
            </div>
            <img src="assets/common/img/bottom_menu.png" width="100%" height="100px" style="position: fixed; left: 0; bottom: 0; object-fit: fill;">
            <div style="position: fixed; right: 10px; bottom: 10px; background-color: #ff0000; color: #ffffff; padding-left: 10px; padding-right: 10px; padding-top: 2px; padding-bottom: 2px; font-weight: bold; font-size: 20px;">
                DEMO
            </div>
        </div>
    </body>
</html>