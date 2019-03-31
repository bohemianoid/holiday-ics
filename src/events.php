<?php
require __DIR__ . '/functions.php';

// New Year's Day
$vCalendar->addComponent(
    createYearlyEvent('Arbeitsfrei', '31.12.2018 11:45', '31.12.2018 17:15')
);
$vCalendar->addComponent(
    createYearlyEvent('Neujahr', '01.01.2018', '01.01.2018')
);

// Berchtoldstag
$vCalendar->addComponent(
    createYearlyEvent('Berchtoldstag', '02.01.2018', '02.01.2018')
);

// Good Friday
$vCalendar->addComponent(
    createEvent('Karfreitag', ...getEasterSeason(date("Y")-1, -2))
);
$vCalendar->addComponent(
    createEvent('Karfreitag', ...getEasterSeason(date("Y"), -2))
);
$vCalendar->addComponent(
    createEvent('Karfreitag', ...getEasterSeason(date("Y")+1, -2))
);

// Easter Monday
$vCalendar->addComponent(
    createEvent('Ostermontag', ...getEasterSeason(date("Y")-1, 1))
);
$vCalendar->addComponent(
    createEvent('Ostermontag', ...getEasterSeason(date("Y"), 1))
);
$vCalendar->addComponent(
    createEvent('Ostermontag', ...getEasterSeason(date("Y")+1, 1))
);

// Ascension Day
$vCalendar->addComponent(
    createEvent('Auffahrt', ...getEasterSeason(date("Y")-1, 39))
);
$vCalendar->addComponent(
    createEvent('Auffahrt', ...getEasterSeason(date("Y"), 39))
);
$vCalendar->addComponent(
    createEvent('Auffahrt', ...getEasterSeason(date("Y")+1, 39))
);

// Whit Monday
$vCalendar->addComponent(
    createEvent('Pfingstmontag', ...getEasterSeason(date("Y")-1, 50))
);
$vCalendar->addComponent(
    createEvent('Pfingstmontag', ...getEasterSeason(date("Y"), 50))
);
$vCalendar->addComponent(
    createEvent('Pfingstmontag', ...getEasterSeason(date("Y")+1, 50))
);

// Corpus Christi
$vCalendar->addComponent(
    createEvent('Fronleichnam', ...getEasterSeason(date("Y")-1, 60))
);
$vCalendar->addComponent(
    createEvent('Fronleichnam', ...getEasterSeason(date("Y"), 60))
);
$vCalendar->addComponent(
    createEvent('Fronleichnam', ...getEasterSeason(date("Y")+1, 60))
);

// Swiss National Day
$vCalendar->addComponent(
    createYearlyEvent('1. August', '01.08.2018', '01.08.2018')
);

// Assumption Day
$vCalendar->addComponent(
    createYearlyEvent('Mariä Himmelfahrt', '15.08.2018', '15.08.2018')
);

// All Saints' Day
$vCalendar->addComponent(
    createYearlyEvent('Allerheiligen', '01.11.2018', '01.11.2018')
);

// Immaculate Conception
$vCalendar->addComponent(
    createYearlyEvent('Mariä Empfängnis', '08.12.2018', '08.12.2018')
);

// Christmas
$vCalendar->addComponent(
    createYearlyEvent('Arbeitsfrei', '24.12.2018 11:45', '24.12.2018 17:15')
);
$vCalendar->addComponent(
    createYearlyEvent('Weihnachten', '25.12.2018', '25.12.2018')
);

// St Stephen's Day
$vCalendar->addComponent(
    createYearlyEvent('Stephanstag', '26.12.2018', '26.12.2018')
);
