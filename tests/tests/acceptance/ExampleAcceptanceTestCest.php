<?php

class ExampleAcceptanceTestCest
{
  public function _before(AcceptanceTester $I) {
  }

  public function _after(AcceptanceTester $I) {
  }

  /**   TESTS     */

  /**
   * @param \AcceptanceTester $I
   * 
   */
  public function exampleTest(AcceptanceTester $I) {
    $I->wantTo('Test - I can log in as admin and see article');
    $I->amOnPage('/');
    $I->fillField('#edit-name', 'admin');
    $I->fillField('#edit-pass', 'admin');
    $I->click('Log in');
    $I->amOnPage('/');
    $I->see('Droptica sięga korzeniami roku 2008, kiedy to jeden ze współzałożycieli stworzył swoją pierwszą firmę programistyczną openBIT');
    $I->amOnPage('/user/logout');
  }

 }
