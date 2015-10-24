jQuery(document).ready(function($) {

    $('.scrap-delete').click( function() {

        if (confirm("Are you sure want to delete this item?") == true) {
            return true;
        } else {
            return false;
        }

        return false;

    });

    $('.scrap-manual').click( function() {

        var sid = $(this).attr('id');

        jQuery.ajax({
            url: '/scraping-manual/' + sid,
            beforeSend: function() { $('.scrap-loading').show(); },
            complete: function() { $('.scrap-loading').hide(); },
            type: "POST",
            dataType: "json",
            success: function(response){
                jQuery(function(){

                    console.log(response)

                });
            }
        });

        return false;

    });
});