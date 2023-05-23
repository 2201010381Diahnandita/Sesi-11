<?php
    $dta[0]["NAMA"] = "Dinan";
    $dta[0]["TGL_LAHIR"] = "2004-02-26";
    $dta[0]["JKEL"] = "P";
    $dta[0]["JURUSAN"] = "KAB";
    $dta[0]["NIM"] = "2201010381";

    $dta[1]["NAMA"] = "Dip";
    $dta[1]["TGL_LAHIR"] = "2002-05-08";
    $dta[1]["JKEL"] = "L";
    $dta[1]["JURUSAN"] = "MTI";
    $dta[1]["NIM"] = "20101077";

    $dta[2]["NAMA"] = "Dindin";
    $dta[2]["TGL_LAHIR"] = "2003-08-12";
    $dta[2]["JKEL"] = "P";
    $dta[2]["JURUSAN"] = "KAB";
    $dta[2]["NIM"] = "222077381";

    $dta[3]["NAMA"] = "Dipdip";
    $dta[3]["TGL_LAHIR"] = "2023-02-26";
    $dta[3]["JKEL"] = "L";
    $dta[3]["JURUSAN"] = "MTI";
    $dta[3]["NIM"] = "222077381";

    $dta[4]["NAMA"] = "DD";
    $dta[4]["TGL_LAHIR"] = "2023-02-26";
    $dta[4]["JKEL"] = "LP";
    $dta[4]["JURUSAN"] = "MTIKAB";
    $dta[4]["NIM"] = "222077381";
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);