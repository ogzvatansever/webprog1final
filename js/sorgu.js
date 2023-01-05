$( document ).ready(function() {
    $("#sorgu").submit();
});

$("#sorgu").submit(function (e) {
    e.preventDefault();
    
    $.ajax({
        type: 'POST',
        url: 'sorgu.php',
        data: $(this).serialize(),
        success: function (data) {
            document.getElementById("sorgular").innerHTML = data ;
        }
    });
});