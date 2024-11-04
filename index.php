<!doctype html>
<html class="no-js" lang="fr">

    <?php
        $css_file = 'index.css';
        include 'partials/head.php';
    ?>

<body>
    <?php include 'partials/header.php'; ?>


  <div class="Play">
  <section>
    <div class="Bienvenue">
    <h2>BIENVENUE DANS NOTRE STUDIO !</h2>
    </div><div class="play_button">
    <a href="games/memory/index.php">JOUER !</a>
    </div>
  </section>
  </div>


  <section>
    <div class="Rules">
      <div class="rules_title">
        <h3>LES RÈGLES DU JEU</h3>
      </div>
      <div class="rules_img">
        <img src="assets/images/Exemple.png" alt="Exemple" height="400" width="400" class="Image_ex"/>
        <img src="assets/images/Memoire.png" alt="Mémoire" height="400" width="200" class="Image_mem"/>
        <img src="assets/images/Trophee.png" alt="Compétition" height="400" width="200" class="Image_trophee"/>
      </div>
      <div class="Rules_ps">
        <div class="rules_nb">01</div>
        <div class="rules_p">
          <h6>Un jeu amusant</h6>
          <p>Dans ce jeu, vous devez retrouver la paire de chaque carte le plus vite possible! Mettez vos talents à l'épreuve au travers de plusieurs niveaux de difficultés!</p>
        </div>
        <div class="rules_nb">02</div>
        <div class="rules_p">
          <h6>Un exercice mémoriel</h6>
          <p>Un jeu qui entraîne votre mémoire afin de garder votre cerveau actif! Amusez-vous tout en améliorant vos talents et vos capacitées mentales!</p>
        </div>
        <div class="rules_nb">03</div>
        <div class="rules_p">
          <h6>Une compétition</h6>
          <p>Défiez les joueurs du monde entier en faisant les meilleurs temps possibles! Améliorez vos temps et battez vos records!</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="Stats">
      <div class="stats_title">
        <h3>STATISTIQUES</h3>
      </div>
    <div class="stats_content">
        <div class="grosse_img">
          <img src="assets/images/Stats.jpg" height="323" width="323"/>
        </div>

        <div class="stats-lr">
        <div class="stats_left">

          <div class="background"> <img src="assets/images/Cartes.jpg" width="150px" height="150px">
          <div class="statistique"><p>Parties Jouées</p>
        </div></div>

          <div class="background"> <img src="assets/images/leaderboard.png" width="150px" height="150px">
            <div class="statistique"><p>Records journaliers</p>
            </div></div>

        </div>

      <div class="stats_right">

      <div class="background"> <img src="assets/images/user.jpg" width="150px" height="150px">
        <div class="statistique"><p>Joueurs connectés</p>
        </div></div>

        <div class="background"> <img src="assets/images/community.png" width="150px" height="150px">
          <div class="statistique">
        <p>Nombre de membres</p>
          </div></div>

      </div>
        </div>
    </div>
    </div>
  </section>

  <section>
    <div class="team_title">
      <h3>NOTRE ÉQUIPE</h3>
    </div>

    <div class="team_content">

      <div class="team_left">

        <div class="members"> <img src="assets/images/badis.png" width="140px" height="140px">
          <div class="name"><p>OUBAICHE Badis</p></div>
          <div class="work"><p>Développeur HTML/CSS</p></div>
          </div>

        <div class="members"> <img src="assets/images/liam.png" width="140px" height="140px">
          <div class="name"><p>DEPARFOURU Liam</p></div>
          <div class="work"><p>Développeur HTML/CSS</p></div>
          </div>
      </div>
        <div class="team_right">

        <div class="members"> <img src="assets/images/nolhan.png" width="140px" height="140px">
          <div class="name"><p>OPPIO Nolhan</p></div>
          <div class="work"><p>Scrum Master</p><p>Développeur HTML/CSS</p></div>
          </div>

        <div class="members"> <img src="assets/images/shayan.png" width="140px" height="140px">
          <div class="name"><p>CAHELO Shayan</p></div>
          <div class="work"><p>Développeur HTML/CSS</p></div>
          </div>
        </div>

    </div>
  </section>

    <?php include 'partials/footer.php'; ?>

</body>

</html>
