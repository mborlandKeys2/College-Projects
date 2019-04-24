<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta charset="UTF-8">
	<title>Register</title>

<!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/custom.css">
    
</head>

<body>
    <!-- Navigation Bar -->  
   <?php include("../resources/nav_bar.php");?>
  <!-- Main Content -->
    <div class="container">
    
        <!-- Container found below menu bar -->
        <div class="below_menu_container">
	<h1>Register for DIY Forum</h1>

		<div class = "articles_posting">
		<form class="form-inline">
			<div id="form-group">
	
				
		
				<table>
		

	
		<tr>
		<td><label for="b_Day"> Birthday&colon;</label></td>
		<td><input type="date" id="b_Day" name="b_Day" min="1900-01-01" max="2017-12-31" /> </td>
		</tr>
		

		<tr>
		<td> <label for="first_Name"> First Name&colon;</label></td>	
		<td><input type="text" id="first_Name" name="first_Name" placeholder= "Enter First Name" /></td>	
		</tr>

		<tr>
		<td> <label for="last_Name"> Last Name&colon;</label></td>	
		<td><input type="text" id="last_Name" name="last_Name"  placeholder="Enter Last Name" /></td>
		</tr>		

		<tr>

		<td><label for="DIY_Username"> Username&colon;</label></td>	
		<td><input type="text" id="DIY_Username" name="DIY_Username" placeholder="Enter Username" /></td>	

		</tr>
		<tr>
		<td><label for="current_Email"> Email&colon;</label></td>	
		<td><input type="text" id="current_Email" name="current_Email" placeholder="Enter Valid Email"  /></td>	
			
		</tr>

		<tr>
		<td><label for="registratrionForm_Pass"> New Password&colon;</label></td>	
		<td><input type="password" id="registratrionForm_Pass" name="registratrionForm_Pass" placeholder="Enter New Password" /></td>	
				
		</tr>
		<tr>
		<td><label for="registration_confirm_pass"> Confirm Password&colon;</label></td>	
		<td><input type="password" id="registration_confirm_pass" name="registration_confirm_pass" placeholder="Re-enter New Password" /></td>	
		</tr>

	<tr>
		<td><b>State:</b></td>
    	<td><select> 
    	<!--http://alphabetizer.flap.tv/lists/list-of-states-in-alphabetical-order.php This is where i checked the spelling and order of the states at  -->
    		<option  label= "Alabama" value="Alabama"></option>
			<option  label= "Alaska" value="Alaska"> </option>
			<option  label= "Arizona"  value="Arizona"></option>
			<option  label= "Arkansas" value="Arkansas"></option>
			<option label= "California" value="California"></option>
			<option  label= "Colorado" value="Colorado"></option>
			<option  label= "Connecticut" value="Connecticut"> </option>
			<option  label= "Delaware"  value="Delaware"></option>
			<option  label= "Florida" value="Florida"></option>
			<option label= "Georgia" value="Georgia"></option>
			<option  label= "Hawaii" value="Hawaii"></option>
			<option  label= "Idaho" value="Idaho"> </option>
			<option  label= "Illinois"  value="Illinois"></option>
			<option  label= "Indiana" value="Indiana"></option>
			<option label= "Iowa" value="Iowa"></option>
			<option label= "Kansas" value="Kansas"></option>
			<option  label= "Kentucky" value="Kentucky"></option>
			<option  label= "Louisiana" value="Louisiana"> </option>
			<option  label= "Maine"  value="Maine"></option>
			<option label= "Maryland" value="Maryland"></option>
			<option label= "Montana" value="Montana"></option>
			<option  label= "Massachusetts" value="Massachusetts"></option>
			<option label= "Michigan" value="Michigan"></option>
			<option  label= "Minnesota" value="Minnesota"> </option>
			<option  label= "Mississippi"  value="Mississippi"></option>
			<option  label= "Missouri" value="Missouri"></option>
			<option  label= "Nebraska" value="Nebraska"></option>
			<option  label= "Nevada" value="Nevada"> </option>
			<option  label= "New Hampshire"  value="New Hampshire"></option>
			<option  label= "New Jersey" value="New Jersey"></option>
			<option label= "New Mexico" value="New Mexico"></option>
			<option  label= "New York" value="New York"></option>
			<option  label= "North Carolina" value="North Carolina"> </option>
			<option  label= "North Dakota"  value="North Dakota"></option>
			<option  label= "Ohio" value="Ohio"></option>
			<option label= "Oklahoma" value="Oklahoma"></option>	
			<option  label= "Oregon"  value="Oregon"></option>
			<option  label= "Pennsylvania" value="Pennsylvania"></option>
			<option  label= "Rhode Island" value="Rhode Island"> </option>
			<option  label= "South Carolina"  value="South Carolina"></option>
			<option  label= "South Dakota" value="South Dakota"></option>
			<option label= "Tennessee" value="Tennessee"></option>
			<option label= "Texas" value="Texas"></option>
			<option  label= "Utah" value="Utah"></option>
			<option  label= "Vermont" value="Vermont"> </option>
			<option  label= "Virginia"  value="Virginia"></option>
			<option  label= "Washington" value="Washington"></option>
			<option label= "West Virginia" value="West Virginia"></option>
			<option  label= "Wisconsin" value="Wisconsin"> </option>
			<option  label= "Wyoming" value="Wyoming"></option>
		
			

			

    	</select></td>
		</tr>
		<tr>	
			<td><b>DIY Focus&colon;</b></td>

    	<td><select> 
    		<option  label= "Arts &amp; Crafts" value="Arts &amp; Crafts"></option>
			<option  label= "Cooking" value="Cooking"> </option>	
			<option  label= "Elementary Science Experiments" value=" Elementry Science Experiements"></option>
			<option  label= "Fishing"  value="Fishing"></option>
			<option label= "Not Listed Here" value="Not Listed Here"></option>
			<option label= "Woodworking" value="Woodworking"></option>

		

    		</select></td>

		</tr>


   
</table>

<fieldset style="width:275px">		
<table>
	
		
		
		
	    <tr>
		<td id="underline_Gender"><b>Gender:</b></td>	
		</tr>
		<tr>
		<td><label  for="male_Checkbox"> Male</label></td>	
		 <td><input type="checkbox" id="male_Checkbox" name="male_Checkbox" value="Male" /></td>
		</tr>
		<tr>
		 	<td><label for="female_Checkbox"> Female</label></td>
		<td><input type="checkbox" id="female_Checkbox" name="female_Checkbox" value="Female" /> </td>
		</tr>
			 <tr>
		 <td><label for="other_checkbox"> Other</label></td>
		
		<td><input type="checkbox" id="other_checkbox" name="other_checkbox" value="Other" /> </td>
		</tr>
	
</table>
	
</fieldset>


	
   

	
	
		<fieldset style="width:275px">

		<p>Do you agree with Terms and Conditions&quest;<a href="terms_And_Conditions.php">Terms and Conditions</a></p>
		<label for="i_Agree">Terms And Conditions</label><br />
		<input type="radio" id="i_Agree" name="i_Agree" value="I Agree" />&nbsp;I Agree<br />
		<input type="radio" id="i_Disagree" name="i_Disagree" value="I Disagree" /> &nbsp;I Disagree<br />


		</fieldset>
		<br />
		
			<input  class="btn btn-sm" id="registration" type="submit"  role="button" value="Register">
    			<input  class="btn btn-sm" id="reset" type="submit"  role="button" value="Reset">
		

			</div>
			</form>
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