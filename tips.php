
<!-- Tips Section -->
<section class="page-section tips bg-couleurB mb-0" id="tips">
  <div class="container-xl mx-3 mx-lg-4 mx-xl-5">

    <!-- About Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase">Tips !</h2>

    <!-- Icon Divider -->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i id="tips_icon" class="fas fa-smile-wink"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

    <!-- About Section Content -->
    <!-- Tips Grid Items -->
    <div class="row">
      <?php
      // Affiche une liste des messages :
      $table = "portfolio_tips";
      $sqlcount = "SELECT COUNT(*) FROM ".$table;
      $sql = "SELECT tip_id, tip_titre, tip_contenu FROM ".$table;
      try
        {
          if($decompte = $conn->query($sqlcount)) {
            $nbmessages = $decompte->fetchColumn();
            // echo "<div>Vous avez ".$nbmessages." messages :</div>";
            if( $nbmessages > 0 ){
              $resultats = $conn->query($sql)->fetchAll();
              foreach ($resultats as $row) {
                echo '
                  <!-- Tips Item '.$row["tip_id"].' -->
                  <div class="col-md-6 col-lg-4">
                    <div class="tips-item mx-auto" data-toggle="modal" data-target="#tipsModal'.$row["tip_id"].'">
                      <div class="tips-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="tips-item-caption-content text-center text-white">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                      <h4 class="card-title border-0 px-2 py-1 text-white">'.$row["tip_titre"].'</h4>
                      <div class="mb-2"><span class="py-0 px-2" id="tips_card_'.$row["tip_id"].'">'.$row["tip_contenu"].'</span></div>
                    </div>
                  </div>
                  <script language="javascript">var tips_card_'.$row["tip_id"].' = document.getElementById("tips_card_'.$row["tip_id"].'"); $clamp(tips_card_'.$row["tip_id"].',{clamp:5});</script>
                ';
              }
            }
          }
        }
      catch (PDOException $e)
        {
          $conn->rollback();
        	echo "Erreur : " . $e->getMessage();
        }

      // en sqli
      // if ($resultats->num_rows > 0) {
      //     while($row = $resultats->fetch_assoc()) {
      //         echo "<div class='message'>Message id : " . $row["id"]."<br>Nom : " . $row["lastname"]. "      Prénom : " . $row["firstname"]. "<br>E-Mail : ".$row["mail"]."<br>Message : ".$row["message"]."</div>";
      //     }
      // } else {
      //     echo "<div class='message'>Pas de messages dans la DB.</div>";
      // }

      // $conn=null;

      // Fin SQL JOB

      ?>


    </div>

  </div>
</section>


<!-- Tips Modals -->

<?php
// Affiche une liste des messages :
$table = "portfolio_tips";
$sqlcount = "SELECT COUNT(*) FROM ".$table;
$sql = "SELECT tip_id, tip_titre, tip_contenu FROM ".$table;
try
  {
    if($decompte = $conn->query($sqlcount)) {
      $nbmessages = $decompte->fetchColumn();
      // echo "<div>Vous avez ".$nbmessages." messages :</div>";
      if( $nbmessages > 0 ){
        $resultats = $conn->query($sql)->fetchAll();
        foreach ($resultats as $row) {
          echo '
          <!-- Tips Modal '.$row["tip_id"].' -->
            <div class="tips-modal modal fade" id="tipsModal'.$row["tip_id"].'" tabindex="-1" role="dialog" aria-labelledby="tipsModal1Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      <i class="fas fa-times"></i>
                    </span>
                  </button>
                  <div class="modal-body text-center">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-8">
                          <!-- tips Modal - Title -->
                          <h2 class="tips-modal-title text-secondary text-uppercase mb-0">'.$row["tip_titre"].'</h2>
                          <!-- Icon Divider -->
                          <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon">
                              <i class="fas fa-star"></i>
                            </div>
                            <div class="divider-custom-line"></div>
                          </div>
                          <!-- tips Modal - Image -->
                          <!-- <img class="img-fluid rounded mb-5" src="img/tips/cabin.png" alt=""> -->
                          <!-- tips Modal - Text -->
                          <div class="text-left">
                            <p class="mb-5">'.$row["tip_contenu"].'</p>
                          </div>
                          <button class="btn btn-primary" href="#" data-dismiss="modal">
                            <i class="fas fa-times fa-fw"></i>
                            Close Window
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          ';
        }
      }
    }
  }
catch (PDOException $e)
  {
    $conn->rollback();
    echo "Erreur : " . $e->getMessage();
  }

// en sqli
// if ($resultats->num_rows > 0) {
//     while($row = $resultats->fetch_assoc()) {
//         echo "<div class='message'>Message id : " . $row["id"]."<br>Nom : " . $row["lastname"]. "      Prénom : " . $row["firstname"]. "<br>E-Mail : ".$row["mail"]."<br>Message : ".$row["message"]."</div>";
//     }
// } else {
//     echo "<div class='message'>Pas de messages dans la DB.</div>";
// }

$conn=null;

// Fin SQL JOB Portfolio modals

?>
