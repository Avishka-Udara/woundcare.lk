<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
    --->
    <!--- bootsrap 5 --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--JQuery-->  
    <script type="text/javascript" src="JS\jquery-3.3.1.min.js"></script>  
    <!--Floating WhatsApp css-->  
    <link rel="stylesheet" href="CSS\floating-wpp.min.css">
    <!--custome css-->
    <link rel="stylesheet" href="CSS\style.css">  
    <!--Floating WhatsApp javascript-->  
    <script type="text/javascript" src="JS\floating-wpp.min.js"></script>
    <!--custome js-->
    <link rel="stylesheet" href="JS\script.js">  
    

    <title>woundcare srilanka</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <svg id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 705.17 155.88" style="height: 40px;"><defs><style>.cls-1{fill:#414142;}.cls-2{fill:#2faadf;}</style></defs><path class="cls-1" d="M64.09,130.6l-14-73.44H64.14c2.68,17.33,6.21,41.37,7.27,55.09h.11c2.19-14.19,7.42-39.11,10.35-55.09h11.7c2.75,14.44,8.06,40.42,10,54.41h.22c1.61-15.4,6-40.42,7.89-54.41h13.09l-15,73.44h-13C94,115.28,89.2,92.94,87.24,78.78H87c-2.08,14.41-7.1,37.69-10,51.82Z"/><path class="cls-1" d="M266,57.16v50.53c0,6,1.49,13.16,9.58,13.16,7.82,0,9.5-6,9.5-13.08V57.16h13.17V108c0,13.18-5.15,23.9-22.89,23.9-17.46,0-22.55-10.08-22.55-23.91V57.16Z"/><path class="cls-1" d="M309.79,130.6V57.16h14.94c15.18,40.58,18.1,48.33,19,51.93h.11c-.62-8.83-.65-19.64-.65-31.67V57.16h11.75V130.6H340.6c-15.68-43.27-18.47-51.07-19.42-54.44h-.11c.54,9,.56,19.86.56,33V130.6Z"/><path class="cls-1" d="M367.64,57.16h19.14c18.89,0,26.23,12.1,26.23,35.21,0,24.8-7,38.23-27.25,38.23H367.64Zm13.27,62.7h4.7c10.28,0,13.82-7.73,13.82-27.44,0-16.89-3.15-24.33-13.71-24.33h-4.81Z"/><path class="cls-1" d="M486.33,109.22c-.33,3.71-1.74,22.65-22.11,22.65-20.89,0-23.28-18.35-23.28-38.09C440.94,70,447.91,56,465,56c19.48,0,21,16.7,21.29,22.58h-13c-.2-2.5-.38-11.43-8.48-11.43-8.26,0-10.27,10.11-10.27,26.92,0,13.85,1.38,26.84,9.9,26.84,7.84,0,8.47-8.87,8.79-11.68Z"/><path class="cls-1" d="M507.24,112.12l-3.65,18.48H490.42l17-73.44h17.07l17.2,73.44h-13.8l-3.66-18.48Zm14.65-11.42c-2.74-14-4.93-24.33-6.09-31.34h-.31c-.9,6.76-3.22,17.8-5.93,31.34Z"/><path class="cls-1" d="M561,99.29V130.6H547.92V57.16h22.49c13.35,0,20.92,7,20.92,20.06,0,10.62-5.69,15.21-9.52,16.73,5.69,2.66,8.38,7.49,8.38,18.34v2.93a85.82,85.82,0,0,0,1,15.38H578.46c-1.07-3.36-1.27-9.18-1.27-15.5v-2.68c0-9.81-2.25-13.13-10.55-13.13Zm0-10.65h6.17c7.94,0,11-3.42,11-10.84,0-6.33-3-10-9.75-10H561Z"/><path class="cls-1" d="M637.88,98H614.31v21.32h26.46l-1.62,11.32H601.33V57.16H639V68.67H614.31V86.54h23.57Z"/><path class="cls-2" d="M167,28.18a48.63,48.63,0,0,1,5.85-2.24c.73-.22,1.49-.38,2.24-.55a53.9,53.9,0,0,1,20.64-.72,49.77,49.77,0,0,1,8.77,2.18A55.55,55.55,0,0,1,212,30a53.37,53.37,0,0,1,8.71,5.64,52,52,0,0,1,6.65,6.28,45.88,45.88,0,0,1,6.18,8.57,47.75,47.75,0,0,1,2.25,4.39,2.55,2.55,0,0,1,0,1.9c-.53,1.27-1.58,1.44-2.51,1.89a1.86,1.86,0,0,1-1.5,0l-1-.43A2.14,2.14,0,0,1,229.47,57a34.89,34.89,0,0,0-6.66-10.42,44.37,44.37,0,0,0-10.83-9,46.52,46.52,0,0,0-11.31-4.83,45.28,45.28,0,0,0-12.94-1.69,48,48,0,0,0-11.12,1.56,33.14,33.14,0,0,0-5.73,2,50,50,0,0,0-9.36,5.48,46.72,46.72,0,0,0-8.47,8.09,44,44,0,0,0-5.29,8.13,43,43,0,0,0-1.94,4.19,45.25,45.25,0,0,0-3,15.9,53.73,53.73,0,0,0,.6,7.27c.24,1.79.88,3.46,1.19,5.21.53,2.93,2.11,5.43,3.09,8.17,1.05,1.26,1.57,2.85,2.54,4.17a37.43,37.43,0,0,0,6.21,6.79,31.5,31.5,0,0,0,20.1,7.62,27.24,27.24,0,0,0,7.3-1,22.9,22.9,0,0,0,9.78-5.68c2.57-2.62,4.81-5.51,7.21-8.26a41.12,41.12,0,0,1,6.13-6,20.47,20.47,0,0,1,4.46-2.64c.89-.37,1.78-.74,2.66-1.13a3.28,3.28,0,0,1,1.6-.26c1.05.08,1.48.63,1.31,1.68a4.6,4.6,0,0,1-.57,1.42A44.64,44.64,0,0,1,213,98.59a31.73,31.73,0,0,0-3.37,4.92,8.12,8.12,0,0,0-1.24,3.9,2.14,2.14,0,0,0,2.1,2.3,4.84,4.84,0,0,0,2-.28,16.84,16.84,0,0,0,6.09-3.94c4.26-4,7.49-8.89,10.55-13.87.37-.61.69-1.25,1-1.88a16,16,0,0,1,5.69-6.34,4.55,4.55,0,0,1,1.49-.63c1.64-.37,2.54.32,2.66,2.61a9,9,0,0,1-.21,2.25,55.07,55.07,0,0,1-6,15.78,57.44,57.44,0,0,1-6.83,9.53,49.33,49.33,0,0,1-9.37,8.24,52.37,52.37,0,0,1-5.69,3.39c-2.24,1.13-4.56,2.07-6.86,3-1.06.44-2.21.67-3.29,1.05a33.76,33.76,0,0,1-5.3,1.35,53.8,53.8,0,0,1-24.24-.8A51.14,51.14,0,0,1,159.81,124a49.78,49.78,0,0,1-11.23-9,45.4,45.4,0,0,1-4.51-5.63c-1.31-1.89-2.52-3.84-3.73-5.8v0c-1.1-2.35-2.31-4.66-3.25-7.09a11.2,11.2,0,0,1-.27-1.11c-.38-1.36-.77-2.71-1.28-4a13.52,13.52,0,0,1-.3-1.8A46.91,46.91,0,0,1,134,78.29a54.78,54.78,0,0,1,1.33-12,60.44,60.44,0,0,1,3-9.24,54.69,54.69,0,0,1,6.81-11.82,56.69,56.69,0,0,1,7.84-8.4,42.22,42.22,0,0,1,4-3.15,54.56,54.56,0,0,1,5.17-3.22C163.72,29.58,165.4,28.94,167,28.18Z"/></svg>
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" a href="#About">About Us</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?lang=en" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="index.php?lang=en">English</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.php?lang=si">සිංහල</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.php?lang=ta">தமிழ்</a>
                        </li>
                    </ul>
                </li>
                <!---
                <li class="nav-item">
                    <a class="nav-link active" a href="index.php?lang=en">English</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" a href="index.php?lang=si">සිංහල</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" a href="index.php?lang=ta">தமிழ்</a>
                </li>--->
            </ul>
        </div>
        
    </div>
    </nav>

 
        <!--create header-->
        <div class="row" style="overflow: hidden;">
            <div style="overflow: hidden;">
            <div class="bg-image" 
                style="background-image: url('img/1.jpg'); background-size: 100% ; background-repeat: no-repeat; overflow: hidden;">
                <div class="col-md-12 text-center">
                    <h1 class="display-4 text-primary" style="padding-top:15%;">Welcome to the wound care !</h1>
                    <p class="lead text-secondary" style="padding-bottom:12%;">සාදරයෙන් පිළිගනිමු ! வரவவற்ப !</p>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
        <!--create header-->
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron text-center">
                    <br><br>
                    <h3 class="display-6 text-primary">Online practice based Advanced Wound management and Amputation prevention Initiative</h3>
                    <p class="lead">අන්තර් ජාලය පදනම් කරගත් තෘතීයක තුවාල ප්‍රතිකාර සහ පාද කැපීම් වැළැක්වීමේ වැඩසටහන</p>
                    <p class="lead">ஆன்லைன் நடைமுறை அடிப்படையிலான மேம்பட்ட காயம் மேலாண்மை மற்றும் ஊடுருவல் தடுப்பு முயற்சி</p>
                    <hr class="my-4">
                    
                    <div class="col-md-12">
                            <img src="img/leg.jpg" class="img-fluid">
                    </div>
                    <p class="lead mx-auto">
                        <br>
                        <p class="text-center">
                            select your language | ඔබේ භාෂාව තෝරන්න | உங்கள் மொழியை தேர்ந்தெடுக்கவும்
                        </p>
                        <div class="text-center">
                            <a class="btn btn-primary btn-lg" href="index.php?lang=en" role="button">English </a>
                            <a class="btn btn-primary btn-lg" href="index.php?lang=si" role="button">සිංහල </a>
                            <a class="btn btn-primary btn-lg" href="index.php?lang=ta" role="button">தமிழ் </a>
                        </div>
                        <br>
                    </p>
                </div>
                <hr class="my-4">
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">
                            <?php echo $lang['about-h1'] ?>    
                        </h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/about.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php echo $lang['about-1'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>
<br>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron text-center">
                    <h3 class="display-8 text-primary"><?php echo $lang['discription-2'] ?></h3>
                    <p class="lead"><?php echo $lang['discription-3'] ?></p>
                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <hr class="my-4">
    <div class="container" style="padding-top:3%;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1 class="fs-3"><?php echo $lang['title'] ?></h1>
                <p><?php echo $lang['discription'] ?></p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ratio ratio-16x9 container-md" id="About" >
                    <iframe src="<?php echo $lang['video'] ?>" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>    
    
    
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-gradient">
                <div class="jumbotron text-center">
                    <hr class="my-4">  
                    <br>
                    <h3 class="display-8 text-primary"><?php echo $lang['discription-4'] ?></h3>
                    <p class="lead"><?php echo $lang['discription-5'] ?></p>
                    <p class="lead"><?php echo $lang['discription-6'] ?></p>
                </div>
                <div class="d-flex justify-content-center">
                    <ul class="my-4">
                        <?php echo $lang['list-1'] ?>
                    </ul> 
                </div>
            </div>
        </div>
    </div>   


    <br>
    <br>
    <!--- Vision and mission -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-gradient">
              <hr>
              <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                  <div class="card-body">
                                    
                                      <h3 class="text-center display-8 text-primary">
                                          <?php echo $lang['vision'] ?>    
                                      </h3>
                                      <hr>
                                      <p class="text-center">
                                          <?php echo $lang['vision-1'] ?>
                                      </p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                  <div class="card-body">
                                      <h3 class="text-center display-8 text-primary">
                                          <?php echo $lang['aim'] ?>    
                                      </h3>
                                      <?php echo $lang['hr'] ?> 
                                      <p>
                                          <?php echo $lang['aim-1'] ?>
                                      </p>
                                  </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>

    <!--- value -->
    <div class="container">
        <div class="row">
          <div class="col-md-16 bg-gradient">
          <br>
          <br>
          <hr>
          <h1 class="text-center ">
                 <?php echo $lang['values'] ?>    
          </h1>
             <br>           
            <!--- Compassion -->
          <div class="row">
                <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="text-center display-8 text-primary">
                            <?php echo $lang['Compassion'] ?>
                        </h3>
                        <hr>
                        <p class="text-center">
                            <?php echo $lang['Compassion-1'] ?>
                        </p>
                      </div>
                    </div>
                </div>

            <!--- Dignity -->
                <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="text-center display-8 text-primary">
                            <?php echo $lang['Dignity'] ?>
                        </h3>
                        <hr>
                        <p class="text-center">
                            <?php echo $lang['Dignity-1'] ?>
                        </p>
                      </div>
                    </div>
                </div>
            <!--Justice-->
                <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="text-center display-8 text-primary">
                            <?php echo $lang['Justice'] ?>
                        </h3>
                        <hr>
                        <p class="text-center">
                            <?php echo $lang['Justice-1'] ?>
                        </p>
                      </div>
                    </div>
                </div>
            <!--Integrity-->
                <div class="col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="text-center display-8 text-primary">
                            <?php echo $lang['Integrity'] ?>
                        </h3>
                        <hr>
                        <p class="text-center">
                            <?php echo $lang['Integrity-1'] ?>
                        </p>
                      </div>
                    </div>
                </div>
            </div>
            <!--Integrity-->
          </div>
        </div>
    </div>
    <hr>


    <div id="WAButton"></div>  

    <br><br><br><br>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">

<br>
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3 text-center">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <?php echo $lang['services'] ?>
          </h6>
          <p>
            <?php echo $lang['services-1'] ?>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-4 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <?php echo $lang['Location'] ?>
          </h6>
          <p>
            <?php echo $lang['Location-1'] ?>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Spera hospitals(pvt)ltd.<br>NO49, beach road, matara</p>
          <p><a class="text-reset" href="https://www.facebook.com/woundcaresl">facebook/woundcaresl</a></p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@sperahospitals.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +94 712 52 53 54</p>
          <p><i class="fas fa-print me-3"></i> +94 41 22 38 338</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="http://www.woundcare.lk/">woundcare network</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer  --->

    <script type="text/javascript">  
        $(function () {
            $('#WAButton').floatingWhatsApp({
                phone: '+94712525354', //WhatsApp Business phone number
                headerTitle: 'Contact us on Whatsapp', //Popup Title
                popupMessage: 'Hello, how can we help you?', //Popup Message
                showPopup: true, //Enables popup display
                buttonImage: '<img src="img/whatsapp.svg" />', //Button Image
                //headerColor: 'crimson', //Custom header color
                //backgroundColor: 'crimson', //Custom background button color
                position: "right" //Position: left | right

            });
        });
    </script>  
    
</body>
</html>