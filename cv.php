<!-- C.V. Section -->
<section class="page-section bg-secondary text-white mb-0" id="cv">
  <div class="container">

    <!-- About Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-white">C.V.</h2>

    <!-- Icon Divider -->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i id="cv_icon" class="fas fa-star"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

    <!-- About Section Content -->
    <div class="row">
      <div class="col-lg-6 ml-auto">
        <p class="lead">
            <h5>Diplômes :</h5>
            <ul>
              <li>Baccalauréat STT Informatique et Gestion</li>
              <li>Baccalauréat Multimédia - Majeure Animation 3D / Effets spéciaux à l’Institut des Arts de la Diffusion à Louvain-La-Neuve (diplôme belge - équivalent BAC+3) (Niveau Master) </li>
            </ul>
          <h5>Atouts :</h5>
            <ul>
              <li>Grande autonomie</li>
              <li>Capacité d'adaptation, recherche d'information et de solutions, à l'autoformation</li>
              <li>Amour du travail en équipe, empathie et calme</li>
              <li>Curiosité et amour de la technique, inventivité</li>
              <li>Motivé et sérieux, esprit d'initiative</li>
            </ul>
          <h5>Divers :</h5>
            <ul>
              <li><b>Langues : </b>Français correct, Anglais (lu, parlé, écrit)</li>
              <li><b>Permis B</b></li>
              <li><b>DIY :</b> Electronique : Arduino, Impression 3D (conception et amélioration), Electronique audio : réalisation de pédales d’effets pour guitare, réparation, bricolage en général</li>
              <!-- <li><b>Loisirs : </b>Consommateur insatiable de musique, concerts, collectionneur de vinyls, guitare, basse, jeux de société, cinéma et séries (cinéma d’auteur, cinéma de genre), littérature</li> -->
            </ul>
        </p>
      </div>
      <div class="col-lg-6 mr-auto">
      <p class="lead">
            <h5>Techniques :</h5>
            <ul>
              <li><b>3D : </b>Autodesk Maya, Autodesk Fusion360, Pixologic ZBrush, Autodesk 3D Studio Max, Blender, Meshlab, Cloudcompare, The Foundry Mari, Substance Painter / Designer, ...</li>
              <li><b>2D : </b>Adobe Photoshop, Illustrator, Gimp...</li>
              <li><b>Vidéo / Compositing : </b>Adobe After Effects, Adobe Premiere, AVID, Nuke, PFTrack, Boujou</li>
              <li><b>Photogrammétrie : </b>OpenNVM et suite opensource, Agisoft Photoscan</li>
              <li><b>Impression 3D : </b>Cura, Slic3r, Simplify 3D, Autodesk Netfabb, connaissance du firmware Marlin, du fonctionnement et des procédés</li>
              <li><b>Programmation : </b>Atom, Visual Studio Code, Git/GitHub, langages HTML, CSS, PHP, SQL, JS, jQuery, notions en C, C++, Python.</li>
            </ul>
          <h5>Atouts :</h5>
            <ul>
              <li>Grande autonomie</li>
              <li>Capacité d'adaptation, recherche d'information et de solutions, à l'autoformation</li>
              <li>Amour du travail en équipe, empathie et calme</li>
              <li>Curiosité et amour de la technique, inventivité</li>
              <li>Motivé et sérieux, esprit d'initiative</li>
            </ul>
        </p>
      </div>
    </div>

    <!-- About Section Button -->
    <div class="lead text-center mt-4 col-12 col-lg-8 mx-auto px-0 px-lg-1">
      <!-- <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
        <i class="fas fa-download mr-2"></i>
        Free Download!
      </a> -->
      <!-- Simplon progress : 4/(7*30.5) -->
      Formation WebDev @ Simplon (mk3)
      <!-- <div class="progress w-90 w-md-25 mt-1"> -->
      <?php
        $jour_debut = 48; // 17 février
        $jour_fin = 275; // 1 octobre - année bissextile
        // total = 275 - 48 = 227
        $jour_now = date("z"); // 57 donc 57-48 = 9
        $pourcent_formation = ($jour_now-$jour_debut)*100/($jour_fin-$jour_debut);
      ?>
      <div class="progress mt-1 w-100">
        <!-- <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div> -->
        <?php
          echo '<div id="simplon_progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: '.sprintf("%.2f",$pourcent_formation).'%; height:1.25em;">'.sprintf("%.2f",$pourcent_formation).'%</div>';
        ?>
        <!-- <div id="simplon_progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 1.87%%; height:1.25em;">1.87%</div> -->
      </div>
    </div>

  </div>
</section>
