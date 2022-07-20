( function ( $ ) {
	class ScriptMainJS {
		constructor() {
			this.ondev();
			this.stickyNav();
			this.scrollY();
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
		stickyNav() {
			$( document ).ready( function( e ){
				// let w_out_sticky = document.querySelector( ".header-main-toggle-sticky" );
				let w_out_sticky = document.querySelector( ".header-main-toggle-sticky" ).parentNode.parentNode; // $( ".header-main-toggle-sticky" ).parents( 'header' );
				window.addEventListener( 'scroll', () => {
						window.scrollY > 30 ? w_out_sticky.classList.add( "sticky" ) : w_out_sticky.classList.remove( "sticky" );
				} );
			} );
		}
		scrollY() {
			const thatClass = this;
			$( document ).ready( function(){
				$( 'a[href="#top"]' ).on( 'click', function( e ) {
					e.preventDefault();
					that = thatClass.scrollTop( e, e );
				} );
			} );
		}
		scrollTop( sec = "#section2", nav = "#nav" ) {
			$( 'html, body' ).animate( {
				scrollTop: 0 // $( sec ).offset().top - $( nav ).height(); // minus the nav height
			}, 1000 );			
		}
	}

	new ScriptMainJS();
} )( jQuery );
