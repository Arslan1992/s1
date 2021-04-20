<?
include("db/db.php"); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <script type="text/javascript" src="jquery.js"></script>
    <title>Document</title>
</head>
<body>


    <div class="from">

        <p>Отавить отзыв</p>

        <div class="f">

              <form id="f">
                  <input type="text" name="name" placeholder="Имя">
                  <input type="email" name="email" placeholder="email">
                  <textarea name="comment" id="" cols="30" rows="10" placeholder="Отзыв"></textarea>
                  <input type="submit">
              </form>


              <script>
          
              
                $(document).ready(function(){  
          
          $('#f').submit(function(){  
              $.ajax({  
                  type: "POST",  
                  url: "/ajax.php",   
                  data:  new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
                  success: function(html){  
                      $("#otvet").html(html);  
                  }  
              });  
              return false;  
          });  
            
      }); 
              
              
          
          </script>

<div id="otvet"></div>

        </div>

    </div>


           <div id="comment"></div>


           <script>



             function comment(){
              $.ajax({
                  url: "/comment.php",
                  success: function(html){  
                      $("#comment").html(html);  
                  }
             })
             }
             setInterval(comment, 1000);
            


           </script>
 

    
</body>
</html>