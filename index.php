<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jean-Julien JUPINET</title>
  <!-- A-0-N16AIJN2BT -->
  <!-- Custom fonts for this theme -->
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/fontawesome-free/css/brands.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.css" rel="stylesheet">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Clamp.js/0.5.1/clamp.min.js"></script>
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/styles/default.min.css"> -->
  <link rel="alternate stylesheet" title="Atom One Dark" href="https://highlightjs.org/static/demo/styles/atom-one-dark.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js"></script>
</head>

<body id="page-top">


<!--
Lawrence «Larry» Tesler, l'inventeur du <kbd>CRTL+C</kbd> <kbd>CRTL+V</kbd>, est mort le 16 février 2020 à 74 ans. Si il était si intelligent, pourquoi est-il mort ?
-->

  <?php

  // SQL Job

  // $servername = "db5000303641.hosting-data.io";
  // $username = "dbu526577";
  // $password = "4bWm8Z/(";
  // $dbname = "dbs296628";

  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "dbs296628";

  // $servername = "127.0.0.1";
  // $username = "phpmyadmin";
  // $password = "simplon3";
  // $dbname = "phpmyadmin";

  $table = "portfolio_tips";

  // // Create connection
  // $conn = new mysqli($servername, $username, $password, $dbname);
  // // Check connection
  // if ($conn->connect_error) {
  //     die("Connection failed: " . $conn->connect_error);
  // } else {
  //     echo "Bien connecté à la DB.";
  // }

  // $conn;

  try
  	{
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  		$conn->beginTransaction();
    }
  catch(PDOException $e)
    {
  		//$conn->rollback();
    	echo "Erreur : " . $e->getMessage();
    }


  // en sqli
  // if ($conn->query($sql) === TRUE) {
  //     echo "Message bien enregistré dans la DB.";
  // } else {
  //     echo "ErreurrRrrRrrr : " . $sql . "<br>" . $conn->error;
  // }

  // $conn = null;

?>


  <?php
  include("navbar.php");
  include("header.php");
  include("portfolio_modals.php");
  include("portfolio.php");
  include("cv.php");
  include("tips.php");
  include("about.php");
  include("contact.php");
  include("footer.php");
  ?>
  

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; JJJ2020</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

  <script type="text/javascript">
    //alert("blah");
    var counter = 0;
    var masthead_icons = ['fas fa-headphones','fas fa-film','fas fa-microchip','fas fa-cat'];
    var portfolio_icons = ['fab fa-adobe','fas fa-atom','fab fa-css3-alt','fas fa-feather'];
    var cv_icons = ['fab fa-adobe','fas fa-atom','fab fa-css3-alt','fas fa-cat'];
    var tips_icons = ['fas fa-smile-wink','fas fa-atom','fab fa-css3-alt','fas fa-cat'];
    var about_icons = ['fab fa-adobe','fas fa-atom','fab fa-css3-alt','fas fa-cat'];
    var contact_icons = ['fab fa-adobe','fas fa-atom','fab fa-css3-alt','fas fa-cat'];
    var masthead_icon = document.getElementById("masthead_icon");
    var portfolio_icon = document.getElementById("portfolio_icon");
    var cv_icon = document.getElementById("cv_icon");
    var tips_icon = document.getElementById("tips_icon");
    var about_icon = document.getElementById("about_icon");
    var contact_icon = document.getElementById("contact_icon");

    function animateCSS(element, animationName, callback) {
        //const node = document.querySelector(element)
        const node = element;
        node.classList.add('animated', animationName)

        function handleAnimationEnd() {
            node.classList.remove('animated', animationName)
            node.removeEventListener('animationend', handleAnimationEnd)

            if (typeof callback === 'function') callback()
        }

        node.addEventListener('animationend', handleAnimationEnd)
    }

    var myInterval = setInterval(
      function(){
        if(counter >= masthead_icons.length)
        {
          counter = 0;
        }
        masthead_icon.className = masthead_icons[counter] + " fa-lg";
        animateCSS(masthead_icon, 'bounceIn');
        portfolio_icon.className = portfolio_icons[counter] + " fa-lg";
        animateCSS(portfolio_icon, 'bounceIn');
        about_icon.className = about_icons[counter] + " fa-lg";
        animateCSS(about_icon, 'bounceIn');
        tips_icon.className = tips_icons[counter] + " fa-lg";
        animateCSS(tips_icon, 'bounceIn');
        cv_icon.className = cv_icons[counter] + " fa-lg";
        animateCSS(cv_icon, 'bounceIn');
        contact_icon.className = contact_icons[counter] + " fa-lg";
        animateCSS(contact_icon, 'bounceIn');
        counter++;
        // alert("fas fa-" + masthead_icons[counter]);
      }
    , 2500);
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>

</body>

</html>
