 <?php
$email ="";
if(isset($_POST['submit']))
{
  
    $email=$_POST['email'];
    $conn=new mysqli("fnx6frzmhxw45qcb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "t2wc6mxrlt6h0xre", "qrhxev93hbev7fos", "c6vxicjb30x1k62c");
    $cmd="INSERT into emails value('$email');";
    if(mysqli_query($conn, $cmd))

    {
        echo "Successfully";
    }
    else{
        echo "Email not sent";
    }
}
?>


 <!doctype html>
 <html lang="en">

 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

   <!--custom css-->
   <link rel="stylesheet" href="style-2.css">

   <!--font awesome-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
     integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">

   <title>AgedPrompt</title>
 </head>

 <body>
   <!-- As a link -->
   <nav class="navbar navbar-light bg-light">
     <div class="container">
       <a class="navbar-brand" href="#"><img height="30" src="images/group_11.png" alt="aged-prompt logo" /></a>
     </div>
   </nav>

   <!-- Hero section -->
   <section id="hero" class="mb-150">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-6 hero-img order-md-2 mt-5 mt-md-0">
           <img class="img-fluid hero-img d-none d-md-block" src="images/hero-img-new.png" alt="old couple">
           <img class="img-fluid hero-img d-block d-md-none" src="images/hero-mobile.png" alt="old couple">
         </div>
         <div class="col-md-6 order-md-1">
           <h1 class="font-weight-bolder">Lonely shouldn’t <br> come with Age </h1>
           <p>AgedPrompt is an app that tackles lonliness in old people by calling and chatting with them regulary as
             well as reminding them to take their medications. <br> <br>
             Available for download soon on all major mobile platforms</p>

           <p><strong>Sign up to join the waitlist</strong></p>

           <form class="" method="POST">
             <div class="row no-gutters">
               <div class="col-md-6">
                 <input class="form-control rounded-0 form-control-lg font-resize" type="email" name="email"
                   placeholder="Email">
               </div>
               <div class="col-md-4 py-0">
                 <input style="letter-spacing: 0.5px;"
                   class="btn btn-primary mb-2 rounded-0 btn-lg font-resize font-weight-bolder btn-block" type="submit"
                   name="submit" value="Subscribe">
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </section>
   <!-- END Hero section -->

   <!-- Steps Section -->
   <section id="steps" class="mb-150">
     <div class="container my-5">
       <div class="row">
         <div class="col-12 col-md-4 text-center">
           <div style="background: #DEF7FE;" class="p-5 border-aged">
             <img class="img-fluid mb-4" src="images/app-icon.png" alt="">
             <h5 class="font-weight-bolder">Download App from either Google PlayStore or iOS App Store</h5>
           </div>
         </div>
         <div class="col-12 col-md-4 text-center">
           <div style="background: #399BB6;" class="p-5 border-aged">
             <img class="img-fluid mb-4" src="images/support-icon.png" alt="">
             <h5 class="font-weight-bolder text-light">Sign up as an elder or get a family member to sign up</h5>
           </div>
         </div>
         <div class="col-12 col-md-4 text-center">
           <div style="background: #DEF7FE;" class="p-5 border-aged">
             <img class="img-fluid mb-4" src="images/reminder-icon.png" alt="">
             <h5 class="font-weight-bolder">Get frequent messages and reminders from Patrick & Agatha</h5>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- END Steps Section -->


   <!-- Slider title container -->
   <div class="container mt-5">
     <div class="row justify-content-center">
       <div class="col-md-8 text-center">
         <h1 class="font-weight-bolder"><span>AgedPrompt</span> Sneak Peak</h1>
         <p class="">AgedPrompt comes with various features and functionalities, here are a few screens to keep you
           on
           your toes
           while you wait for launch.</p>
       </div>
     </div>
   </div>
   <!-- END Slider title container -->


   <!-- Swiper Section -->
   <div class="swiper-container my-5">
     <!-- Additional required wrapper -->
     <div class="swiper-wrapper">
       <!-- Slides -->
       <div class="swiper-slide text-center p-5"><img class="img-fluid" src="./images/slide-2.png" alt=""></div>
       <div class="swiper-slide text-center p-5"><img class="img-fluid" src="./images/slide-1.png" alt=""></div>
       <div class="swiper-slide text-center p-5"><img class="img-fluid" src="./images/slide-3.png" alt=""></div>
       <div class="swiper-slide text-center p-5"><img class="img-fluid" src="./images/slide-2.png" alt=""></div>
       <div class="swiper-slide text-center p-5"><img class="img-fluid" src="./images/slide-1.png" alt=""></div>
       <div class="swiper-slide text-center p-5"><img class="img-fluid" src="./images/slide-3.png" alt=""></div>
     </div>

     <!-- If we need navigation buttons -->
     <div class="swiper-button-prev"></div>
     <div class="swiper-button-next"></div>
   </div>
   <!-- END Swiper section -->

   <div class="footer">
     <div class="container">
       <div class="row">

       </div>
     </div>
   </div>

   <!--custom js-->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="assets/js/custom.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
     integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
     integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
     integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
   </script>

   <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   <script src="./script.js">
   </script>
 </body>

 </html>