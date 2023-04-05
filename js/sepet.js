$( document ).ready(function(){
    refreshSepet();
})

function refreshSepet() {
    getSepet();
    getAraToplam();
    getSepetMiktar();
};

function getSepet() {
    fetch ('sepet.php?option=sepet-body')
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("sepet-body").innerHTML = data ;
        })
};

function getAraToplam() {
    fetch('sepet.php?option=sepet-toplam')
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("sepet-toplam").innerHTML = data ;
        })
};

function getSepetMiktar() {
    fetch('sepet.php?option=sepet-miktar')
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("sepet-miktar-badge").innerHTML = data ;
        })
};