<?php
// //RANDOM KILOMETER SPENT BRASIL CHILE PERU MEXICO --------------------------------------------------------------------------------------
    function getKilometerRandom($randomNumber){
        $randomNumber = rand(100, 1000);
        if($randomNumber > 800){
            return ("Tibo Inshape mod, ".$randomNumber." kilometers spent in this country 😎");
        }elseif($randomNumber < 800 && $randomNumber >400){
            return ("I was in good shape, ".$randomNumber." kilometers spent in this country 😁");
        }else {
            return ("I was so tired, only ".$randomNumber." kilometers spent in this country  😪");
        }
    }

//RANDOM TOTAL KILOMETER SPENT -----------------------------------------------------------------------

    function getTotalKilometer(){
        return rand(1000, 4000);
    }

// DATE TODAY ------------------------------------------------------------------------------

    function getTodayDate(){
        return date('m /j /Y');
    }

// DATE RANDOM BRESIL CHILE PERU MEXICO -------------------------------------------------------------------------

    function getRandomDateBrasil(){
        $start = strtotime("1 January 2016");
        $end = strtotime("30 March 2020");
        $timestamp = mt_rand($start, $end);
        echo date("m /d /Y", $timestamp);
    }

    function getRandomDateChile(){
        $start = strtotime("1 January 2016");
        $end = strtotime("30 March 2020");
        $timestamp = mt_rand($start, $end);
        echo date("m /d /Y", $timestamp);
    }

    function getRandomDatePeru(){
        $start = strtotime("1 January 2016");
        $end = strtotime("30 March 2020");
        $timestamp = mt_rand($start, $end);
        echo date("m /d /Y", $timestamp);
    }

    function getRandomDateMexico(){
        $start = strtotime("1 January 2016");
        $end = strtotime("30 March 2020");
        $timestamp = mt_rand($start, $end);
        echo date("m /d /Y", $timestamp);
    }


?>