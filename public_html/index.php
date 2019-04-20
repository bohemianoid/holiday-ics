<?php
use \Eluceo\iCal\Component\Calendar;

require __DIR__ . '/../vendor/autoload.php';

$vCalendar = new Calendar('holidays');
$vCalendar->setPublishedTTL('P1D');

require __DIR__ . '/../src/timezone.php';
require __DIR__ . '/../src/events.php';

header('Content-Type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename="holidays.ics"');

echo $vCalendar->render();
