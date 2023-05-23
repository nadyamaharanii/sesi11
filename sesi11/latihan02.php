<?php
    $dta[0]["NAMA"] = "Nadya";
    $dta[0]["TGL_LAHIR"] = "23 April 2004";
    $dta[0]["JKEL"] = "P";
    $dta[0]["HOBI"] = "healing";
    $dta[0]["ASAL"] = "Gianyar";

    $dta[1]["NAMA"] = "Mahendra";
    $dta[1]["TGL_LAHIR"] = "23 Mei 2004";
    $dta[1]["JKEL"] = "L";
    $dta[1]["HOBI"] = "Membaca";
    $dta[1]["ASAL"] = "Tabanan";

    $dta[2]["NAMA"] = "Anggan";
    $dta[2]["TGL_LAHIR"] = "23 April 2004";
    $dta[2]["JKEL"] = "L";
    $dta[2]["HOBI"] = "Sepak Bola";
    $dta[2]["ASAL"] = "klungkung";

    $dta[3]["NAMA"] = "Nia";
    $dta[3]["TGL_LAHIR"] = "11 juni 2003";
    $dta[3]["JKEL"] = "P";
    $dta[3]["HOBI"] = "healing";
    $dta[3]["ASAL"] = "Gianyar";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);