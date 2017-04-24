<!DOCTYPE html>
<html>
<head>
	<title>Bulk SMS Template</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome.min.css">

</head>
<body>

<div class="container">
<div class="row">
	
	<div class="text-center" style="color:blue;font-size:22px;">A Simple SMS Integration Platform</div>
	<p class="text-center" style="color:red">Number of Units Left: <?php     
	// Help integrate balance here of SMS unit here

	?> </p>
	<form role="form" action="addClass.php" method="POST">
	<?php if (isset($_POST['submit'])){
		if (!empty($_POST['sender'])){
			$sender = $_POST['sender'];
		}else {
			print "<script>alert('Sender Empty!');window.location='index.php';   </script>";
			die();
		}
		if (!empty($_POST['reciever'])){
			$reciever = $_POST['reciever'];
		}else {
			print "<script>alert('Reciever Empty!');window.location='index.php';   </script>";
			die();
		}

		if (!empty($_POST['message'])){
			$message = $_POST['message'];
		}else {
			print "<script>alert('Message Empty!');window.location='index.php';   </script>";
			die();
		}
			// HELP INTEGRATE IT HERE
		// I need you to help me implement here how to send the message now that i have my details
		# $sender
		# $reciever
		# $message
	}
	?>

<div class="col-md-6 col-md-offset-3">
<input type="text" class="form-control"  name="sender" placeholder="Sender" required="" maxlength="11">
<input type="text" class="form-control"  name="reciever" placeholder="Receiver" required="" maxlength="11">
<textarea class="form-control" name="message"></textarea>
  
                                      <input type="submit" class="btn btn-primary form-control" name="submit"  value="Send Message" />
                                  </form>

                              </div>
 </form> 


</div>
</div>



</div>
<script type="text/javascript" src='bootstrap.min.js'></script>
<script type="text/javascript" src='jquery.min.js'></script>
</body>
</html>