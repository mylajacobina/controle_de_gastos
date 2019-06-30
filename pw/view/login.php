 <?php
   include"menu.php";


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
 

        <section id="contact" class="wow ">
      <div class="container">

      <form method="post" action="../controller/logar.php">
            
          <div class="form-group">
            <br>
            <br>
            <label for="exampleInputEmail1">usuario</label>
            <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuário " required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
          </div>
          
          
          <center>
            <button type="submit" class="btn btn-primary">Entrar</button>
          </center>

        </form>
      </div>
    </section><!-- #contact -->


<?php
   include"rodape.php";
  ?>
