<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $orderId = $_POST['order_id'];
  $target_dir = "uploads/";
  if (!is_dir($target_dir)) mkdir($target_dir);
  $filename = $target_dir . basename($_FILES["bukti_transfer"]["name"]);
  if (move_uploaded_file($_FILES["bukti_transfer"]["tmp_name"], $filename)) {
    echo "Berhasil upload bukti untuk Order ID: $orderId";
  } else {
    echo "Gagal upload file.";
  }
}
?>