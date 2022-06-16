<?php
date_default_timezone_set("Asia/Bangkok");
$pdf = 'C:\Users\BBC1009082\Desktop\project\test_line_notify\pdf\test.pdf';

$im = new Imagick();

$im->setResolution(500,500);

$im->readImage($pdf);
$im->trimImage(5);
$im->setImageFormat ("jpeg");
$im->setImageCompression(imagick::COMPRESSION_JPEG); 
$im->setImageCompressionQuality(100); 

$datetime_stamp = date('Y-m-d_H.i');
// echo $datetime_stamp;

$pages = $im->getNumberImages();

if ($pages) {
    foreach($im as $index => $pdf_image) {
       
        // $pdf_image->writeImage('C:\Users\BBC1009082\Desktop\project\test_line_notify\img\image_file-' . $index .'.jpg');
        $pdf_image->writeImage('C:\Users\BBC1009082\Desktop\project\test_line_notify\img\img_' .$datetime_stamp .'-'.$index.'.jpg');
    }
} else {
    echo 'PDF doesn\'t have any pages';
}
//instead\\
// file_put_contents ('C:\Users\BBC1009082\Desktop\project\test_line_notify\img\test_1.jpg', $im); // works
// unlink($pdf);
?>