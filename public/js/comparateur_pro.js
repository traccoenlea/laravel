$(document).ready(function () {
    $("#marque").click(function (e) {
        e.preventDefault();
        var value = $("#marqueTxt").val();

        $.ajax({
            url: '/showAll',
            type: 'GET',
            data : value,
            dataType: 'html',
            success: function (code_html, statut) {
                //$('#listHere').html(data);
                alert('ça fonctionne');
                console.log('trop bien ça a fonctinnné');
            },

            error: function (resultat, statut, erreur) {
                console.log('t nul');

            },

        });


        $("#taille").click(function (e) {
            e.preventDefault();
            var value = $("#tailleTxt").val();

            alert(value);
        });
    });
});