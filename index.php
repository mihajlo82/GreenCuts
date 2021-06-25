 <?php
 error_reporting(0);
$errorInfo = '';
$infoMail = '';

    if(isset($_POST['btn'])){

        $forSend = false;
        
        $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
        $subject = htmlspecialchars(stripslashes(trim($_POST['number'])));
        $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
        $msg = htmlspecialchars(stripslashes(trim($_POST['message'])));
        
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $subject = filter_var($subject, FILTER_SANITIZE_STRING);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $msg = filter_var($msg, FILTER_SANITIZE_STRING);
        
        if(!empty($name)){
            if(!empty($subject)){
                if(empty(!$email)){
                        if(!empty($msg)){
                            $forSend = true;
                        }else{
                            $errorInfo = 'Message field must not have be empty';
                        }
                }else{
                     $errorInfo = 'Email field must not have be empty';
                     }
            }else{
                $errorInfo = 'Subject field must not have be empty';
                 }
        }else{
            $errorInfo = 'Name field must not have be empty';
             }
    
                                             
     if($forSend){
            $to = 'dimitricmihajlo995@gmail.com'; 
            $body = " <b>Ime</b>: $name\n <b>Naslov</b>: $subject\n <b>E-mail</b>: $email\n <b>Poruka</b>:\n $msg";
      
            if(mail($to, $subject, $body)){
                $infoMail = '<p style="color: green;">Poruka uspjesno poslana</p>';
            }else{
                $infoMail ='<p style="color: red;">Greska, molimo pokusajte ponovo</p>';
               }
        
    }else{
          $infoMail ='<p style="color: red;">Molimo popunite sva polja!</p>';
        }
    }
    ?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Cuts Banja Luka | Odrzavanje zelenila</title>

    <link rel="shortcut icon"  href="images/image3.jpeg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="fonts/Caveat-VariableFont_wght.ttf">
    <link rel="stylesheet" href="fonts/static/Caveat-Medium.ttf">
    <link rel="stylesheet" href="fonts/static/Caveat-Regular.ttf"> -->


    <!-- css -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/service.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/preheader.css">
