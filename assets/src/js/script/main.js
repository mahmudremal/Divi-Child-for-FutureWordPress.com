( function ( $ ) {
	class ScriptMainJS {
		constructor() {
			this.ondev();
			this.navHome();
			this.stickyNav();
			this.scrollY();
			this.homeAccordion();
			this.preventHash();
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
		navHome() {
			$( '.header-main-toggle-sticky .et_pb_module .et_pb_menu_inner_container .et_pb_menu__logo-wrap .et_pb_menu__logo' ).click( function( e ) {
				if( location.href == location.origin + '/' ) {return;}
				location.href = location.origin;
			} );
		}
		stickyNav() {
			$( document ).ready( function( e ){
				// let w_out_sticky = document.querySelector( ".header-main-toggle-sticky" );
				let w_out_sticky = document.querySelector( ".header-main-toggle-sticky" ).parentNode.parentNode; // $( ".header-main-toggle-sticky" ).parents( 'header' );
				window.addEventListener( 'scroll', () => {
					let hasClass = ( $( ".horizental_social" ).hasClass( "on-scroll" ) && $( ".horizental_contact" ).hasClass( "on-scroll" ) );
					window.scrollY > 30 ? w_out_sticky.classList.add( "sticky" ) : w_out_sticky.classList.remove( "sticky" );
					if( window.scrollY > 30 && ! hasClass  ) {
						document.querySelector( ".horizental_social" ).classList.add( "on-scroll" );
						document.querySelector( ".horizental_contact" ).classList.add( "on-scroll" );
					} else if( window.scrollY < 30 && hasClass  ) {
						document.querySelector( ".horizental_social" ).classList.remove( "on-scroll" );
						document.querySelector( ".horizental_contact" ).classList.remove( "on-scroll" );
					} else {}
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
		homeAccordion() {
			var e = $( '.homepage-service-slider-accrodion-section .right-accordion-section .eael-adv-accordion .eael-accordion-list .eael-accordion-header' ),
			i = $( e ).data( 'tab' ),
			img = $( '.homepage-service-slider-accrodion-section .elementor-column.elementor-top-column:first-child .elementor-widget-image img' );
			$( e ).on( 'click', function() {
				$( img ).attr( 'src', $( img ).attr( 'src') + '?' + i );
				// console.log( $( img ).attr( 'src') ) ;
			} );
		}
		preventHash() {
			$( 'a[href="#"]' ).click( function( e ) {
				e.preventDefault();
			} );
		}
	}

	new ScriptMainJS();
} )( jQuery );
