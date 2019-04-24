<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Support</title>
	
	<!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="css/custom.css">
    
</head>

<body>
    <!-- Navigation Bar -->  
      <?php include("../resources/nav_bar.php");?>


    <!-- Main Content -->
    <div class="container">
    
        <!-- Container found below menu bar -->
        <div class="below_menu_container">
<h1>Support Links</h1>
<div id="supp_links">
<ul>
	<li><a href="support_Ticket_Form.php">DIY Support Ticket</a></li>
	<li><a href="FAQ.php">DIY FAQ</a></li>
</ul>
</div>

<hr>
    <?php include("../resources/footer.php");?>
</div>
</div>

<!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
