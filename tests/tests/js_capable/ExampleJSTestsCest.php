<?php

class JSCentreTestsCest
{

  public function _before(JSCapableTester $I) {
    }

  public function _after(JSCapableTester $I) {
  }

  /**   TESTS     */

  /**
   * @param \JSCapableTester $I
   * 
   */
  public function addArticle(JSCapableTester $I) {
  	$I->wantTo('Test - I add article');
  	$I->amOnPage('/');

  }
  
  /**
   * @param \JSCapableTester $I
   *
   */
  public function addPage(JSCapableTester $I) {
  	$I->wantTo('Test - I add basic page');
  	$I->amOnPage('/');

  }

}
