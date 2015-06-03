jQuery(document).ready(function(){

    jQuery('.ajaxform').submit( function() {

        $.ajax({
            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : $(this).serialize(),
            success : function( data ) {
                         alert('Your join request was successfully submitted');       
                      },
            error   : function(){
                         alert('Something is wrong');
                      }
        });

        return false;
    });

});