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

function addSepetMiktar(id,beden) {
    fetch(`sepet.php?option=sepet-miktar-arti&param_id=${id}&param_beden=${beden}`)
        .then(() => refreshSepet());
};

function subSepetMiktar(id,beden) {
    fetch(`sepet.php?option=sepet-miktar-eksi&param_id=${id}&param_beden=${beden}`)
        .then(() => refreshSepet());
};

function addSepet() {
    getform = document.querySelector("#bisiklet");
    getparamid = getform.querySelector('input[name="param_id"]').value;
    getparambeden = getform.querySelector('input[name="param_beden"]:checked').value;
    fetch(`sepet.php?option=sepet-ekle&param_id=${getparamid}&param_beden=${getparambeden}`)
        .then(() => refreshSepet())
        .then(() => {
            const bsOffcanvas = new bootstrap.Offcanvas('#offcanvasRight');
            bsOffcanvas.show();
        });
};

function rmSepet(id,beden) {
    fetch(`sepet.php?option=sepet-cikar&param_id=${id}&param_beden=${beden}`)
        .then(() => refreshSepet());
};