<!DOCTYPE html>
<html>
<title>Nhà Mình</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="SOURCE.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  /* The Modal (background) */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.9);
    /* Black w/ opacity */
  }

  /* Modal Content (image) */
  .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 500px;
  }

  /* Caption for img*/
  #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
  }

  /* Add Animation */
  .modal-content,
  #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
    from {
      -webkit-transform: scale(0)
    }

    to {
      -webkit-transform: scale(1)
    }
  }

  @keyframes zoom {
    from {
      transform: scale(0)
    }

    to {
      transform: scale(1)
    }
  }

  /* The Close Button */
  .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
  }

  .close:hover,
  .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px) {
    .modal-content {
      width: 100%;
    }
  }

  .w3-sidebar a,
  form {
    font-family: "Roboto", sans-serif
  }

  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  .w3-wide {
    font-family: "Montserrat", sans-serif;
  }

  /* cart */
  .cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
  }

  .cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
  }

  .cart-row {
    display: flex;
  }

  .cart-item {
    width: 45%;
  }

  .cart-price {
    width: 20%;
    font-size: 1.2em;
    color: #333;
  }

  .cart-quantity {
    width: 35%;
  }

  .cart-item-title {
    color: #333;
    margin-left: .5em;
    font-size: 1.0em;
  }

  .cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
  }

  .btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius: .3em;
    font-weight: bold;
  }

  .btn-danger:hover {
    background-color: #CC4C4C;
  }

  .cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid #56CCF2;
    background-color: #eee;
    color: #333;
    padding: 0;
    text-align: center;
    font-size: 1.2em;
    margin-right: 25px;
  }

  .cart-row:last-child {
    border-bottom: 1px solid black;
  }

  .cart-row:last-child .cart-column {
    border: none;
  }

  .cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
  }

  .cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
  }

  .cart-total-price {
    color: #333;
    font-size: 1.1em;
  }

  .bottom-bar .search {
    width: 40%;
  }

  .bottom-bar .search input[type=text] {
    width: 150%;
    height: 40px;
    padding: 0 15px;
    color: #666666;
    border: 1px solid black;
    border-radius: 4px;
  }

  .bottom-bar .search button {
    position: relative;
    width: 40px;
    height: 38px;
    top: 0px;
    right: 16px;
    padding: 0 15px;
    border: none;
    background: none;
    color: gray;
    border-radius: 0 2px 2px 0;
  }

  .bottom-bar .search button:hover {
    background: white;
    color: black;
  }
  
</style>

<body class="w3-content" style="max-width:1200px">


  <!-- Sidebar/menu -->
  <?php
  require_once('database/database.php');
  require('navbar.php');
  ?>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
    <header class="w3-container w3-xlarge">
      <br>
    </header>

    <!-- Image header -->
    <div class="w3-display-container w3-container">
      <div class="slideshow-container">
        <script src="">
          function copyID() {
            console.log(arguments[0]);
          }
        </script>
        <?php
        $database = new database();
        $sliders = $database->get_slider_by_type(isset($_REQUEST['type'])?$_REQUEST['type']:"trangchu");
        foreach ($sliders as $slider) {
        ?>
          <div class="mySlides fade">

            <img src="<?= $slider->image ?>" style="width:100%">

          </div>
        <?php
        }
        ?>
      </div>

      <br>

      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

    </div>


    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>
    <!-- Product grid -->

    <div class="w3-row w3-whitescale">
      <?php
      $products = $database->get_product_by_type(isset($_REQUEST['type'])?$_REQUEST['type']:"trangchu");
      foreach ($products as $product) {
      ?>
        <div class="w3-col l3 s6">
          <div class="w3-container">
            <div class="w3-display-container">
              <img id="<?=$product->ID ?>1" alt="<?=$product->name?>" onclick="zoom_img(<?=$product->ID ?>1,<?=$product->ID ?>2)" src="<?=$product->smallimage ?>" style="width:100%">
              <img id="<?= $product->ID ?>2" style="display: none;" src="<?=$product->image ?>" style="width:100%">
            <span class="w3-tag w3-display-topright" onclick="zoom_img(<?=$product->ID ?>1,<?=$product->ID ?>2)"><i class="fa fa-search"></i></span>
            </div>
            <div class="w3-row w3-display-container">
              <p class="w3-col s6 l6"><?=$product->name ?><br><b><?=$product->price ?></b></p>
              <div class="w3-col s6 l6">
                <button class="w3-btn w3-red w3-display-right" onclick="navigator.clipboard.writeText('<?=$product->ID ?>'); alert('chọn mẫu thành công')">chọn</button>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      $database->closeConnect();
      ?>

      <!-- zoom function -->
      <!-- The Modal -->
      <div id="myModal" class="modal" onclick="close_zoom(myModal)">
        <span class="close" onclick="close_zoom(myModal)">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
      </div>

      <script>
        // Get the modal
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        function zoom_img(img_id, img_id_zoom) {
          var modal = document.getElementById("myModal");
          var modalImg = document.getElementById("img01");
          var captionText = document.getElementById("caption");
          modal.style.display = "block";
          modalImg.src = img_id_zoom.src;
          captionText.innerHTML = img_id.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        function close_zoom(id_modal) {
          id_modal.style.display = "none";
        }
      </script>
      <!-- end_zoom fuction -->

      <script>
        // Accordion 
        function myAccFunc() {
          var x = document.getElementById("demoAcc");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }

        function myAccFunc1() {
          var x = document.getElementById("demoAcc1");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }

        function myAccFunc2() {
          var x = document.getElementById("demoAcc2");
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }

        // Click on the "Jeans" link on page load to open the accordion for demo purposes
        document.getElementById("myBtn").click();


        // Open and close sidebar
        function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("myOverlay").style.display = "none";
        }
      </script>

      <script src="IMGDEMO/jquery-2.1.4.min.js"></script>
</body>

</html>