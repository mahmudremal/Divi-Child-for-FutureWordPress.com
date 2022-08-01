<?php
/**
 * Enqueue theme assets
 *
 * @package Divi-child
 */

namespace DIVI_CHILD_THEME\Inc;

use DIVI_CHILD_THEME\Inc\Traits\Singleton;

class Horizental_ConnectAddon {
	use Singleton;

	protected function __construct() {
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		if( is_admin() ) {return;}
		add_action( 'wp_footer', [ $this, 'social' ] );
		add_action( 'wp_footer', [ $this, 'phone' ] );
	}

	public function social() {
		?>
		<!-- Horizental Social Icons -->
		<div class="horizental_social">
			<ul class="et-social-icons">
				<li class="et-social-icon et-social-follow" data-target="facebook">
					<a href="<?php $this->getSocial( 'facebook', true ); ?>" class="icon" target="_blank">
						<?php $this->icon( 'facebook', true ); ?>
						<span>Facebook</span>
					</a>
				</li>
				<li class="et-social-icon et-social-follow" data-target="twitter">
					<a href="<?php $this->getSocial( 'twitter', true ); ?>" class="icon" target="_blank">
						<?php $this->icon( 'twitter', true ); ?>
						<span>Twitter</span>
					</a>
				</li>
				<li class="et-social-icon et-social-follow" data-target="linkedin">
					<a href="<?php $this->getSocial( 'linkedin', true ); ?>" class="icon" target="_blank">
						<?php $this->icon( 'linkedin', true ); ?>
						<span>LinkedIn</span>
					</a>
				</li>
				<li class="et-social-icon et-social-follow" data-target="instagram">
					<a href="<?php $this->getSocial( 'instagram', true ); ?>" class="icon" target="_blank">
						<?php $this->icon( 'instagram', true ); ?>
						<span>Instagram</span>
					</a>
				</li>

				<li class="et-social-icon et-social-follow" data-target="whatsapp">
					<a href="<?php $this->getSocial( 'whatsapp', true ); ?>" data-alternate="https://api.whatsapp.com/send/?phone=%2B8801814118328&text=Hi!,I'm from futureWordpress. Wonna get an consult.&type=phone_number&app_absent=0" class="icon" target="_blank">
						<?php $this->icon( 'whatsapp', true ); ?>
						<span>Whatsapp</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- End Horizental Social Icons -->
		<?php
	}
	public function phone() {
		?>
		<!-- Horizental Phone -->
		<div class="horizental_contact">
			<label><a href="tel:+8801814118328"><?php esc_html_e( 'Call Us', 'domain' ); ?> -  <?php esc_html_e( '+880 1814-118 328', 'domain' ); ?></a></label>
		</div>
		<!-- End Horizental Phone -->
		<?php
	}
	public function icon( $for = false, $echo = false ) {
		if( ! $for ) {return;}
		$icon = $this->getSvg( $for );
		if( $icon ) {
			$icon = '<svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">' . $icon . '</svg>';
			if( $echo ) {
				echo $icon;
			} else {
				return $icon;
			}
		} else {
			if( ! $echo ) {
				return '';
			}
		}
	}
	public function getSvg( $for ) {
		$svg = [
			'whatsapp' => '<path fill-rule="evenodd" clip-rule="evenodd" class="svg-change-fill" data-fill="#FFF" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.241 11.241 0 005.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292zm0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.345 9.345 0 01-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4 5.183 0 9.397 4.22 9.397 9.4 0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055-.158-.295 0-.445.15-.584.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297.266-.664.287-1.24.22-1.363-.07-.123-.26-.203-.54-.357z"></path>',
			'facebook' => '<path class="svg-change-fill" data-fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path>',
			'twitter' => '<path class="svg-change-fill" data-fill="#FFF" d="M28 8.557a9.913 9.913 0 01-2.828.775 4.93 4.93 0 002.166-2.725 9.738 9.738 0 01-3.13 1.194 4.92 4.92 0 00-3.593-1.55 4.924 4.924 0 00-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 00-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 01-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 004.6 3.42 9.893 9.893 0 01-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 007.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path>',
			'linkedin' => '<path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 010 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" class="svg-change-fill" data-fill="#FFF"></path>',
			'email' => '<path class="svg-change-fill" data-fill="#FFF" d="M26 21.25v-9s-9.1 6.35-9.984 6.68C15.144 18.616 6 12.25 6 12.25v9c0 1.25.266 1.5 1.5 1.5h17c1.266 0 1.5-.22 1.5-1.5zm-.015-10.765c0-.91-.265-1.235-1.485-1.235h-17c-1.255 0-1.5.39-1.5 1.3l.015.14s9.035 6.22 10 6.56c1.02-.395 9.985-6.7 9.985-6.7l-.015-.065z"></path>',
			'messanger' => '<path class="svg-change-fill" data-fill="#FFF" d="M16 5C9.986 5 5.11 9.56 5.11 15.182c0 3.2 1.58 6.054 4.046 7.92V27l3.716-2.06c.99.276 2.04.425 3.128.425 6.014 0 10.89-4.56 10.89-10.183S22.013 5 16 5zm1.147 13.655L14.33 15.73l-5.423 3 5.946-6.31 2.816 2.925 5.42-3-5.946 6.31z"></path>',
			'telegram' => '<path class="svg-change-fill" data-fill="#FFF" d="M25.515 6.896L6.027 14.41c-1.33.534-1.322 1.276-.243 1.606l5 1.56 1.72 5.66c.226.625.115.873.77.873.506 0 .73-.235 1.012-.51l2.43-2.363 5.056 3.734c.93.514 1.602.25 1.834-.863l3.32-15.638c.338-1.363-.52-1.98-1.41-1.577z"></path>',
			'gmail' => '<path class="svg-change-fill" data-fill="#fff" opacity=".25" d="M4.958 6.569h22.338V25.43H4.958z"></path><path d="M28.709 7.321a1.7 1.7 0 00-1.409-.752h-.077l-1.1.8-.082.06-9.952 7.271L5.961 7.3l-1-.733H4.7A1.7 1.7 0 003 8.273v15.454a1.676 1.676 0 00.069.481A1.7 1.7 0 004.7 25.431h1.261V11.36l7.35 5.368 2.416 1.764.445.326 2.778-2.029 7.088-5.177v13.819H27.3a1.7 1.7 0 001.634-1.223 1.675 1.675 0 00.066-.481V8.273a1.7 1.7 0 00-.291-.952z" class="svg-change-fill" data-fill="#fff"></path>',
			'snapchat' => '<path class="svg-change-fill" data-fill="#FFF" d="M26.177 20.978c-2.867-.473-4.157-3.414-4.21-3.54l-.01-.02c-.153-.31-.187-.57-.1-.772.164-.39.774-.583 1.177-.71.113-.037.22-.07.306-.105.715-.28 1.073-.625 1.066-1.03-.006-.312-.252-.593-.642-.732a1.168 1.168 0 0 0-.44-.084.975.975 0 0 0-.405.083c-.34.16-.65.246-.91.258a.789.789 0 0 1-.357-.087l.027-.45.005-.062c.09-1.432.203-3.215-.266-4.264C20.03 6.34 17.073 6.1 16.2 6.1h-.052l-.363.003c-.87 0-3.818.243-5.208 3.36-.47 1.05-.357 2.833-.268 4.264l.03.513a.83.83 0 0 1-.41.09c-.276 0-.6-.087-.97-.26a.795.795 0 0 0-.335-.067c-.43 0-.946.282-1.026.704-.06.305.077.748 1.054 1.134.087.036.193.07.305.105.403.128 1.012.322 1.18.71.084.203.05.463-.103.773l-.01.022c-.054.125-1.344 3.068-4.21 3.54a.437.437 0 0 0-.366.455.6.6 0 0 0 .048.196c.216.504 1.123.87 2.775 1.13.055.075.113.34.148.5.036.16.07.32.12.494.05.17.18.374.514.374.133 0 .292-.03.475-.067.275-.053.652-.127 1.124-.127.26 0 .532.022.805.067.532.09.985.41 1.51.78.75.53 1.6 1.132 2.894 1.132.034 0 .07 0 .105-.005.04.002.095.004.153.004 1.29 0 2.142-.6 2.892-1.132.526-.37.978-.69 1.51-.78.274-.045.545-.068.807-.068.45 0 .805.056 1.123.12.2.037.36.057.476.057h.024c.246 0 .42-.13.488-.365.05-.17.086-.327.12-.49.037-.16.094-.422.15-.496 1.65-.256 2.56-.624 2.773-1.125a.568.568 0 0 0 .047-.196.433.433 0 0 0-.363-.458z"/>',
			'youtube' => '<path class="svg-change-fill" data-fill="#FFF" d="M26.78 11.6s-.215-1.515-.875-2.183c-.837-.876-1.774-.88-2.204-.932-3.075-.222-7.693-.222-7.693-.222h-.01s-4.618 0-7.697.222c-.43.05-1.368.056-2.205.932-.66.668-.874 2.184-.874 2.184S5 13.386 5 15.166v1.67c0 1.78.22 3.56.22 3.56s.215 1.516.874 2.184c.837.875 1.936.85 2.426.94 1.76.17 7.48.22 7.48.22s4.623-.007 7.7-.23c.43-.05 1.37-.056 2.205-.932.66-.668.875-2.184.875-2.184s.22-1.78.22-3.56v-1.67c0-1.78-.22-3.56-.22-3.56zm-13.052 7.254v-6.18l5.944 3.1-5.944 3.08z"/>',
			'instagram' => '<g class="svg-change-fill" data-fill="#FFF"><path d="M16 6.162c3.204 0 3.584.012 4.85.07 1.17.053 1.804.25 2.227.413.56.218.96.478 1.38.898.42.42.68.82.898 1.38.164.423.36 1.058.413 2.228.058 1.27.07 1.65.07 4.85s-.012 3.587-.07 4.85c-.053 1.17-.25 1.807-.413 2.23-.218.56-.478.96-.898 1.38-.42.42-.82.68-1.38.898-.423.164-1.058.36-2.228.413-1.27.058-1.65.07-4.85.07s-3.587-.012-4.85-.07c-1.17-.053-1.807-.25-2.23-.413a3.724 3.724 0 0 1-1.38-.898c-.42-.42-.68-.82-.898-1.38-.164-.424-.36-1.06-.413-2.23-.058-1.265-.07-1.645-.07-4.85s.012-3.583.07-4.85c.053-1.17.25-1.803.413-2.226.218-.56.478-.96.898-1.38.42-.42.82-.68 1.38-.898.424-.164 1.06-.36 2.23-.413 1.265-.058 1.645-.07 4.85-.07M16 4c-3.26 0-3.668.014-4.948.072-1.277.058-2.15.26-2.913.558-.79.307-1.46.717-2.13 1.384S4.938 7.35 4.63 8.14c-.297.762-.5 1.635-.558 2.912C4.014 12.332 4 12.742 4 16s.014 3.668.072 4.948c.058 1.277.26 2.15.558 2.913a5.92 5.92 0 0 0 1.384 2.13 5.896 5.896 0 0 0 2.125 1.383c.76.298 1.632.5 2.91.56 1.28.057 1.69.07 4.95.07s3.665-.013 4.945-.07c1.277-.06 2.15-.26 2.913-.56a5.845 5.845 0 0 0 2.125-1.383 5.898 5.898 0 0 0 1.384-2.126c.296-.762.5-1.635.557-2.912.058-1.28.072-1.69.072-4.948s-.015-3.668-.073-4.948c-.058-1.277-.26-2.15-.558-2.913a5.877 5.877 0 0 0-1.385-2.125 5.886 5.886 0 0 0-2.125-1.384c-.76-.296-1.634-.5-2.91-.557C19.667 4.013 19.257 4 16 4z"/><path d="M16 9.838a6.163 6.163 0 0 0 0 12.324c3.402 0 6.162-2.76 6.162-6.162S19.402 9.838 16 9.838zM16 20c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"/><circle cx="22.406" cy="9.594" r="1.44"/></g>'

		];
		return isset( $svg[ $for ] ) ? $svg[ $for ] : false;
	}
	public function getSocial( $for = false, $echo = false ) {
		$social = [
			'facebook' => 'https://www.facebook.com/futurewordpress/',
			'twitter' => 'https://twitter.com/futurewordpress/',
			'linkedin' => 'https://in.linkedin.com/company/futurewordpress/',
			'whatsapp' => 'https://wa.me/+8801814118328',
			'instagram' => 'https://www.instagram.com/futurewordpress/',
		];
		if( ! $for ) {
			if( ! $echo ) {
				return $social;
			}
		} else {
			if( $echo ) {
				echo isset( $social[ $for ] ) ? $social[ $for ] : '';
			} else {
				return isset( $social[ $for ] ) ? $social[ $for ] : '';
			}
		}
	}
}
