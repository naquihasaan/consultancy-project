
<?php 
    $host = "localhost";
    $username = "indiawebpro08";
    $password = 'indiawebpro08';
    $db = "aadil";
    // $dsn = "mysql:host=$host;dbname=$db";
    // $conn = mysqli_connect($host, $username, $password, $db);
    // var_dump($conn);
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

            $to = $email;
            $subject = "Thank you for contacting us." ;
            $body = "<div> You are very important to us, all information received will always remain confidential. We will contact you as soon as we review your message.</div>";

            $headers = 'From: trytareeqa.com dkstudioin@gmail.com' . "\r\n" ;
            $headers .='Reply-To: '. $to . "\r\n" ;
            $headers .='X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
        


       if(!is_null($email))
        {
            $sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
            
            if($conn->query($sql) == true)
            {
                mail($to, $subject, $body,$headers);
                    echo "<script>alert('Thanks you for Contacting us');</script>";
            }
            else
            {
                echo "<script>alert('Please Try Again!!');</script>";
            }
        }
    }
   
?>

<section class="contact">
        <div class="container">
            <h6 class="text-center mt-5 mb-0 font-weight-bold text-white">Contact Us</h6>
            <p class="text-center mb-5">Feel free to contact us</p>
            <div class="row">
                <div class="col-md" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
               
                    <form method="post" action=" ">
                        <div class="form-group ">
                            <label for="Name">Name: </label>
                            <input type="text" class="form-control shadow " name="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control shadow" name="email" placeholder="Enter email" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject/Issue: </label>
                            <input type="text" class="form-control shadow" name="subject" placeholder="Enter Subject/Issue" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control shadow" name="message" rows="3" required></textarea>
                        </div>
                        <input type="submit" name="submit" class="btn btn-success my-3" value="Submit">
                        
                    </form>
                </div>
                <div class="col-md my-3" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                    <h3 class="pl-3">Contact Information</h3>
                    <div class="info-detail my-3 pl-3">
                        <p>Adress: <b>123 Street, City</b></p>
                        <p>Phone: <b>123/ 11212</b></p>
                        <p>Working Hours: <b>123 Street, City</b></p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.2574672399287!2d77.28052601440547!3d28.562030394020606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3f355d8a2f7%3A0xfb09de6f2e8596e7!2sJamia+Millia+Islamia!5e0!3m2!1sen!2sin!4v1554793217178!5m2!1sen!2sin" width="100%" height="300px" class="shadow ml-2 px-1 py-1" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

<section class="footer-content">
        <footer class="section">
            <div class="container">
                <div class="row row-30">
                    <div class="col-md-4 col-xl-5">
                        <div class="pr-xl-4 py-5">
                            <p>Mission : People feel it’s late to do something out of the box but it never is. Tareeqa aims to provide a way to change your personality, your mindset and everything in between.</p>
                            <!-- Rights-->
                            <p class="rights"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>. </span><span>All Rights Reserved.</span></p>
                        </div>
                    </div>
                    <div class="col-md-4 pb-3 pt-5">
                        <h5>Contacts</h5>
                        <dl class="contact-list">
                            <dt>Address:</dt>
                            <dd>Opp Paradise Apartment, 2nd floor on Anytime Restaurant, Swarna Jayanti Nagar, Ramghat road Aligarh 202001- India</dd>
                        </dl>
                        <dl class="contact-list">
                            <dt>email:</dt>
                            <dd><a href="mailto:#" class="text-danger">trytareeqa@gmail.com</a></dd>
                        </dl>
                        <dl class="contact-list">
                            <dt>phones:</dt>
                            <dd><a href="tel:#" class="text-danger">+91 7055559444</a> <span>or</span> <a href="tel:#" class="text-danger">+91 7417250954</a>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-md-4 pb-3 col-xl-3 pt-5">
                        <h5>Quick Links</h5>
                        <ul class="nav-list">
                            <li><a href="about.php" class="text-danger">About</a></li>
                            <li><a href="services.php" class="text-danger">Services</a></li>
                            <li><a href="gallery.php" class="text-danger">Gallery</a></li>
                            <li><a href="contact.php" class="text-danger">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <section class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md  pl-0 pr-0">
                    <div class="card bg-transparent">
                      <div class="card-body text-center">
                        <a href="#" class="font-weight-bold text-white"><i class="fab fa-facebook-square pr-2"></i> FACEBOOK</a>
                      </div>
                    </div>
                </div>
                <div class="col-md  pl-0 pr-0">
                    <div class="card bg-transparent">
                      <div class="card-body text-center">
                        <a href="#" class="font-weight-bold text-white"><i class="fab fa-instagram pr-2"></i> INSTAGRAM</a>
                      </div>
                    </div>
                </div>
                <div class="col-md  pl-0 pr-0">
                    <div class="card bg-transparent">
                      <div class="card-body text-center">
                        <a href="#" class="font-weight-bold text-white"><i class="fab fa-twitter-square pr-2"></i> TWITTER</a>
                      </div>
                    </div>
                </div>
                <div class="col-md  pl-0 pr-0">
                    <div class="card bg-transparent">
                      <div class="card-body text-center">
                        <a href="#" class="font-weight-bold text-white"><i class="fab fa-linkedin pr-2"></i> LINKEDIN</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>

</html>


