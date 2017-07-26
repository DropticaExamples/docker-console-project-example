<?php

class ExampleVisualTestsCest
{

  public function _before(VisualTester $I) {
    }

  public function _after(VisualTester $I) {
  }

  /**   TESTS     */

  /**
   * @param \VisualTester $I 
   */
  public function page(VisualTester $I) {
  	$I->wantTo('Test - compare homepage');
  	$I->amOnPage('/');
  	$I->dontSeeVisualChanges("homepage");
  }

  /**
   * @param \VisualTester $I
   */
  public function fullPage(VisualTester $I) {
  	$I->wantTo('Test - compare homepage full page');
  	$I->amOnPage('/');
  	$I->dontSeeVisualChanges("homepage-all", '#page');
  }

  /**
   * @param \VisualTester $I 
   */
  public function notFullPage(VisualTester $I) {
  	$I->wantTo('Test - compare homepage not full page');
  	$I->amOnPage('/');
  	$I->dontSeeVisualChanges("homepage-not-all", "#page", "#block-user-login");
  }

  /**
   * @param \VisualTester $I
   */
  public function deviation(VisualTester $I) {
  	$I->wantTo('Test - compare homepage deviation');
  	$I->amOnPage('/');
  	$I->dontSeeVisualChanges("homepage-deviation", "#page", "#block-user-login", 5);
  }
}
