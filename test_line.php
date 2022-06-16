<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
date_default_timezone_set("Asia/Bangkok");
header('Content-Type: text/html; charset=utf-8');
include("classes/fn_notify.php");
require_once('database.php');
require_once('jpg.php');
$pdf = 'C:\Users\BBC1009082\Desktop\project\test_line_notify\pdf\test.pdf';

echo "Start Time : ".date('H:i:s');
echo "<br>";


//Send Notify
$valueGroup = "TES";
$datetime_stamp = date('Y-m-d H:i');



$msg = "\n";
$msg .= "$datetime_stamp \n";
$msg .= "ทดสอบ line notify";


// 'imageThumbnail'=> xxxx,
// 'imageFullsize'=> xxxx,
include 'jpg.php';
echo 'Total Pages Number: ',$pages;


// Local
if ($pages){
  for($i = 0; $i < $pages; $i++){
    $imageFile = new CurlFile('img/img_'.$datetime_stamp.'-'.$i.'.jpg');

    $array_msg = array(
      'message' => $msg,
	  'imageFile' => $imageFile     
  );
  sendline($array_msg, $valueGroup);
  }

}else echo 'No image files';


//Outside
$imageThumbnail = "https://ro10.3bb.co.th/26-035/assets/img/ro10/3BB-GIGATV-Slide-Banner2.jpg";
$imageFullsize = "https://ro10.3bb.co.th/26-035/assets/img/ro10/3BB-GIGA-FIBER-Slide-Banner2.jpg";

  // $array_msg = array(
  //     'message' => $msg,
	//   'imageThumbnail' => $imageThumbnail,     
	//   'imageFullsize' => $imageFullsize
  // );



echo "<br>";
echo "End Time : ".date('H:i:s');
unlink($pdf);
?>