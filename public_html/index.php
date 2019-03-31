<?php
use \Eluceo\iCal\Component\Calendar as Calendar;

require __DIR__ . '/../vendor/autoload.php';

date_default_timezone_set('Europe/Zurich');

$vCalendar = new Calendar('holidays');
$vCalendar->setPublishedTTL('P1D');

require __DIR__ . '/../src/events.php';

header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename="holidays.ics"');

echo $vCalendar->render();
