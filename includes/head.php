<?php
// echo $_SERVER['SERVER_ADDR'].':'.$_SERVER['SERVER_HOST'];
// $serveraddr = $_SERVER['SERVER_ADDR'];
// $serveraddr='localhost'; // genotype-PowerEdge-T130';
// $serveraddr = '168.253.229.30';
// $serveraddr = 'localhost';
// $serveraddr = 'www.3rdlineartmw.org';
$serveraddr = 'localhost';
// $rooturl = "https://$serveraddr/3rdlineart/";
$rooturl = "http://$serveraddr/3rdlineart/";
$path = $_SERVER['DOCUMENT_ROOT']."/3rdlineart";
$cpath = $path."/includes/config.php";

echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
echo '<meta name="apple-mobile-web-app-capable" content="yes">';

echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">';
echo '<link href="'.$rooturl.'css/font-awesome.css" rel="stylesheet" type="text/css">';
echo '<link href="'.$rooturl.'css/bootstrap.min.css" rel="stylesheet" type="text/css">';
echo '<link href="'.$rooturl.'css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">';
// echo '<link href="'.$rooturl.'css/jquery-ui.css" rel="stylesheet" type="text/css">';
echo '<link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">';

// echo '<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">';
echo '<link href="'.$rooturl.'css/style.css" rel="stylesheet" type="text/css">';
echo '<link href="'.$rooturl.'css/font.css" rel="stylesheet" type="text/css">';
echo '<link href="'.$rooturl.'css/pages/signin.css" rel="stylesheet" type="text/css">';
echo '<link href="'.$rooturl.'css/pages/dashboard.css" rel="stylesheet">';
echo '<link href="'.$rooturl.'css/checkbox.css" rel="stylesheet" type="text/css">';
echo '<link href="'.$rooturl.'css/popup.css" rel="stylesheet" type="text/css">';
echo '<link href="'.$rooturl.'css/app.css" rel="stylesheet" type="text/css">';

// 3.3.1
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>';
// echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>';
// the following seem to only be necessary for the logout caret thing to work!!! how stupid
echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
echo '<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';

include_once($cpath);
include_once $path.'/includes/email_templates.php';
include_once $path.'/includes/queries.php';
include_once $path.'/includes/crypt_function.php';

// echo '<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">';
// echo '<link href="'.$rooturl.'css/css/fontawesome-all.css" rel="stylesheet">';

function format_date_fromdb($date) {
    // echo "dob is $date";
    $ds = explode('/', $date);  // stored in db iso format YYYY-MM-DD (DD/MM/YYYY)
    // echo $ds[1].'-'.$ds[2].'-'.$ds[0];
    // echo "<br> after: ".$ds[1].'/'.$ds[0].'/'.$ds[2];
    return $ds[1].'/'.$ds[0].'/'.$ds[2];
}
?>
