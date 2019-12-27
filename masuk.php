<!DOCTYPE html>

<head>
	 <link href="assets/css/tubes.css" rel="stylesheet">
	  <link href="assets/css/bootstrap.css" rel="stylesheet">
	   <link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/masuk.css">
<title>login</title>

</head>

<body>
	 <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="masuk.html">Login</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a  href="#works">Item</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<br>
<br>
<br>
<form method="post" action="login_process.php">
<div class="box">
<h1>GadaiKuy</h1>

<input type="email" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<input type="password" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
  
<a href="index.php"><div class="btn">Sign In</div></a> <!-- End Btn -->

<a href="#"><div id="btn2">Sign Up</div></a> <!-- End Btn2 -->
<hr/>
 <p style="color: #000000">Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
</div> <!-- End Box -->


  
  
</form>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
</body>

</html>