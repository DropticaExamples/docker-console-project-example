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
     
    public function testFeaturesDefault() {

      module_load_include('inc', 'features', 'features.export');

      // Load information about feature.
      $features[] = 'test';
      $features[] = 'test2';
      $features[] = 'test3';
      $features_states = features_get_component_states($features, FALSE, TRUE);

      foreach ($features_states as $feature_name => $feature_state) {
        $overridden_features = array_filter($feature_state, function($item) {
          return $item != FEATURES_DEFAULT;
        });
        $this->assertEquals(TRUE, empty($overridden_features), 'Feature ' . $feature_name . ' is overridden.');
      }
    }
}
