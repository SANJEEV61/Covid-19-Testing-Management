<?php include 'sendemail.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>#52 Telecom Layout, Bangalore, India</div>
        <div><i class="fas fa-envelope"></i>sanjeev06@gmail.com</div>
        <div><i class="fas fa-phone"></i>+91 9740824200</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
        <br>
       <p>Locate Us<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.4693598617487!2d77.61422401443947!3d13.069412866261514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae19d1d2f1a1b5%3A0x953e4cddaefaa1c8!2sTelecom%20Layout%2C%20Jakkuru%2C%20Bengaluru%2C%20Karnataka%20560064!5e0!3m2!1sen!2sin!4v1636015283481!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
      <br>
       
      
        <ul>
          <p>Follow Us On</p>
                <li>
                    <a href="https://www.facebook.com/sanjeev.r.583"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/sanjeev_06_"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="https://www.twitter.com/sanjeev_62"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
      </div>
     
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    


    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }

    setTime = setTimeout(function()
        {
            alert("Sorry For Our Inconvenience. Your Issue Has Been Raised And Our Authority Will Try To Solve The Issue As Early As Possible! Thank You.");
          
        } , 40000);
    </script>

  </body>
</html>