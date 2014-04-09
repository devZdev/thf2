<?php

$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

$f3->config('config.ini');

$f3->route('GET /userref',
	function($f3) {
		$f3->set('content','userref.htm');
		
		echo View::instance()->render('layout.htm');
	}
);

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

$f3->run();
