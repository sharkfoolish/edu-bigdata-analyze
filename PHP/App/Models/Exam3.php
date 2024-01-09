<?php

namespace App\Models;

use \PDO;

class Exam3 extends Model
{

    public static function question1(): array
    {
        $sql = "SELECT COUNT(*) FROM `edu_bigdata_imp1` WHERE `PseudoID` = 71 AND `dp001_record_plus_view_action` = 'paused'";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetch(PDO::FETCH_ASSOC);
    }

    public static function question2(): array
    {
        $sql = "SELECT DISTINCT STR_TO_DATE(`dp001_review_start_time`, '%Y-%m-%d') FROM `edu_bigdata_imp1` WHERE `PseudoID` = 71";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetchAll(PDO::FETCH_ASSOC);
    }
}