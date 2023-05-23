<?php
    $dta["NAMA"] = "Dinan";
    $dta["TGL_LAHIR"] = "2004-02-26";
    $dta["JKEL"] = "P";
    $dta["JURUSAN"] = "KAB";
    $dta["NIM"] = "2201010381";
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);