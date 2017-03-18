<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
// set question number

//isset($_GET['n'])
  $number = (int) $_GET['n'];


  $allquestions = "SELECT * FROM questions";
  $res = $mysqli->query($allquestions);
  $total = $res->num_rows;

// get question
  $query = "SELECT * FROM questions WHERE question_number = $number";

// get result
  $result = $mysqli->query($query);

  $question = $result->fetch_assoc();

// get choices
  $query = "SELECT * FROM choices WHERE question_number = $number";


  $result = $mysqli->query($query);


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
              <div class = "current"> Question <?php echo $question['question_number']; ?> of <?php echo $total; ?> </div>
              <p class = "question">
                 <?php echo $question['text']; ?>
              </p>

              <form method = "post" action = "process.php">
                <ul class = " choices">

                  <?php while($row= $result->fetch_assoc()){ ?>
                    <li><input name="choice" type= "radio" value=<?php echo $row['id']; ?> /><?php echo $row['text']; ?></li>

                  <?php  } ?>
               </ul>
               <input type ="hidden" name="number" value="<?php echo $number; ?>"/>
               <input type="submit" value="Submit" />

             </form>

          </div>
      </main>
      <footer>
      </footer>
    </body>

</html>
