<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/PPIcon.png">
    <title>Consumed world</title>

    <link rel="stylesheet" href="css/css.css">
  </head>
  <body>

    <!-- NAVBAR   -->

    <header>
      <img src="../images/logo_black.png" alt="Logo" id="Logo" onclick="window.location='../index.php'">
      <ul>
        <li> <a href="../index.php">Home</a> </li>
        <li> <a href="#">Health</a> <ul>
          <li> <a href="../health/findings.html">Findings</a> </li>
          <li> <a href="../health/bmi.html">BMI</a> </li>
          <li> <a href="../health/lifestyle.html">Lifestyle</a> </li>
          <li> <a href="../health/diseases.html">Diseases</a> </li>
          <li> <a href="../health/healthy_life.html">Healthy life</a> </li>
          <li> <a href="../health/air_pollution.html">Air pollution</a> </li>
          <li> <a href="../health/DataCleaning.html">Data cleaning</a> </li>
        </ul> </li>
        <li> <a href="#">Coming soon</a>
          <ul>
            <li> <a href="#">Consumption</a> </li>
            <li> <a href="#">Production</a> </li>
            <li> <a href="#">Wealth</a> </li>
            <li> <a href="#">Going green</a> </li>
          </ul>
        </li>
        <li> <a href="../index.php#Contact">Contact</a> </li>
      </ul>
    </header>

    <!--  LANDING IMAGE  -->

    <div class="HomeSale">
      <div class="Awesomeness">
        <h1>Let data guide you</h1>
        <a href="#Contact">Let's get in touch</a>
      </div>
    </div>


    <!--  GIVES THE LITTLE SLIDE ON THE BOTTOM OF THE LANDING IMAGE  -->

    <div class="custom-shape-divider-bottom-1652709788">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
    </svg>
</div>



    <!--  SHORT DESCRIPTION OF WHAT THIS WEBSITE IS ABOUT  -->

    <div class="Description">
      <h4>This is a portfolio project in which I attempt to get a better general view of the trends around our consumption (as individuals) on a global scale.</h4>
      <p class="Text" id="text1">In this project, I analyze different sectors such as consumption, production, health, wealth, and countries evolving towards a 'greener economy'.</p>
      <p class="Text" id="text2">Since this project is impressive in size and the world data is incomplete, I begin with analyzing data around the health sector and Europe.</p>
      <p class="Text" id="text3">In the future, I will add the other sectors and their relationships between one another later on.</p>
    </div>

    <div class="ExtraWord">
      <p>If you're interested in having more details, or seeing more visuals. Please contact me,</p>
      <p> so I can share with you my PowerBI reports or data sheets.</p>
    </div>


    <!--  CONTACT FORM  -->

    <div class="Contact" id="Contact">
      <div class="containerr">
      <div class="FormBox">
          <form method="post">
              <h2 id="h2">Contact me</h2>
              <div class="InputBox">
                  <input type="text" name="name" required="required">
                  <span class="spann">Name</span>
              </div>
              <div class="InputBox">
                  <input type="email" name="email" required="required">
                  <span class="spann">Email</span>
              </div>
              <div class="InputBox">
                  <textarea name="message" required="required"></textarea>
                  <span class="spann">Your message</span>
              </div>
              <div class="InputBox" id="Submit">
                  <input type="submit" id="submittt" value="Send">
              </div>
              <?php
                if(!empty($_POST))
                {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $message = $_POST["message"];
                    $subject = "Contact";
                    $toEmail = "alexis.ruessmann@gmail.com";

                    $mailHeaders = "From: " . $name . "<". $email .">\r\n";

                    if (mail($toEmail, $subject, $message, $mailHeaders)) {
                        echo "<alert id='success'> Thank you for your message, <br><br> we will reach back as soon as possible! </alert>";
                    }
              else {
                        echo "<alert id='failed'> Message could not be sent, <br><br> try again and otherwise do not worry<br><br> I am working on it! </alert>";
                    }
                }
              ?>

          </form>
      </div>
      </div>
    </div>



  </body>
</html>
