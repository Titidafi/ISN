<html>


<head>
	<title>A propos</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="style_site.css">
    <link rel="icon" type="image" href="img/logo.ico">    <meta charset="utf-8"/>  
</head>
<header>
	
					
	               <a href="site.php"><img src="img/logo.png"/></a>		
	      <?php 
      session_start();
     echo "<div class='pseudo'>";
     echo "Bienvenue ";
     echo $_SESSION['id']." !";
     echo "<a href='index.php'> Déconnexion</a>";
     echo "</div>";
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
			   
			   echo '<li><a href="admin.php">Admin</a></li><br>';
			   
		   }
		   
		   
		   
		   
		   ?>
       
        </ul>

      </div>
<div class='clear'></div>
	
	<h1>Qui sommes nous ?</h1>
	<hr>
	<img class="ban" src="img/inf.jpg"><br>
<p class="desc">
Nous sommes trois lycéens, passionnés de musique, de hardware ainsi que des nouvelles technologies.</p><br>
<p class="desc">Dans le cadre de la spécialité <strong class="motgras"> ISN </strong> pour le baccalauréat Scientifique, nous avons voulu créer un site web, mettant en avant la musique. </p><br>
<p class="desc">Par souci de légalité et pour proposer un projet viable sur le plan légal nous nous sommes intérrésés à <em class="motitalic"> la musique libre de droit. </em></p><br> 

<p class="desc">Avec <em class="motitalic"> la musique libre de droit </em> chaque compositeur est en droit de préciser l'étendue des droits, et de ses limites, par exemple : Le droit ou non de reproduire, de modifier la musique, le droit ou non de revendre la musique et d'en tirer quelconque bénéfice, le droit de diffusion à usage privé et/ou en public et/ou de manière commercial. 
Les musiques présenté sur le site seront des musiques libre à l’utilisation privé, c’est à dire utilisé à des fins non commercial, il est possible de la télécharger gratuitement. Peu connu du grand public ce type de musique doit être mis en avant, nous avons donc voulu créer un site référençant des titres musicaux libres de droits.</p>

<h2> Les "Liberty" Fondateurs </h2>

<ul class="puce">
    <li>Melvin, passioné hardware et de l'actualité numérique.</li>
    <li>Axel, passioné d'infographie et de création numérique.</li>
    <li>Guillaume, passioné de jeux vidéo et de game design.</li>
</ul>
	

</body>
