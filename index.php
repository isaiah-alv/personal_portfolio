<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Isaiah Alviola</title>

   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #e6eae6;">
   <nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/brand.png" alt="isaiah-alv" height="25px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#bio">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="projects.html">Projects</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="experience.html">Experience</a>
             </li>
          </ul>
        </div>
      </div>
    </nav>
   
   <section class="hero">
      <div class="about">
         <img src="images/brand.png" alt="isaiah-alv" height="60px"/>
         <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8"/>
          </svg>
         <h1>Isaiah Alviola</h1>
         <h3>Turning Coffee into Code.</h3>
         <p>Click below to learn more.</p>
         <button class="btn-chevron"><a href="#bio"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
         </svg></a></button>
      </div>
   </section>

   <h2>Read All About Me ☕</h2>
   <hr>
   <section class="bio" id="bio">
      <div class="bio-card-experience">
         <img src="images/portrait.png" alt="My Portrait">
         <p>Hey there! I'm a proud New Jersey native with a serious knack for all things tech. My journey kicked off with a B.S. in Computer Science at Kean University. Professionally, I have worked as a student assistant to the webmaster at Kean, where I maintained the website's functionality. I have also interned at Modo Labs, where I helped develop a mobile application. I currently work as a code coach and STEM summer camp counselor at The Coder School, where I create lesson plans and projects using Scratch and Python. In my free time I like to keep up with Formula One or Arsenal FC! On my site, you'll see a mix of some personal projects and a little bit more about what I know. So, whether you're here to collaborate or just to check out what I'm up to, welcome! 
         </p>
         <div class="social-media-icons">
            <a href="https://github.com/isaiah-alv" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/isaiahalv" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com/isaiahalviola" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
   </section>
   <div id="contact-container">
    <?php
        // Initialize variables
        $name = $email = $subject = $message = ""; 

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize and assign input values
            $name = test_input($_POST["name"] ?? 'no name');
            $email = test_input($_POST["email"] ?? 'no email');
            $subject = test_input($_POST["subject"] ?? 'no subject');
            $message = test_input($_POST["message"] ?? 'no message');

            // Email setup
            $to = 'your_email@example.com';
            $headers = "From: webmaster@example.com" . "\r\n" .
                       "Reply-To: $email" . "\r\n" .
                       "X-Mailer: PHP/" . phpversion();

            // Construct email body
            $body = "You have received a new message from your website contact form.\n\n";
            $body .= "Name: $name\n";
            $body .= "Email: $email\n";
            $body .= "Subject: $subject\n";
            $body .= "Message:\n$message";

            // Validate email and send
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if(mail($to, $subject, $body, $headers)) {
                    echo "<div id='message' style='color: green;'>Email Sent. Thank You!</div>";
                } else {
                    echo "<div id='message' style='color: red;'>Email did not go through. Try again later.</div>";
                }
            } else {
                echo "<div id='message' style='color: red;'>Invalid Email Address.</div>";
            }
        }

        // Sanitizing input
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

<div class="credentials">
    <a href="images/resume.pdf" download="Resume.pdf" class="button-link">
        <button id="downloadBtn">Resume</button>
    </a>
 
    <button id="contact" class="contact">Contact Me!</button>
</div>

    
    <p id='linkToPages'>Also check out my Professional Experience: <a href="experience">Professional Experience</a></p>


    <div id="myModal" class="modal">
        <div class="modal-content">
            <form class="cf" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="input-name" placeholder="Name" name="name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" id="input-email" placeholder=" Your Email address" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" id="input-subject" placeholder="Subject" name="subject">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <textarea class="form-control" id="input-message" placeholder="Message" name="message"></textarea>
                    </div>
                </div>
                <button type="submit" class="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<footer>
      <p>Author: Isaiah Alviola</p>
      <p>For accessibility issues with the site please email: isaiahalviola1@gmail.com</p>
      <p id="clock">Current Date: <span id="time"></span></p>
  </footer>
  
   <script src="script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
