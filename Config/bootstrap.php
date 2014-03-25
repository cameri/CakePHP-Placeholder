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


/**
 * Default bootstrap for CakePHP Placeholder plugin.
 * 
 * CakePlugin::load('Placeholder', array('routes' => true, 'bootstrap' => true));
 */

/**
 * Default background color.
 */
Configure::write('Placeholder.backgroundColor', 'F2F2F4');

/**
 * Default background color.
 */
Configure::write('Placeholder.textColor', '34343C');

/**
 * Whether caching is enabled or not.
 */
Configure::write('Placeholder.cache', true);

/**
 * Cache directory. Not used if caching is disabled.
 */
Configure::write('Placeholder.cacheDir', CACHE . DS . 'placeholder/');

/**
 * TTF Font.
 */
//Configure::write('Placeholder.font', PATH_TO_TTF_FONT);

/**
 * Browser cache expiration.
 */
Configure::write('Placeholder.expires', 604800);

/**
 * Placeholder maximum width.
 */
Configure::write('Placeholder.maxWidth', 20000);

/**
 * Placeholder maximum height.
 */
Configure::write('Placeholder.maxHeight', 20000);

