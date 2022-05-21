<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Select Color</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <div class="center">
      <h1>Color Selection</h1>
      
      <form action="work.php" method="post">
          <?php
          
          if(isset($_SESSION["sucess"])){
              echo "<div class='alert alert-success' role='alert'>
  opération réalisée avec succès!
</div>";
          }
          session_destroy();
          ?>

<div class="container">
<table>
  <tr>
    <td style="padding-right:5px;">
      <div id="preview" class="swatch" style="background-color:#fff" ></div>
    </td>
    <td>
      <span id="color-name">White</span><br>
      <input id="color-field" value="White" style="display:none;">
      <div class="dropdown">
              <a class="dropdown-toggle btn btn-default" data-toggle="dropdown" href="#" style="color:#000;">Change Color</a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <table>
                  <tr>
                    <td><div id="Red" class="swatch swatch-clickable" style="background-color:red"></div></td>
</div></td>
                    <td><div id="Green" class="swatch swatch-clickable" style="background-color:green"></div></td>
                    <td><div id="Yellow" class="swatch swatch-clickable" style="background-color:yellow"></div></td>
                    <td><div id="Blue" class="swatch swatch-clickable" style="background-color:blue"></div></td>
                    <td><div id="White" class="swatch swatch-clickable" style="background-color:white"></div></td>
                  </tr>
                </table>
                </table>
                
              </ul>
            </div>
    </td>
  </table>
  </div>
        <br>
        <input id="submit" type="submit" value="Send">
        <br>
        <script>
          $('.swatch-clickable').each(function () {
    $(this).attr('title', $(this).attr('id'));
});
$('.swatch-clickable').tooltip();

$(".swatch-clickable").click(function() {
  $("#preview").css('background-color', $(this).css('background-color'));
  $("#color-name").html($(this).attr("id"));
  $("#color-field").val($(this).attr("id"))
});
          </script>

       
      </form>
    </div>

  </body>
</html>
