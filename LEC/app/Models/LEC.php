<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class LEC{
    
    /*SELECT * FROM lec_day*/
    public static function getDays(){

    }

    /*SELECT * FROM lec_match*/
    public static function getMatches(){
        
    }

    /*SELECT * FROM lec_match WHERE day_id = $day_id*/
    public static function getMatchesDay($day_id){

    }

    /*SELECT * FROM lec_team*/
    public static function getTeams(){

    }

    public static function getBets(){

    }

    public static function getBetsUser($user_id){

    }

    public static function addDay($day){

    }

    public static function addMatchDay($day_id, $team1_id, $team2_id){

    }

    public static function updateMatch($match_id, $winner_id){

    }

    public static function addTeam($name){

    }

    public static function addBetUser($score, $winner_id, $lec_match_id){

    }
}
