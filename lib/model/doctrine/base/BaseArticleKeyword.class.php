<?php

/**
 * BaseArticleKeyword
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $article_id
 * @property integer $keyword_id
 * @property Article $Article
 * @property Keyword $Keyword
 * 
 * @method integer        getArticleId()  Returns the current record's "article_id" value
 * @method integer        getKeywordId()  Returns the current record's "keyword_id" value
 * @method Article        getArticle()    Returns the current record's "Article" value
 * @method Keyword        getKeyword()    Returns the current record's "Keyword" value
 * @method ArticleKeyword setArticleId()  Sets the current record's "article_id" value
 * @method ArticleKeyword setKeywordId()  Sets the current record's "keyword_id" value
 * @method ArticleKeyword setArticle()    Sets the current record's "Article" value
 * @method ArticleKeyword setKeyword()    Sets the current record's "Keyword" value
 * 
 * @package    esftt
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticleKeyword extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('article_keyword');
        $this->hasColumn('article_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('keyword_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Article', array(
             'local' => 'article_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Keyword', array(
             'local' => 'keyword_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}