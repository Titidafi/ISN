<html>


<head>
    <title>Ecran d'Inscription'</title>
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="style.css">
    <link rel="icon" type="image" href="img/logo.ico">
    <meta charset="utf-8"/>   
</head>



    <body>
    <div class="udiv">
    <form method="POST" action="">

    <div class="jumbotron">

        
        
 <!--Tableau-->
        
        <h1 >Inscription</h1>
          <hr>
        
       <table  class="" >
            <tr>
        <!-- Colonne 1-->
                   <td valign="middle" id="left" width="50%"><br>
                       <p class="ins" align="right" >Identifiant : </p>

                   </td>
        <!-- Colonne 2 -->
                  <td valign="middle" id="right" align="left">
                    <input id="neutral" type="text" name="id" >
                  </td>

                
            </tr>

            <tr>
        <!-- Colonne 1-->
                   <td valign="middle" id="left" width="50%"><br>
                       <p class="ins" align="right" >Mot de passe : </p>

                   </td>
        <!-- Colonne 2 -->
                  <td valign="middle" id="right" align="left">
                    <input id="neutral" type="password" name="mdp1" >
                  </td>

                
            </tr>
            <tr>
        <!-- Colonne 1-->
                   <td valign="middle" id="left" width="50%"><br>
                       <p class="ins" align="right" >Confirmer le mot de passe : </p>

                   </td>
        <!-- Colonne 2 -->
                  <td valign="middle" id="right" align="left">
                    <input id="neutral" type="password" name="mdp2" >
                  </td>


                
            </tr>
           

        
        
       </table>

       <?php
         while(isset($_POST['id'])!==TRUE){
                            
           $_POST['id']="";
                                             
         }
         while(isset($_POST['mdp1'])!==TRUE){

             $_POST['mdp1']="";
                                                      
          }
         while(isset($_POST['mdp2'])!==TRUE){

             $_POST['mdp2']="";
                                                      
          }
          if(($_POST['id']<>"")and($_POST['mdp1']<>"")and($_POST['mdp2']<>"")){
            $id=$_POST['id'];
            $mdp1=$_POST['mdp1'];
            $mdp2=$_POST['mdp2'];
            if(file_exists("inscrits/".$id. ".htm")){

              echo "<span class='label-danger'>Ce compte existe déja!</span><br><br>";


            }else{

              if ($mdp1==$mdp2) {

                $file = fopen("inscrits/". $id . ".htm", 'w');
                fwrite($file, $mdp1);
                header('Location: index.php');


                
              }else{

              echo "<span class='label-danger'>Les mots de passes sont différents!</span><br><br>"; 


              }

            }



          }else{

            echo "<span class='label-warning'>Entrez vos données</span><br><br>";


          }






       ?> 





    <input type="submit" value="S'Inscrire" class="btn btn-success" name=""/>
        
        
      
</div>

        
        
        
        
        
        
        

        </form>
        </div>
        </body>
</html>