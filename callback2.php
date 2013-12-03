<?php
echo "haihaiahai";

 require_once ("veritrans_notification.php");

  $veritrans_notification = new VeritransNotification;

  $veritrans_notification = json_encode($veritrans_notification);

  var_dump($veritrans_notification);

    if ($veritrans_notification->mStatus=="success"){

   // 	 commerce_veritrans_transaction($payment_method, $order, $arr_charge, $tokens, COMMERCE_PAYMENT_STATUS_SUCCESS);
   //    echo "transaksi berhasil";

    } else if ($veritrans_notification->mStatus=="success"){

   // 	commerce_veritrans_transaction($payment_method, $order, array(), $tokens, COMMERCE_PAYMENT_STATUS_FAILURE);
   //   echo "transaksi gagal";

    }else{

   // 	commerce_veritrans_transaction($payment_method, $order, $arr_charge, $tokens, COMMERCE_PAYMENT_STATUS_PENDING);
   //   echo "transaksi pending";
    }
  
  
?>