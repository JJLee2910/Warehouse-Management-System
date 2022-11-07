<!--
Programmer Name: Lee Jang Jhin
Program Name:payment.php
Description: Payment gateway & its interface design
Edited/Modified by: Lee Jang Jhin
 -->

<?php
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: index.php');
}
 ?>


<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div><br>
          <a href="main.php" class="btn" onclick="history.back(1);">Cancel Payment?</a>
      </div>
    </div>

  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        // style the payment button
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',

        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {

            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');

          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
<style>
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: skyblue;
  border: none;
  border-radius: 5px;
  align-items: center;
}
</style>
