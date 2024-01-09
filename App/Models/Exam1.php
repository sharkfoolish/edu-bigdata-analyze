<?php

namespace App\Models;

use \PDO;

class Exam1 extends Model
{

    public static function question1(): array
    {
        $sql = "SELECT COUNT(DISTINCT `dp001_review_sn`) FROM `edu_bigdata_imp1` WHERE `PseudoID` = 39";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetch(PDO::FETCH_ASSOC);
    }

    public static function question2(): array
    {
        $sql = "SELECT COUNT(DISTINCT `dp001_question_sn`) FROM `edu_bigdata_imp1` WHERE `PseudoID` = 39 AND `dp001_question_sn` != 'NA'";
        $connection = Model::connect();
        $state = $connection->prepare($sql);
        $state->execute();
        return $state->fetch(PDO::FETCH_ASSOC);
    }
}