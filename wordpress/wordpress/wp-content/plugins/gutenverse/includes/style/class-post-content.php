<?php
/**
 * Gutenverse Post_Content
 *
 * @author Jegstudio
 * @since 1.0.0
 * @package gutenverse\style
 */

namespace Gutenverse\Style;

/**
 * Class Post_Content
 *
 * @package gutenverse\style
 */
class Post_Content extends Style_Abstract {
	/**
	 * Block Name
	 *
	 * @var array
	 */
	protected $name = 'post-content';

	/**
	 * Constructor
	 *
	 * @param array $attrs Attribute.
	 */
	public function __construct( $attrs ) {
		parent::__construct( $attrs );

		$this->set_feature(
			array(
				'background'  => null,
				'border'      => null,
				'positioning' => null,
				'animation'   => null,
				'advance'     => null,
			)
		);
	}

	/**
	 * Generate style base on attribute.
	 */
	public function generate() {
		if ( isset( $this->attrs['alignment'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}, .{$this->element_id} p, .{$this->element_id} span, .{$this->element_id} a",
					'property'       => function( $value ) {
						return "justify-content: {$value}; text-align: {$this->handle_align($value)};";
					},
					'value'          => $this->attrs['alignment'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['typography'] ) ) {
			$this->inject_typography(
				array(
					'selector' => ".{$this->element_id}, .{$this->element_id} p, .{$this->element_id} span, .{$this->element_id} a",
					'value'    => $this->attrs['typography'],
				)
			);
		}

		if ( isset( $this->attrs['color'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}, .{$this->element_id} p, .{$this->element_id} span, .{$this->element_id} a",
					'property'       => function( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['color'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['textShadow'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}, .{$this->element_id} p, .{$this->element_id} span, .{$this->element_id} a",
					'property'       => function( $value ) {
						return $this->handle_text_shadow( $value );
					},
					'value'          => $this->attrs['textShadow'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['colorHover'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}:hover, .{$this->element_id}:hover p, .{$this->element_id}:hover span, .{$this->element_id}:hover a",
					'property'       => function( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['colorHover'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['textShadowHover'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}:hover, .{$this->element_id}:hover p, .{$this->element_id}:hover span, .{$this->element_id}:hover a",
					'property'       => function( $value ) {
						return $this->handle_text_shadow( $value );
					},
					'value'          => $this->attrs['textShadowHover'],
					'device_control' => false,
				)
			);
		}
	}
}
