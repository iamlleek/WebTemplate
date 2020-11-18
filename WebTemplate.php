<!--Example from pages 215 - 217 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Template Project</title>
</head>
<body>
	<?php include("inc_header.html"); ?>

	<div style = "width:20%;text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>	
	</div>

	<!-- Start of Dynamic Content Section -->
	<?php
	if(isset($_GET["content"])) {
		// we are here because one of the three buttons has been clicked. Now lets check to see which one was clicked.
		switch($_GET["content"]) {
			case "About Me":
				include("inc_about.html");
				break;
			case "Contact":
				include("inc_contact.html");
				break;
			case "Home":
			default:
				include("inc_home.html");
				break;
		}
	}
	else {
		// no button has been clicked on
	}

	?>

	<!-- End of Dynamic Content Section -->
	<?php include("inc_footer.php"); ?>
</body>
</html>