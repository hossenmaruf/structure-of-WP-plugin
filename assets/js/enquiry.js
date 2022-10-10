;(function($) {

    $('#m-enquiry-form form').on('submit', function(e) {
        e.preventDefault();

        var data = $(this).serialize();

        $.post(test.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.success);
            } else {
                alert(response.data.message);
            }
        })
        .fail(function() {
            alert(test.error);
        })

    });

})(jQuery);