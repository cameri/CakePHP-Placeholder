<?php
 /**
 * CakePHP-Placeholder wraps Brian Kiewer's placeholder generation library
 * Copyright (c) Ricardo Arturo Cabral Mejía
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.md
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Ricardo Arturo Cabral Mejía
 * @link          https://github.com/Cameri/CakePHP-Placeholder
 * @package       CakePHP-Placeholder.Controller.Component
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('PlaceholderAppController', 'Placeholder.Controller');

/**
 * Placeholders Controller
 *
 * @package CakePHP-Placeholder.Controller
 */
class PlaceholderController extends AppController {

/**
 * Components
 *
 * @var mixed 
 */
	var $components = array('Placeholder.Placeholder');

/**
 * Renders a placeholder image
 * 
 * @param int $width Placeholder's width
 * @param int $height Placeholder's height
 * @param string $bgColor Background color in HEX (e.g. 0A0A0A)
 * @param string $textColor Text color in HEX (e.g. 3F3F3F)
 */
	public function display($width, $height = null, $bgColor = null, $textColor = null) {
		// Disable layout and view rendering
		$this->autoRender = false;

		// Set dimensions
		if ($height === null) {
			// e.g. 700x200
			if (preg_match("#^(?<width>\\d+)x(?<height>\\d+)$#", $width, $matches)) {
				$width = $matches['width'];
				$height = $matches['height'];
			} else {
				$height = $width;
			}
		}

		$this->Placeholder->setWidth($width);
		$this->Placeholder->setHeight($height);

		// Set background color
		if ($bgColor !== null) {
			$this->Placeholder->setBackgroundColor($bgColor);	
		}
		

		// Set foreground color
	    if ($textColor !== null) {
	    	$this->Placeholder->setTextColor($textColor);
	    }
	    
	    // Set correct content type
	    //$this->response->type('image/png');

	    //print_r($this);
	    //die();
	    // Render to browser
	    return $this->Placeholder->render();
	}

}
