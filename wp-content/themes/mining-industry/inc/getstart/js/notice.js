jQuery(document).ready(function($){

    $(document).on('click', '#mining-industry-welcome-notice .notice-dismiss', function(){

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'mining_industry_dismiss_notice'
            }
        });

    });

});