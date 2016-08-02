jQuery(document).ready(function () {
    jQuery('.open-popup-link').magnificPopup({
        type: 'inline',
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });

    jQuery(".newsletter").click(function (e) {
        e.preventDefault();
        //alert(ajax.ajaxUrl);
        var id = jQuery('.freebie_id').val();
        var email = jQuery('.newsletter_email').val();
        jQuery('.result').html("<img src='" + loading + "'>");
        jQuery.ajax({
            data: {action: 'download', id: id, email: email},
            type: 'post',
            dataType: "json",
            url: ajaxurl,
            success: function (data) {
                //alert(data);
                if (data.error == '') {
                    if (data.return == 1) {
                        jQuery('.result').html("Download link is sent to your email.Please check there...");
                        //window.open(data.file_path, '_blank').focus();
                    }
                    else
                    {
                        jQuery('.result').html("Error Downloading.Please again..");
                    }
                }
                else
                {
                    jQuery('.result').html(data.error);
                }

            }
        });
    });
});