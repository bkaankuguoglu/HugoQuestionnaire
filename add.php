<?php include 'database.php' ?>
<?php
  if(isset($_POST['submit'])){
      $question_number = $_POST['question_number'];
      $question_text = $_POST['question_text'];

      $choices = array():
      $choices[1] = $_POST['choice'];
      $choices[2] = $_POST['choice'];
      $choices[3] = $_POST['choice'];
      $choices[4] = $_POST['choice'];
      $choices[5] = $_POST['choice'];

      $query = " INSERT INTO `questions` (question_number, text)
                  VALUES ('$question_number','$question_text')";

      $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

      // validating insert
      if($insert_row){
          foreach($choices as $choice=>$value){

          //choice query
              $query = " INSERT INTO `choices` (question_number, text)
                          VALUES ('$question_number','$value')";

          // run query
              $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

          // validating insert
              if($insert_row){
                  continue;
              }else{
                  die('ERROR: ('.$mysqli->errno . ') '. $mysqli->error);
              }

        }

      }
      $msg = 'Question has been added.';

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Questionnaire </title>
        <link rel="stylesheet" href = "css/style.css" type=text/css/>
      </head>

      <body>
        <header>
          <div class = "container">
            <h1>Questionnaire</h1>
          </div>
        </header>
      <main>
          <div class = "container">
          <h2> Add a question!</h2>
          <?php
              if(isset($msg)){
                echo '<p>'. $msg . '</p>';
              }
          <form method ="post" action="add.php">
              <p>
                  <label> Question number</label>
                  <input type ="number" name="question_number"/>
              </p>
              <p>
                  <label> Question text</label>
                  <input type ="text" name="question_text"/>
              </p>
              <p>
                  <label> Choice #1</label>
                  <input type ="text" name="choice1"/>
              </p>
              <p>
                  <label> Choice #2</label>
                  <input type ="text" name="choice2"/>
              </p>
              <p>
                  <label> Choice #3</label>
                  <input type ="text" name="choice3"/>
              </p>
              <p>
                  <label> Choice #4</label>
                  <input type ="text" name="choice4"/>
              </p>
              <p>
                  <label> Choice #5</label>
                  <input type ="text" name="choice5"/>
              </p>

              <p>
                  <label> Choice #5</label>
                  <input type ="submit" name="submit" value="Submit"/>
              </p>           </form>
          </div>
      </main>
    </body>

</html>
