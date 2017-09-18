<html>
<head>
	<title>boatbook.php</title>
</head>

<body>
	<?php
	//Se si desidera, è possibile salvare queste informazioni
	//anche in un database
	$Name =$_POST['Name'];
	$Email =$_POST['Email'];
	$Tel =$_POST['Tel'];
	$Pack =$_POST['Pack'];
	$From =$_POST['From'];
	$To =$_POST['To'];

	$formsent = mail('adriaplast@adriaplast.si',
		'SeaRay with captain confirmation',
		"Request from: $Name\r\n
		Email: $Email\r\n
		Tel: $Tel\r\n
		Pack: $Pack\r\n
		From: $From\r\n
		To: $To\r\n",
		"From: $Email\r\nBounce-to: adriaplast@adriaplast.si");
	if ($formsent){
		echo"<P>Hi, $Name. You have successfully booked the boat. 
		Thanks for visiting PortorozRent.si!";
	} else{
		echo "I'm sorry, there's a problem with your form.
		Please try again.";
		}
	?>
</body>
</html>