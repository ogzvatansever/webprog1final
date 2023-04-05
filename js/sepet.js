function refreshSepet() {
    getSepet();
    getAraToplam();
};

function getSepet() {
    fetch ('sepet.php')
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("sepet-body").innerHTML = data ;
        })
};

function getAraToplam() {
    fetch('sepet_toplam.php')
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("sepet-toplam").innerHTML = data ;
        })
}