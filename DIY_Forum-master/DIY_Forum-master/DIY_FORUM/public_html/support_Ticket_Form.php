<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DIY Support Ticket Form</title>

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
    <a href="DIY_Forum_Support.php" class=" btn btn-lg" id="Back"  role="button" > Back to Support</a>


    <!-- Main Content -->
    <div class="container">
    
        <!-- Container found below menu bar -->
        <div class="below_menu_container">
<h1>DIY Support Ticket</h1>

<div class="articles_posting">

<div id="support_Form_Style">
	<form class="form-inline">
	<fieldset>
		<table>
		<tr>
		<td><label for="DIY_Username">Username:</label></td>	
		<td><input type="text" id="DIY_Username" name="DIY_Username" placeholder="Username"></td>
		<td><label for="remember_User_Supp">Remember Username</label></td>
		<td><input type="checkbox" id="remember_User_Supp" name="remember_User_Supp" value="Remember_Support_username"></td>
		</tr>
		<tr>
		<td><label for="support_Email"> Email:</label></td>	
		<td><input type="text" id="support_Email" name="support_Email" placeholder=" Enter Email"  /></td>	
			
		</tr>

		<tr>	
		<td> What's The Problem?:</td> 
			<td><select>
				<option  label= "Bad link" value="Bad link"></option>
				<option  label= "Forgot Password" value="Forgot Password"> </option>
				<option  label= "Can't submit regular site Form"  value="Can't submit regular site For"></option>
				<option  label= "Report Site Misuse" value="Report Site Misuse"></option>
				<option  label= "Can't upload Videos" value="Can't upload videos"></option>
				<option label= "Can't upload news Article" value="Can't upload news Article"></option>
				<option label= "Can't post comments on other peoples posts" value="Can't posdt comments on other peoples posts"></option>
				<option label= "Report a Free-booter" value="Report a Free-booter"></option>
				<option label= "Make a copyright Claim takedown request" value="Make a copyright Claim takedown request"></option>
				<option label= "Other" value="Other"></option>
			
			</select></td>
		</tr>
		<tr>
		<td><label for="problems"></label>Describe your problem:</td>
		<td> <textarea  name="problems" id="problems" rows="6" cols="40" placeholder="Describe your problem, or Problems Here"  ></textarea></td>	
		</tr>
			<tr>
		<td><label for="problems_2"></label>Location of the Problem:</td>
		<td> <textarea  name="problems_2" id="problems_2" rows="6" cols="40" placeholder="Put Link of Problem Here"  ></textarea></td>	
		<td><sub>This will help the developers fix the problem faster.</sub></td>
		</tr>


		</table>
		<input name="submit_Ticket" class="btn btn-sm" id="submit_Ticket"  onclick="alert('Support ticket recieved. We will get back to you as soon as possible.')" type="submit"  value="Submit"  />

	</fieldset>

	</form>
</div>
</div>
</div>
<hr>
	<?php include("../resources/footer.php");?>

</div>
    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>