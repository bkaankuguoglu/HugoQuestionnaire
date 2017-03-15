<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
// set question number
  $number = (int) $_GET('n');

// get question
  $query = "SELECT * FROM `questions`
            WHERE question_number = $number";

// get result
  $result = mysqli->query($query) or die(mysqli->error.__LINE__);

  $question = $result->fetch_assoc();

// get choices
  $query = "SELECT * FROM `choices`
            WHERE question_number = $number";

  choices = mysqli->query($query) or die(mysqli->error.__LINE__);

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
              <div class = "current"> Question <?php echo $question['quetion_number']; ?> of <?php echo $total; ?> </div>
              <p class = "question">
                 <?php echo $question('text'); ?>
              </p>

              <form method = "post" action = "process.php">
                <ul class = " choices">

                  <?php while($row= $choices->fetch_assoc()): ?>
                    <li><input name="choice" type= "radio" value=<?php echo $row['id'];?> /><?php echo $row['text'];?></li>

                  <?php endwhile: ?>
               </ul>
               <input type="submit" value="Submit" />
               <input type ="hidden" name="number" value="<?php echo $number; ?>"/>
             </form>

          </div>
      </main>
      <footer>
      </footer>
    </body>

</html>
