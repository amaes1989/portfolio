<?php

class Service extends Db_object{
    protected static $db_table = "services";
    protected static $db_table_fields = array('name', 'icon', 'about');
    public $id;
    public $name;
    public $icon;
    public $about;
}

?>