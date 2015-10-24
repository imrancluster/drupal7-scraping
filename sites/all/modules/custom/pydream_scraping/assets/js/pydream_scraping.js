jQuery(document).ready(function($) {

    $('.scrap-delete').click( function() {

        if (confirm("Are you sure want to delete this item?") == true) {
            return true;
        } else {
            return false;
        }

        return false;

    });
});