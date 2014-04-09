<?php

$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

$f3->config('config.ini');

$f3->route('GET /', 
    function($f3) {
        $f3->set('name', 'Home');
        $f3->set('content','home.htm');		
		echo View::instance()->render('layout.htm');
    }
);

$f3->route('GET /events', 
    function($f3) {
        $css = array('colorbox');
        $js = array('jquery.colorbox', 'events');
        $f3->set('css', $css);
        $f3->set('js', $js);
        $f3->set('name', 'Events');
        $f3->set('content','events.htm');
		echo View::instance()->render('layout.htm');
    }
);

$f3->route('GET /sponsors', 
    function($f3) {
        $f3->set('name', 'Sponsors');
        $f3->set('content','sponsors.htm');		
		echo View::instance()->render('layout.htm');
    }
);

$f3->route('GET /contact', 
    function($f3) {
        $f3->set('name', 'Contact');
        $f3->set('content','contact.htm');		
		echo View::instance()->render('layout.htm');
    }
);

$f3->route('GET /press', 
    function($f3) {
        $f3->set('name', 'Press');
        $f3->set('content','press.htm');		
		echo View::instance()->render('layout.htm');
    }
);

$f3->route('GET /donations', 
    function($f3) {
    	$css = array('colorbox');
        $js = array('jquery.colorbox', 'donations');
        $f3->set('css', $css);
        $f3->set('js', $js);
        $f3->set('name', 'Donations');
        $f3->set('content','donations.htm');
		echo View::instance()->render('layout.htm');
    }
);

$f3->route('GET /thebigheartracingteam', 
    function($f3) {
    	$css = array('colorbox');
        $js = array('jquery.colorbox', 'thebigheartracingteam');
        $f3->set('css', $css);
        $f3->set('js', $js);
        $f3->set('name', 'The Big Heart Racing Team');
        $f3->set('content','thebigheartracingteam.htm');
		echo View::instance()->render('layout.htm');
    }
);

$f3->run();
