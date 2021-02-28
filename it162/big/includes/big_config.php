<?php

// $siteKey = "6Lck4EAaAAAAAF43J32qJXIpLsuBzWmtTvgM3x2e";
// $secretKey = "6Lck4EAaAAAAALpGBvBaDPS53umSydPzYhPwdarT";
//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website


//Used to store all of our WEB120 configuration information
//prevents data from being sent early
ob_start();
// echo basename($_SERVER['PHP_SELF']);

// place URL & labels in the array here for navigation:
//     $nav1['index.php'] = "Welcome";
//     $nav1['./big/index_big.php'] = "Big"; //added ./ before big
//     $nav1['aia.php'] = "AIA";
//     $nav1['flowchart.php'] = "Flowchart";
//     $nav1['./fp/index.php'] = "Final Project"; 
//     $nav1['contact.php'] = "Contact Me";
    
// echo basename($_SERVER['PHP_SELF']);
// echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    
        case "big_index.php":
            $title = "Big Portal for Kelly Hill it162";
            $logo = "fa fa-globe";
            // $PageID = "Big Portal for Kelly Hill it162";
            break;

        case "respond_adapt.php":
            $title = "Kelly Hill Research: Responsive vs Adaptive";
            $logo = "";
            $PageID = "Research Topic #1: Responsive vs Adaptive Web Design";
            break;
                
        case "grid_flex.php":
            $title = "Kelly Hill Research Grid and Flexbox Research";
            $logo = "";
            $PageID = 'Research Topic #2: Grid and Flexbox';
            break;

        case "accessibility.php":
            $title = "Kelly Hill Research: Accessibility";
            $logo = "";
            $PageID = "Research Topic #3: Accessibility";
            break;

        case "map.php":
            $title = "Map";
            $logo = "";
            $PageID = "Map";
            break;

        case "calender.php":
            $title = "Calender";
            $logo = "";
            $PageID = "Calender";
            break;

        case "webcam.php":
            $title = "Ocean Channel";
            $logo = "";
            $PageID = "Live Webcam ";
            break;

        case "youtube.php":
            $title = "Youtube";
            $logo = "";
            $PageID = "Youtube ";
            break;
        
        case "paralaxx.php":
            $title = "Paralaxx";
            $logo = "";
            $PageID = "Paralaxx";
            break;
        
        // case "siteapp.php":
        //     $title= "Site App";
        //     $logo = "";
        //     $PageID = "Site App";
        //     break;

        default:    
        $title = THIS_PAGE;    
        $logo = '';//no icon by default
}


?>
