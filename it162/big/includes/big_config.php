<?php
// big config file 
$siteKey = "6Lck4EAaAAAAAF43J32qJXIpLsuBzWmtTvgM3x2e";
$secretKey = "6Lck4EAaAAAAALpGBvBaDPS53umSydPzYhPwdarT";
//this helps us avoid PHP date errors:

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website


//Used to store all of our WEB120 configuration information
//prevents data from being sent early
ob_start();
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
        case 'index.php':
            $title = "Kelly Hill's Big Project it162";
            $logo = "fa fa-globe";
            // $logo_color = 'style= "color: #3e375f"';
            $PageID = 'Welcome';
            break;

        case "big_index.php":
            $title = "Big Portal for Kelly Hill it162";
            $logo = "fa fa-globe";
            $PageID = "Client Questionnaire";
            break;

        case "respond_adapt.php":
            $title = "Responesive and Adaptive Web Design";
            $logo = "";
            $PageID = "Responsive and Adaptive Web Design";
            break;
                
        case "grid_flex.php":
            $title = "Designing with Grid and Flexbox";
            $logo = "";
            $PageID = "Designing with Grid and Flexbox";
            break;

        case "accessibility.php":
            $title = "Creating Accessible Websites";
            $logo = "";
            $PageID = "Creating Accesssible Websites";
            break;

        case "codetemplate.php":
            $title = "Wtr 2021 Code Template";
            $logo = "fas fa-water";
            $PageID = "Wtr 2021 Code Template";
            break;

        case "calender.php":
            $title = "Calender";
            $logo = "";
            $PageID = "Calender";
            break;

        case "map.php":
            $title = "Map";
            $logo = "fas fa-map-marked-alt";
            $PageID = "Map";
            break;
            
        case "youtube.php":
            $title = "Youtube";
            $logo = "";
            $PageID = "Youtube ";
            break;

        case "webcam.php":
            $title = "Ocean Channel";
            $logo = "fas fa-water";
            $PageID = "Live Webcam ";
            break;
    
        default:    
        $title = THIS_PAGE;    
        $logo = '';//no icon by default
}


?>
