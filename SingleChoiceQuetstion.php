<?php

require_once 'Question.php';

class SingleChoiceQuetstion extends Question{

    protected  $AwnsersArray;
    protected  $SubmitedAwnser;
    //protected  $CorrectAwnser;

    public function __construct($AwnsersArray, $Solutions, $QuestionText){

        $this->AwnsersArray = $AwnsersArray;
        $this->QuestionText = $QuestionText;
        $this->Solutions = $Solutions[0];

        $this->displayQuestion();
        $this->displayAwnsers();

        if ($this->checkAwnser() == true) {echo "Answer Correct<br><br>";}
        elseif($this->checkAwnser() == false){echo "Answer False<br><br>";}


    }

    public function checkAwnser(){
        if ($this->Solutions == $this->SubmitedAwnser) {return true;}
        else{return false;}
    }


    protected function displayAwnsers(){
        
        echo '<form method="post" action="">';

            for ($i=0; $i < count($this->AwnsersArray); $i++) { 
                
                $a = (string) $this->AwnsersArray[$i];

                echo 
                "<input type='radio' name='option' id='$i' value='$a'>       
                <label for=$i> $a </label>
                <br>";          
            }

            echo "<br>";
            echo "<input type='submit' value='Submit'>";

        echo '</form>';


        if ($_SERVER["REQUEST_METHOD"] == "POST") {        
            if(isset($_POST['option'])){$this->SubmitedAwnser = $_POST['option'];}
        }      
    }



}
?>