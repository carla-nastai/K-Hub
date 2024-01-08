<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "k-hub";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getRandomQuestions($conn, $num_questions) {
    $sql = "SELECT id, question_text, answer_options, correct_answer FROM questions ORDER BY RAND() LIMIT $num_questions";
    $result = $conn->query($sql);

    if ($result) {
        $questions = array();

        while ($row = $result->fetch_assoc()) {
            $questions[] = $row;
        }

        return $questions;
    } else {
        echo "Error fetching questions: " . $conn->error;
        return null;
    }
}

function updateUserScore($conn, $user_id, $new_score) {
    $current_high_score = getCurrentHighScore($conn, $user_id);

    if ($new_score > $current_high_score) {
        $sql = "UPDATE users SET hangul_score = $new_score WHERE id = $user_id";

        if ($conn->query($sql) === TRUE) {
            header("Location: scores.php");
            exit();
        } else {
            echo "Error updating score: " . $conn->error;
        }
    } else {
        // If the new score is not higher, simply redirect without updating
        header("Location: hangul.php");
        exit();
    }
}

function getCurrentHighScore($conn, $user_id) {
    $sql = "SELECT MAX(hangul_score) AS max_score FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        return $row['max_score'];
    } else {
        return 0; // Default to 0 if there is an error or no existing score
    }
}

function getQuestionById($conn, $questionId) {
    $questionId = mysqli_real_escape_string($conn, $questionId);

    $query = "SELECT * FROM questions WHERE id = '$questionId' LIMIT 1";

    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $question = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        return $question;
    } else {
        return null;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $answers = $_POST['answers'];
    $score = 0;

    foreach ($answers as $question_id => $selected_answer) {
        $question = getQuestionById($conn, $question_id);
        if ($question && isset($question['correct_answer']) && isset($question['answer_options'])) {
            $correct_answer = $question['correct_answer'];

            if ($selected_answer == $correct_answer) {
                $score++;
            }
        }
        
    }
    

    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }

    $user_id = $_SESSION['user_id'];
    updateUserScore($conn, $user_id, $score);
} else {
    $questions = getRandomQuestions($conn, 5);

    if ($questions) {
        echo "<form action='score.php' method='post'>";
        echo "<ol>";

        foreach ($questions as $question) {
            $question_id = $question['id'];
            $question_text = $question['question_text'];
            $answer_options = isset($question['answer_options']) ? $question['answer_options'] : '';

            $answer_options_array = explode(';', $answer_options);

            echo "<li>";
            echo htmlspecialchars($question_text) . "<br>";

            foreach ($answer_options_array as $option) {
                echo "<input type='radio' name='answers[$question_id]' value='" . htmlspecialchars($option) . "'> " . htmlspecialchars($option) . "<br>";
            }

            echo "</li>";
        }

        echo "</ol>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }
}

$conn->close();
?>
