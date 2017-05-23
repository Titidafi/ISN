<html>


<head>
    <title>Ecran de connexion</title>
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="connexion.css">
    <meta charset="utf-8"/>   
</head>



    <body>
    <div class="udiv">
    <form method="POST" action="">

    <div class="jumbotron">

        
        
 <!--Tableau-->
        
        <h1 >CONNEXION</h1>
          <hr>
        
       <table  class="tb" >
            <tr>
        <!-- Colonne 1-->

               <td id="left"><br />
                 <p >Identifiant : </p>
               </td>

               <td id="center">
                 <input  type="text" name="id" >
               </td>
               <td id="right">
                <input class="btn btn-success"type="submit" name="Validation"  value="S'identifier"/>
               
                   
               </td>
            </tr>

            <tr>

                <td id="left">
                     <p>Mot de passe :</p>
                </td>

                <td id="center">
                   <input  type="password" name="entpass">
                </td>

                 <td id="right">
                
                            <?php
session_start();
$_SESSION['admin'] = 0;
$_SESSION['check'] = 0;

while (isset($_POST['id']) !== TRUE)
	{
	$_POST['id'] = "";
	}

while (isset($_POST['entpass']) !== TRUE)
	{
	$_POST['entpass'] = "";
	}

// vérification des variable présentes dans POST

if (($_POST['id'] <> "") or ($_POST['entpass'] <> ""))
	{
	$id = $_POST['id'];
	$entpass = $_POST['entpass'];

	// Ici, la présence ou non du fichier ID et donc si l'utilisateur est inscrit

	if (file_exists("inscrits/" . $id . ".htm"))
		{

		// Obtention de l'info du fichier, le mot de passe

		$file = fopen("inscrits/" . $id . ".htm", 'r');
		$truepass = fgets($file);

		// Nous verifions que le mot de passe saisie et bien le mot de passe de ce compte

		if ($entpass == $truepass)
			{

			// C'est le cas donc affichage d'une URL de redirection

			$_SESSION['check'] = 1;
			$_SESSION['id'] = $id;
			if (($id == "Axel") or ($id == "Melvin") or ($id == "Guillaume"))
				{
				$_SESSION['admin'] = 1;
				}

			header('Location: site.php');
			exit();
			}
		  else
			{

			// Si le mot de passe n'est pas le bon, affiche ce message

			echo "<span class='label-danger'>Ces identifiants sont incorrects</span>";
			}
		}
	  else
		{

		// Si le fichier n'existe pas ( et donc le compte), afficher cette phrase

		echo "<span class='label-danger'>Ce compte n'existe pas</span><script type='text/javascript'>document.getElementById('txt1').className = 'red'</script>";
		}
	}
  else
	{

	// Si il n'y a rien d'entré afficher cette phrase

	echo "<span class='label-warning'>Entrez vos données</span>";
	}

?> 
                         
                
                </td>
            </tr>

  
           

        
        
       </table>
    
        
        
            <div align='center'>

                    <a href="inscription.php" target="_self" class="btn btn-info">S'inscrire</a>

               
      </div>


<br />
</div>


        
        
        
        
        
        
        

        </form>
        </div>
        </body>
</html>
