$( document ).ready( function() {
    $( '#uno' ).click( function(){
        $.post( '/usuarios/login', function( data ){
            $( '#contenido' ).html( data );
        } )
    })
    
    $( '#dos' ).click( function(){
        $( '#contenido' ).html( 'Click en dos' );
    })
})