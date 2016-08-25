$(document).ready(function () {
    $("#order-form").submit(function () {
        if ($("#medicalCenter").val() != "") {
            $.ajax({
                type: "POST",
                url: "/mail.php",
                data: $(this).serialize()
            }).done(function () {
                $('#order-form').trigger('reset');
                $(".medical--center").removeClass("medical--center--alert");
                $('.b-widget-order__title').text('ваша заявка отправлена');
            });
            return false;
        }
        else {
            $(".medical--center").addClass("medical--center--alert");
            return false;
        }
    });
});