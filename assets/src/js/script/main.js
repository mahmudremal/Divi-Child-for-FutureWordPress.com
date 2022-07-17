( function ( $ ) {
	class ScriptMainJS {
		constructor() {
			this.ondev();
		}
		ondev() {
			$( document ).keyup( function( e ){
				if( ! e.ctrlKey ) {return;}
        e.preventDefault();
				switch( e.keyCode ) {
					case 70 : // f
					case 102 : // F
						$( '#main-css-css' ).attr( 'href', $( '#main-css-css' ).attr( 'href' ) + Math.floor( Math.random() * 10 )						);
						break;
				}
			} );
		}
	}

	new ScriptMainJS();
} )( jQuery );
