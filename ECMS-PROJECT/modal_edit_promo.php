<!-- ===================================      modal modifier utilisateur       =================================-->
<?php if (isset($_SESSION['show_modal_edit_promo'])): ?>
  <div id="id05" class="modal-form show">
  <?php else: ?>
    <div id="id05" class="modal-form hide">
    <?php endif; ?>
    <form class="modal-content" action="edit_promo.php" method="post">
      <div class="container-form">
        <span class="close-d btn_cancel_modif_promo" title="Fermer le Modal">&times;</span>
        <h1 style="color:#5dd08a;">modifier cette promotion</h1>
        <p>Veuillez modifier ce formulaire.</p>

        <input type="hidden" name="id" value="<?php echo $_SESSION['id_edit']; ?>">

        <hr>
        <label for="name"><b>nom de la promotion</b> </label>
        <input type="text" value="<?php echo $_SESSION['name_edit']; ?>" placeholder="Entrer le nom de la promotion" name="name"  title="veuillez remplir ce champ" required>

        <label for="username"><b>Nom de responsable</b></label> <br>
        <select class="select border list_resp" name="respid">
              <?php
                $id = $_SESSION['respid_edit'];
                $sql = "SELECT * FROM tbl_users WHERE user_id='$id'";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);

                if ($num > 0) {
                  $row1 = mysqli_fetch_array($result);
                  echo '<option value="'.$row1['user_id'].'" selected>'.$row1['user_name'].'</option>';
                }

                $sql = "SELECT * FROM tbl_users WHERE user_type= '1' AND user_id!='$id'";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                  echo'<option value="'.$row['user_id'].'">'.$row['user_name'].'</option>';
                }
              ?>
        </select>

        <div class="clearfix-form">
          <button type="button"  class="mdl cancelbtn-form btn_cancel_modif_promo">Cancel</button>
          <button type="submit" name="modifier_promotion" class="mdl signupbtn-form">modifier</button>
        </div>
      </div>
    </form>
  </div>
