$( document ).ready(function(){
    refreshSepet();
})

function refreshSepet() {
    getSepet("sepet-body");
    getAraToplam("sepet-toplam");
    getSepetMiktar("sepet-miktar-badge");
};