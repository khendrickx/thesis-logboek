<?php
/**
 * Created by PhpStorm.
 * User: Kilian
 * Date: 15-11-2014
 * Time: 15:02
 */

class Logboek extends Eloquent {
    protected $table ="logboeken";
    protected $quarded = array("*");

    public  function entry(){
        return $this->hasMany("Entry")->orderBy('datum', 'DESC');
    }

    public function totalTime(){
        return $this->entry()->select(
            DB::raw(
                'SEC_TO_TIME(
                    SUM(
                        TIME_TO_SEC(
                            tijd
                        )
                    )
                ) as tijd'
            )
        )->getResults()->first()->tijd;
    }
}