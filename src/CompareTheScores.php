<?php
namespace Fun;

class CompareTheScores
{
    public function __construct()
    {
        //echo 'Yey! The constructor works...' . PHP_EOL;
    }

    public function DUX($studentA, $studentB)
    {
        $scoresA = array();
        $scoresB = array();
        for($i=0;$i < count($studentA) ;$i++)
        {
            if ($studentA[$i] == $studentB[$i])
            {
                $scoresA[$i] = 0;
                $scoresB[$i] = 0;
                continue;
            }

            if ($studentA[$i] > $studentB[$i])
            {
                $scoresA[$i] = 1;
                $scoresB[$i] = 0;
                continue;
            }

            if ($studentA[$i] < $studentB[$i])
            {
                $scoresA[$i] = 0;
                $scoresB[$i] = 1;
                continue;
            }
        }

        echo "Student A scores: ";
        for($i=0;$i<count($scoresA);$i++)
            echo "$scoresA[$i] ";
        echo  " = ",array_sum($scoresA);

        echo "\nStudent B scores: ";
        for($i=0;$i<count($scoresB);$i++)
            echo "$scoresB[$i] ";
        echo " = ",array_sum($scoresB),"\n";
    }
}