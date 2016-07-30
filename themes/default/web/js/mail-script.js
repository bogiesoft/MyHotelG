$(document).ready(function() {
    $("#order-form").submit(function() {
        $.ajax({
            type: "POST",
            url: "/mail.php",
            data: $(this).serialize()
        }).done(function() {
            $('#order-form').trigger( 'reset' );
            $('.b-widget-order__title').text('ваша заявка отправлена');
        });
        return false;
    });
});