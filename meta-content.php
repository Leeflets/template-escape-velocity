<?php
$content = array(
	'header' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'links' => array(
		    	'type' => 'repeatable',
		    	'title' => 'Header Links',
		    	'description' => 'Add some links if you like.',
		    	'empty-to-show' => 3,
		    	'elements' => array(
		    		'title' => array(
		    			'type' => 'text',
		    			'label' => 'Link Title'
		    		),
		    		'link' => array(
		    			'type' => 'text',
		    			'label' => 'Link'
		    		)
		    	)
		    ),
		    'title' => array(
				'type' => 'text',
				'label' => 'Title',
				'required' => true
			),
			'text' => array(
				'type' => 'wysiwyg',
				'label' => 'Text',
				'rows' => 14
			)
		)
	),
	'intro' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'title' => array(
				'type' => 'text',
				'label' => 'Section Title',
				'required' => true
			),
			'intro-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Intro Text',
				'rows' => 14
			),
			'text' => array(
				'type' => 'wysiwyg',
				'label' => 'Text',
				'rows' => 14
			),
			'sub-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Sub Text',
				'rows' => 14
			),
			'button-text' => array(
				'type' => 'text',
				'label' => 'Button Title'
			),
			'button-link' => array(
				'type' => 'url',
				'label' => 'Button Link'
			)
		)
	),
	'details' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'title' => array(
		    	'type' => 'text',
		    	'label' => 'Section Title',
		    	'required' => true
		    ),
		    'image' => array(
		    	'type' => 'image',
		    	'label' => 'Section Image',
		    	'versions' => array(
		    		'image' => array(
		    			'crop' => array( 'center', 'center' )
		    		)
		    	)
		    ),
		    'intro-title' => array(
		    	'type' => 'text',
		    	'label' => 'Intro Title'
		    ),
		    'text' => array(
		    	'type' => 'wysiwyg',
		    	'label' => 'Text',
		    	'rows' => 14
		    ),
		    'items' => array(
		    	'type' => 'repeatable',
		    	'title' => 'Section Items',
		    	'description' => 'Add section items.',
		    	'empty-to-show' => 2,
		    	'elements' => array(
		    		'title' => array(
		    			'type' => 'text',
		    			'label' => 'Item Title'
		    		),
		    		'text' => array(
		    			'type' => 'wysiwyg',
		    			'label' => 'Item Text'
		    		)
		    	)
		    ),
		    'button-title' => array(
		    	'type' => 'text',
		    	'label' => 'Button Title'
		    ),
		    'button-link' => array(
		    	'type' => 'text',
		    	'label' => 'Button Link'
		    ),
		    'action-title' => array(
		    	'type' => 'text',
		    	'label' => 'Action Title'
		    ),
		    'action-link' => array(
		    	'type' => 'text',
		    	'label' => 'Action Link'
		    )
		)
	),
	'portfolio' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'title' => array(
				'type' => 'text',
				'label' => 'Section Title',
				'required' => true
			),
			'items' => array(
				'type' => 'repeatable',
				'title' => 'Portfolio Items',
				'description' => 'Add portfolio items.',
				'empty-to-show' => 3,
				'elements' => array(
					'screenshot' => array(
						'type' => 'image',
						'label' => 'Screenshot',
						'versions' => array(
							'portfolio' => array(
								'width' => 320,
								'height' => 170,
								'crop' => array( 'center', 'center' )
							)
						)
					),
					'title' => array(
						'type' => 'text',
						'label' => 'Portfolio Item Title'
					),
					'text' => array(
						'type' => 'wysiwyg',
						'label' => 'Portfolio Item Text'
					),
					'link' => array(
						'type' => 'text',
						'label' => 'Portfolio Item Link'
					)
				)
			)
		)
	),
	'contact' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'title' => array(
				'type' => 'text',
				'label' => 'Section Title',
				'required' => true
			),
			'intro-title' => array(
				'type' => 'text',
				'label' => 'Intro Title'
			),
			'intro-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Intro Text',
				'rows' => 14
			),
			'address' => array(
				'type' => 'wysiwyg',
				'label' => 'Address',
				'rows' => 14
			),
			'twitter' => array(
				'type' => 'text',
				'label' => 'Twitter URL'
			),
			'facebook' => array(
				'type' => 'text',
				'label' => 'Facebook URL'
			),
			'email' => array(
				'type' => 'text',
				'label' => 'Email Address'
			),
			'phone' => array(
				'type' => 'text',
				'label' => 'Phone'
			),
			'footer-text' => array(
				'type' => 'wysiwyg',
				'label' => 'Footer Text',
				'rows' => 14
			)
		)
	)
);
