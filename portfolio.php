<!-- Portfolio Section -->
<section class="page-section portfolio bg-couleurB" id="portfolio">
  <div class="container-xl mx-3 mx-lg-4 mx-xl-5">

    <!-- Portfolio Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

    <!-- Icon Divider -->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i id="portfolio_icon" class="fas fa-star"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

    <!-- Portfolio Grid Items -->
    <div class="row">


      <?php
      // Affiche une liste des messages :
      $table = "portfolio_items";
      $sqlcount = "SELECT COUNT(*) FROM ".$table;
      $sql = "SELECT portfolio_item_id, portfolio_item_img FROM ".$table;
      // global $conn;
      try
        {
          if($decompte = $conn->query($sqlcount)) {
            $nbmessages = $decompte->fetchColumn();
            // echo "<div>Vous avez ".$nbmessages." messages :</div>";
            if( $nbmessages > 0 ){
              $resultats = $conn->query($sql)->fetchAll();
              foreach ($resultats as $row) {
                echo '

                  <!-- Portfolio Item '.$row["portfolio_item_id"].' -->
                  <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal'.$row["portfolio_item_id"].'">
                      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                          <i class="fas fa-plus fa-3x"></i>
                        </div>
                      </div>
                      <img class="img-fluid" src="'.$row["portfolio_item_img"].'" alt="">
                    </div>
                  </div>
                ';
              }
            }
          }
        }
      catch (PDOException $e)
        {
          //$conn->rollback();
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
    <!-- /.row -->

  </div>
</section>
