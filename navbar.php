<!DOCTYPE html>
<html>
<title>Nhà Mình</title>
<meta property="og:type" content="website"/>
<meta property="og:url" content="https://nhaminhbanduthu.ddns.net/"/>
<meta property="og:description" content="A website where you can buy a cute phone case"/>
<meta property="og:image" content="https://nhaminhbanduthu.ddns.net/IMG/TRANGCHU/ava.jpg"/>
<meta property="og:title" content="nhà mình"/>
<meta property="og:site_name" content="Nhà Mình" />
<meta property="fb:app_id" content="473024653970714" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" >
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


  <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
      <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
      <a href="index.php"><img src="IMG/TRANGCHU/ava.jpg" alt="LOGO" width="110%"></a>
    </div>
    <div class="w3-padding-64 w3-large w3-text-gray" style="font-weight:bold">
      <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align">
        COMBO <i class="fa fa-caret-down"></i>
      </a>
      <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="#" class="w3-bar-item w3-button">Mua 1 tặng 1</a>
        <a href="#" class="w3-bar-item w3-button">Couple</a>
      </div>

      <a href="catalog.php?type=mauchu" class="w3-button w3-block w3-white w3-left-align">
        Mẫu chữ
      </a>

      <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align">
        Mẫu khung <i class="fa fa-caret-down"></i>
      </a>
      <div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
        <a href="catalog.php?type=khungdon" class="w3-bar-item w3-button">Khung đơn</a>
        <a href="catalog.php?type=khungluoi" class="w3-bar-item w3-button">Khung lưới</a>
      </div>
    </div>
  </nav>
  <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
    <div class="w3-bar-item w3-wide"><a href="index.php" class="w3-button">NHÀ MÌNH</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-10 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
  </header>