
<?php include 'database.php'; ?>
<?php
$query = "SELECT * FROM questions";
$result = $mysqli->query($query);

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
            <h1>Questionnaire</h1>
        </header>
          <div class = "container">
            <h2>Hugo BV</h2>
            <p> This is a questionnaire made for Hugo BV</p>
            <ul>
              <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
              <li><strong>Type: </strong>Multiple Choice</li>
            </ul>

            <a href = "question.php?n=1" class="start">Start Questionnaire</a>
            <a href = "add.php" class="add">Add Question</a>

          </div>
    </body>
    <footer>
      <p> Berk Kaan Kuguoglu 2017</p>

    </footer>

</html>
