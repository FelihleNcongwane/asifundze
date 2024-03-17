<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <link rel="stylesheet" href="javascriptcourse.css">
</head>
<body>
    <h1>Quiz Results</h1>

    <?php
    // Define correct answers
    $correct_answers = array(
        'q1' => 'a',
        'q2' => 'a',
        'q3' => 'c',
        'q4' => 'd',
        'q5' => 'a',
        'q6' => 'c',
        'q7' => 'c',
        'q8' => 'd',
        'q9' => 'b',
        'q10' => 'a',
        'q11' => 'b',
        'q12' => 'b',
        'q13' => 'a',
        'q14' => 'b',
        'q15' => 'c'
    );

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Initialize variables for correct and incorrect answers
        $correct_count = 0;
        $incorrect_count = 0;

        // Validate and compare user's answers with correct answers
        foreach ($correct_answers as $question => $correct_answer) {
            if (isset($_POST[$question]) && !empty($_POST[$question])) {
                $user_answer = $_POST[$question];
                echo "<p>Question $question: Your answer - $user_answer. Correct answer - $correct_answer</p>";
                if ($user_answer == $correct_answer) {
                    $correct_count++;
                } else {
                    $incorrect_count++;
                }
            } else {
                echo "<p>Question $question: You did not select an answer.</p>";
                $incorrect_count++;
            }
        }

        // Calculate overall score
        $total_questions = count($correct_answers);
        $score_percentage = number_format(($correct_count / $total_questions) * 100, 2);
        $score_formatted = "$correct_count/$total_questions";

        // Display overall result and score
        echo "<p>Total correct answers: $correct_count</p>";
        echo "<p>Total incorrect answers: $incorrect_count</p>";
        echo "<p>Your overall score: $score_formatted ($score_percentage%)</p>";
    } else {
        echo "Form submission error.";
    }
    ?>
</body>
</html>
