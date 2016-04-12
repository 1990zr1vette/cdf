<?php
define('BASE', 'http://' . $_SERVER['HTTP_HOST']);
define('ADMIN', BASE . '/admin/');

define('VIEWS', str_replace('/public', '', $_SERVER['DOCUMENT_ROOT']) . '/resources/views/');

define('HOME','home');
define('HOME_FR','acceuil');

define('BRANDS','brands');
define('BRANDS_FR','marques');

define('JOURNAL','journal');
define('JOURNAL_FR','journal-fr');

define('PRODUCTS', 'products');
define('PRODUCTS_FR', 'produits');

define('ANNOUNCEMENTS','announcements');
define('ANNOUNCEMENTS_FR','annoncements');
define('ANNOUNCEMENTSURL', ANNOUNCEMENTS);
define('ANNOUNCEMENTSURL_FR', replaceAccents(ANNOUNCEMENTS_FR));


define('EDITORIALS','editorials');
define('EDITORIALS_FR','éditoriaux');
define('EDITORIALSURL', EDITORIALS);
define('EDITORIALSURL_FR', replaceAccents(EDITORIALS_FR));

define('EVENTS','events');
define('EVENTS_FR','événements');
define('EVENTSURL', EVENTS);
define('EVENTSURL_FR', replaceAccents(EVENTS_FR));

define('ABOUTUS','about-us');
define('ABOUTUS_FR','a-propos-de-nous');
define('CULTURE','culture');
define('CULTURE_FR','culture');
define('EXPERIENCE','experience');
define('EXPERIENCE_FR','experience');
define('STUDIOSRERVICES','studio-services');
define('STUDIOSRERVICES_FR','services-studio');
define('TEAM','team');
define('TEAM_FR','equipe');

define('USED','used');
define('USED_FR','utilisé');

define('CULTUREURL', ABOUTUS . '/' . CULTURE);
define('CULTUREURL_FR', ABOUTUS_FR . '' . CULTURE_FR);
define('EXPERIENCEURL', ABOUTUS . '/' . EXPERIENCE);
define('EXPERIENCEURL_FR', ABOUTUS_FR . '' . EXPERIENCE_FR);
define('STUDIOSRERVICESURL', ABOUTUS . '/' . STUDIOSRERVICES);
define('STUDIOSRERVICESURL_FR', ABOUTUS . '/' . STUDIOSRERVICES_FR);
define('TEAMURL', ABOUTUS . '/' . TEAM);
define('TEAMURL_FR', ABOUTUS_FR . '/' . TEAM_FR);

define('MOVETO', $_SERVER['DOCUMENT_ROOT'] . '/public/images');

