<?php
// //RANDOM KILOMETER SPENT BRASIL CHILE PERU MEXICO --------------------------------------------------------------------------------------
    function getKilometerRandom($randomNumber){
        $randomNumber = rand(100, 1000);
        if($randomNumber > 800){
            return ("Tibo Inshape mod, ".$randomNumber." kilometers spent today 😎");
        }elseif($randomNumber < 800 && $randomNumber >400){
            return ("I'm was in good shape, ".$randomNumber." kilometers spent today 😁");
        }else {
            return ("I'm so tired, only ".$randomNumber." kilometers spent today 😪");
        }
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

// CONTACT -----------------------------------------------------------------------------------------------

    function contact(){
        if(isset($_POST) && isset($_POST['send'])){
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['message'])){
                $_SESSION['alreadyMessaged'] = true;
                $_SESSION['firstname'] = $_POST['firstname'];
                $_SESSION['lastname'] = $_POST['lastname'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['message'] = $_POST['message'];
                if($_SESSION['alreadyMessaged'] === true){
                    Header('Location: http://localhost:3000/pages/message.php');
                }  
            }    
        }
    }            

// CONTACT EMAIL MESSAGE --------------------------------------------------------------------------------

    function emailSend(){
        if($_SESSION['alreadyMessaged'] === true && isset($_SESSION['alreadyMessaged'])){
            $to = "krillinee@gmail.com";
            $from = "andraurelien@yahoo.fr";
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $subject = "New message from ".$firstname." ".$lastname." from Julian Wild website.";
            $content = "The following message was sent : ".$message." with this email : ".$email;
            $headers = "From:".$from;
            if(mail($to, $subject, $content, $headers)){
                echo "your mail was sent";
            }else {
                echo "your mail was not sent";
            }
        }
    }

// REDIRECTION TO INDEX WHEN NO MESSAGE SENT ---------------------------------------------------------------

    function redirection(){
        if(empty($_SESSION['alreadyMessaged']) || $_SESSION['alreadyMessaged'] == false){
            Header('Location: http://localhost:3000/index.php');
        }
    }
// DELETE MESSAGE ------------------------------------------------------------------------

    function deleteMessage(){
        if(isset($_POST['delete'])){
            unset($_SESSION['alreadyMessaged']);
            unset($_SESSION['firstname']);
            unset($_SESSION['lastname']);
            unset($_SESSION['email']);
            unset($_SESSION['message']);
            session_destroy();
        }
    }
?>