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

namespace GravatarHelper\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use GravatarHelper\View\Helper\GravatarHelper;

/**
 * GravatarHelperTest Test Class
 *
 * This class contains the main tests for the GravatarHelper Class.
 */
class GravatarHelperTest extends TestCase
{
    /**
     * Setup the application so that we can run the tests.
     *
     * The setup involves initializing a new CakePHP view and using that to
     * get a copy of the GravatarHelper.
     */
    public function setUp(): void
    {
        parent::setUp();
        $View = new View();
        $this->Gravatar = new GravatarHelper($View);
    }

    /**
     * Run the plugin tests
     *
     * This function runs a few tests against the avatar helper in attempt to verify the helper is functioning correctly.
     */
    public function testPhone()
    {
        $testEmail = $this->Gravatar->avatar('test@email.com');
        $devEmail = $this->Gravatar->avatar('sutton.blake@gmail.com');
        $this->assertEquals('<img class="gravatar" src="https://www.gravatar.com/avatar/93942e96f5acd83e2e047ad8fe03114d?&s=150&d=mm"/>', $testEmail);
        $this->assertEquals('<img class="gravatar" src="https://www.gravatar.com/avatar/412d76ebcc14fbca1a717c4a9b3f8bf1?&s=150&d=mm"/>', $devEmail);

    }
}
