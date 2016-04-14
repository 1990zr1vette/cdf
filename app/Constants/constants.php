<?php
if (isset($_SERVER['HTTP_HOST']))
	define('BASE', 'http://' . $_SERVER['HTTP_HOST']);
else
	define('BASE', '');

define('ADMIN', BASE . '/admin/');

define('VIEWS', str_replace('/public', '', $_SERVER['DOCUMENT_ROOT']) . '/resources/views/');

define('HOME','home');
define('HOME_FR','acceuil');

define('BRANDS','brands');
define('BRANDS_FR','marques');

define('PRODUCTS', 'products');
define('PRODUCTS_FR', 'produits');

// ********** JOURNAL ********** //
define('JOURNAL','journal');
define('JOURNAL_FR','journal-fr');

define('ANNOUNCEMENTS','announcements');
define('ANNOUNCEMENTS_FR','annoncements');
define('ANNOUNCEMENTSURL', JOURNAL . '/' . ANNOUNCEMENTS);
define('ANNOUNCEMENTSURL_FR', JOURNAL_FR . '/' . replaceAccents(ANNOUNCEMENTS_FR));

define('EDITORIALS','editorials');
define('EDITORIALS_FR','éditoriaux');
define('EDITORIALSURL', JOURNAL . '/' . EDITORIALS);
define('EDITORIALSURL_FR', JOURNAL_FR . '/' . replaceAccents(EDITORIALS_FR));

define('EVENTS','events');
define('EVENTS_FR','événements');
define('EVENTSURL', JOURNAL . '/' . EVENTS);
define('EVENTSURL_FR', JOURNAL_FR . '/' . replaceAccents(EVENTS_FR));
// ********** JOURNAL ********** //

// ********** ABOUT US ********** //
define('ABOUTUS','about us');
define('ABOUTUS_FR','à propos de nous');

define('ABOUTUSURL','about-us');
define('ABOUTUSURL_FR','a-propos-de-nous');

define('CULTURE','culture');
define('CULTURE_FR','culture');
define('CULTUREURL', ABOUTUSURL . '/' . CULTURE);
define('CULTUREURL_FR', ABOUTUSURL_FR . '/' . CULTURE_FR);

define('EXPERIENCE','experience');
define('EXPERIENCE_FR','experience');
define('EXPERIENCEURL', ABOUTUSURL . '/' . EXPERIENCE);
define('EXPERIENCEURL_FR', ABOUTUSURL_FR . '/' . EXPERIENCE_FR);

define('STUDIOSRERVICES','studio-services');
define('STUDIOSRERVICES_FR','services-studio');
define('STUDIOSRERVICESURL', ABOUTUSURL . '/' . STUDIOSRERVICES);
define('STUDIOSRERVICESURL_FR', ABOUTUSURL_FR . '/' . STUDIOSRERVICES_FR);

define('TEAM','team');
define('TEAM_FR','equipe');
define('TEAMURL', ABOUTUSURL . '/' . TEAM);
define('TEAMURL_FR', ABOUTUSURL_FR . '/' . TEAM_FR);
// ********** ABOUT US ********** //

define('USED','used');
define('USED_FR','utilisé');


//define('EXPERIENCEURL', ABOUTUS . '/' . EXPERIENCE);
//define('EXPERIENCEURL_FR', ABOUTUS_FR . '' . EXPERIENCE_FR);
//define('STUDIOSRERVICESURL', ABOUTUS . '/' . STUDIOSRERVICES);
//define('STUDIOSRERVICESURL_FR', ABOUTUS . '/' . STUDIOSRERVICES_FR);
//define('TEAMURL', ABOUTUS . '/' . TEAM);
//define('TEAMURL_FR', ABOUTUS_FR . '/' . TEAM_FR);

define('MOVETO', $_SERVER['DOCUMENT_ROOT'] . '/public/images');

