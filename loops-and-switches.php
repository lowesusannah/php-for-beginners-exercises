<?php
//if Statement with elseif and else to finally display string "I love PHP"
  if (0 === 1) {
    echo "I don't love php";
  } elseif (0 === 2) {
    echo "php is the worst";
  } else {
    echo "I love PHP";
  }

//for loop that displays 10 numbers

for ($i = 0; $i <= 10; $i++){
  echo $i;
  //note to self: to display on separate lines, add a . "<br>" to end of line after $i;
}

//switch statement that tests against one condition with 5 cases

$word = "test"

switch($word) {
  case 34:
  echo "you have the number 34";
  case "word":
  echo "you have a word";
  break;
  case "true":
  echo "your case is true";
  break;
  case "false":
  echo "your case is false";
  break;
  case: "test":
  echo "your case is test!";
  break;
}

 ?>
