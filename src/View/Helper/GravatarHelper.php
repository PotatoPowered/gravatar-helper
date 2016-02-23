<?php
/**
 * Gravatar Helper (https://github.com/PotatoPowered/gravatar-helper)
 *
 * Licensed under The MIT License
 * For full copyrgiht and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @author      Blake Sutton <blake@potatopowered.net>
 * @copyright   Copyright (c) Potato Powered Software
 * @link        http://potatopowered.net
 * @since       1.0
 * @version     1.0
 * @license     http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace GravatarHelper\View\Helper;

use Cake\View\Helper;

/**
 * Class GravatarHelper
 *
 * A helper that provides gravatar images for profile use in CakePHP 3.x
 */
class GravatarHelper extends Helper
{
    /**
     * Takes and email address and options and returns a gravatar
     *
     * This function takes in a users email address and options and then provides either a gravatar image html tag
     * or an image tag with the specified default options.
     *
     * @param string $email The gravatar email address.
     * @param array $options An array specify overrides to the default options
     * - size: The width and height of the profile (150 default)
     * - default: The default gravatar image (mm default) [List Here](http://en.gravatar.com/site/implement/images/)
     * - class: The css class of the image tag (gravatar default)
     * @return string The HTML IMG tag for the gravatar
     */
    public function avatar($email, $options = [])
    {
        // The gravatar base URL
        $gravatar = "http://www.gravatar.com/avatar/";

        if (!isset($options['size'])) {
            $options['size'] = 150;
        }
        if (!isset($options['default'])) {
            $options['default'] = "mm";
        }
        if (!isset($options['class'])) {
            $options['class'] = "gravatar";
        }

        $size = "?&s=" . $options['size'];
        $default = "&d=" . $options['default'];
        $email = md5(strtolower(trim($email)));

        return '<img class="' . $options['class'] . '" src="' . $gravatar . $email . $size . $default . '"/>';
    }
}
