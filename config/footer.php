<?php
 
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $databasename = "etroncybersolutions";
 $conn = new mysqli($servername,
   $username, $password, $databasename);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

if($_GET["newsletter_submit"]){
    $email = $_GET["email"];

$res = time();
   echo($res . "<br>");
   echo $time = (date("Y-m-d",$res));

$sql = "insert into News_Letter(Emails,Time)values('$email','$time')"; 

if ($conn->query($sql) === TRUE) {
	echo "Votes Recorded: Yes = ".$vote_yes." NoTime = ".$time;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

}
 



?>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Experience security and peace of mind with our comprehensive security services.</p>
            <form action="config/newsletter" method="post">
              <input type="email" name="email"><input type="submit" name="newsletter_submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Etron Cyber Solutions</h3>
            <p>
               <br>
              Scarborough Ontario <br><br>
              <strong>Phone:</strong> 416 418 3926<br>
              <strong>Email:</strong> etroncybersolution@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href=".">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href=".">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href=".">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Terms-Condition">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Privacy-Policy">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Network-security">Network security</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Website-security">Website security</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Security-auditing">Security auditing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Employee-awareness">Employee Awareness Training program</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Email-social-engineering">Email social engineering</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Connect with us on social media!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Etron Cyber Solutions</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->