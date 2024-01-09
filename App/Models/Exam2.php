<?php

namespace App\Models;

use \PDO;

class Exam2 extends Model
{

    public static function question1(): array
    {
        $sql = "SELECT `dp001_indicator` FROM `edu_bigdata_imp1` WHERE `PseudoID` = 281 GROUP BY `dp001_video_item_sn`";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function question2(): array
    {
        $sql = "SELECT COUNT(*) FROM `edu_bigdata_imp1` WHERE `PseudoID` = 281 AND `dp001_prac_score_rate` = 100";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetch(PDO::FETCH_ASSOC);
    }
}