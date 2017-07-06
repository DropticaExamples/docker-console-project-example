<?php

use Step\Acceptance\UserSteps;

class NewNodeTestCest
{

 /**
   * @var string
   * article_title
   */
  private $article_title;

  /**
   * @var string
   * article_body
   */
  private $article_body;

  /**
   * @var string
   * article_tags
   */
  private $article_tags;

  function __construct() {
    $this->article_title = 'Test article';
    $this->article_body = 'Test article body';
    $this->article_tags = 'Test article tag'; 
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
  public function newArticle(AcceptanceTester $I, UserSteps $U) {
    $I->wantTo('Test - I can log in as admin and add article');
    $I->amOnPage('/');
    $user = $I->getTestUserByName('admin_user');
    $U->login($user->name, $user->pass);
     $fields_values = array(
      'title' => $this->article_title,
      'body' => $this->article_body,
      'field_tags' => $this->article_tags
    );
    $I->createNode($I, 'article', $fields_values, NULL, FALSE);
    $nid = $I->grabLastCreatedNid($I);
    $I->deleteNodeFromStorage($nid);
    $I->amOnPage('/user/logout');
  }

 }
