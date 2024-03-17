<?php
@session_start();
$_SESSION['course'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
		include "nav.php";
	?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssquestions.css">
    <title>CSS Quiz</title>
</head>
<body style="background-color: var(--color-bg);">
    <h1>CSS Quiz</h1>
    <form action="submit_quiz.php" method="post" class="container">
        <fieldset>
            <legend>Chapter 1: What is CSS?</legend>
            <label for="q1">What does CSS stand for?</label><br>
            <input type="radio" id="q1a" name="q1" value="A">
            <label for="q1a">A) Cascading Style Sheets</label><br>
            <input type="radio" id="q1b" name="q1" value="B">
            <label for="q1b">B) Computer Style Sheets</label><br>
            <input type="radio" id="q1c" name="q1" value="C">
            <label for="q1c">C) Creative Style Sheets</label><br>
            <input type="radio" id="q1d" name="q1" value="D">
            <label for="q1d">D) Content Style Sheets</label><br><br>

            <label for="q2">What does CSS describe?</label><br>
            <input type="radio" id="q2a" name="q2" value="A">
            <label for="q2a">A) How to structure HTML</label><br>
            <input type="radio" id="q2b" name="q2" value="B">
            <label for="q2b">B) How HTML elements are displayed</label><br>
            <input type="radio" id="q2c" name="q2" value="C">
            <label for="q2c">C) How to write JavaScript code</label><br>
            <input type="radio" id="q2d" name="q2" value="D">
            <label for="q2d">D) How to add images to a webpage</label><br><br>
        </fieldset>

        <fieldset>
            <legend>Chapter 2: Three Ways to Insert CSS</legend>
            <label for="q3">Which of the following is NOT a way to insert CSS into an HTML document?</label><br>
            <input type="radio" id="q3a" name="q3" value="A">
            <label for="q3a">A) External Style Sheet</label><br>
            <input type="radio" id="q3b" name="q3" value="B">
            <label for="q3b">B) Inline Style</label><br>
            <input type="radio" id="q3c" name="q3" value="C">
            <label for="q3c">C) Internal Style Sheet</label><br>
            <input type="radio" id="q3d" name="q3" value="D">
            <label for="q3d">D) External JavaScript File</label><br><br>
        </fieldset>

        <fieldset>
            <legend>Chapter 3: CSS Colors</legend>
            <label for="q4">Which property is used to set the text color in CSS?</label><br>
            <input type="radio" id="q4a" name="q4" value="A">
            <label for="q4a">A) font-color</label><br>
            <input type="radio" id="q4b" name="q4" value="B">
            <label for="q4b">B) color</label><br>
            <input type="radio" id="q4c" name="q4" value="C">
            <label for="q4c">C) text-color</label><br>
            <input type="radio" id="q4d" name="q4" value="D">
            <label for="q4d">D) background-color</label><br><br>

            <label for="q5">What is the hexadecimal code for the color red?</label><br>
            <input type="radio" id="q5a" name="q5" value="A">
            <label for="q5a">A) #00ff00</label><br>
            <input type="radio" id="q5b" name="q5" value="B">
            <label for="q5b">B) #ff0000</label><br>
            <input type="radio" id="q5c" name="q5" value="C">
            <label for="q5c">C) #0000ff</label><br>
            <input type="radio" id="q5d" name="q5" value="D">
            <label for="q5d">D) #ffff00</label><br><br>
        </fieldset>

        <fieldset>
            <legend>Chapter 4: Border Style</legend>
            <label for="q6">Which CSS property is used to set the border style?</label><br>
            <input type="radio" id="q6a" name="q6" value="A">
            <label for="q6a">A) border-width</label><br>
            <input type="radio" id="q6b" name="q6" value="B">
            <label for="q6b">B) border-style</label><br>
            <input type="radio" id="q6c" name="q6" value="C">
            <label for="q6c">C) border-color</label><br>
            <input type="radio" id="q6d" name="q6" value="D">
            <label for="q6d">D) border-type</label><br><br>

            <label for="q7">What value can be used for the border-style property to create a dotted border?</label><br>
            <input type="radio" id="q7a" name="q7" value="A">
            <label for="q7a">A) dashed</label><br>
            <input type="radio" id="q7b" name="q7" value="B">
            <label for="q7b">B) solid</label><br>
            <input type="radio" id="q7c" name="q7" value="C">
            <label for="q7c">C) dotted</label><br>
            <input type="radio" id="q7d" name="q7" value="D">
            <label for="q7d">D) double</label><br><br>
        </fieldset>

        <fieldset>
            <legend>Chapter 5: CSS Margins</legend>
            <label for="q8">Which CSS property is used to create space outside the border of an element?</label><br>
            <input type="radio" id="q8a" name="q8" value="A">
            <label for="q8a">A) padding</label><br>
            <input type="radio" id="q8b" name="q8" value="B">
            <label for="q8b">B) margin</label><br>
            <input type="radio" id="q8c" name="q8" value="C">
            <label for="q8c">C) space</label><br>
            <input type="radio" id="q8d" name="q8" value="D">
            <label for="q8d">D) border-spacing</label><br><br>

            <label for="q9">What is the default value of the margin property in most browsers?</label><br>
            <input type="radio" id="q9a" name="q9" value="A">
            <label for="q9a">A) 0</label><br>
            <input type="radio" id="q9b" name="q9" value="B">
            <label for="q9b">B) 10px</label><br>
            <input type="radio" id="q9c" name="q9" value="C">
            <label for="q9c">C) 1em</label><br>
            <input type="radio" id="q9d" name="q9" value="D">
            <label for="q9d">D) auto</label><br><br>
        </fieldset>

        <fieldset>
            <legend>Chapter 6: CSS Padding</legend>
            <label for="q10">Which CSS property is used to create space inside the border of an element?</label><br>
            <input type="radio" id="q10a" name="q10" value="A">
            <label for="q10a">A) margin</label><br>
            <input type="radio" id="q10b" name="q10" value="B">
            <label for="q10b">B) padding</label><br>
            <input type="radio" id="q10c" name="q10" value="C">
            <label for="q10c">C) spacing</label><br>
            <input type="radio" id="q10d" name="q10" value="D">
            <label for="q10d">D) border-padding</label><br><br>

            <label for="q11">What is the default value of the padding property in most browsers?</label><br>
            <input type="radio" id="q11a" name="q11" value="A">
            <label for="q11a">A) 0</label><br>
            <input type="radio" id="q11b" name="q11" value="B">
            <label for="q11b">B) 10px</label><br>
            <input type="radio" id="q11c" name="q11" value="C">
            <label for="q11c">C) 1em</label><br>
            <input type="radio" id="q11d" name="q11" value="D">
            <label for="q11d">D) auto</label><br><br>
        </fieldset>

        
        <button type="submit">Submit Quiz</button>
    </form>
</body>
</html>

