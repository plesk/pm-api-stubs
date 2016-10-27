<?php

class bootstrapTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider providerAutoloadClass
     */
    public function testAutoloadClass($class)
    {
        $this->assertTrue(class_exists($class, true));
    }

    public function providerAutoloadClass()
    {
        return [
            [\pm_ApiCli::class],
            [\pm_Domain::class],
            [\pm_Hook_ApiCli::class],
            [\pm_Hook_Auth::class],
            [\pm_Hook_Backup_Client::class],
            [\pm_Hook_Backup_Server::class],
            [\pm_View_Status::class],
            //
//            [\pm_View_Helper_ActiveList::class],
//            [\pm_View_Helper_RenderList::class],
//            [\pm_View_List_Simple::class],
        ];
    }

    /**
     * @dataProvider providerAutoloadInterface
     */
    public function testAutoloadInterface($class)
    {
        $this->assertTrue(interface_exists($class, true));
    }

    public function providerAutoloadInterface()
    {
        return [
            [\pm_Hook_Backup::class],
            [\pm_Hook_Interface::class],
        ];
    }

}
