 <?php
$email ="";
if(isset($_POST['submit']))
{
  //mysql://b8d3761368cf86:1d475ec7@us-cdbr-east-02.cleardb.com/heroku_60bc55f710a4bfe?reconnect=true
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!--custom css-->
    <link rel="stylesheet" href="style.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    
    <title>AgedPrompt</title>
  </head>
  <body>

  <!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="images/group_11.png" alt="aged-prompt logo"/></a>
</nav>
<section id="info-section">
  <div class="container">
   <div class="row">
    <div class="col-md-6 first-col">
     <h1>Lonely shouldn’t come with Age </h1>
     <p>AgedPrompt is an app that tackles lonliness in old people by calling and chatting with 
     them regulary as well as reminding them to take their medications. It does this through an AI bot. </p>
     <p>Register for self or register for a loved one</p>
     <p>Track and set reminders for medications</p>
     <p>Chat away worries and loniless our with resident bots
       <span class="support-team">Agatha and Patrick</span>  </p>

        <form method="POST">
          <input type="email" name="email" placeholder="Email">
          <input type="submit" name="submit" value="Subscribe">
       </form>
    </div>
  

    <div class="col-md-6 second-col">
      <img src="images/group_10.png" alt="old couple">
    </div>

    </div>
  </div>

  </section>
  
  <!--card section-->
  <section id="card-section">
  <div class="container">
    <div class="row">

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
           <img src="" alt="download app from playstore image">
          <p class="card-text text-center">Download App from either Google PlayStore or iOS App Store</p>
        </div>
       </div>
    </div>

    <div class="col-md-4">
      <div class="card special-card">
        <div class="card-body">
           <img src="" alt="family member image">
          <p class="card-text text-center">Sign up as an elder or get a family member to sign up</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
     <div class="card">
      <div class="card-body">
           <img src="" alt="support team image">
          <p class="card-text text-center">Get frequent messages and reminders from Patrick & Agatha </p>
        </div>
      </div>
    </div>

  </div>
 </div>
  </section>

  <!--signup section-->
  <section id="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/oldman.png" alt="old man picture">
        </div>

        <div class="col-md-6 second-col">
          <h2>Register for self or register for the elderly.</h2>
          <p>Registration on the AgedPrompt comes in two ways, registering for the an elderly one or registering for self. This enables effective set up espiecially for those that arent technologically oriented.</p>
         <button type="button" class="btn">Get Started <span><i class="fas fa-arrow-right"></i></span></button>
        </div>

      </div>
    </div>
  </section>


<!--mediaction section-->
<section id="medication-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 first-col">
          <h2>Track medications and exercise routines with Agatha.</h2>
          <p>Our AI consultant Agatha tracks, monitor and reminds the elder of the certain medications and exercise routines to aid in improving physical health.</p>
          <button type="button" class="btn">Get Started <span><i class="fas fa-arrow-right"></i></span></button>
        </div>

        <div class="col-md-6">
          <img src="images/oldwoman.png" alt="old man picture">
        </div> 

      </div>
    </div>
  </section>

  <!--contact loved ones section-->
<section id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/oldman.png" alt="old man picture">
        </div>

        <div class="col-md-6 second-col">
          <h2>Contact registered loved ones with 1 click.</h2>
          <p>Users can have multiple emergency contacts which can be easily accessed and contacted in a click either by voice call or SMS. Contacts can be notified if medications and exercise routines are not being done regularlyUsers can have multiple emergency contacts which can be easily accessed and contacted in a click either by voice call or SMS. Contacts can be notified if medications and exercise routines are not being done regularly</p>
         <button type="button" class="btn">Get Started <span><i class="fas fa-arrow-right"></i></span></button>
        </div>
      
      </div>
    </div>
  </section>

  <!--mental checkup section-->
<section id="checkup-section">
    <div class="container">
      <div class="row">

      <div class="col-md-6 first-col">
          <h2>Maintain mental health with  Patrick.</h2>
          <p>Patrick constantly maintains conversations and through voice and text to help alleviate loneliness enabling mental stability in users.</p>
         <button type="button" class="btn">Get Started <span><i class="fas fa-arrow-right"></i></span></button>
        </div>

        <div class="col-md-6">
          <img src="images/oldwoman.png" alt="old man picture">
        </div> 
      </div>
    </div>
  </section>

<!--coming out soon section-->
 <section>
    <div class="container">
      <h2 class="text-center">AgedPrompt will be coming to devices soon</h2>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <p>Sign up to join the waitlist</p>
          <form method="POST">
          <input type="email" name="email" placeholder="Email">

          <input type="submit" name="submit" value="Subscribe">
       </form>
        </div>
        <div class="col-md-4">
        <img src="images/couple.png" alt="old couple images">
        </div>
      </div>
    </div>
 </section>
   

 

   
   

   

    <!--custom js-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>