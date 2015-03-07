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

    public function totalTime($datum = null){
        $query = $this->entry()->select(
                DB::raw(
                    'SEC_TO_TIME(
                        SUM(
                            TIME_TO_SEC(
                                tijd
                            )
                        )
                    ) as tijd'
                )
            );
        if ($datum != null)
            $query->where('datum', '<=', $datum);

        return $query->getResults()->first()->tijd;
    }
}