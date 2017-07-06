<?php

use Step\Acceptance\UserSteps;
use Step\Acceptance\NodeSteps;

class NewNodeAsUserTestCest
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
    $N->deleteNodeAsUser('admin_user', $nid);
  }

 }
