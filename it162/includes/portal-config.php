<?php
//portal-config.php

//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles');


//Used to store all of our WEB120 configuration information
//prevents data from being sent early
ob_start();
// echo basename($_SERVER['PHP_SELF']);

// define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// place URL & labels in the array here for navigation:
//     $nav1['index.php'] = "Welcome";
//     $nav1['./big/index_big.php'] = "Big"; //added ./ before big
//     $nav1['aia.php'] = "AIA";
//     $nav1['flowchart.php'] = "Flowchart";
//     $nav1['./fp/index.php'] = "Final Project"; 
//     $nav1['contact.php'] = "Contact Me";
    
// echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    
        case 'index.php':
        $title = "Web Design Portal for Kelly Hill it162";
        $logo = "fa fa-globe";
        $logo_color = ' style= "color: #3e375f"';
        $PageID = 'Welcome';
        break;

        case 'aia.php':
        $title = "Kelly's Final Project AIA (Client work)";
        $logo = "fa fa-compass-americas";
        $logo_color = ' style= "color: #5d707f"';
        $PageID = 'AIA';
        break;

        case 'contact.php':
        $title = "Contact Me";
        $logo = "fa fa-compass";
        $logo_color = ' style="color: #84828f';
        $PageID = 'Contact';
        
        break;

        default:    
        $title = THIS_PAGE;    
        $logo = '';//no icon by default 
}


    $nav1['index.php'] = "Welcome";
    $nav1['./big/big_index.php'] = "Big"; //added ./ before big
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['./fp/index.php'] = "Final Project"; 
    $nav1['contact.php'] = "Contact Me";

// makeLinks function will create our dynamic nav when called.
// Call like this:

// echo makeLinks($nav1); #in which $nav1 is an associative array of links

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
