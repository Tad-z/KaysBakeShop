<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kay's Order</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
     
  </style>
    </head>
    <body>
         <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +1 5589 55488 55
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
      <div class="languages">
        <ul>
          
        </ul>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Kay's Bakeshop</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php" class="logo mr-auto"><img src="kay.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          
         
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  
            
       
  
      <br>
      <br>
      
      
      
            <?php
     $link = mysqli_connect("localhost", "root", "", "kaysbakeshop");
     
        if(isset($_POST['sub_button'])){
        
            $get_name= $_POST['get_name'];
            $get_email= $_POST['get_email'];
            $get_phone= $_POST['get_phone'];
            $get_date= $_POST['get_date'];
            $get_time= $_POST['get_time'];
            $get_address= $_POST['get_address'];
            $get_message= $_POST['get_message'];
            
        
          
           
            $sql_submit = "INSERT INTO 'orderr' (Name, Email, Phone, Currentdate, Deliverydate, Location, Orderr) VALUES('$get_name', '$get_email', '$get_phone', '$get_date', '$get_time', '$get_address', '$get_message')";
            $merge = mysqli_query($link,$sql_submit);
                    
                    if($merge == true){
                       echo"<script>alert('$get_name we will send u a mail shortly !!!')</script>";
                    }else{
                       echo "<script>alert('error $get_name did not register in the database!!!')</script>";
                    }
                  }    
        
       
        
        
        
        
        
        
        
        
        
        
        ?>
        
        
        
        
        
        
        
        
      <section>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Place your order here</h2>
         
        </div>

          <form name="testing" action="ordercake.php" method="POST" enctype="multipart/form-data">
          
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
                <input type="text" name="get_name" class="form-control"   placeholder="Your Name"   data-msg="Please enter your name">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="get_email"  placeholder="Your Email"   data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <input type="number" class="form-control" name="get_phone"  placeholder="Your Phone Number"   data-msg="Must be 11 numbers">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <b>current date</b>:<input type="date" name="get_date" class="form-control"  placeholder="Date"   data-msg="Please enter today's date">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
                <b>delivery date</b>:<input type="date" class="form-control" name="get_time"  placeholder="Date"   data-msg="Please enter the date u want the cake to be deivered">
              <div class="validate"></div>
            </div>
              
              <div class="col-lg-4 col-md-6 form-group">
               <b>delivery address</b>:<input type="location" class="form-control" name="get_address"  placeholder="Delivery address"   data-msg="Please enter the delivery address">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="get_message" rows="5" placeholder="Write down your order here" ></textarea>
            <div class="validate"></div>
          </div>
         
              <div class="text-center"><button name="sub_button" type="submit" value="submit info" >ORDER</button></div>
        </form>

      </div>
   
    
    
      </section>
    
    
 <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    </body>
</html>
