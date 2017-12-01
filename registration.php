<?php
// phpinfo();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPAuth = true;

$mail->Username = 'canoon.company@gmail.com';
$mail->Password = 'beleeaya';

$mail->FromName = "Canoon Company";
$webmaster_email = "canoon@navigator.com";

$email = "demo.specific.0987@gmail.com";
$name = "Canoon Company";
$mail->From = $webmaster_email;

$mail->AddAddress($email, $name);
$mail->AddReplyTo($webmaster_email, "Squall.f");

$mail->IsHTML(true);
$mail->Subject = "Welcome to Canoon Online Shop";
$mail->Body = "Hi there,<br><br>Thanks for signing up to be the member of Canoon online store. From now
  on, you'll get regular updates on fare sales and special offers from our store. Click this link <a href='localhost/Webstore_Prototype/index_in.html'>http://www.webstore_store/conoon/index.html</a> to activate your account. In the meantime, check out our store to find your favourite product !<br><br>Cheers,<br>Canoon Company";

if (!$mail->Send()){
  echo "error sending email: ".$mail->ErrorInfo;
} else {
  // echo "Success.";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Camera Web Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 341 web store -->
<!--
Web Store Template
http://www.templatemo.com/preview/templatemo_341_web_store
-->
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<!-- <link rel="stylesheet" type="text/css" href="css/signin.css" /> -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">
/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<style rel="stylesheet" type="text/css" >
#templatemo_footer {
  background: none;
}
#content {
  background-color: white;
  padding-left: 40px;
  width: 100%;
  height: 100px;
}
#content p {
  margin: 30px;
  font-size: 20px;
}
</style>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	// customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},
	});

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="home">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title">
        	<h1><a href="#"></a></h1>
        </div>

				<div id="top-function-bar">

				</div>

        <div id="header_right">
					<ul id="account">
						<li><a href="signin.html">Sign In</a></li>
						<!-- <li><a href="#">My Account</a></li> -->
					</ul>
					<ul id="language">
            <!-- <div class="cleaner"></div> -->
						<li>
	            <div id="templatemo_search">
	                <form action="#" method="get">
	                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
	                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
	                </form>
	            </div>
						</li>
						<li><a><img src="images/usa.png" alt="English" /></a></li>
						<li><a><img src="images/china.png" alt="Chinese" /></a></li>
						<li><a><img src="images/hongkong.png" alt="Germany" /></a></li>
					</ul>
         </div> <!-- END -->
    </div> <!-- END of header -->

    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="products.html">Products</a>
                <ul>
                    <li><a href="#">Camera</a>
											<ul>
												<li><a href="#">Single-Lens Reflex Camera</a></li>
												<li><a href="#">Compact Camera</a></li>
												<li><a href="#">Instant Camera</a></li>
											</ul>
										</li>
                    <li><a href="#">Lens</a></li>
										<li><a href="#">Lighting</a></li>
										<li><a href="#">Tripod</a></li>
                    <li><a href="#">Accessories</a>
											<ul>
												<li><a href="#">Camera Filters & Adapters</a></li>
												<li><a href="#">Bags & Cases</a></li>
											</ul>
										</li>

              </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="faqs.html">FAQs</a></li>
            <!-- <li><a href="checkout.html">Checkout</a></li> -->
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->

      <div id="content" class="container">
        <!-- <h2>Sign Up Page</h2> -->
        <p>Sign up successfully! Please check your email for confirmation.</p>
      </div> <!-- END of content -->


        <div class="cleaner"></div>
    </div> <!-- END of main -->

    <div id="templatemo_footer">
        <div class="">
        	<h4>About Us</h4>
            <p>We are a brand-new online camera related store, selling all modern and fashion cameras and related products from Conoon.</p>
        </div>

        <div class="cleaner h40"></div>
		<center>
			Copyright © 2017 Conoon
		</center>
    </div> <!-- END of footer -->

</div>

</body>
</html>


