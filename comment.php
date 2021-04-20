<?
include("db/db.php"); 
?>


<?

$comment = $pdo->query("select * from `comment` ORDER BY id DESC");
$comment_as = $comment->fetch();


if($comment_as['id']){
do {
    echo "<div class='otz'>
                  
    <div class='info'>

        <p>Имя {$comment_as['name']}</p>
        <p>Email {$comment_as['email']}</p>
        <p>{$comment_as['comment']}</p>
        

    </div>
  
</div>";
}
while($comment_as = $comment_as = $comment->fetch());

}
else {
    echo "<div class='otz'>
                  
    <div class='info'>

        <p>Комментариев нету</p>
       
        

    </div>
  
</div>";
}

?>


          