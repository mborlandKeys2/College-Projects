<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DIY Forum Home</title>
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
     <?php include("../resources/nav_bar.php");?>


    <!-- Main Content -->
    <div class="container">
    
        <!-- Container found below menu bar -->
        <div class="below_menu_container">
<h1>Latest DIY Forum News Posts</h1>
<div class="articles_posting">
		<article>
		
		<p>This is where we will compile the latest DIY News articles, including the most popular of the DIY News page. This will  be an area where developers will post progress updates of the news section of the site. For now, this site and page section are in the Alpha stages of development.</p>
		</article>
</div>
<h1>Latest DIY Forum Video Tutorials</h1>
<div class="articles_posting">
		<article>
		
		
		<p>This is another section that with be used for updating users on the latest things going on with the video section of the site. It will also include the most popular DIY videos on the site, but for now it will be used for updating users on development of the page. It will also give release dates for features at a later date. </p>
		</article>
</div>

<h1>Updates</h1>
<div class="articles_posting">
		<article>
				
				<ul>
					<li>This is where site wide changes will be posted, every time something noticeable will have been changed, with an explanation for why the change occurred on the site. All of that can be found under this article</li>
					
				</ul>
		</article>
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