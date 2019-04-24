<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log in to DIY Forum</title>

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
	<h1> Log on to DIY Forum</h1>
<div class="articles_posting">
    <form>
        <fieldset>
            <legend>Login</legend>
            User Name:<br>
            <input type="text" name="username">
            <input type="radio" name="rememberusername" value="yes"> Remember Username?<br>
            Password:<br>
            <input type="text" name="password"><br><br>
		<input  class="btn btn-sm" id="registration" type="submit"  role="button" value="Log in">
          <input  class="btn btn-sm" id="reset" type="submit"  role="button" value="Reset">
        </fieldset>
    </form>
</div>
    <br/>
<hr>
    <?php include("../resources/footer.php");?>

</div>
</div>
<!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>