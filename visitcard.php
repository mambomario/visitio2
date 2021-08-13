<?php  
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// echo 'PHP version: ' . phpversion();
include_once('includes/connect.php');
include_once('includes/allvisitcards.php');

$visitcard = new OneVisitcard;
$thisVisitcard = $visitcard->fetch_all($_GET['id']);

// print_r($visitcards);

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Visit.io 2 (PHP)</title>
  <meta name="description" content="Your digital presence">
  <meta name="author" content="MG">

  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- 
  <script src="https://use.fontawesome.com/8ba107f7c6.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/29cccb7046.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/font-awesome-css.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/bd704322fc.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
<header>    <h1> Visit.io 2 PHP  - <a href="index.html" target="_blank"> Visit.io 2 html </a> </h1>   </header>
<nav></nav>


	
		<div class="single_visitcard">
		<?php foreach ($thisVisitcard as $visitcard_item) { ?>			
			    <div class="visitio">
			        <div class="photo_group">
			            <div class="company_photo">
			            	<a href="<?php echo $visitcard_item['id']; ?>" target="_blank">
			                	<img class="company_photo" src="<?php echo $visitcard_item['company_photo']; ?>" alt="">
			                </a>
			            </div>
			            
			            <div class="company_photo_bottom"><img class="company_photo_bottom" src="./assets/images/company_photo/company_photo_bottom.png"></div>

			            <div class="profile_photo">
			            	<a href="<?php echo $visitcard_item['id']; ?>"  target="_blank">
			                	<img class="profile_photo" src="<?php echo $visitcard_item['profile_photo']; ?>" alt="">
			                </a>
			            </div>
			    
			        </div>

			        <div class="contact_group">

			            <h1 class="name"> <?php echo $visitcard_item['first_name'] . " " . $visitcard_item['surname']; ?></h1>

			            <div class="professions">
			                <div id="professions_slider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
			                  <div class="carousel-inner" data-bs-interval="2000" >
			                    <div class="carousel-item active">
			                      <span class="d-block w-100"> freelancer </span>
			                    </div>
			                    <div class="carousel-item" data-bs-interval="2000" >
			                      <span class="d-block w-100"> programmer</span>
			                    </div>
			                    <div class="carousel-item" data-bs-interval="2000" >
			                      <span class="d-block w-100"> web architect</span>
			                    </div>
			                  </div>
			                </div>              



			            </div>

			            <div class="contacts">                
			                <button class="social_controls" onclick="toggle_contacts"> <i class="fas fa-chevron-circle-right "></i> <i class="fas fa-chevron-circle-down"></i> </button>
			                <button class="social_button"> <i class="fab fa-linkedin"></i> <a href="<?php echo $visitcard_item['linkedin']; ?>" target="_blank"> linkedin.com/me</a></button>
			                <button class="social_button"> <i class="fab fa-dribbble"></i> <a href="<?php echo $visitcard_item['dribble']; ?>" target="_blank">dribble.com/me</a></button>
			                <button class="social_button"> <i class="fab fa-twitter"></i> <a href="<?php echo $visitcard_item['twitter']; ?>" target="_blank">twitter.com/me</a></button>
			                <button class="social_button"> <i class="fab fa-github"></i> <a href="<?php echo $visitcard_item['github']; ?>" target="_blank">github.com/me</a></button>
			                <button class="social_button"> <i class="fab fa-slack"></i> <a href="<?php echo $visitcard_item['slack']; ?>" target="_blank">slack.com/me</a></button>
			                <button class="social_button"> <i class="fab fa-stack-overflow"></i> <a href="<?php echo $visitcard_item['stackoverflow']; ?>" target="_blank"> stackoverflow.com/me </a></button>
			                <button class="social_button"> <i class="fas fa-envelope"></i> <a href="mailto:<?php echo $visitcard_item['email']; ?>" target="_blank">esai@company.com</a> </button>
			           
			                <div class="social_link_display"> 
			                    <p class="target"></p>
			                    <input type="text" id="input_social_link" name="input_social_link" placeholder="" > 
			                    <button class="btn" id="save_social_link" name="save_social_link" > save </button>
			                    <p class="confirmation"> link saved </p>
			                </div>
			                <ul class="contacts_listing">
			                    <li class="social"><span class="definition">Full Name:</span> <span class="content"> <?php echo $visitcard_item['first_name'] . " " . $visitcard_item['surname']; ?> </span></li>
			                    <li class="social"><span class="definition">Company:</span> <span class="content"> <?php echo $visitcard_item['company']; ?></span></li>
			                    <li class="social"><span class="definition">Department:</span> <span class="content"> <?php echo $visitcard_item['department']; ?></span></li>
			                    <li class="social"><span class="definition">Job Title:</span> <span class="content"><?php echo $visitcard_item['job_title']; ?></span></li>
			                    <br />
			                    <li class="social"><span class="definition">Tel:</span> <span class="content"><?php echo $visitcard_item['tel']; ?></span></li>
			                    <li class="social"><span class="definition">Mobile:</span> <span class="content"><?php echo $visitcard_item['mob']; ?></span></li>
			                    <br />
			                    <li class="social"><span class="definition">E-mail:</span> <span class="content">  <a href="mailto:<?php echo $visitcard_item['email']; ?>">email me</a>  </span></li> 



			                </ul>
			            </div>
			        </div>

        <div class="share">

           
            <button class="send_card"> Send card </button>
            

                    <button class="sms sharebutton">   
                        <a href="sms://&body= See my visitio:"> 
                            <img src="./assets/images/icons/sms.png" alt="">
                        </a>
                    </button>
          
                    <button class="email sharebutton">
                        <a href="mailto:?&subjet=Visitio card&body=See my visitio:">                         
                            <img src="./assets/images/icons/email.jpg" alt=""> 
                        </a>
                    </button>
              
                    <button class="whatsapp sharebutton">
                        <a href="https://web.whatsapp.com/send?text=Check my visitio:" target="_blank"> 
                            <img src="./assets/images/icons/whatsapp.png" alt="">
                        </a>
                    </button>
             
                    <button class="qrcode sharebutton" > 
                        <!-- <a id="qrcode" href=""> -->
                            <img  src="./assets/images/icons/qrcode.jpg" alt="">
                        <!-- </a>  -->
                    </button>

                    <div class="qr_region">
                       <img src="./assets/images/qrs/qr.png" alt=""> 
                    </div>
  
        </div>


			        <div class="map">
			            
			            <iframe src="<?php echo $visitcard_item['map']; ?>"  width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

			        </div>
			        
			    </div>
			    


		<?php } ?>
		
	</div>		




  


    
<footer></footer>

  <!-- content end... -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
    <script src="./assets/js/scripts.js"></script>

</body>
</html>

