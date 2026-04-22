<?php
	if (($_POST['comment']) != NULL) {
		echo "<p>Ваш комментарий был сохранен и отпрален нам на почту.</p> Спасибо за ваше мнение!";
	}

	else {
		header('Location: /pages/page_2.html');
	}
?>