$(document).ready(function() {
    $("#order-form").submit(function() {
        $.ajax({
            type: "POST",
            url: "/mail.php",
            data: $(this).serialize()
        }).done(function() {
            
        });
        return false;
    });
});