<?php

function getFiltreDetay($conn, $filtre_tur,$post_tur) {
    $modelsorgu = mysqli_query($conn,"select distinct ".$filtre_tur." from bisikletler where bisiklet_tur in ('".implode($_GET['tur'])."')");

    while ($satir = mysqli_fetch_array($modelsorgu)) {
      ?>
      <div class="row">
      <div class="col-1">
      <input type="checkbox" id="<?php echo "$satir[0]"; ?>" name="<?php echo "$post_tur"; ?>[]" value="<?php echo "$satir[0]"; ?>" <?php if (isset($_POST[$post_tur])) if (in_array($satir[0],$_POST[$post_tur])) echo'checked="checked"';  ?>>
      </div>
      <div class="col-10">
      <label for="<?php echo "$satir[0]"; ?>" class="text-muted"><?php echo "$satir[0]"; ?></label>
      </div>
      </div>
      <?php
    }

}
?>