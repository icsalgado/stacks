<?php
/**
 * Gutenverse Post_Comment
 *
 * @author Jegstudio
 * @since 1.0.0
 * @package gutenverse\style
 */

namespace Gutenverse\Style;

/**
 * Class Post_Comment
 *
 * @package gutenverse\style
 */
class Post_Comment extends Style_Abstract {
	/**
	 * Block Name
	 *
	 * @var array
	 */
	protected $name = 'post-comment';

	/**
	 * Constructor
	 *
	 * @param array $attrs Attribute.
	 */
	public function __construct( $attrs ) {
		parent::__construct( $attrs );

		$this->set_feature(
			array(
				'background' => null,
				'border'     => null,
				'animation'  => null,
				'advance'    => null,
			)
		);
	}

	/**
	 * Generate style base on attribute.
	 */
	public function generate() {}
}
