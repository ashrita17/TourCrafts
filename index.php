<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial -sacle=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="wt.css">
    <title> Cglobe</title>
</head>
<body>

    <div class="header">
        <div class="navbar">
		<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
            <img src="logo112.png">
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
			<h1 class="header-title">Tour Crafts - Crafting Your Perfect Gateway</h1>
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
            <div class="language">
                              
                 <p id="eng_tag"> Home </p>
        
            </div>
            <div class="icons">
                <p > Explore </p>
            </div>
		    <div class="icons1">
                <p > Blog </p>
            </div>

		  
           
            <div class="selling_page">
                    <a href="login.php">
                        <button>Logout</button>
                    </a>
            </div>
        
        </div>
    </div>


    <div class="ad_img">
        <img src="travel2.jpg">
    </div>


    <div class = "coupons">
	  <div class=" First_row">
		  <div class="box">
			  <a href = "D:\WEBAPPLICATION\c1.html" target="_blank">
			  <img src="pic1.jpg"></a>
			  <h2>₹17,497 </h2>
			  
			  <div class="address_data">
				  <P>Delhi Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
				  
			  </div>
		  </div>
		  <div class="box">
			   <a href = "D:\WEBAPPLICATION\c1.html" target="_blank">
			   <img src="pic2.jpg"></a>
			   <h2> ₹27,153</h2>
	
			   <div class="address_data">
				   <p>Assam Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
			 
			   </div>
		  </div>
		  <div class="box">
				  <a href = "#"></a>
				  <img src="pic3.jpg">
				  <h2>₹14,557</h2>
				  
				  <div class="address_data">
					   <P>Nainital Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
					   
				  </div>
		  </div>
		  <div class="box">
			  <a href = "#"></a>
			  <img src="pic9.jpg">
			  
			  <h2> ₹20,589</h2>
			  
			  <div class="address_data">
				  <P>Tirupati Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book now</a></P>
			  </div>
		  </div>
	  </div>
	  <div class=" First_row">
		  <div class="box">
			  <a href = "#"></a>
			  <img src="pic5.jpg">
			  
			  <h2> ₹27,557</h2>
			  
			  <div class="address_data">
				  <P>Mussoorie Tour Package &nbsp&nbsp <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
				  
			  </div>
		  </div>
		  <div class="box">
			   <a href = "#"></a>
			  <img src="pic6.jpg">
			   
			   <h2> ₹15,098</h2>
			   
			   <div class="address_data">
				   <P>Gujarat Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
				   
			   </div>
		  </div>
		  <div class="box">
				  <a href = "#"></a>
				  <img src="pic7.jpg">
				  <h2> ₹15,210</h2>
				  
				  <div class="address_data">
					   <P>Tamil Nadu Tour Package &nbsp <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
					   
				  </div>
		  </div>
		  <div class="box">
			  <a href = "#"></a>
			  <img src="pic8.jpg">
			  <h2> ₹26,658</h2>
			  
			  <div class="address_data">
				  <P>Coorg-Ooty Tour Package  &nbsp  <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
				  
			  </div>
		  </div>
	  </div>
      <div class="Lode_more">
        <button id="Lode_more_id">Lode More</button>
         <div class="lode_More_coupons" id="lode_more_coupons_id">
            <div class=" First_row">
                <div class="box">
                    <a href = "#"></a>
                    <img src="pic4.jpg">
                    <h2>₹30,389</h2>
                    <div class="address_data">
                        <P>Chennai Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp  <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
                      
                    </div>
                </div>
                <div class="box">
                     <a href = "#"></a>
                     <img src="pic10.jpg">
                     <h2> ₹36,910</h2>
                
                     <div class="address_data">
                         <P>Goa Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
                        
                     </div>
                </div>
                <div class="box">
                        <a href = "#"></a>
                        <img src="pic11.jpg">
                        <h2> ₹20,992</h2>
                        
                        <div class="address_data">
                             <P>Kerala Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
                             
                        </div>
                </div>
                <div class="box">
                    <a href = "#"></a>
                    <img src="pic12.jpg">
                    <h2> ₹22,534</h2>
                    
                    <div class="address_data">
                        <P>Wayanad Tour Package &nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
                        
                    </div>
                </div>
            </div>
            <div class=" First_row">
                <div class="box">
                    <a href = "#"></a>
                    <img src="pic13.jpg">
                    <h2> ₹14,504</h2>
                   
                    <div class="address_data">
                        <P>Darjeeling Tour Package &nbsp&nbsp&nbsp  <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
                       
                    </div>
                </div>
                <div class="box">
                     <a href = "#"></a>
                     <img src="pic14.jpg">
                     <h2> ₹24,053</h2>
                   
                     <div class="address_data">
                         <P>Banglore Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
                         
                     </div>
                </div>
                <div class="box">
                        <a href = "#"></a>
                        <img src="pic15.jpg">
                        <h2> ₹28,098</h2>
                        
                        <div class="address_data">
                             <P>Manali Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
                             
                        </div>
                </div>
                <div class="box">
                    <a href = "#"></a>
                    <img src="pic17.jpg">
                    <h2> ₹16,978</h2>
              
                    <div class="address_data">
                        <P>Orissa Tour Package &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <a    href="https://docs.google.com/forms/d/e/1FAIpQLSch7uIXK0K5tAtqxpCdR07XEV7UiWEKMOGktfrnTbGQN1vF3A/viewform?usp=pp_url">Book Now</a></P>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>   


    <div class="Main_footer">
	  <div class="footer">
		  <div class="footer_box">
			  <h2> POPULAR LOCATIONS</h2>
			  <P>Banglore</P>
			  <P>Delhi</P>
			  <P>Chennai</P>
			  <P>Kerala</P>
			  
		  </div>
		  <div class="footer_box">
			  <h2>TRENDING LOCATIONS</h2>
			  <P>Bhubaneshwar</P>
			  <P>Hyderabad</P>
			  <P>Chandigarh</P>
			  <P>Nashik</P>
			  
		  </div>
		  <div class="footer_box">
			  <h2>ABOUT US</h2>
			  <P>About TourCrafts Group </P>
			  <P>Careers</P>
			  <P>Contact Us</P>
			  <P>TourCrafts people</P>
			  
		  </div>
		  <div class="footer_box">
			  <h2>TourCrafts</h2>
			  <P>Help</P>
			  <P>Sitemap</P>
			  <P>Legal & Privacy information</P>
			  <P>Blog</P>
			  
		  </div>
	  </div>
  </div>

  <script>
    
        let Lode_more_id = document.getElementById('Lode_more_id');
        let lode_more_coupons_id = document.getElementById('lode_more_coupons_id');
    
        Lode_more_id.addEventListener('click', () => {
            lode_more_coupons_id.style.display = 'block';
            Lode_more_id.style.display = 'none';
        });
    </script>
</body>
</html>