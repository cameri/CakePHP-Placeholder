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
 * @package       CakePHP-Placeholder.Config
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

 	Router::connect('/placeholder/:width/:height', array(
 			'controller' => 'placeholder',
 			'action' => 'display',
 			'plugin' => 'placeholder'
 		),
 		array(
 			'pass' => array('width', 'height'),
 			'width' => '[0-9]+',
 			'height' => '[0-9]+',
 			'ext' => 'png'
 		)
 	);
 	Router::connect('/placeholder/:width/:height/:bgColor/:textColor', array(
 			'controller' => 'placeholder',
 			'action' => 'display',
 			'plugin' => 'placeholder'
 		),
 		array(
 			'pass' => array('width', 'height', 'bgColor', 'textColor'),
 			'width' => '[0-9]+',
 			'height' => '[0-9]+',
 			'bgColor' => '([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})',
 			'textColor' => '([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})',
 			'ext' => 'png'
 		)
 	); 	
 	Router::connect('/placeholder/:widthXheight', array(
 			'controller' => 'placeholder',
 			'action' => 'display',
 			'plugin' => 'placeholder'
 		),
 		array(
 			'pass' => array('w', 'h'),
 			'widthXheight' => '(?<w>[0-9]+)x(?<h>[0-9]+)',
 			'ext' => 'png'
 		)
 	);
 	Router::connect('/placeholder/:widthXheight/:bgColor/:textColor', array(
 			'controller' => 'placeholder',
 			'action' => 'display',
 			'plugin' => 'placeholder'
 		),
 		array(
 			'pass' => array('w', 'h', 'bgColor', 'textColor'),
 			'widthXheight' => '(?<w>[0-9]+)x(?<h>[0-9]+)',
 			'bgColor' => '([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})',
 			'textColor' => '([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})',
 			'ext' => 'png'
 		)
 	); 	
  	Router::connect('/placeholder/:width/:bgColor/:textColor', array(
 			'controller' => 'placeholder',
 			'action' => 'display',
 			'plugin' => 'placeholder'
 		),
 		array(
 			'pass' => array('width', 'width', 'bgColor', 'textColor'),
 			'width' => '[0-9]+',
 			'bgColor' => '([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})',
 			'textColor' => '([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})',
 			'ext' => 'png'
 		)
 	);

 	Router::connect('/placeholder/:width', array(
 			'controller' => 'placeholder',
 			'action' => 'display',
 			'plugin' => 'placeholder'
 		),
 		array(
 			'pass' => array('width'),
 			'ext' => 'png'
 		)
 	);

	Router::parseExtensions('png');