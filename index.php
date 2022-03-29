<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $mysubject = FILTER_var($_POST["subject"],FILTER_SANITIZE_STRING);
     $mymail    = FILTER_var($_POST["mail"],FILTER_SANITIZE_EMAIL);
     $mymsg     = FILTER_var($_POST["msg"],FILTER_SANITIZE_STRING);

     $formerrors = array();
      if(strlen($mymsg) < 10){
         $formerrors[]="The text can't be less than 10 characters";
     }
         if(strlen($mysubject) < 3){
             $formerrors[]="The subject can't be less than 3 characters";
         }
     

     $myemail = "khaledbibo707@gmail.com";
     $header  = $mymail;
     $thesubject = $mysubject;
     $themsg = $mymsg;

     if(empty($formerrors)){

        require 'phpmailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'khaledbibo707@gmail.com';                 // SMTP username
            $mail->Password = '32002800';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom($mymail);
            $mail->addAddress('khaledbibo707@gmail.com');     // Add a recipient
            $mail->addReplyTo($mymail);

            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'The subject is' . $mysubject;
            $mail->Body    = $themsg;
            //$mail->AltBody = '';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo '<div class="alert alert-success" role="alert">The Message has been sent</div>';
            }
         /*mail($myemail,$thesubject,$themsg,$header);
         $mysubject = "";
         $mymail = "";
         $mymsg = "";*/

         $success = '<div class="alert alert-success" role="alert">The Message has been sent</div>';
     }
 }
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <!-- The above 3 meta tags *must* come first in the head -->
            <meta name="description" content="Hotel"/>
            <!-- tab title -->
            <title>22 Hotel</title>
            <!-- tab fav Icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="favicon/16x16.png">
            <!-- Bootstrap plug in css file -->
            <link href="Css/bootstrap.css" rel="stylesheet" />
            <!-- font awesome plug in css file -->
            <link href="Css/font-awesome.min.css" rel="stylesheet"/>
            <!-- Google font -->
            <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"/>
            <!-- the main Css style file -->
            <link href="Css/a.css" rel="stylesheet"/> 
            <!--
            The next HTML5 shiv and Respond js files for IE8 support of HTML5 elements
            and media queries
            -->
            <script src="js/html5shiv.min.js"></script>
            <script src="js/respond.min.js"></script>
        </head>
        <body>
            
           <header>
               
               <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">22 Hotel</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                          
                          <li ><a href="first.html">First <span class="sr-only"></span></a></li>
                          
                          <li ><a href="second.html">Second <span class="sr-only"></span></a></li>
                          
                          <li ><a href="thierd.html">Thierd <span class="sr-only"></span></a></li>
                        
                      </ul>
                      <form class="navbar-form navbar-left">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                      </form>
                   
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
               
               
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner first-inner" role="listbox">
                    <div class="item active">
                      <img src="Images/Home1.jpg" alt="1">
                      <div class="carousel-caption  first-cc">
                        <h1>Welcome Landrick A Stunning Hotel</h1>
                          <p class="lead">
                              lorem ipsum dolor sit amet , ea doming until
                              epicuri inudiabit nam ,te usu virtute placerat
                              pure brute disputando cu est.
                          </p>
                          
                          <button type="button" class="btn btn-primary">Book Now</button>
                      </div>
                    </div>
                    <div class="item">
                      <img src="Images/Home2.jpg" alt="2">
                      <div class="carousel-caption first-cc">
                        <h1>Enjoy The World of Relaxation</h1>
                          <p class="lead">
                              lorem ipsum dolor sit amet , ea doming until
                              epicuri inudiabit nam ,te usu virtute placerat
                              pure brute disputando cu est.
                          </p>
                          
                          <button type="button" class="btn btn-primary">Book Now</button>
                      </div>
                    </div>
                    <div class="item">
                      <img src="Images/Home3.jpg" alt="3">
                      <div class="carousel-caption  first-cc">
                        <h1>Enjoy Better Holidays With Landrick Resort</h1>
                          <p class="lead">
                              lorem ipsum dolor sit amet , ea doming until
                              epicuri inudiabit nam ,te usu virtute placerat
                              pure brute disputando cu est.
                          </p>
                          
                          <button type="button" class="btn btn-primary">Book Now</button>
                      </div> <!-- end carousel-caption class -->
                    </div> <!-- end item class -->
                    
                   </div>
               </div> <!-- end carousel slide -->

               
           </header>
            
            <!-- start section comming soon -->
           <section class="soon">
               <div class="container">
                   <h2>Coming soon !</h2>
                   <div class="row">
                       <div class="time col-md-3 col-xs-6">
                           <div class="day">
                               <span class="time-out" id="day"></span>
                               <p>Day</p>
                           </div>
                       </div>
                       
                       <div class="time col-md-3 col-xs-6">
                           <div class="Hour">
                               <span class="time-out" id="hour"></span>
                               <p>Hour</p>
                           </div>
                       </div>
                       
                       <div class="time col-md-3 col-xs-6">
                           <div class="minute">
                               <span class="time-out" id="minute"></span>
                               <p>Minute</p>
                           </div>
                       </div>
                       
                       <div class="time col-md-3 col-xs-6">
                           <div class="second">
                               <span class="time-out" id="second"></span>
                               <p>Second</p>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- end section coming soon -->
            
            <!-- start view section -->
            <section class="view">
                <div class="container">
                    <h2>Rooms</h2>
                    
                    <p class="lead">
                    lorem ipsum dolor sit amet , ea doming until
                    epicuri inudiabit nam ,te usu virtute placerat
                    pure brute disputando cu est.
                    </p>
                    <div class="row">
                        <div class="rom col-md-4 col-xs-12">
                            <div class="img-rom  one">
                                
                                <div class="infoo">
                                    <h4>Regular Room</h4>
                                    <span>1 Bed</span>
                                    
                                    <p>Reant <span>$ 100</span>/night</p>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="rom col-md-4 col-xs-12">
                            <div class="img-rom  two">
                                <div class="infoo">
                                    <h4>Regular Big Room</h4>
                                    <span>2 Bed</span>
                                    
                                    <p>Reant <span>$ 500</span>/night</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="rom col-md-4 col-xs-12">
                            <div class="img-rom  three">
                                <div class="infoo">
                                    <h4>Family Room</h4>
                                    <span>6 Bed</span>
                                    
                                    <p>Reant <span>$ 1000</span>/night</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="rom col-md-4 col-xs-12">
                            <div class="img-rom four">
                                <div class="infoo">
                                    <h4>Deluxe Room</h4>
                                    <span>4 Bed</span>
                                    
                                    <p>Reant <span>$ 1500</span>/night</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="rom col-md-4 col-xs-12">
                            <div class="img-rom  five">
                                <div class="infoo">
                                    <h4>Deluxe Big Room</h4>
                                    <span> 6 Bed</span>
                                    
                                    <p>Reant <span>$ 2000</span>/night</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="rom col-md-4 col-xs-12">
                            <div class="img-rom  six">
                                <div class="infoo">
                                    <h4>Super Deluxe Room</h4>
                                    <span>8 Bed</span>
                                    
                                    <p>Reant <span>$ 2500</span>/night</p>
                                </div>
                            </div>
                        </div>
                        
                       
                        <button type="button" class="btn btn-primary">See More</button>
                    </div>
                </div>
            </section>
            <!-- end view section -->
            
            <!-- start fixed section -->
            <section class="fixed">
                <h2>Fixed Background</h2>
                <p class="lead">
                    lorem ipsum dolor sit amet , ea doming until
                    epicuri inudiabit nam ,te usu virtute placerat
                    pure brute disputando cu est.
                </p>
            </section>
            <!-- end fixed section -->
            
            <!-- start services section -->
            <section class="services">
                <h2>Services</h2>
                <p class="lead">
                    lorem ipsum dolor sit amet , ea doming until
                    epicuri inudiabit nam ,te usu virtute placerat
                    pure brute disputando cu est.
                </p>
                
                <div class="serv col-md-4 col-sx-12">
                    <img src="Images/s.png" alt="swimming">
                    <h4>Swimming Pool</h4>
                    <p>
                        lorem ipsum dolor sit amet , ea doming until
                        epicuri inudiabit nam ,te usu virtute placerat
                        pure brute disputando cu est.
                    </p>
                </div>
                
                <div class="serv col-md-4 col-sx-12">
                    <img src="Images/w.png" alt="wifi">
                    <h4>Free WIFI</h4>
                    <p>
                        lorem ipsum dolor sit amet , ea doming until
                        epicuri inudiabit nam ,te usu virtute placerat
                        pure brute disputando cu est.
                    </p>
                </div>
                
                <div class="serv col-md-4 col-sx-12">
                    <img src="Images/f.png" alt="fitness">
                    <h4>Spa &amp; Fitness</h4>
                    <p>
                        lorem ipsum dolor sit amet , ea doming until
                        epicuri inudiabit nam ,te usu virtute placerat
                        pure brute disputando cu est.
                    </p>
                </div>
            </section>
            <!-- end services section -->
            
            <!-- start golden section -->
            <section class="golden">
                
                <h2>The Golden Card</h2>
                <p class="lead">
                    lorem ipsum dolor sit amet , ea doming until
                    epicuri inudiabit nam ,te usu virtute placerat
                    pure brute disputando cu est.
                </p>
                
                <div class="card">
                    <div class="front">
                        <span>Really Gold</span>
                        <p>
                           Lorem ipsum dolor sit amet, te usu virtute placerat
                           pure brute disputando cu est.
                        </p>
                        <button type="button" class="btn btn-primary">Gold</button>
                    </div>
                    
                    <div class="back">
                        <span>Click Here !</span>
                        <p>
                           Lorem ipsum dolor sit amet, te usu virtute placerat
                           pure brute disputando cu est.
                        </p>
                    </div>
                </div>
                
            </section>
            <!-- end golden section -->
            
            <!-- start slider div -->
            <div class="slider">
                
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators  dots">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                      
                    <div class="item active">
                      <img class="slider-img img-circle" src="Images/p1.jpg" alt="..."/>
                      <div class="carousel-caption slider-p">
                          <h4>Harry</h4>
                        <p>
                            lorem ipsum dolor sit amet , ea doming until
                            epicuri inudiabit nam ,te usu virtute placerat
                            pure brute disputando cu est,te usu virtute placerat
                            pure brute disputando cu est.
                        </p>
                      </div>
                    </div>
                      
                    <div class="item">
                      <img class="slider-img img-circle" src="Images/p2.jpg" alt="..."/>
                      <div class="carousel-caption slider-p">
                          <h4>Potter</h4>
                        <p>
                            lorem ipsum dolor sit amet , ea doming until
                            epicuri inudiabit nam ,te usu virtute placerat
                            pure brute disputando cu est,te usu virtute placerat
                            pure brute disputando cu est.
                        </p>
                      </div>
                    </div>
                      
                    <div class="item">
                      <img class="slider-img img-circle" src="Images/p3.jpg" alt="..."/>
                      <div class="carousel-caption slider-p">
                          <h4>Manar</h4>
                        <p>
                            lorem ipsum dolor sit amet , ea doming until
                            epicuri inudiabit nam ,te usu virtute placerat
                            pure brute disputando cu est,te usu virtute placerat
                            pure brute disputando cu est.
                        </p>
                      </div>
                    </div>
                      
                    <div class="item">
                      <img class="slider-img img-circle" src="Images/p4.jpg" alt="..."/>
                      <div class="carousel-caption slider-p">
                          <h4>Voldmord</h4>
                        <p>
                            lorem ipsum dolor sit amet , ea doming until
                            epicuri inudiabit nam ,te usu virtute placerat
                            pure brute disputando cu est,te usu virtute placerat
                            pure brute disputando cu est.
                        </p>
                      </div>
                    </div>
                    
                  </div> <!-- end carousel-inner div -->

                </div> <!-- end carousel slide div -->
                
            </div>
            <!-- end slider div -->
            
            <!-- start map div -->
            <div class="map">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 iframe-part">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d13645.90857369731!2d29.9483203!3d31.2352121!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x14f5c4e7300a9fb5%3A0xef405f1f267bd301!2z2LTYp9i32KYg2LPYqtin2YbZhNmK4oCt!3m2!1d31.234935099999998!2d29.9489383!5e0!3m2!1sar!2seg!4v1575671498981!5m2!1sar!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        
                        <div class="col-md-3 form-part">
                            <h4>Contact us !</h4>
                            <div class="error">
                                <?php
                                  if(!empty($formerrors)){
                                      foreach($formerrors as $error){
                                          echo $error ;
                                      }
                                  } 
                                ?>
                            </div>
                            <?php if(isset($success)){echo $success;} ?>
                            <form class="map-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <div>
                                   <input class="map-input" type="text" name="subject" required placeholder="Your Subject"/>
                                </div>
                                
                                <div>
                                   <input class="map-input" type="email" name="mail" required placeholder="@mail.com"/>
                                </div>
                                <textarea name="msg" required placeholder="Your text here !"></textarea>
                                <input type="submit" class="btn btn-primary" value="send"/>
                                  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end map div -->
            
            <!-- start footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="foot col-md-3">
                            <h4>22 Hotel</h4>
                            <p>
                                lorem ipsum dolor sit amet , ea doming until
                            epicuri inudiabit nam ,te usu virtute placerat
                            pure brute disputando cu est,te usu virtute placerat
                            pure brute disputando cu est.
                            </p>
                           
                        </div>
                        
                         <div class="foot col-md-3">
                             <h4 class="link">Links</h4>
                             <ul>
                                 <li>Bebo</li>
                                 <li>Lolo</li>
                                 <li>Stech</li>
                                 <li>Ay 7agah</li>
                                 <li>Orange</li>
                                 <li>Egg</li>
                             </ul>
                        </div>
                        
                         <div class="foot col-md-3">
                             <h4 class="link">Links</h4>
                             <ul>
                                 <li>Home</li>
                                 <li>Download</li>
                                 <li>Download</li>
                                 <li>Dwonload</li> 
                             </ul>
                        </div>
                        
                        
                         <div class="foot col-md-3">
                             <h4>Subscribe</h4>
                             <p>
                                 lorem ipsum dolor sit amet , ea doming until
                            epicuri inudiabit nam ,te usu virtute placerat
                            pure brute disputando cu est,
                             </p>
                             <button type="button" class="btn btn-primary">Subscribe</button>
                        </div>
                        
                        <div class="copyright col-md-12">&copy; 2019 by Khaled Suliman</div>
                        
                    </div> <!-- end row class -->
                </div>
            </footer>
            
            <script src="js/jquery-3.2.1.min.js"></script> <!-- JQuery js file -->
            <script src="js/bootstrap.min.js"></script>  <!-- Bootstrap js file -->
            <script src="js/a.js"></script> <!-- the main Java Script file -->
        </body>
    </html>