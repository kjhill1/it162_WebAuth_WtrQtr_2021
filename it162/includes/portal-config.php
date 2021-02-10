<?php
//portal-config.php

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');


//Used to store all of our WEB120 configuration information
//prevents data from being sent early
ob_start();


//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contactme.php'] = "Contact Me";
    

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;
//die;


switch(THIS_PAGE){

        case 'index.php':
        $title = "Web Design Portal for Kelly Hill it162";
        $logo = "fas fa-compass";
        $PageID = 'Welcome';
        break;


        case 'aia.php':
        $title = "Kelly's Final Project AIA (Client work)'';
        $logo = "fas fa-compass";
        $logo_color = ' style="color:#f45b69"';
        $PageID = 'AIA';
        break;

        case 'contact.php':
        $title = "Contact Me";
        $logo = "fas fa-compass";
        $PageID = 'Contact';
        $logo_color = ' style="color:#463f3a"';
        break;

        default:    
        $title = THIS_PAGE;    
        $logo = '';//no icon by default 
}

/*
makeLinks function will create our dynamic nav when called.
Call like this:

echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
