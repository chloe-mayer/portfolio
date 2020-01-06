<?php
session_start();

$connexion = mysqli_connect("localhost", "root", "", "livreor");

if(isset($_POST['confirm_update']))
{
    if(isset($_POST['login']))
    {
        if($_POST['login'] != $_SESSION['login'])
        {
            $userconnect = $_SESSION['id'];
            $login = htmlspecialchars($_POST['login']);
            $query = "UPDATE utilisateurs SET login='$login' WHERE id='$userconnect'";
            $execquery = mysqli_query($connexion, $query);
            $_SESSION['login'] = $login;
        }
    }

    if(isset($_POST['password']))
    {
        if($_POST['password'] != $_SESSION['password'])
        {
            $password = htmlspecialchars($_POST["mdp"]);
            $userconnect = $_SESSION['id'];
            $query = "UPDATE utilisateurs SET password='sha1($password)' WHERE id='$userconnect'";
            $execquery = mysqli_query($connexion, $query);
            $_SESSION['password'] = $password;
        }
    }
}
?>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Qui veux tu être succube?</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Fondamento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Underdog&display=swap" rel="stylesheet">

  </head>

<body id="profil">

<header>
        <nav>
          <div class="topnav">

            <ul id="menuchlo">

              <li class="btn">
                <a class="btnch" href="livre-or.php">Livre D'or</a>
              </li>

              <li class="btn deroulant">
                <a class="btnch" href="Index.php">Accueil ↓ </a>
                  <ul class="sous">
                    <li><a id="comchlo" href="commentaire.php">Commentaire</a></li>
                  </ul>
              </li> 

              <li>
                <div id="diablechlo">
                  <img id="diablotin" src="diablotin1.jpg" width="90%">
                </div>
              </li>

              <li class="btn">
                <a class="btnch" href="profil.php">Profil</a>
              </li>             
            </ul>

          </div>
        </nav>
      </header>

    <section>

      <div>
        <img src="">
      </div>

      <div class="titre">
        <h1> PROFIL de <?php/* echo $_SESSION['login'] */?></h1>
      </div>

      <div>
        <img src="">
      </div>
    </section>

    <form method="post" action="" enctype="multipart/form-data">

      <section class="sectionpro">

        <article>
        
          <fieldset class="fieldsetpro">
          
            <legend><h1 class="titrepro">Informations :Avec quel blase voudras-tu être fouaillé(e)?</h1></legend><br />

            <div class="infoblock">

                  <label for="login" class="infopro">Login :</label><br />
                  <input class="inputpro" type="text" name="login" value="<?php/* echo $_SESSION['login'] */?>"/> <br/><br/>


                  <label for="mdp" class="infopro">Mot de passe :</label><br />
                  <input class="inputpro" type="text" name="mdp"/>

            </div>  

          </fieldset>

        </article>

      </section>

    </form>

        <article class="blockbouton">

              <div>
                <br /><input class="boutonpro" type="submit" name="confirm_update" value="Mettre à jour votre profil" /></br></br>
              </div>

              <div>
                <a class="deco" href="deconnexion.php"> Se déconnecter </a>
              </div>

        </article>
      </section>

</body>

</html>