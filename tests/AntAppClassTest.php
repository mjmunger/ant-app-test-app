<?php

namespace PHPAnt\Apps;
$dependencies = [ 'tests/test_top.php'
                , 'includes/apps/ant-app-test-app/app.php'
                ];

foreach($dependencies as $d) {
    require_once($d);
}

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
use \PDO;

class AntAppClassTest extends TestCase
{
    function testGetMenu() {
        $App = new TestAntApp();
        $expectedMenu = [ 'Foo'   => [ 'Bar' => '/path/to/bar'
                                     , 'Baz' => '/path/to/baz'
                                     ]
                        , 'Admin' => [ 'Special Menu' => '/path/to/special/menu'
                                     , 'Users'        => [ 'Add User'    => '/path/to/add/user'
                                                         , 'Remove User' => '/path/to/remove/user'
                                                         ]
                                     ]
                        ];

        $actualMenu = $App->getMenuItems();
        $this->assertSame($expectedMenu, $actualMenu);
    }
    

    // function testGetMenuWithACL($User, $expectedMenu) {
    //     $App = new TestAntApp();

    // }


    // function providerTestGetMenuWithACL() {
    //     $expectedAdminMenu = [ 'Foo'   => [ 'Bar' => '/path/to/bar'
    //                                       , 'Baz' => '/path/to/baz'
    //                                       ]
    //                          , 'Admin' => [ 'Special Menu' => '/path/to/special/menu'
    //                                       , 'Users'        => [ 'Add User'    => '/path/to/add/user'
    //                                                           , 'Remove User' => '/path/to/remove/user'
    //                                                           ]
    //                                       ]
    //                          ];

    //     $expectedUserMenu = [ 'Foo'   => [ 'Bar' => '/path/to/bar'
    //                                       , 'Baz' => '/path/to/baz'
    //                                       ]
    //                          ];

    //     $AdminUser = new User()
    // }
}