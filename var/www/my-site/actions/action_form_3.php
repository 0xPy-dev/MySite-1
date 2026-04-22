<?php
	if (($_POST['fio'] == NULL) || 
		($_POST['pol'] == NULL) || 
		($_POST['comment'] == NULL)) {
		header('Location: ../pages/page_3.html');
	}
	else {
		header('Location: ../pages/page_3_1.html');
	}
?>
