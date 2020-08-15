<?php
$ifsc = $_POST['ifsc'];
$data=@file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
$data=json_decode($data);
if(isset($data))
{
    $arr['bank']=$data->BANK;
    $arr['address']=$data->ADDRESS;
    echo json_encode($arr);
}
else{
	echo 'no';
}
?>
