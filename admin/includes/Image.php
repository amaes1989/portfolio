<?php


class Image extends Db_object
{
    protected static $db_table = "images";
    protected static $db_table_fields = array('title', 'type', 'name', 'alt');
    public $id;
    public $title;
    public $type;
    public $name;
    public $alt;

}