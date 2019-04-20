<?php
use \Eluceo\iCal\Component\Timezone;
use \Eluceo\iCal\Component\TimezoneRule;
use \Eluceo\iCal\Property\Event\RecurrenceRule;

$tz = 'Europe/Zurich';
date_default_timezone_set($tz);

$vTimezoneRuleDST = new TimezoneRule(TimezoneRule::TYPE_DAYLIGHT);
$vTimezoneRuleDST->setDtStart(new \DateTime('1981-03-29 02:00:00'));
$vTimezoneRuleDST->setTzOffsetFrom('+0100');
$vTimezoneRuleDST->setTzOffsetTo('+0200');

$dstRecurrenceRule = new RecurrenceRule();
$dstRecurrenceRule->setFreq(RecurrenceRule::FREQ_YEARLY);
$dstRecurrenceRule->setByMonth(3);
$dstRecurrenceRule->setByDay('-1SU');

$vTimezoneRuleDST->setRecurrenceRule($dstRecurrenceRule);

$vTimezoneRuleSTD = new TimezoneRule(TimezoneRule::TYPE_STANDARD);
$vTimezoneRuleSTD->setDtStart(new \DateTime('1996-10-27 03:00:00'));
$vTimezoneRuleSTD->setTzOffsetFrom('+0200');
$vTimezoneRuleSTD->setTzOffsetTo('+0100');

$stdRecurrenceRule = new RecurrenceRule();
$stdRecurrenceRule->setFreq(RecurrenceRule::FREQ_YEARLY);
$stdRecurrenceRule->setByMonth(10);
$stdRecurrenceRule->setByDay('-1SU');

$vTimezoneRuleSTD->setRecurrenceRule($stdRecurrenceRule);

$vTimezone = new Timezone($tz);
$vTimezone->addComponent($vTimezoneRuleDST);
$vTimezone->addComponent($vTimezoneRuleSTD);

$vCalendar->setTimezone($vTimezone);
