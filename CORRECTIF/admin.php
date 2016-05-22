<html>


<head>
	<title>Pannel Admin</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="style_site.css">
  <meta charset="utf-8"/>  
  <link rel="icon" type="image" href="img/logo.ico">
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
    <form method="POST" action="submit.php">

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


	<h1>Poster une musique</h1>
	<hr>
	<div class="clear"></div>

       <table  class="tb" align="center">
            <tr align="center">
        <!-- Colonne 1-->
                   <td valign="middle" width="50%"><br>
                       <p class="ins" align="center">Nom de la musique : <input  type="text" name="nm" ></p>
                       <p class="ins" align="center">Artiste : <input  class="txt2" type="text" name="art"></p>
                   </td>

                
            </tr>
           
    <!--ligne 2-->
           
            <tr>
                   <td valign="middle" width="50%"><br>
                   <p class="ins" align="center">Nom du fichier : <input   type="text" name="nf" ></p>
                       <p class="ins" align="center">Catégorie : <input   type="text" name="cat" ></p>
                       <p class="ins" align="center">Decription : <textarea   class="fat" type="text" name="desc"></textarea></p>
                   </td>

           
           
           
           
           
           
           </tr>
                             <!-- Colonne 2 -->

                  <td valign="middle" align="center">

                    <input class="btn btn-success" type="submit" name="Validation"  value="Valider"/>
                   
                       


                        

            </td>       
           
           
           </tr>
        


</div>	
</form>
</div>
</body>
</html>
