<?php


class Statistics
{
 /**
 * @param string $candidate
 * @param int $count
 *
 * @internal string $number
 * @internal string $verb
 * @internal string $pluralModifier
 */
    private function printGuessStatistics($candidate, $count)
    {
        if ($count == 0) {
            $number = "no";
            $verb = "are";
            $pluralModifier = "s";
        } elseif ($count == 1) {
            $number = "1";
            $verb = "is";
            $pluralModifier = "";
        } else {
            $number = $count;
            $verb = "are";
            $pluralModifier = "s";
        }
        sprintf("There %s %s %s%s", array(
        $verb,
        $number,
        $candidate,
        $pluralModifier
        ));
    }
}
/**
* What's the output?
*/
$statistics = new Statistics();
$statistics->printGuessStatistics("bird", 2);
