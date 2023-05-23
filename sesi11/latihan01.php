<?php
    $dta["NAMA"] = "Nadya";
    $dta["TGL_LAHIR"] = "23 April 2004";
    $dta["JKEL"] = "P";
    $dta["HOBI"] = "healing";
    $dta["ASAL"] = "Gianyar";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);