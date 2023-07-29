<!DOCTYPE html>
<html>
<head>
  <title>Hoppie & Mochi Cosmetics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/faq.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image:url(admin/covers/pink1.jpeg)"; position: fixed;z-index:1200; width: 100%;">
  <a class="navbar-brand" href="#" ><img src="admin/covers/mochi1.jpg" style="width: 100px; height: 100px; border-radius: 50%; "></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php" style="font-family: Palatino Linotype; font-size: 18px; margin-left:15px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php" style="font-family: Palatino Linotype; font-size: 18px; margin-left:20px;">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php" style="font-family: Palatino Linotype; font-size: 18px; margin-left:30px;">Contact Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="faq.php" style="font-family: Palatino Linotype; font-size: 18px; margin-left:20px;">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled" href="login1.php" style="font-family: Palatino Linotype; font-size: 18px; margin-left:40px;">Mochi Cosmetics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled" href="index1.php" style="font-family: Palatino Linotype; font-size: 18px; margin-left:50px;">Admin Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 
<!-- <!end of navigation bar> -->
<br><br><br>
<br><br>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Oswald:500,600,700|Roboto');

body {
	margin: 0;
	background-image: url(admin/covers/p14.jpg);
    background-size: cover;
    font-family: 'Roboto', sans-serif;
}

h1 {
    text-align: center;
    font-family: 'Oswald', sans-serif;
    font-size: 60px;
    margin: 50px 0 0;
    color: #fff;
}

.container {
    max-width: 60%;
    margin: 0 auto;
    padding: 70px 0 20px;
    width: 100%;
}

.acc h3 {
    font-size: 25px;
    background-color: rgba(0,0,0,0.6);
    color: #fff;
    padding: 15px;
    margin: 0;
    cursor: pointer;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 2px;
    position: relative;
}

.acc h3:after {
    content: '+';
    position: absolute;
    right: 20px;
    font-size: 40px;
    top: 50%;
    transform: translateY(-50%);
}

.acc.active h3:after {
	content: '-';
}

.content {
    background-color: #fff;
    display: none;
}

.content-inner {
    padding: 15px;
}

.content * {
    margin-top: 0;
    line-height: 1.5;
}

.acc {
    border-bottom: 1px solid #fff;
}

</style>
<script type="text/javascript">
$(document).ready(function(){
	$('.acc h3').click(function(){
		$(this).next('.content').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});
</script>

<div class="container-fluid">
    <div class="row">
<h1>FAQ Section</h1>
	<div class="container">
		<!-- Accordion Starts-->
		<div class="acc">
			<h3>Question 1: What should I do if I have a reaction (side effect) to a cosmetic product?</h3>
			<div class="content">
				<div class="content-inner">
					<p>If you have a reaction (side effect) to a cosmetic product, you should:

tell your doctor or other health care provider,
report it to the cosmetic manufacturer, and
submit a complaint by reporting the problem to the FDA
You can also contact the FDA district office consumer complaint coordinator for your geographic area or call FDA at 1-800-332-1088.</p>
				</div>
			</div>
		</div>

		<!-- Accordian -->
		<div class="acc">
			<h3>Question 2: Do all cosmetic manufacturers include ingredient labels on their products?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Yes. Proper labeling is an important aspect of marketing a cosmetic or personal care product. Labeling is used to help inform consumers of a product's intended use and any related warnings, its ingredients and net quantity of contents, and its place of manufacture or distribution. The U.S. Food and Drug Administration (FDA) regulates cosmetic labeling under the authority of both the Food, Drug, and Cosmetic Act (FD&C Act) and the Fair Packaging and Labeling Act (FPLA) .</p>
				</div>
			</div>
		</div>

		<!-- Accordian -->
		<div class="acc">
			<h3>Question 3: Do independent experts research and evaluate cosmetic safety?</h3>
			<div class="content">
				<div class="content-inner">
					<p>The Cosmetic Ingredient Review (CIR) Expert Panel is an independent, non-profit scientific body that was launched in 1976 with support of the U.S. Food & Drug Administration (FDA) and the Consumer Federation of America (CFA) to assess the safety of ingredients used in cosmetics in the U.S. The CIR Expert Panel consists of world-renowned scientists and physicians who have been publicly nominated by consumer, scientific and medical groups, government agencies, and industry. Members of the Panel must meet (and actually exceed) the conflict of interest requirements regarding financial interests as special non-government advisory experts to FDA.

The CIR thoroughly reviews and assesses the safety of ingredients used in cosmetics in an open, unbiased, and expert manner and publishes the results of its work in peer-reviewed scientific literature. FDA, CFA and the Personal Care Products Council provide non-voting liaisons to the Panel and are actively involved in the comment and discussion process.</p>
				</div>
			</div>
		</div>

		<!-- Accordian -->
		<div class="acc">
			<h3>Question 4: Does the FDA have the authority to regulate cosmetic safety?</h3>
			<div class="content">
				<div class="content-inner">
					<p>Strong federal safety requirements govern cosmetics and personal care products sold in the U.S. It is a crime to market an unsafe cosmetics product. The U.S. Food and Drug Administration (FDA) and the U. S. Attorney General can take action against any company that markets an unsafe cosmetics product. The law provides severe penalties, including seizures, recalls, fines and bans, for cosmetics and personal care products manufacturers that do not meet these strict safety standards.

The FDA has wide-ranging regulatory authority that helps to ensure the safety of cosmetics and personal care products. Throughout the years, FDA has infrequently had to exercise this power to limit or prohibit ingredients that it considered to be unsafe. Cosmetics and personal care products companies are committed to upholding strict FDA regulations.</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	 <div class="footer-bottom">
 <h5><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/yinthirimon" target="_blank">Yin Thri Mon</a>
</p></h5>
</div>
	</body>
	</html>