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

    /*SELECT * FROM lec_bet*/
    public static function getBets(){

    }

    /*SELECT * FROM lec_bet WHERE user_id = $user_id*/
    public static function getBetsUser($user_id){

    }

    /*INSERT INTO lec_day (day) VALUES ($day);   '2021-06-12 12:52:21'*/
    public static function addDay($day){

    }

    /*INSERT INTO lec_match (day_id,team1_id,team2_id) 
        VALUES ($day_id, $team1_id, $team2_id)*/
    public static function addMatchDay($day_id, $team1_id, $team2_id){

    }

    //une fois le match update => update les paris portant sur celui-ci
    /*UPDATE lec_match
    SET winner_id = $match_id
    WHERE id = $winner_id*/
    public static function updateMatch($match_id, $winner_id){

    }

    /*Comment redistribuer les sommes pariées entre les vainqueurs*/
    /*UPDATE lec_bet SET is_won = CASE WHEN winner_id = $winner_id THEN 1 ELSE 0 END WHERE lec_match_id = $match_id*/
    private static function updateBets($match_id, $winner_id){

    }

    private static function updateCroquettes(){
        
    }

    public static function addTeam($name){

    }

    public static function addBetUser($score, $winner_id, $lec_match_id){

    }
}
