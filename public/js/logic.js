$(document).ready(function() {
    $('#myform').submit(function (event) {
        e.preventDefault();

        var dataString = $('form#myform').serialize();
        var formAction = $('form#myform').attr('action');
        $.ajax({
            type: "POST",
            url: formAction + '/make',
            data: dataString,
            success: function (data) {
                alert("Testing ajax forms: " + data);
            }
        }, "json");

        return false;

    });

});