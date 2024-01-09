<?php

namespace App\Models;

use \PDO;

class Exam4 extends Model
{

    public static function question1()
    {
        $sql = "SELECT `dp001_review_sn` FROM `edu_bigdata_imp1` GROUP BY `dp001_review_sn` ORDER BY COUNT(*) DESC LIMIT 1";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetch(PDO::FETCH_ASSOC);
    }

    public static function question2()
    {
        $sql = "SELECT COUNT(*) FROM `edu_bigdata_imp1` WHERE `dp002_extensions_alignment` LIKE '%十二年國民基本教育類%'";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetch(PDO::FETCH_ASSOC);
    }

    public static function question3()
    {
        $sql = "SELECT `dp002_verb_display_zh_TW` FROM `edu_bigdata_imp1` 
            WHERE `dp002_verb_display_zh_TW` != 'NA' 
            GROUP BY `dp002_verb_display_zh_TW` 
            ORDER BY COUNT(*)
            DESC LIMIT 3";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function question4()
    {
        $sql = "SELECT COUNT(*) FROM `edu_bigdata_imp1` WHERE `dp002_extensions_alignment` LIKE '%校園職業安全%'";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetch(PDO::FETCH_ASSOC);
    }
}