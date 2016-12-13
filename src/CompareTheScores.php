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
        foreach ($studentA as $key => $score) {
            if ($studentA[$key] == $studentB[$key])
            {
                $scoresA[$key] = 0;
                $scoresB[$key] = 0;
                continue;
            }

            if ($studentA[$key] > $studentB[$key])
            {
                $scoresA[$key] = 1;
                $scoresB[$key] = 0;
                continue;
            }

            if ($studentA[$key] < $studentB[$key])
            {
                $scoresA[$key] = 0;
                $scoresB[$key] = 1;
                continue;
            }
        }              
       $this->disp($scoresA,$scoresB);
    }

    public function disp($scoresA,$scoresB)
    {
        echo "Student A scores: ";
        foreach ($scoresA as $score)
            echo "$score ";
        echo  " = ",array_sum($scoresA);

        echo "\nStudent B scores: ";
        foreach ($scoresB as $score)
            echo "$score ";
        echo " = ",array_sum($scoresB),"\n";
    }
}