<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DIY Forum Index</title>

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
    <div class="container below_menu_container">
     <h1><u> Fishing Videos</u></h1>
         <div class="col-lg-12">
        <p> The Fishing Videos page will have experiments posted from around Youtube, to start, and than it will be replaced by user submitted content.  To reach the DIY Forum's mission of being a community for people to learn and discuss, we will be focused on user submitted content. In Alpha and release Beta we have, to have content already present to catch Users attention, and get them interested in participating in our community.</p>

        </div> 
        </div>



    <div class="container below_menu_container">
    
        <!-- Container found below menu bar -->
        <div class="row">
         
         <div class="col-lg-6">
    <iframe  class="video_embeded_syle"  src="https://www.youtube.com/embed/XN4-lg6Uuvk" allowfullscreen></iframe>
  
      <br /><b> Video By:</b><em>Cotton Candy</em><br />
    <b> Link to Video&colon; </b><a href="https://www.youtube.com/watch?v=XN4-lg6Uuvk"> Rarest Fish</a><br /> 
     <b>Link to channel that Pruduced video go check them out!</b><a href="https://www.youtube.com/channel/UCOR9JwnPN8s8R3sSK55zkfQ"> Cotton Candy</a>
</div>
    <div class="col-lg-6">  
     <iframe class="video_embeded_syle" src="https://www.youtube.com/embed/OREq4Jn6ZnQ"  allowfullscreen></iframe>

   <br /><b>Video By:</b><em>Epic Wildlife</em><br />
    <b> Link to Video&colon; </b><a href="https://www.youtube.com/watch?v=OREq4Jn6ZnQ"> 10 fish catches</a><br /> 
    <b>Link to channel that Pruduced video go check them out!</b><a href="https://www.youtube.com/channel/UC10Tc1mzoPTibXDyVXFf9fw">Epic Wildlife</a>

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