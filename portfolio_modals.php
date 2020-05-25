<!-- Portfolio Modals -->

<?php
// Affiche une liste des messages :
$table = "portfolio_items";
$sqlcount = "SELECT COUNT(*) FROM ".$table;
$sql = "SELECT portfolio_item_id, portfolio_item_img, portfolio_item_description, portfolio_item_title, portfolio_item_content FROM ".$table;
try
  {
    if($decompte = $conn->query($sqlcount)) {
      $nbmessages = $decompte->fetchColumn();
      // echo "<div>Vous avez ".$nbmessages." messages :</div>";
      if( $nbmessages > 0 ){
        $resultats = $conn->query($sql)->fetchAll();
        foreach ($resultats as $row) {
          echo '

          <!-- Portfolio Modal '.$row["portfolio_item_id"].' -->
          <div class="portfolio-modal modal fade" id="portfolioModal'.$row["portfolio_item_id"].'" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
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
                        <!-- Portfolio Modal - Title -->
                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">'.$row["portfolio_item_title"].'</h2>
                        <!-- Icon Divider -->
                        <div class="divider-custom">
                          <div class="divider-custom-line"></div>
                          <div class="divider-custom-icon">
                            <i class="fas fa-star"></i>
                          </div>
                          <div class="divider-custom-line"></div>
                        </div>
                        <!-- Portfolio Modal - Image -->';
                        if(($row["portfolio_item_content"])=="")
                        {
                          echo '<img class="img-fluid rounded mb-5" src="'.($row["portfolio_item_img"]).'" alt="">';
                        } else {
                          echo '<div class="rounded mb-5">'.($row["portfolio_item_content"]).'</div>';
                        }                        
                        echo '<!-- Portfolio Modal - Text -->
                        <p class="mb-5">'.$row["portfolio_item_description"].'</p>
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

// $conn=null;

// Fin SQL JOB Portfolio modals

?>
