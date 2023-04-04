function getSepet() {
    fetch ('sepet.php')
        .then((response) => response.text())
        .then((data) => {
            document.getElementById("sepet-body").innerHTML = data ;
        })
};