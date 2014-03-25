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

	Router::connect('/ph/*', array('controller' => 'placeholder', 'action' => 'display', 'plugin' => 'placeholder'));
