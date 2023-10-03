<?php

require_once('MultipleChoiceQuestion.php');
require_once('SingleChoiceQuetstion.php');


$questionText = "Welche dieser Begriffe sind KEINE 'access modifiers' in PHP?";
$awnsers = array("protected","private","public","abstract");
$Solutions = array("abstract");
$sq = new SingleChoiceQuetstion($awnsers, $Solutions, $questionText);

echo "<br>";


$questionText = "Welche dieser Begriffe sind 'access modifiers' in PHP?";
$awnsers = array("protected","private","public","abstract");
$Solutions = array("protected","private","public");
$mq = new MultipleChoiceQuetstion($awnsers, $Solutions, $questionText);

echo "<br>";


?>