<?php
/**
 * Created by PhpStorm.
 * User: Kilian
 * Date: 15-11-2014
 * Time: 15:05
 */

class EntryType extends Eloquent{
    protected $guarded = array("id");
    protected $table = "entrytypes";

    public  function entry(){
        return $this->hasMany("Entry");
    }
} 