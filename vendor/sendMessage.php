<?php include("php/connect.php");
header("Content-type: text/html; charset=UTF-8");
if($_POST['js'] == 'no')
{
	if($_POST['message'] != '' && $_POST['author'] != ''){

		$author = $_POST['author'];
		$author = addslashes($author);
		$author = htmlspecialchars($author);
		$author = stripslashes($author);

		$message = $_POST['message'];
		$message = addslashes($message);
		$message = htmlspecialchars($message);
		$message = stripslashes($message);

		$date = date("d-m-Y в H:i:s");
		$result = $mysql->query("INSERT INTO `messages` (`author`, `message`) VALUES ('$author', '$message')");
		if($result == true){
			echo "Ваше сообшение успешно отправлено";} //Ваше сообшение успешно отправлено
	}
}
?>