<?php
session_start();

class Captcha {

	var $font = 'monofont.ttf';

	function getCaptcha($characters) {
		/* list all possible characters, similar looking characters and vowels have been removed */
		$possible = '123456789abcdefghijklmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code = '';
		$i = 0;
		while ($i < $characters) { 
			$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$i++;
		}
		return $code;
	}

	function captcha($width='120',$height='40',$characters='6') {
		$code = $this->getCaptcha($characters);
		/* font size will be 75% of the image height */
		$font_size = $height * 0.75;
		$image = @imagecreate($width, $height);
		/* set the colours */
		$background_color = imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
		$text_color = imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
		$noise_color = imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
		/* generate random dots in background */
		for( $i=0; $i<($width*$height)/3; $i++ ) {
			imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
		}
		
		for( $i=0; $i<strlen($code); $i++ ) { 
			imagettftext($image, $font_size, mt_rand(0,28), (30*$i) + 30, (1*$i) + 45, $text_color, $this->font , $code[$i]); 
		}
		header('Content-Type: image/jpeg');
		imagejpeg($image);
		imagedestroy($image);
		$_SESSION['security_code'] = $code;
	}

}

$width = isset($_GET['width']) ? $_GET['width'] : '300';
$height = isset($_GET['height']) ? $_GET['height'] : '90';
$characters = isset($_GET['characters']) && $_GET['characters'] > 1 ? $_GET['characters'] : '6';

$captcha = new captcha($width,$height,$characters);

?>