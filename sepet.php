<?php
include("baglan.php");
session_start();
@$option = $_GET['option'];
@$param_id = $_GET['param_id'];
@$param_beden = $_GET['param_beden'];
$sepetid = $conn -> query("SELECT id FROM sepet WHERE status = 0 AND user = '".@$_SESSION["user"]."'") -> fetch_array();
if ($sepetid == NULL) {
    $conn -> query("INSERT INTO sepet (user) VALUES ('".@$_SESSION["user"]."')");
    $sepetid = $conn -> query("SELECT id FROM sepet WHERE status = 0 AND user = '".@$_SESSION["user"]."'") -> fetch_array();
}


if ($option == 'sepet-body') {
    
    $sqlQuery = "SELECT * FROM sepet_detay WHERE sepet_id = $sepetid[0]";
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

    $sepetfiyatarray = ($conn -> query("SELECT bisikletler.bisiklet_fiyat, sepet_detay.miktar FROM sepet_detay INNER JOIN bisikletler ON bisikletler.id = sepet_detay.bisiklet_id where sepet_id = $sepetid[0]") -> fetch_all());
    $aratoplam = 0;
    foreach ($sepetfiyatarray as $value) {
        $aratoplam += $value[0]*$value[1];
    }

    echo number_format($aratoplam)."$";

}



if ($option == 'sepet-miktar') {

    echo $conn -> query("SELECT '' FROM sepet_detay WHERE sepet_id = $sepetid[0]") -> num_rows;

}



if ($option == 'sepet-miktar-arti') {
    
    $conn -> query("UPDATE sepet_detay SET miktar = miktar + 1 WHERE sepet_id = $sepetid[0] AND bisiklet_id = $param_id AND bisiklet_beden = '$param_beden'");

}



if ($option == 'sepet-miktar-eksi') {
    
    $conn -> query("UPDATE sepet_detay SET miktar = miktar - 1 WHERE sepet_id = $sepetid[0] AND bisiklet_id = $param_id AND bisiklet_beden = '$param_beden' AND miktar > 1");

}



if ($option == 'sepet-ekle') {
    // Checks if the same bike exists in the database
    if (0 == $conn -> query("SELECT * FROM sepet_detay WHERE sepet_id=$sepetid[0] AND bisiklet_id=$param_id AND bisiklet_beden='$param_beden'") -> num_rows) {
        $conn -> query("INSERT INTO sepet_detay (sepet_id,bisiklet_id,bisiklet_beden,miktar) VALUES ($sepetid[0],$param_id,'$param_beden',1)");
    }
    else {
        $conn -> query("UPDATE sepet_detay SET miktar = miktar + 1 WHERE sepet_id = $sepetid[0] AND bisiklet_id = $param_id AND bisiklet_beden = '$param_beden'");
    }
}

if ($option == 'sepet-cikar') {

    $conn -> query("DELETE FROM sepet_detay WHERE sepet_id = $sepetid[0] AND bisiklet_id=$param_id AND bisiklet_beden='$param_beden';");

}

if ($option == 'sepet-body-checkout') {

    $sqlQuery = "SELECT * FROM sepet_detay WHERE sepet_id = $sepetid[0]";
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
            <span class="text-body-secondary"><?php $tempfiyat = number_format($bisiklet[5]); echo "$tempfiyat$ x".$satir[4]; ?></span>
        </li>

        <?php
    }
}

if ($option == 'checkout') {

    $conn -> query("INSERT INTO siparis (sepet_id,buyer_fname,buyer_sname,buyer_adress,buyer_adress2,buyer_country,buyer_city,buyer_zip,buyer_cc_owner,buyer_cc_number,buyer_cc_expiry,buyer_cc_cvv) VALUES ($sepetid[0],'".$_GET['buyer_fname']."','".$_GET['buyer_sname']."','".$_GET['buyer_adress']."','".$_GET['buyer_adress2']."','".$_GET['buyer_country']."','".$_GET['buyer_city']."','".$_GET['buyer_zip']."','".$_GET['buyer_cc_owner']."','".$_GET['buyer_cc_number']."','".$_GET['buyer_cc_expiry']."','".$_GET['buyer_cc_cvv']."')");
    $conn -> query("UPDATE sepet SET status = 1 WHERE id = $sepetid[0]");

}
?>