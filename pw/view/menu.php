 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>gastos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="Coelho calçados, frete gratis, sapatos, tênis" name="description">



  <!-- Favicons -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  
</head>

<body id="body " >
 


  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block" style="background-color: #353535; color: white;">
    <div class="container clearfix">

      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter" style="color: white;"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook" style="color: white;"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram" style="color: white;"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus" style="color: white;"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin" style="color: white;"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  
  <header id="header"  style="background-color: #353535;">
    
    <div class="container" >
      
      <div id="logo" class="pull-left">
        <a href="index.php" class="scrollto" style="color: white">
          <h2>Gastos Jamy</h2>
        </a>
      </div>

      <nav id="nav-menu-container"  >

        <ul class="nav-menu">
          <li> 
              <a href="meusGastos.php" style="color: white">Meus Gastos</a>
          </li>
          <li> 
              <a href="cadastrarGastos.php" style="color: white">Cadastrar gasto</a>
          </li>
          <li> 
            <?php
            session_start();
              if (isset($_SESSION['idusuario'])) {
                echo "<a href='../controller/logout.php' style='color: white'>Sair</a>";
               }else{
                echo "<a href='login.php' style='color: white'>Entrar</a>";
                
               }
            ?>
          </li>
         

         </ul>
         
    
      </nav><!-- #nav-menu-container -->
    </div>

  </header><!-- #header -->
  