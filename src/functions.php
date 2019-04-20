<?php
use \Eluceo\iCal\Component\Event;
use \Eluceo\iCal\Property\Event\RecurrenceRule;

function createEvent($summary, $dtStart, $dtEnd)
{
    $vEvent = new Event();
    $vEvent->setDtStart(new DateTime($dtStart));
    $vEvent->setDtEnd(new DateTime($dtEnd));

    if ($dtStart === $dtEnd) {
        $vEvent->setNoTime(true);
    }

    $vEvent->setSummary($summary);

    return $vEvent;
}

function createYearlyEvent($summary, $dtStart, $dtEnd)
{
    $vEvent = createEvent($summary, $dtStart, $dtEnd);

    $recurrenceRule = new RecurrenceRule();
    $recurrenceRule->setFreq(RecurrenceRule::FREQ_YEARLY);
    $recurrenceRule->setInterval(1);
    $vEvent->setRecurrenceRule($recurrenceRule);

    $vEvent->setUseTimezone(true);

    return $vEvent;
}

function getEasterSeason($year, $offset)
{
    $easterDate = easter_date($year);
    $easterDay = date('j', $easterDate);
    $easterMonth = date('n', $easterDate);
    $easterYear = date('Y', $easterDate);

    $timestamp = mktime(0, 0, 0,
                        $easterMonth, $easterDay + $offset, $easterYear);
    $date = date('d.m.Y', $timestamp);

    return [$date, $date];
}
