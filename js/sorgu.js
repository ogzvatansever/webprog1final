$( document ).ready(function() {
    $("#sorgu").submit();
});

$("#sorgu").submit(function (e) {
    e.preventDefault();
    
    $.ajax({
        type: 'POST',
        url: 'sorgu.php',
        data: $(this).serialize(),
        beforeSend: function () {
            document.getElementById("filtrebuton").innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Filtrele';
        },
        success: function (data) {
            document.getElementById("filtrebuton").innerHTML = 'Filtrele';
            document.getElementById("sorgular").innerHTML = data ;
        }
    });
});