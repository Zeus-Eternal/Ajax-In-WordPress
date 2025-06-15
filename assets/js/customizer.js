( function( $ ) {
    wp.customize( 'ajaxinwp_color_scheme', function( value ) {
        value.bind( function( to ) {
            document.documentElement.style.setProperty( '--ajaxinwp-color-scheme', to );
        } );
    } );
} )( jQuery );
