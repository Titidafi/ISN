<html>


<head>
	<title>A propos</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="style_site.css">
    <meta charset="utf-8"/>  
</head>
<header>
	
					
	               <img src="img/logo.png"/>		
				  <?php 
				  session_start();
					echo "<span>";
					echo $_SESSION['id'];
					echo "</span>";
				   ?>

</header>
<body>


 <div class="udiv">
    <form method="POST" action="">

    <div class="jumbotron">
          <div class="menu">
	  
        <ul>
          <li><a href="site.php">Musiques</a></li>
          <li><a href="a propos.php">A propos</a></li>		   
		   <?php 
		
		   if($_SESSION['admin']==1){
			   
			   echo '<li><a href="#">Admin</a></li><br>';
			   
		   }
		   
		   
		   
		   
		   ?>
       
        </ul>

      </div>
<div class='clear'></div>
	
	<h1>Qui sommes nous ?</h1>
	<hr>
	<p>
		
	</p>


</body>
