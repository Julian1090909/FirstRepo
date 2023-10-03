<?php
abstract class Question {

    protected string $QuestionText;
    protected $Solutions;
    protected $Category;  

    abstract protected function checkAwnser();

    protected function displayQuestion(){
        echo $this->QuestionText;
    }


    protected function showArray($arr){
    
        for ($i=0; $i < count($arr); $i++) { 
            echo "$arr[$i] ";
        }
        echo "<br>";
    }


}
?>