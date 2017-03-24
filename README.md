## Synopsis

HugoQuestionnaire is a simple questionnaire application built with PHP and MySQL that allows users to play with a simple questionnaire app that they can take the survey, or add new questions instead. It's not yet to be completed, and requires more features which I hope to develop if I can make some time for them.

## Code Example

It consists of 6 main php components, these are:

- **index.php** : main page of the application that shows the introductory information about the survey
- **question.php** : fetches the question and choice values from the database and displays them
- **database.php** : ensures database is connected
- **process.php** : processes each step to check if the survey is finished.
- **add.php** : allows users to add new questions to the survey.
- **final.php** : final page of the application that redirects person either to the main page or to the survey again.

The basic css style features are defined in **/css/style.css** folder.

## Motivation

This project is built for the assessment handed by Hugo BV.

## Installation

No installation needed.

## Tests

You can try out the application from [here!](http://ec2-54-202-97-207.us-west-2.compute.amazonaws.com/)

## Contributors

Designed and built by Berk Kaan Kuguoglu in a small dorm room full of pringles and beers.

## License

Be my guest.
