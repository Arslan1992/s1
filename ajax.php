<?
include("db/db.php"); 




$go = $pdo->prepare("INSERT INTO `comment` (`id`, `name`, `email`, `comment`) VALUES (NULL, ?, ?, ?)");
$go->bindParam(1, $_POST['name']);
$go->bindParam(2, $_POST['email']);
$go->bindParam(3, $_POST['comment']);
$go->execute()



?>

