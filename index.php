<?php
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"]);
$page = @$_GET['page'];
if($page === NULL) $page = "winter";
if($page === "winter") {
    $pagefile = DOCROOT."/pages/winter.php";
    $title = "Winter";
}

elseif ($page === "spring") {
    $pagefile = DOCROOT."/pages/spring.php";
    $title = "Spring";

}
elseif ($page === "summer") {
    $pagefile = DOCROOT."/pages/summer.php";
    $title = "Summer";
}
elseif ($page === "autumn") {
    $pagefile = DOCROOT."/pages/autumn.php";
    $title = "Autumn";
}
else {
    $title = "ERROR";
    $pagefile = DOCROOT."/pages/404.php";
}
$headerfile = DOCROOT."/templates/header.php";
include DOCROOT."/templates/default.php";



