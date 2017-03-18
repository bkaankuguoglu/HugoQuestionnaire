<?php include 'database.php';

if(!isset($_POST['number'])){
  echo 'Number is not defined';
  exit;

}

if($_POST['number']){
  $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number +1;
}

$query = "SELECT * FROM questions";

$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
$total = $result->num_rows;


$query = "SELECT * FROM choices  WHERE question_number = $number";

$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);


//check if the last question

if($number == $total){
  header("Location: final.php");
  exit();

}else{
  header("Location: question.php?n=".$next);


}

?>
