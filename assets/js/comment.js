
jQuery(document).ready(function () {
    jQuery('#btn-add-comment').click(function () {
        jQuery("#myModal").modal('show');
    });

});


jQuery('#create').click(function (event) {

    event.preventDefault();

    var captchacode = jQuery('#captchacode').val();

    jQuery.ajax({
        url: "guest-comment/captchacode.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            captchacode: captchacode

        },
        success: function (html) {
            var status = html.status;
            var msg = html.msg;

            if (status == "incorrect") {

                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#capspan").fadeOut(2000);

            } else if (status == "correct") {
                jQuery('#client-comment').submit();
                swal({
                    title: "Added!",
                    text: "successfully added your testimonial.",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        }
    });
});

