
<?php include 'database.php'; ?>
<?php
$query = "SELECT * FROM `questions`
          WHERE question_number = $number";
$result = mysqli->query($query) or die(mysqli->error.__LINE__);

$total = $result->num_rows;

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
            <h2>Hugo BV</h2>
            <p> This is a questionnaire made for Hugo BV</p>
            <ul>
              <li><strong>Number of Questions: </strong><?php echo $total?></li>
              <li><strong>Type: </strong>Multiple Choice</li>
              <li><strong>Estimated Time: </strong><?php echo $total * 0.5?></li>
            </ul>

            <a href = "question.php?n=1" class="start">Start Questionnaire</a>

          </div>
      </main>
    </body>

</html>
