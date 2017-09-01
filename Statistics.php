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
    private $number = 'no';
    private $verb = 'are';
    private $pluralModifier = 's';
    
    public function printGuessStatistics($candidate, $count = 0)
    {
        if ($count == 1) {
            $this->number = "1";
            $this->verb = "is";
            $this->pluralModifier = "";
        } elseif($count > 1) {
            $this->number = $count;
        }
        printf("There %s %s %s%s<br/>",
            $this->verb,
            $this->number,
            $candidate,
            $this->pluralModifier
            );
    }
}
/**
 * What's the output?
 */
$statistics = new Statistics();
$statistics->printGuessStatistics("bird", 2);
$statistics = new Statistics();
$statistics->printGuessStatistics("bird");
$statistics = new Statistics();
$statistics->printGuessStatistics("bird", 1);

