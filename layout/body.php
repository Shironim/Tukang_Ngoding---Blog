<?php 

if (empty($_GET['page'])) {
    include_once"page/home.php";
}else if ($_GET['page'] == "about") {
    include_once"page/about.php";
}