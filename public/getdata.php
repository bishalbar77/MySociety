<?php

// if(isset($_POST['ifsc']))
// {
//     $ifsc = $_POST['ifsc'];
//     $json=@file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
//     $arr=json_decode($json);
//     if(isset($arr->BRANCH))
//     {
//         $data['bank'] =  $arr->BANK;
//         $data['branch'] =$arr->BRANCH;
//         $data['address'] = $arr->ADDRESS;
//         echo json_encode($data);
//     }
//     else{
//         echo 'invalid ifsc';
//     }
    
// }
$ifsc = $_POST['ifsc'];
$data=@file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
$data=json_decode($data);
if(isset($data))
{
    $arr['bank']=$data->BANK;
    $arr['address']=$data->ADDRESS;
    $arr['branch']=$data->BRANCH;
    echo json_encode($arr);
}
else{
echo 'no';
}
?>