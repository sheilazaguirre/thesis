<?php
  $db = mysqli_connect("localhost", "root", "", "thesis");
  $msg = "";

  if (isset($_POST['upload'])) {
    $target = "images/".basename($_FILES['image']['name']);


    $image = $_FILES['image']['name'];
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);


    $sql = "INSERT INTO announcements (image, image_text) VALUES ('$image', '$image_text')";
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }

  $result = mysqli_query($db, "SELECT * FROM announcements");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Fixed Layout</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <!-- Theme style -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css') ?>">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/xstyle.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/header-login-signup.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>css/footer-distributed-with-address-and-phones.css">



  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="assets/demo.css">
  <link rel="stylesheet" href="assets/header-login-signup.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  

<style>

.login-page, .register-page 
{
  background-image: url('<?php echo base_url(); ?>');
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
  background-repeat: no-repeat;
  overflow-y: hidden;
}

.login-box-body, .register-box-body {
    background-color: hsla(0, 0%, 100%, 0.9);
    padding: 20px;
    border-top: 0;
    color: #666;
    box-shadow: 0px 0px 70px black;
    height: 450px;
}

.login-logo, .register-logo {
    color: black;
    font-size: 35px;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 300;
    text-shadow: 1px 0px white;
}

.bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
  background-color: #f2dede !important;
  color: #a94442 !important;
}

.alert-danger, .alert-error {
    border-color: #ebccd1;
}
.alert {
    border-radius: 3px;
}
</style>

</head>
<body class="hold-transition login-page">
<header class="header-login-signup">

  <div class="header-limiter">

    <h1><a href="<?php echo base_url(); ?>login"><img src="<?php echo base_url(); ?>images/gapcis-logo.png" alt="Di Gumana"></a></h1>
 
    <nav>
      <a href="<?php echo base_url(); ?>login">Home</a>
      <a href="<?php echo base_url(); ?>about-us.html">About Us</a>
      <a href="<?php echo base_url(); ?>admission.html">Admission</a>
      <a href="<?php echo base_url(); ?>contact-us.html">Contact Us</a>
    </nav>


  </div>

</header>
<div class="col-lg-6">
  <div class="">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

          <div class="item active">
            <img src="http://localhost:8080/thesis/images/img2.jpg" height="450" alt="Image Unavailable">
          </div>

                <?php
                while ($row = mysqli_fetch_array($result)) 
                {
                  echo "<div class='item'>";
                   echo "<img src='http://localhost:8080/thesis/images/".$row[ 'announceFile']. "' alt='Image Unavailable' height='500'>";
                  echo "</div>";
                } 
                ?>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>

            </div>
        </div>
    </div>
</div>
<div class="col-lg-6">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    Sign in to your account
  </div>
    <!-- login-error-msgs -->
    <?php if($_SESSION['errormsg'] == 1): ?>
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Error!</strong> Invalid username or password
      </div>
    <?php endif;?>
    <?php if($_SESSION['errormsg'] == 2): ?>
      <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Error!</strong> Internal error
      </div>
    <?php endif;?>
    <!-- /login-error-msgs -->
    <?php session_destroy(); ?>
    <?php echo form_open('login/index'); ?>
      <div class="form-group has-feedback">
      <input type="text" name="userIDNo" class="textbox" id="userIDNo" placeholder="Your ID Number" required/>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <input type="password" name="userPassword" class="textbox" id="userPassword" placeholder="Password" required/>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-lg-offset-4 col-xs-4">
          <button type="submit" class="btn btn-danger btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <div>
      	<center>
      		<a href="<?php echo site_url();?>User/forgot">Forgot Password</a><br>
          <div class="g-recaptcha" data-sitekey="6LfRmzcUAAAAAGUARi6CAjGlAVfuO0AzGwIS1z3k"></div>
      		</center>
      	</div> 
    </form>
  </div>
</div>
  <!-- /.login-box-body -->

</div>
    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>GAPC Information Systems</h3>

        <p class="footer-company-name">Governor Andres Pascual College &copy; 2017</p>
      </div>

      <div class="footer-center">


      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span></span>
          
        </p>

      </div>

    </footer>

<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="<?php echo site_url() ?>resources/js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo site_url() ?>resources/js/bootstrap.min.js"></script>
<!-- iCheck -->


</body>
</html>
