<?php

require_once 'Question.php';

class MultipleChoiceQuetstion extends Question{
    
    protected  $AwnsersArray;
    protected  $SubmitedAwnsersArray;

    public function __construct($AwnsersArray, $Solutions, $questionText){

        $this->AwnsersArray = $AwnsersArray;
        $this->QuestionText = $questionText;
        $this->Solutions = $Solutions;

        $this->displayQuestion();      
        $this->displayAwnsers();
        $this->checkAwnser();

    }

    public function checkAwnser(){

        if ($this->SubmitedAwnsersArray == 0) {
            return;
        }

        $points = 0;
        for ($i=0; $i < count($this->SubmitedAwnsersArray); $i++) { 
            
            if (in_array($this->SubmitedAwnsersArray[$i], $this->Solutions)) {
                $points++;
            }

        }

        echo "$points / " . count($this->Solutions) . " Correct Answers";

    }





    protected function displayAwnsers(){
        
        echo '<form method="post" action="">';
        
            for ($i=0; $i < count($this->AwnsersArray); $i++) { 
                
                $a = (string) $this->AwnsersArray[$i];

                echo 
                "<input type='checkbox' name='options[]' id='$i+1' value='$a'>       
                <label for=$i+1> $a </label>
                <br>";          
            }

            echo "<br>";
            echo "<input type='submit' value='Submit'>";

        echo '</form>';



        if ($_SERVER["REQUEST_METHOD"] == "POST") {        
            if(isset($_POST['options'])){
                
                $this->SubmitedAwnsersArray = array_map('htmlspecialchars', $_POST['options']);

                
            }
        }      


    }




}

?>