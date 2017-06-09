<?php

use Drupal\Pages\Page;
use Codeception\Util\Shared\Asserts;

class ExampleFunctionalTestCest
{

  use Asserts;

  public function _before(FunctionalTester$I) {
  }

  public function _after(FunctionalTester $I) {
  }

  /**   TESTS     */

  /**
   * @param \FunctionalTester $I
   * 
   */
  public function exampleTestOfText(FunctionalTester $I) {
    $I->wantTo('Test - I can see node in database');
    $I->haveInDatabase('node', array('type' => 'article', 'title' => 'WSZYSTKO, CO CHCIELIBYŚCIE WIEDZIEĆ O REKRUTACJI W DROPTICE'));
    $I->haveInDatabase('node', array('type' => 'page', 'title' => 'Test page'));
  }

 }
