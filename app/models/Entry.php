<?php
/**
 * Created by PhpStorm.
 * User: Kilian
 * Date: 15-11-2014
 * Time: 15:04
 */

class Entry extends Eloquent{
    protected $quarded = array("id");

    public function logboek(){
        return $this->belongsTo('Logboek');
    }

    public function entryType(){
        return $this->belongsTo("EntryType", 'entrytype_id');
    }
} 