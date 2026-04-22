<?php
	if (($_POST['uname'] == null)  || 
		($_POST['email'] == null)  ||
		(strpos($_POST['email'], "@") === false) || 
		($_POST['passwd'] == null) ||
		($_POST['passwd'] != $_POST['cpasswd'])) {
		header('Location: ../pages/page_3_1.html');
	}
	else {
		echo "Поздравляю! Вы успешно зарегестрировались!\n";
	}
?>
