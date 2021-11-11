
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
        $sliders = $database->get_slider_by_type($_REQUEST['type']);
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
      $products = $database->get_product_by_type($_REQUEST['type']);
      foreach ($products as $product) {
      ?>
        <div class="w3-col l3 s6">
          <div class="w3-container">
            <div class="w3-display-container">
              <img id="<?=$product->ID?>1" alt="<?=$product->name?>" onclick="zoom_img(<?=$product->ID?>1,<?=$product->ID?>2)" src="<?=$product->smallimage?>" style="width:100%">
              <img id="<?=$product->ID?>2" style="display: none;" src="<?=$product->image?>" style="width:100%">
              <span class="w3-tag w3-display-topright" onclick="zoom_img(<?=$product->ID?>1,<?=$product->ID?>2)"><i class="fa fa-search"></i></span>
            </div>
            <div class="w3-row w3-display-container">
              <p class="w3-col s6 l6"><?=$product->name?><br><b><?=$product->price?></b></p>
              <div class="w3-col s6 l6">
                <button class="w3-btn w3-red w3-display-right" onclick="navigator.clipboard.writeText('<?=$product->ID?>'); alert('chọn mẫu thành công')">chọn</button>
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