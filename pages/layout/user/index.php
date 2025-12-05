
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Physical Theraphy &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/user/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/user/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/user/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/user/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/user/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="assets/user/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/user/css/aos.css">
    <link rel="stylesheet" href="assets/user/css/rangeslider.css">

    <link rel="stylesheet" href="assets/user/css/style.css">
    
  </head>
  <body>

  <?php 
    $hal = @$_GET['hal'];
    $beranda = "pages/user/beranda.php";
    $p = "pages/user/$hal.php";
    if(!empty($hal) && file_exists($p)){
      include "$p";
    }else{
      include "$beranda";
    }
  ?>

  <script src="assets/user/js/jquery-3.3.1.min.js"></script>
  <script src="assets/user/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/user/js/jquery-ui.js"></script>
  <script src="assets/user/js/popper.min.js"></script>
  <script src="assets/user/js/bootstrap.min.js"></script>
  <script src="assets/user/js/owl.carousel.min.js"></script>
  <script src="assets/user/js/jquery.stellar.min.js"></script>
  <script src="assets/user/js/jquery.countdown.min.js"></script>
  <script src="assets/user/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/user/js/jquery.animateNumber.min.js"></script>
  <script src="assets/user/js/jquery.waypoints.min.js"></script>

  <script src="assets/user/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/user/js/aos.js"></script>
  <script src="assets/user/js/rangeslider.min.js"></script>
  

  <script src="assets/user/js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["sehat.","kuat.","bahagia."],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>

  <script src="assets/user/js/main.js"></script>
  
  </body>
</html>