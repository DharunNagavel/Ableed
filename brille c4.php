<?php
    include "./layout/header.php";
    include "./layout/brillenav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brille literacy chapter 4</title>
</head>
<body>
<button class="btn btn-secondary text-info" id="speakButton">Read</button>
<button class="btn btn-secondary text-info" id="stopButton">Stop</button>
<button class="btn btn-secondary text-info" id="pauseButton">Pause</button>
<button class="btn btn-secondary text-info" id="resumeButton">Resume</button>
<div id="content">
<h1>Reading Simple Words and Sentences</h1>

Reading in Braille begins with recognizing common sight words—frequently used words that appear in everyday reading materials.<br> These words include basic pronouns (I, you, he, she), prepositions (in, on, at), and common verbs (is, go, see).<br> Since these words are essential for forming simple sentences, mastering them helps learners build confidence and fluency in Braille reading. <br>Repeated exposure to these words allows readers to recognize them quickly by touch, reducing the need to read letter by letter.<br>

Developing finger sensitivity is a crucial skill for reading Braille efficiently.<br> Since Braille relies on touch, learners must train their fingertips to distinguish different dot patterns smoothly.<br> Proper hand movement, such as using a light touch and scanning from left to right, improves reading speed and accuracy. <br>Regular finger exercises, including tracing Braille letters and practicing with raised-dot patterns, help enhance tactile recognition skills. <br>Over time, readers will be able to identify words more naturally and read with greater ease.<br>

To reinforce learning, students will engage in exercises that involve reading short paragraphs in Braille. <br>These passages will contain simple sentences that incorporate sight words, numbers, and punctuation marks.<br> Practicing with full sentences helps learners understand sentence structure and improves their reading comprehension.<br> As they progress, they will become more comfortable reading longer texts, ultimately developing strong literacy skills in Braille.
<br>
<h4>Here are the Braille representations for the words "I," "You," "He," "She," "on" "see" and "go" using Grade 1 Braille (uncontracted Braille):</h4>

I → ⠊ (Dots 2-4)
<br>


You → ⠽⠕⠥ (Dots 1-3-4-5-6 for Y, 1-3-5 for O, 1-3-6 for U)
<br>


He → ⠓⠑ (Dots 1-2-5 for H, 1-5 for E)
<br>


She → ⠎⠓⠑ (Dots 2-3-4 for S, 1-2-5 for H, 1-5 for E)
<br>
On → ⠕⠝ (Dots 1-3-5 for O, 1-3-4-5 for N)
<br>

See → ⠎⠑⠑ (Dots 2-3-4 for S, 1-5 for E, 1-5 for E)
<br>


Go → ⠛⠕ (Dots 1-2-4-5 for G, 1-3-5 for O)
</div>
<br>
<div class="d-flex justify-content-between">
    <a href="brille c3.php">
<button class="btn btn-secondary text-info">previous</button></a>
<a href="brille c5.php">
<button class="btn btn-secondary text-info">Next</button></a>
</div>
</body>
<script src="speak.js"></script>
</html>
<?php
include "./layout/footer.php";
?>