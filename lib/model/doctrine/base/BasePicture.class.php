<?php

/**
 * BasePicture
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $description
 * @property integer $gallery_id
 * @property boolean $is_cover_gallery
 * @property Gallery $Gallery
 * 
 * @method string  getName()             Returns the current record's "name" value
 * @method string  getDescription()      Returns the current record's "description" value
 * @method integer getGalleryId()        Returns the current record's "gallery_id" value
 * @method boolean getIsCoverGallery()   Returns the current record's "is_cover_gallery" value
 * @method Gallery getGallery()          Returns the current record's "Gallery" value
 * @method Picture setName()             Sets the current record's "name" value
 * @method Picture setDescription()      Sets the current record's "description" value
 * @method Picture setGalleryId()        Sets the current record's "gallery_id" value
 * @method Picture setIsCoverGallery()   Sets the current record's "is_cover_gallery" value
 * @method Picture setGallery()          Sets the current record's "Gallery" value
 * 
 * @package    esftt
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePicture extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('picture');
        $this->hasColumn('name', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('gallery_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('is_cover_gallery', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Gallery', array(
             'local' => 'gallery_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}