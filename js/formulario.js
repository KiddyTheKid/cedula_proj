$(document).ready(function() {
    $('#form').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#alertas').html(data);
                document.getElementById("nom").value = "";
                document.getElementById("ape").value = "";
                document.getElementById("correo").value = "";
            }
        })
        return false;
    });
});