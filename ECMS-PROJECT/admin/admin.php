
<?php
  include("../head.php");

  if (isset($_SESSION["current_session"])) {
    unset($_SESSION["current_session"]);
    $_SESSION["current_session"] = "admin";
  }else {
    $_SESSION["current_session"] = "admin";
  }

  include("../navbar.php");
  include("../sidebar.php");
 ?>





  <!-- =====================================                  contenus               ======================================= -->





  <div class="main " >
    <!--                                                    breadcrumb                                                       -->
    <ul class="breadcrumb" >
      <li><a href="#">accueil</a></li>
    </ul>
    <hr class="rounded">

    <?php
    require_once("../control/config/dbcon.php");
    ?>

    <div class="row_sc " style="margin: 0 auto;">

      <div class="column_sc">
        <div class="card_sc">
          <p><i class="fa fa-user fa_sc"></i></p>
          <?php
          $sql = "SELECT * FROM tbl_users WHERE user_type= '2'";
          $result = mysqli_query($con, $sql);
          $num1 = mysqli_num_rows($result)
          ?>
          <h3><?php echo $num1; ?></h3>
          <p>enseignants</p>
        </div>
      </div>

      <div class="column_sc">
        <div class="card_sc">
          <p><i class="fa fa-check fa_sc"></i></p>

          <?php
          $sql = "SELECT * FROM tbl_users WHERE user_type= '1'";
          $result = mysqli_query($con, $sql);
          $num2 = mysqli_num_rows($result)
          ?>

          <h3><?php echo $num2; ?></h3>
          <p>Résponsables</p>
        </div>
      </div>

      <div class="column_sc">
        <div class="card_sc">
          <p><i class="fa fa-smile-o fa_sc"></i></p>

          <?php
          $sql = "SELECT * FROM tbl_users WHERE user_type= '3'";
          $result = mysqli_query($con, $sql);
          $num3 = mysqli_num_rows($result)
          ?>

          <h3><?php echo $num3; ?></h3>
          <p>Delegues</p>
        </div>
      </div>

    </div>

  </div>

  <?php include("../modal_ajouter_promo.php"); ?>
  <?php include("../modal_ajouter_module.php"); ?>
  <?php include("../modal_ajouterutilisateur.php"); ?>
  <?php include("../modal_delete_user.php") ?>
  <?php include("../modal_deconnexion.php"); ?>
  <?php include("scripts.php"); ?>

  <?php include("../snakebar.php"); ?>

  <?php
    if (isset($_SESSION['message'])) {
      unset($_SESSION['message']);
    }
  ?>
  </body>
</html>


























<!--
Pagination
<div class="center padding-32">
<div class="bar">
<a class="button black" href="#">1</a>
<a class="button hover-black" href="#">2</a>
<a class="button hover-black" href="#">3</a>
<a class="button hover-black" href="#">4</a>
<a class="button hover-black" href="#">5</a>
<a class="button hover-black" href="#">»</a>
</div>
</div>


 <footer id="myFooter" class="footer-margin">
 <div class="container theme-l2 padding-32">
 <h4>Footer</h4>
 </div>
 <div class="container theme-l1">
target="_blank"
<p><a href="#" ></a></p>
</div>
</footer> -->
