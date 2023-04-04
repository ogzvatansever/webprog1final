<?php
include("baglan.php");

$sqlQuery = "SELECT * FROM sepetler WHERE sepet_id = 1";

$sepetsorgu = mysqli_query($conn,$sqlQuery);

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
                    <a href="#" class="link-danger"><p class="float-end mx-2"><i class="bi bi-x-square"></i></p></a>
                    <a href="#" class="link-warning"><p class="float-end mx-1"><i class="bi bi-dash-square"></i></p></a>
                    <p class="float-end"><?php echo "$satir[4]"; ?></p>
                    <a href="#" class="link-success"><p class="float-end mx-1"><i class="bi bi-plus-square"></i></p></a>
                    <p class="card-text m-0 ms-2 p-0"><small class="text-body-secondary"><?php $tempfiyat = number_format($bisiklet[5]); echo "$tempfiyat$"; ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
?>