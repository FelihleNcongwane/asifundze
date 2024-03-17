<?php
include '../../core/check_login.php';
@check_login();
$_SESSION['course'] = 0;
?>
<?php
		include "nav.php";
	?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="javascriptcourse.css">
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.ico">

    <title>JavaScript Quiz</title>
</head>
<body>
<form id="quizForm" action="CorrectAnswers.php" method = "POST">
  <h1>JavaScript Quiz </h1>
  <p>1. What does DOM stand for?</p>
  <label><input type="radio" name="q1" value="a"> Document Object Model</label><br>
  <label><input type="radio" name="q1" value="b"> Document Order Model</label><br>
  <label><input type="radio" name="q1" value="c"> Data Object Model</label><br>
  <label><input type="radio" name="q1" value="d"> Dynamic Order Model</label><br>
  
  <p>2. Which keyword is used to declare a variable in JavaScript?</p>
  <label><input type="radio" name="q2" value="a"> var</label><br>
  <label><input type="radio" name="q2" value="b"> int</label><br>
  <label><input type="radio" name="q2" value="c"> string</label><br>
  <label><input type="radio" name="q2" value="d"> variable</label><br>
  
  <p>3. What is the extension of a JavaScript file?</p>
  <label><input type="radio" name="q3" value="a"> .jv</label><br>
  <label><input type="radio" name="q3" value="b"> .jvs</label><br>
  <label><input type="radio" name="q3" value="c"> .js</label><br>
  <label><input type="radio" name="q3" value="d"> .jscr</label><br>
  
  <p>4. How do you comment in JavaScript?</p>
  <label><input type="radio" name="q4" value="a"> // Single-line comment</label><br>
  <label><input type="radio" name="q4" value="b"> /* Multi-line comment */</label><br>
  <label><input type="radio" name="q4" value="c"> # single line comment #</label><br>
  <label><input type="radio" name="q4" value="d"> Both a and b</label><br>
  
  <p>5. Which function is used to parse a string into an integer in JavaScript?</p>
  <label><input type="radio" name="q5" value="a"> parseInt()</label><br>
  <label><input type="radio" name="q5" value="b"> parseFloat()</label><br>
  <label><input type="radio" name="q5" value="c"> toInteger()</label><br>
  <label><input type="radio" name="q5" value="d"> parseInteger()</label><br>
  
  <p>6. What is the correct way to check if a variable x is equal to 5 in JavaScript?</p>
  <label><input type="radio" name="q6" value="a"> x == 5</label><br>
  <label><input type="radio" name="q6" value="b"> x = 5</label><br>
  <label><input type="radio" name="q6" value="c"> x === 5</label><br>
  <label><input type="radio" name="q6" value="d"> x.equals(5)</label><br>
  
  <p>7. Which of the following is NOT a JavaScript data type?</p>
  <label><input type="radio" name="q7" value="a"> Number</label><br>
  <label><input type="radio" name="q7" value="b"> Boolean</label><br>
  <label><input type="radio" name="q7" value="c"> Character</label><br>
  <label><input type="radio" name="q7" value="d"> String</label><br>
  
  <p>8. What does the 'this' keyword refer to in JavaScript?</p>
  <label><input type="radio" name="q8" value="a"> The current function</label><br>
  <label><input type="radio" name="q8" value="b"> The HTML document</label><br>
  <label><input type="radio" name="q8" value="c"> The global object</label><br>
  <label><input type="radio" name="q8" value="d"> The current object</label><br>
  
  <p>9. Which built-in method returns the length of a string in JavaScript?</p>
  <label><input type="radio" name="q9" value="a"> size()</label><br>
  <label><input type="radio" name="q9" value="b"> length()</label><br>
  <label><input type="radio" name="q9" value="c"> getSize()</label><br>
  <label><input type="radio" name="q9" value="d"> None of the above</label><br>
  
  <p>10. What is the output of typeof typeof 42?</p>
  <label><input type="radio" name="q10" value="a"> "number"</label><br>
  <label><input type="radio" name="q10" value="b"> "string"</label><br>
  <label><input type="radio" name="q10" value="c"> "object"</label><br>
  <label><input type="radio" name="q10" value="d"> "undefined"</label><br>
  
  <p>11. Which operator is used to assign a default value to a variable if it's undefined or null?</p>
  <label><input type="radio" name="q11" value="a"> || operator</label><br>
  <label><input type="radio" name="q11" value="b"> ?? operator</label><br>
  <label><input type="radio" name="q11" value="c"> ?: operator</label><br>
  <label><input type="radio" name="q11" value="d"> = operator</label><br>
  
  <p>12. What does the Array method 'push()' do in JavaScript?</p>
  <label><input type="radio" name="q12" value="a"> Removes the first element of an array</label><br>
  <label><input type="radio" name="q12" value="b"> Adds one or more elements to the end of an array</label><br>

  <p>13. What is the purpose of the 'setTimeout()' function in JavaScript?</p>
    <label> <input type="radio" name="q13" value="a"> To execute a function after a specified delay</label><br>
    <label><input type="radio" name="q13" value="b"> To set a timer for the entire script execution</label><br>
    <label><input type="radio" name="q13" value="c"> To clear the current setTimeout timer</label><br>
    <label><input type="radio" name="q13" value="d"> To pause the execution of JavaScript code</label><br>
    
  <p>14. How do you access the first element of an array in JavaScript?</p>
    <label><input type="radio" name="q14" value="a"> arr.first</label><br>
    <label><input type="radio" name="q14" value="b"> arr[0]</label><br>
    <label><input type="radio" name="q14" value="c"> arr.get(0)</label><br>
    <label><input type="radio" name="q14" value="d"> arr.getElement(1)</label><br>
    
  <p>15. What does the '&&' operator do in JavaScript?</p>
    <label><input type="radio" name="q15" value="a"> Logical OR</label><br>
    <label><input type="radio" name="q15" value="b"> Bitwise AND</label><br>
    <label><input type="radio" name="q15" value="c"> Logical AND</label><br>
    <label><input type="radio" name="q15" value="d"> Bitwise OR</label><br>
  
  </form>
  
  <button type="submit" form="quizForm">Submit Quiz</button>
</body>
 </html>
  