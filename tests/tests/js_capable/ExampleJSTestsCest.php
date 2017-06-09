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
  	$I->fillField('#edit-name', 'admin');
  	$I->fillField('#edit-pass', 'admin');
  	$I->click('Log in');
  	$I->amOnPage('/node/add/article');
  	$I->fillField('#edit-title', 'Test article');
  	$I->fillField('#edit-body-und-0-value', 'Test text in body article');
  	$I->click('#edit-submit');
  	$I->see('Article Test article has been created.');
  	$I->see('Test text in body article');
  	$I->amOnPage('/user/logout');
  }
  
  /**
   * @param \JSCapableTester $I
   *
   */
  public function addPage(JSCapableTester $I) {
  	$I->wantTo('Test - I add basic page');
  	$I->amOnPage('/');
  	$I->fillField('#edit-name', 'admin');
  	$I->fillField('#edit-pass', 'admin');
  	$I->click('Log in');
  	$I->amOnPage('/node/add/page');
  	$I->fillField('#edit-title', 'Test basic page');
  	$I->fillField('#edit-body-und-0-value', 'Test text in body page');
  	$I->click('#edit-submit');
  	$I->see('Basic page Test basic page has been created.');
  	$I->see('Test text in body page');
  	$I->amOnPage('/user/logout');
  }

}
