$(document).ready(function () { 
     
    $('#nav li').hover(
        function () {
            $('ul', this).fadeIn( 300 );
            $( '.btn' , this ).css({
                'background-image' : "url('/img/rollover_button.png')",
                'margin-top' : '5px'
            })
        }, 
        function () {        
            $('ul', this).fadeOut( 100 );
            $( '.btn' , this ).css({
                'background-image' : "url('/img/regular_button.png')",
                'margin-top' : '10px'
            })
        }
        )
    /*
    $( '.submenu a' ).click( function(){
        $.post( $( this ).attr('id') , function( data ){
            $( '#centered' ).html( data );
        })
    }
    )
    */
});