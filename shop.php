<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      background-color: #0255a5;
    }

    .container-fluid a{
    color:#fff;
    }
    div .panel-footer{
      cursor: pointer;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    /* Custom */
    .description {
        display:none;
        background-color: #0255a5;
        border-radius: 5px;
        position:absolute;
        border:1px solid #FFFFFF;
        width:150px;
        height:50px;
        text-align: center;
    }


  </style>
  <script src="js/shop.js"></script>

  <script>

    window.username = <?php echo '"'.$_SESSION["username"].'"';?>;

  </script>
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span>
          <?php
          if(isset($_SESSION['username'])){
            echo $_SESSION['username'];
          }else
          {
          echo "Guest";
          } 
          ?>
        </a>
        <a id="order-history" class="navbar-brand" href="#" onClick="return history();"><span class="glyphicon glyphicon-tasks"
            aria-hidden="true"></span></a>

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" onClick="return switchToCheckout();" id="cart"><span class="glyphicon glyphicon-shopping-cart"></span>
              Cart<div class="description">Cosul este gol</div></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Tricou oficial 2018-2019 "Acasa"</div>
          <div class="panel-body"><img src="/images/shop/rm-229965.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer" id="1" pret="120" produs='Tricou oficial 2018-2019 "Acasa"'>
            <p>120$<div class="cart-action"><input type="submit" value="Adauga in cos" class="btnAddAction"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-danger">
          <div class="panel-heading">Sort oficial 2018-2019 "Acasa"</div>
          <div class="panel-body"><img src="/images/shop/rm-229841.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer" id="2" pret="25" produs='Sort oficial 2018-2019 "Acasa"'>
            <p>25$<div class="cart-action"><input type="submit" value="Adauga in cos" class="btnAddAction"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="panel panel-success">
          <div class="panel-heading">Tricou oficial 2018-2019 "Deplasare"</div>
          <div class="panel-body"><img src="/images/shop/rm-229858.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer" id="3" pret=120 produs='Tricou oficial 2018-2019 "Deplasare"'>
            <p>120$<div class="cart-action"><input type="submit" value="Adauga in cos" class="btnAddAction"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Tricou oficial 2018-2019 "3rd"(F)</div>
          <div class="panel-body"><img src="/images/shop/rm-229972.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
          <div class="panel-footer" id="4" pret=130 produs='Tricou oficial 2018-2019 "3rd"'>
            <p>130$<div class="cart-action"><input type="submit" value="Adauga in cos" class="btnAddAction"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <p>RealMadrid#Official @Copyright</p>
  </footer>

</body>

</html>