<?php

use Step\Acceptance\UserSteps;
use Step\Acceptance\NodeSteps;

class VariablesStorageTestCest
{

 /**
   * @var string
   * page_title
   */
  private $page_title;

  /**
   * @var string
   * page_body
   */
  private $page_body;

  function __construct() {
    $this->page_title = 'Test page';
    $this->page_body = 'Test page body';
  }

  public function _before(AcceptanceTester $I) {
  }

  public function _after(AcceptanceTester $I) {
  }

  /**   TESTS     */

  /**
   * @param \AcceptanceTester $I
   * 
   */
  public function newPage(AcceptanceTester $I, UserSteps $U, NodeSteps $N) {
    $I->wantTo('Test - I can log in as admin and add article');
    $I->amOnPage('/');
     $fields_values = array(
      'title' => $this->page_title,
      'body' => $this->page_body
    );
    $nid = $N->createNewNodeAsUser('admin_user', 'article', $fields_values);
    $I->setVariableToStorage('page_nid', $nid);
  }

  /**
   * @param \AcceptanceTester $I
   * 
   */
  public function seeTextOnPage(AcceptanceTester $I) {
    $I->wantTo('Test - I can see page title and body text on test page');
    $nid = $I-> getVariableFromStorage('page_nid');
    $I->amOnPage('/node/'.$nid);
    $I->canSee($this->page_title);
    $I->canSee($this->page_body);
  }

  /**
   * @param \AcceptanceTester $I
   * 
   */
  public function deletePage(AcceptanceTester $I, UserSteps $U, NodeSteps $N) {
    $I->wantTo('Test - I can delete test page');
    $nid = $I-> getVariableFromStorage('page_nid');
    $N->deleteNodeAsUser('admin_user', $nid);
  }

 }
