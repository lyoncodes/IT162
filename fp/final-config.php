<?php
// prevent data from being sent early
ob_start();
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// Timezones
date_default_timezone_set('America/Los_Angeles');

// Nav
$finalNav = array(
  "index.php" => "Overview",
  "objectives.php" => "Objectives",
  "contact.php" => "Contact Michael",
  "../fp-wireframe-2.pdf" => "Flowchart",
);


// echo THIS_PAGE;
// die;
$logo_color = '';

switch(THIS_PAGE) {
  case 'index.php':
    $title = 'Back to Portal';
    $subtitle = 'Project Overview';
    $logo = 'fa-home';
    $PageID = 'Welcome';
    $logo_color = ' style="color:#FF9700"';
    $logo_url = ' ../index.php';
    break;
  case 'objectives.php':
    $title = 'Back to Portal';
    $subtitle = 'Project Objectives';
    $logo = 'fa-home';
    $PageID = 'Objectives';
    $logo_color = ' style="color:#FFC300"';
    $logo_url = 'index.php';
    break;
  case 'contact.php':
    $title = 'Back to Portal';
    $subtitle = 'Contact Michael';
    $logo = 'fa-home';
    $PageID = 'Contact';
    $logo_color = ' style="color:#017FF8"';
    $logo_url = 'index.php';
    break;
  default:
    $title = THIS_PAGE;
    $logo = 'fa-angle-left';
    $PageID = 'Welcome';
};

// build nav
function makeLinks($linkArr)
{
  $myReturn = '';
  foreach($linkArr as $url => $text)
  {
    if($url == THIS_PAGE)
    {
      $myReturn .= '<a class="active" href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    }else{
      $myReturn .= '<a href="' . $url . '">' . $text . '</a>' . PHP_EOL;
    }
  }
  return $myReturn;
};

?>