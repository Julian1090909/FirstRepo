<?php
abstract class Question {

    protected string $QuestionText;
    protected $Category;  

    abstract public function checkAwnser();
}
?>



<?php
class SingleChoiceQuetstion extends Question{

    protected  $AwnsersArray;
    protected  $SubmitedAwnser;
    protected  $CorrectAwnser;

    public function __construct(){
        $this->AwnsersArray = array();
    }

    public function checkAwnser(){
        echo "checkAwnser exectuet. Missing implimentation.";    
    }

}
?>


<?php
class MultipleChoiceQuetstion extends Question{

    protected  $AwnsersArray;
    protected  $SubmitedAwnsersArray;
    protected  $CorrectAwnsersArray;

    public function __construct(){
        $this->AwnsersArray = array();
        $this->SubmitedAwnsersArray = array();
        $this->CorrectAwnsersArray = array();
    }

    public function checkAwnser(){
        echo "checkAwnser exectuet. Missing implimentation.";    
    }

}
?>



<?php

$q1 = new SingleChoiceQuetstion();
$q1->checkAwnser();

?>

