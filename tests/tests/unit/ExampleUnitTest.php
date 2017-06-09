<?php

class ExampleUnitTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**   TESTS     */
    
    public function testModulesEnabled()
    {
    	$modules[] = 'backup_migrate';
    	
    	foreach ($modules as $modules_name) {
    		$result = module_exists($modules_name);
    		$this->assertEquals(TRUE, module_exists($modules_name));
         }
     }
}