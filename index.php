<?php

require "libhdate/julian.php";
require "libhdate/parasha.php";
require "libhdate/holyday.php";
require "libhdate/strings.php";

// create a new Hdate object
$h = new Hdate();

// set date to 9/5/2015
/* NOTE: this function take day, month, year
         and NOT like other PHP functions month, day year 
*/
$h->set_gdate(14, 5, 2015);

// set date to Hebrew date 7 Tevet 5778
//$h->set_hdate(7, 4, 5776);

// set date to julian day number
//$h->set_jd(2457152);

// debug the Hdate object
/* NOTE: this object use different Hebrew month order then PHP
    Tishri       1
    Heshvan      2
    Kislev       3
    Tevet        4
    Shevat       5
    Adar         6
    Nisan        7
    Iyar         8
    Sivan        9
    Tammuz      10
    Av          11
    Elul        12
    Adar I      13
    Adar II     14
*/
//print_r($h);

// get the reading number
$reading = hdate_get_parasha($h);

// get the reading number
$holyday = hdate_get_holyday($h);

// get the reading number
$omer = hdate_get_omer_day($h);

// print the reading number as text
echo "{\"day\":" . $h->hd_day . 
  ", \"month\":" .$h->hd_mon . 
  ", \"year\":" . $h->hd_year . 
  ", \"omer day\":" . $omer . 
  ", \"holiday\":\"" . hdate_get_holyday_name($holyday) . "\"" .
  ", \"reading\":\"" . hdate_get_parasha_name($reading) . "\"}";