</head>
<body>


    <div class="loader">
        <img src="images/cool-load.gif" alt="ucitavanje...">
    </div>


    <!-- hamburger menu -->
        <nav class="hamb1-menu-wrapper">
            <div class="first-sec-hamb1">
               <img class="close-button" src="images/icons8-close-window-48.png" alt="dugme zatvori">
            </div>
                  
            <div class="hamb1-menu-header">
                 <a class="inner-home-btn" >Pocetna</a>
                 <a class="inner-about-btn" >O nama</a>
                 <a class="inner-service-btn" >Usluga</a>
                 <a class="inner-gallery-btn" >Galerija</a>
                 <a class="inner-contact-btn" >Kontakt</a>
            </div>
        </nav>
    <!-- hamburger menu -->

    <!-- site start section BEGIN -->
    <header id="home" class="site-start">
        <header class="header-site-start">
            <div class="hamb-menu-wrapper">
                <img class="hambMenu" src="images/icons8-menu-48.png" alt="hamburger meni">
            </div>
            
            <nav class="menu-wrapper">
                    <div class="menu-header">
                        <a href="#home">Pocetna</a>
                        <a href="#about">O nama</a>
                        <a href="#service">Usluga</a>
                        <a href="#gallery">Galerija</a>
                        <a href="#contact">Kontakt</a>
                    </div>
            </nav>

            <div class="logo-wrapper">
                <div class="logo-header"></div>
            </div>
        </header>

        <div class="start-site-content-wrapper">
            
            <div class="site-start-content">
                <h1>Green Cuts</h1>
                <p>Odrzavanje zelenila</p>
                <button class="btn"><a href="#about">Saznaj Vise</a></button>
            </div>
            
        </div>
    </header>
     <!-- site start section END -->

     <!-- about section BEGIN -->
     <section id="about" class="about">
         <!-- subheader of section -->
        <div class="about-header">
              <div class="title-about">
                  <div class="info info1">
                      <img class="img-title-sect-left" src="images/t-left.png" alt="lijevi dio">
                  </div>
                  <div class="info info2">
                      <h2>O nama</h2>
                  </div>
                  <div class="info info1">
                      <img class="img-title-sect-right" src="images/t-right.png" alt="desni dio ">
                  </div>
              </div>
        </div>
        <!-- subheader of section  END-->

        <div class="main-about-wrapper">
            <div class="main-about">
                <div class="img-main-left"></div>

                <div class="text-right-about">
                    <div class="inner-about-text">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, optio! Enim vel, facere natus, adipisicing elit. Doloremque, optio! Enim vel, facere natus, adipisicing elit. Doloremque, optio! Enim vel, facere natus, adipisicing elit. Doloremque, optio! Enim vel, facere natus, repudiandae placeat delectus alias esse ea, iure quia provident ullam quos consequatur neque dolor vero rem...</p>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <!-- ABOUT section END -->  

     <!-- SERVICE section BEGIN -->  
     <section id="service" class="services">

        <!-- HEADER SERVICE section BEGIN --> 
            <header class="service-header">
                <div class="title-block-service">
                    <div class="if-padd  info-serv">
                        <img src="images/rsmd1111.png" alt="lijeva slika naslov usluga bijela">
                    </div>
                   
                    <div class="info-serv inf-srv2"> <h2>Usluga</h2></div>
                   
                    <div class="if-padd  info-serv ">
                        <img src="images/rsmd1222.png" alt="desna slika naslov usluga bijela">
                    </div>
                </div>
            </header>
        <!-- HEADER SERVICE section END --> 
        
            <div class="service-main-wrapper">
                <div class="service-main">
                    <div class="spacer-service"></div>
                    
                    <!-- items service -->
                    <div class="service-items">

                        <!-- first item -->
                        <div class="service-item">
                            <div class="item-logo-wrapper">
                                <div class="service-logo">
                                     <img class="service-logo-img" src="images/icons8-work-40.png" alt="posao logo">
                                </div>
                            </div>

                            <div class="item-service-title">
                                <h3>Kvalitet</h3>
                            </div>

                            <div class="item-service-description">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <!-- first item END -->


                         <!-- second item -->
                         <div class="service-item">
                            <div class="item-logo-wrapper">
                                <div class="service-logo">
                                     <img class="service-logo-img" src="images/icons8-clock-48.png" alt="vrijeme logo">
                                </div>
                            </div>

                            <div class="item-service-title">
                                <h3>Brzina</h3>
                            </div>

                            <div class="item-service-description">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <!-- second item END -->

                         <!-- third service item -->
                         <div class="service-item">
                            <div class="item-logo-wrapper">
                                <div class="service-logo">
                                     <img class="service-logo-img" src="images/icons8-muscle-50.png" alt="efikasnost logo">
                                </div>
                            </div>

                            <div class="item-service-title">
                                <h3>Efikasnost</h3>
                            </div>

                            <div class="item-service-description">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <!-- third item END -->

                        <!-- fourth first item -->
                        <div class="service-item">
                            <div class="item-logo-wrapper">
                                <div class="service-logo">
                                     <img class="service-logo-img" src="images/icons8-exchange-dollar-48.png" alt="povoljno logo">
                                </div>
                            </div>

                            <div class="item-service-title">
                                <h3>Povoljno</h3>
                            </div>

                            <div class="item-service-description">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <!-- fourth item END -->
                    </div>

                    <div class="spacer-service"></div>
                </div>
            </div>
     </section>
     <!-- SERVICE section END -->
    
     <!-- GALLERY section begin -->
     <section id="gallery" class="gallery">
         <!-- subheader of section  about-header gallery-info-about -->
         <div class=" gallery-header">
            <div class="gallery-title">
                <div class="gallery-info  gallery-title-left">
                    <img class="gallery-left" src="images/t-left.png" alt="lijeva crta naslov galerija">
                </div>
                <div class="gallery-info-title">
                    <h2>Galerija</h2>
                </div>
                <div class="gallery-info  gallery-title-right">
                    <img class="gallery-right" src="images/t-right.png" alt="desna crta naslov galerija">
                </div>
            </div>
         </div>
      <!-- subheader of section  END-->

      <main class="gallery-main-wrapper">
           <div class="gallery-main-spacer"></div>
           <div class="gallery-main">

                <!-- photo1 -->
                <div class="photo1 photo"></div>
                <div class="photo1 photo2"></div>
                <div class="photo1 photo3"></div>
                <div class="photo1 photo4"></div>
                <div class="photo1 photo5"></div>
                <div class="photo1 photo6"></div>
                <div class="photo1 photo7"></div>
                <div class="photo1 photo8"></div>

           </div>
           <div class="gallery-main-spacer"></div>
      </main>
     </section>
     <!-- GALLERY section END -->

     <!-- CONTACT section BEGIN -->
     <section id="contact" class="contact-wrapper">
         <!-- subheader of section -->
         <div class="contact-head">
            <div class="title-contact">
                <div class="contact-info ">
                    <img  class="contact-left-title" src="images/t-left.png" alt="lijeva crta naslov galerija">
                </div>
                <div class="contact-info-title ">
                    <h2>Kontakt</h2>
                </div>
                <div class="contact-info">
                    <img class="contact-right-title" src="images/t-right.png" alt="desna crta naslov galerija">
                </div>
            </div>
         </div>
      <!-- subheader of section  END-->

      <main class="contact-main">
          <div class="inner-contact-main">
                <div class="contact-inner-left">
                    <!-- width="600" height="450" -->
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11322.625925123615!2d17.2002111!3d44.808189!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c43b91d7b1e6295!2sGreen%20cuts!5e0!3m2!1sen!2sba!4v1616083816544!5m2!1sen!2sba"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="contact-inner-right">
                   <div class="form-wrapper">
                          <!-- echo htmlentities($_SERVER['PHP_SELF']); -->
                        <form class="form" action="" method="POST">
                            <input class="inps" type="text" name="name" placeholder="Ime" required>
                            <input class="inps" type="text" name="number" placeholder="Naslov" required>
                            <input  class="inps" type="email" name="email" placeholder="E-mail" required>
                            <textarea class="inps-area" type="text" name="message" placeholder="Ostavite poruku..." required></textarea>
                            <button name="btn" class="send-btn" type="submit">Posalji</button>
                        </form>
                       
                        <p class="displayInfo">
                            <!-- <?php
                                if($errorInfo || $infoMail){
                                    echo $errorInfo . "</br>";
                                    echo $infoMail;   
                                }
                            ?> -->
                       </p>
                    </div>
                </div>
          </div>
      </main>
    </section>
     <!-- CONTACT section END -->

      <!-- FOOTER section BEGIN -->
      <footer class="footer">
          <div class="footer-spaces"></div>
          <div class="footer-right">
              <p> &copy; <span class="copir">Copyright</span> <span class="date-holder"></span> <span class="footer-end"> | Sva prava zadrzava Green Cuts </span></p>
          </div>
          <div class="footer-social">
              <div class="insta-foot soc-footer">
                  <img class="soc-icon-logo soc-insta" src="images/icons8-instagram-50.png" alt="instagram ikona">
              </div>
              <div class="fb-foot soc-footer">
                <img class="soc-icon-logo" src="images/icons8-facebook-40.png" alt="fb ikona">
              </div>
              <div class="phone-foot soc-footer">
                <img class="soc-icon-logo" src="images/icons8-phone-40.png" alt="telefon ikona">
                <span class="num-phone">065444333</span>
              </div>
          </div>
      </footer>
       <!-- FOOTER section END -->
       <script src="js/footer.js"></script>
</body>
</html>