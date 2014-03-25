# CakePHP-Placeholder

CakePHP-Placeholder is a CakePHP Plugin for generating placeholder images using Brian Kiewel's library (https://github.com/img-src/placeholder).

## Installation

If your Cake application is already in a Git repository, clone CakePHP-Placeholder using git submodule.

    cd app/
    git submodule add -b master https://github.com/Cameri/CakePHP-Placeholder.git Plugin/Placeholder

Otherwise clone the repo or download a tarball and install it into `app/Plugin/Placeholder` or in any of your pluginPaths.

Then activate the plugin in your app/Config/bootstrap.php file as shown below:

    CakePlugin::load('Placeholder', array('bootstrap' => true, 'routes' => true));

Or

	CakePlugin::loadAll(array(
		'PlaceHolder' => array('bootstrap' => true, 'routes' => true)
	));

Or

	CakePlugin::load('Placeholder'); // Load plugin
	CakePlugin::bootstrap('Placeholder'); // Load boostrap
	CakePlugin::routes('Placeholder'); // Load routes

## Configuration

Open app/Plugin/Placeholder/Config/bootstrap.php and change the default settings.

Add, modify or remove routes from app/Plugin/Placeholder/Config/routes.php.

By default, the plugin will route the following:
- http://app/placeholder/78.png (square with 78px sides, default background and text color)
- http://app/placeholder/50x30.png (50x30 rectangle, def. background and text color)
- http://app/placeholder/50/30.png (50x30 rectangle, def. background and text color)
- http://app/placeholder/137/aaa/3a3a3a.png (50x30 rectangle, #aaaaaa background color, #3a3a3a text color)
- http://app/placeholder/50x30/AaAAaa/3a3a3a.png
- http://app/placeholder/50/30/cbcbcb/3a3a3a.png

## Usage

There's two ways to render placeholders using this plugin:

- Point your browser to one of the routes. (e.g. http://yourdomain/placeholder/200x100.png)
- Include Placeholder.Placeholder in your component's array in your own controller. Render the image

## Upcoming features

- PlaceholderHelper to use in templates:
    <?php echo $this->Placeholder->display(50,30); ?>

## Issues 

If you find an issue in the code or want to suggest something, please use the tickets at http://github.com/Cameri/CakePHP-Placeholder/issues

## License

CakePHP-Placeholder is licensed under the MIT license.
