<?php
include("baglan.php");
@$option = $_GET['option'];
@$param_id = $_GET['param_id'];
@$param_beden = $_GET['param_beden'];

if ($option == 'sepet-body') {

    $sqlQuery = "SELECT * FROM sepetler WHERE sepet_id = 1";
    $sepetsorgu = mysqli_query($conn,$sqlQuery);

    if ($sepetsorgu -> num_rows > 0) {
            
        while ($satir = mysqli_fetch_array($sepetsorgu)) {
            $bisiklet = $conn -> query("SELECT * FROM bisikletler WHERE id = $satir[2]") -> fetch_array();
        ?>

        <div class="row">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="bisiklet.php?id=<?php echo "$satir[2]"; ?>">
                            <img src="img/<?php echo "$satir[2]"; ?>/1.webp" class="img-fluid rounded-start mt-2">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body m-0 p-0">
                            <a href="bisiklet.php?id=<?php echo "$satir[2]"; ?>" class="card-text m-0 mt-1 ms-2 p-0 link-dark text-decoration-none"><?php if ($bisiklet[2] == NULL) echo "$bisiklet[1] $bisiklet[3] $bisiklet[4]"; else echo "$bisiklet[2] $bisiklet[3] $bisiklet[4]"; ?></a>
                            <p class="card-text m-0 ms-2 p-0" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"><small class="text-body-secondary"><?php echo "$satir[3] - $bisiklet[6]"; ?></small></p>
                            <a href="#" class="link-danger" onclick="rmSepet(<?php echo $satir[2]; ?>,'<?php echo $satir[3]; ?>')"><p class="float-end mx-2"><i class="bi bi-x-square"></i></p></a>
                            <a href="#" class="link-warning" onclick="subSepetMiktar(<?php echo $satir[2]; ?>,'<?php echo $satir[3]; ?>')"><p class="float-end mx-1"><i class="bi bi-dash-square"></i></p></a>
                            <p class="float-end"><?php echo "$satir[4]"; ?></p>
                            <a href="#" class="link-success" onclick="addSepetMiktar(<?php echo $satir[2]; ?>,'<?php echo $satir[3]; ?>')"><p class="float-end mx-1"><i class="bi bi-plus-square"></i></p></a>
                            <p class="card-text m-0 ms-2 p-0"><small class="text-body-secondary"><?php $tempfiyat = number_format($bisiklet[5]); echo "$tempfiyat$"; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        }
    }
    else {
        ?>
        <h6>Sepetiniz boş!</h6>
        <h6>Hadi satın almak için birşeyler ekleyelim.</h6>
        <?php
    }
}



if ($option == 'sepet-toplam') {

    $sepetfiyatarray = ($conn -> query("SELECT bisikletler.bisiklet_fiyat, sepetler.miktar FROM sepetler INNER JOIN bisikletler ON bisikletler.id = sepetler.bisiklet_id where sepet_id = 1") -> fetch_all());
    $aratoplam = 0;
    foreach ($sepetfiyatarray as $value) {
        $aratoplam += $value[0]*$value[1];
    }

    echo number_format($aratoplam)."$";

}



if ($option == 'sepet-miktar') {

    echo $conn -> query("SELECT '' FROM sepetler WHERE sepet_id = 1") -> num_rows;

}



if ($option == 'sepet-miktar-arti') {
    
    $conn -> query("UPDATE sepetler SET miktar = miktar + 1 WHERE bisiklet_id = $param_id AND bisiklet_beden = '$param_beden'");

}



if ($option == 'sepet-miktar-eksi') {
    
    $conn -> query("UPDATE sepetler SET miktar = miktar - 1 WHERE bisiklet_id = $param_id AND bisiklet_beden = '$param_beden' AND miktar > 1");

}



if ($option == 'sepet-ekle') {
    // Checks if the same bike exists in the database
    if (0 == $conn -> query("SELECT * FROM sepetler WHERE sepet_id=1 AND bisiklet_id=$param_id AND bisiklet_beden='$param_beden'") -> num_rows) {
        $conn -> query("INSERT INTO sepetler (sepet_id,bisiklet_id,bisiklet_beden,miktar) VALUES (1,$param_id,'$param_beden',1)");
    }
    else {
        $conn -> query("UPDATE sepetler SET miktar = miktar + 1 WHERE bisiklet_id = $param_id AND bisiklet_beden = '$param_beden'");
    }
}

if ($option == 'sepet-cikar') {

    $conn -> query("DELETE FROM sepetler WHERE sepet_id=1 AND bisiklet_id=$param_id AND bisiklet_beden='$param_beden';");

}

if ($option == 'sepet-body-checkout') {

    $sqlQuery = "SELECT * FROM sepetler WHERE sepet_id = 1";
    $sepetsorgu = mysqli_query($conn,$sqlQuery);
        
    while ($satir = mysqli_fetch_array($sepetsorgu)) {
        $bisiklet = $conn -> query("SELECT * FROM bisikletler WHERE id = $satir[2]") -> fetch_array();
        ?>

        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div style="text-overflow:ellipsis; white-space: nowrap; overflow: hidden;">
                <a href="bisiklet.php?id=<?php echo "$satir[2]"; ?>" class="link-dark text-decoration-none">
                    <h6 class="my-0"><?php if ($bisiklet[2] == NULL) echo "$bisiklet[1] $bisiklet[3] $bisiklet[4]"; else echo "$bisiklet[2] $bisiklet[3] $bisiklet[4]"; ?></h6>
                </a>
                <small class="text-body-secondary"><?php echo "$satir[3] - $bisiklet[6]"; ?></small>
            </div>
            <span class="text-body-secondary"><?php $tempfiyat = number_format($bisiklet[5]); echo "$tempfiyat$"; ?></span>
        </li>

        <?php
    }
}
?>