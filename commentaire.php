<?php session_start() ?>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Doléances</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Fondamento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Underdog&display=swap" rel="stylesheet">

  </head>

<body id="commentaire">

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

  <h2 id="com">Commentaire</h2>

  <section id="sectioncom">

    <article class="articlecom">
    
      <div>
        <p class="textcom" id="textcom1">Dis nous ce que tu penses, tes ressentis ci dessous :</p>
      </div>
    
      <div id="divtext">
        <input id="inputcom" type="text" style="height:135px;" name="Com">
      </div>
    
      <div>
         <br /><input class="boutonpro" type="submit" name="confirm_update" value="Confirmer" /></br></br>
      </div>
  
      <div>
        <p class="textcom">( Bien evidemment, on ne pourras rien y faire) <br>
          T'avais pas qu'a être là baby. Tu auras tout ton temps; alors plains toi tant que tu le souhaites.<br>
          On adore !</p>
      </div>

    </article>

  </section>

  </body>

</html>