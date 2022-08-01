<?php
/**
 * Enqueue theme assets
 *
 * @package Divi-child
 */

namespace DIVI_CHILD_THEME\Inc;

use DIVI_CHILD_THEME\Inc\Traits\Singleton;

class Shortcode_Divi {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * Home page short code on What we have done section
		 */
		add_shortcode( 'whatwehavedone', [ $this, 'whatwehavedone'] );
	}
	public function whatwehavedone( $args = [] ) {
		$args = wp_parse_args( $args, [
			'limit' => 12,
			'row' => 3,
			'pagination' => 0
		] );
		// ( $args[ 'row' ] / 12 )
		$column = [ '1_1', '1_1', '1_2', '1_3', '1_4', '1_5', '1_6' ];
		$column = isset( $column[ $args[ 'row' ] ] ) ? $column[ $args[ 'row' ] ] : $column[ 4 ];
		?>
		<div class="whatwehavedone">
			<div class="et_pb_row et_pb_row_9 et_pb_gutters3">
				<?php foreach( [ [], [] ] as $i => $project ) : ?>
				<div class="et_pb_column et_pb_column_<?php echo esc_attr( $column ); ?> et_pb_column_19 et_pb_css_mix_blend_mode_passthrough">
					<div class="portfolio_grid-item">
						<div class="et_pb_blurb_content">
							<div class="et_pb_main_blurb_image">
								<span class="et_pb_image_wrap et_pb_only_image_mode_wrap">
									<img
										width="558"
										height="676"
										src="https://zenwebnet.com/wp-content/uploads/2019/08/datachannel_portfolio.jpg"
										alt="datachannel_portfolio"
										class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone wp-image-102 et-animated lazyloaded"
										sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 558px, 100vw"
										srcset="
											https://zenwebnet.com/wp-content/uploads/2019/08/datachannel_portfolio.jpg         558w,
											https://zenwebnet.com/wp-content/uploads/2019/08/datachannel_portfolio-480x582.jpg 480w
										" data-ll-status="loaded" />
									<noscript>
										<img
										width="558"
										height="676"
										src="https://zenwebnet.com/wp-content/uploads/2019/08/datachannel_portfolio.jpg"
										alt="datachannel_portfolio"
										srcset="
											https://zenwebnet.com/wp-content/uploads/2019/08/datachannel_portfolio.jpg         558w,
											https://zenwebnet.com/wp-content/uploads/2019/08/datachannel_portfolio-480x582.jpg 480w
										"
										sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 558px, 100vw"
										class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone wp-image-102" />
									</noscript>
								</span>
							</div>
							<div class="et_pb_blurb_container">
								<div class="et_pb_blurb_description">
									<div class="title_info">
										<h3>DataChannel</h3>
										<p>Corporate Website</p>
										<div class="cl">&nbsp;</div>
									</div>
									<p>
										<a class="explore" href="https://zenwebnet.com/project/data-channel/" rel="nofollow">View</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div
						class="et_pb_module et_pb_blurb et_pb_blurb_7 portfolio_grid et_pb_text_align_left et_pb_blurb_position_top et_pb_bg_layout_dark et_had_animation"
					>
						<div class="et_pb_blurb_content">
							<div class="et_pb_main_blurb_image">
								<span class="et_pb_image_wrap et_pb_only_image_mode_wrap"
									><img
										width="558"
										height="676"
										src="https://zenwebnet.com/wp-content/uploads/2019/08/thetourbasket_portfolio.jpg"
										alt="thetourbasket_portfolio"
										class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone wp-image-106 lazyloaded et-animated"
										sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 558px, 100vw"
										srcset="
											https://zenwebnet.com/wp-content/uploads/2019/08/thetourbasket_portfolio.jpg         558w,
											https://zenwebnet.com/wp-content/uploads/2019/08/thetourbasket_portfolio-480x582.jpg 480w
										"
										data-ll-status="loaded" /><noscript
										><img
											width="558"
											height="676"
											src="https://zenwebnet.com/wp-content/uploads/2019/08/thetourbasket_portfolio.jpg"
											alt="thetourbasket_portfolio"
											srcset="
												https://zenwebnet.com/wp-content/uploads/2019/08/thetourbasket_portfolio.jpg         558w,
												https://zenwebnet.com/wp-content/uploads/2019/08/thetourbasket_portfolio-480x582.jpg 480w
											"
											sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 558px, 100vw"
											class="et-waypoint et_pb_animation_off et_pb_animation_off_tablet et_pb_animation_off_phone wp-image-106" /></noscript
								></span>
							</div>
							<div class="et_pb_blurb_container">
								<div class="et_pb_blurb_description">
									<div class="title_info">
										<h3>The Tour Basket</h3>
										<p>Tour Booking e-commerce</p>
										<div class="cl"></div>
									</div>
									<p>
										<a
											href="https://zenwebnet.com/project/the-tour-basket/"
											rel="nofollow"
											class="explore"
											>View</a
										>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>	
		<?php
	}

}
