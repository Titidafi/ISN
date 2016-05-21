<html>


<head>
    <title>Ecran de connexion</title>
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

    <form method="POST" action="">

    <div class="jumbotron">


      <div class="menu">
	  
        <ul>
          <li><a href="#">Musiques</a></li>
          <li><a href="#">A propos</a></li>		   
		   <?php 
		
		   if($_SESSION['admin']=1){
			   
			   echo '<li><a href="#">Admin</a></li>';
			   
		   }
		   
		   
		   
		   
		   ?>
       
        </ul>

      </div>
        <br>
 <!--Tableau-->

        
        
          
		  <div class='clear'></div>
          <?php

	if($_SESSION['check']==1){
  echo "<h1>Musiques</h1><hr>";
  $img_top="<img src='img/pochettes/";
  $img_bot=".jpg'/>";
  $download_top = '<a href="/audio/';
  $download_bot = '.mp3" download><button type="button" class="btn btn-primary">Télécharger</button></a>';
  $audio_top = "<audio controls> <source src='/audio/";
  $audio_bot =  ".mp3' type='audio/mpeg'>
Your browser does not support the audio element.
</audio>";
  require "config.php";
  mysql_connect(DB_HOST,DB_LOGIN,DB_PASS);
  mysql_select_db(DB_BDD);

  $sql = "SELECT * FROM site";
  $req = mysql_query($sql);
  echo "<div class=box>";
  
  while($data=mysql_fetch_assoc($req)){


    echo "<div class='content'>";
	echo "<div class='img'>";
    echo "$img_top{$data['fichier']}$img_bot";
	echo "</div><div class='txt'><h2><span>";
    echo "<p>{$data['titre']}</p>";
    echo "<p>{$data['texte']}</p>";
    echo "<p>{$data['auteur']}</p>";
    echo "$audio_top{$data['fichier']}$audio_bot";
    echo "<p>{$data['cat']}</p>";
    echo "$download_top{$data['fichier']}$download_bot</span></h2>";
	echo "</div>";
    echo "</div>";
    


    
  }
  echo "</div>";
    }else{
		
		echo "<h1>Vous n'êtes pas connecté !<h1>";
		
		
		
	}
	
	
	
	
?>
        
      
</div>


        
        
        
        
        
        
        

        </form>
        
        </body>
</html>