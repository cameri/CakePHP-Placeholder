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
App::import('Vendor', 'Placeholder.placeholder/i/placeholder.class');

/**
 * Wraps Brian Kiewer's placeholder library inside a CakePHP reusable component
 *
 * @package       CakePHP-Placeholder.Controller.Component
 */
class PlaceholderComponent extends Component {
/**
 * Placeholder instance
 * 
 * @var Placeholder $placeholder Holds a reference to the Placeholder object
 */
	private $placeholder = null;

/**
 * Constructor.
 *
 * @param ComponentCollection $collection
 * @param array $settings
 */
	public function __construct(ComponentCollection $collection, $settings = array()) {
		parent::__construct($collection, $settings);
		$config = Configure::read('Placeholder');
		$this->settings = Hash::merge($config, $settings);
	}

/**
 * Initializes PlaceholderComponent for use in the controller.
 *
 * @param Controller $controller A reference to the instantiating controller object
 * @return void
 */
	public function initialize(Controller $controller) {

		$this->placeholder = new Placeholder();
		$this->setBackgroundColor($this->settings['backgroundColor']);
		$this->setTextColor($this->settings['textColor']);
		$this->setCache($this->settings['cache']);
		if (isset($this->settings['font'])) {
			$this->setFont($this->settings['font']);
		}
		if ($this->settings['cache']) {
			$this->setCacheDir($this->settings['cacheDir']);
		}
	}

/**
 * Leverage __call magic method for wrapping
 *
 * @param string $method A method that Placeholder class implements
 * @param mixed $args Arguments passed to $method
 * @return void
 */
    public function __call($method, $args) {
    	if (empty($this->placeholder)) {
    		throw new MethodNotAllowedException();
    	}

	    if (method_exists($this->placeholder, $method)) { 
	        $caller = array($this->placeholder, $method);
	        return call_user_func_array($caller, $args);
	    } else {
	    	throw new NotImplementedException();
	    }
    }

}
