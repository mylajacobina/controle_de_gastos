<?php
   include"menu.php";
?>
<?php
    if(isset($_GET["resposta"])){
        $resposta=$_GET["resposta"];
        $situacao=$_GET["situacao"];
        echo "<div class='$situacao' role='alert'>
               <center>
                <b>$resposta</b>
              </center>
          </div>" ; 
    }
?>
	
<?php
   include"rodape.php";
?>