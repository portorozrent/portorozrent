<html>
<head>
	<title>comment.php</title>
</head>

<body>
	<?php
	//Se si desidera, è possibile salvare queste informazioni
	//anche in un database
	$Name =$_POST['Name'];
	$Email =$_POST['Email'];
	$Comment =$_POST['Comment'];

	$formsent = mail('enricocaputo.1972@gmail.com',
		'Comment',
		"Send from: $Name\r\n
		Email: $Email\r\n
		Comment: $Comment\r\n",
		"From: $Email\r\nBounce-to: enricocaputo.1972@gmail.com");
	if ($formsent){
		echo"<P> $Name. Your message has been sent successfully. 
		Thanks for visiting PortorozRent.si!";
	} else{
		echo "I'm sorry, there's a problem with your comment.
		Please try again later.";
		}
	?>
</body>
</html>