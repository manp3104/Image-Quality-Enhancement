<?php

	session_start();
	$error = '';

	$img_name = rand(1, 100);
	$img_address_orig = "image/".$img_name."icon_orig.jpg";
	$img_address = "image/".$img_name."icon.jpg";

	$success = 0;

	if($_FILES["icon_img"]["error"] > 0) {
		echo "Error: " . $_FILES["icon_img"]["error"] . "<br/>";
	}
	else {
		move_uploaded_file($_FILES["icon_img"]["tmp_name"], $img_address);
		copy($img_address, $img_address_orig);
		$success = 1;
	}

	if($success) {

		$result = shell_exec('python image/script.py ' . $img_address);

		$_SESSION["image_path"] = $img_address;
		$_SESSION["image_path_orig"] = $img_address_orig;
		
		header('Location: upload.php');
	}
	else {
		echo "Image file couldn't be uploaded. File size invalid.";
	}

	mysqli_close($dbc);
	

?>