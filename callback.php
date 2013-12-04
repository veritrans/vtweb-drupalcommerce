<?php
echo "haihaiahai";

 require_once ("veritrans_notification.php");

  $veritrans_notification = new VeritransNotification;

  //$veritrans_notification = json_encode($veritrans_notification);
  var_dump($veritrans_notification);

  $merchant_query = $this->db->query("SELECT token_merchant FROM `tokens` WHERE order_id = '" . $veritrans_notification->orderId . "'");
    $token_merchant='0';

    if ($merchant_query->num_rows) {
      $token_merchant = $merchant_query->row['token_merchant'];
    }


if ($veritrans_notification->TOKEN_MERCHANT==$token_merchant)
{
    
     $transaction = commerce_payment_transaction_new('commerce_veritrans', $order->order_id); 
  
    if ($veritrans_notification->mStatus=="success"){
      $transaction->status = "COMMERCE_PAYMENT_STATUS_SUCCESS";
       echo "transaksi berhasil";

    } else if ($veritrans_notification->mStatus=="failure"){

    	$transaction->status = "COMMERCE_PAYMENT_STATUS_FAILURE";
      echo "transaksi gagal";

    }else{

    	$transaction->status = "COMMERCE_PAYMENT_STATUS_PENDING";
      echo "transaksi pending";
    }

    commerce_payment_transaction_save($transaction);

}else{
  echo "Token Merchant tidak sesuai";
}



   
  
?>