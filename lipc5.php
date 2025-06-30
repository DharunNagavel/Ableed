<?php
     include "./layout/header.php";
     include "./layout/lipnav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lip Reading Chapter 5</title>
</head>
<body>
<style>
        .sp
        {
            font-weight:bold;
        }
</style>
<button class="btn btn-secondary text-info" id="speakButton">Read</button>
<button class="btn btn-secondary text-info" id="stopButton">Stop</button>
<button class="btn btn-secondary text-info" id="pauseButton">Pause</button>
<button class="btn btn-secondary text-info" id="resumeButton">Resume</button>
<div id="content">
        <h1>Chapter 5: Differentiating Similar-Looking Words</h1>
        <h3>Common misread words: Mat vs. Bat, Sheep vs. Cheap, Man vs. Van.</h3>
        <h3>Commonly Misread Words in Lip Reading</h3>
        <p>Lip reading can be challenging because some words look nearly identical when spoken. This happens when sounds are formed using similar lip movements, making them easy to confuse.</p>
        <h3> Mat vs. Bat</h3>
        <p>Both "Mat" and "Bat" involve lips coming together, making them visually identical in lip reading. The difference is that M is a nasal sound, while B is a voiced plosive, but this distinction isn’t visible on the lips.</p>
        <h3>Sheep vs. Cheap</h3>
        <p>The difference between "Sheep" and "Cheap" comes from the initial sounds /ʃ/ (sh) and /tʃ/ (ch). While /ʃ/ is smooth, /tʃ/ involves a small tongue movement inside the mouth, which is difficult to see.</p>
        <h3>Man vs. Van</h3>
        <p>Both "Man" and "Van" start with the lips together, making them look alike. The difference is that M is a nasal sound, while V involves the upper teeth touching the lower lip, which is more visible.</p>
        <h3>Final Thoughts</h3>
        <p>Since these words appear similar on the lips, lip readers must rely on context, facial expressions, and sentence flow to understand them correctly. Observing small differences in lip shape, jaw movement, and airflow can help improve accuracy in distinguishing tricky words.</p>
        <br><br><h1>Using context clues to guess the correct word.</h1>
        <h3>Using Context Clues to Guess the Correct Word</h3>
        <p>Since many words look similar when spoken, context clues play a crucial role in lip reading. By analyzing the surrounding words, facial expressions, and the overall topic of conversation, a lip reader can make an educated guess about unclear words.</p>
        <h3>Sentence Structure and Meaning</h3>
        <p>Understanding the general flow of a sentence helps predict missing words. For example:<br>
"I saw a ___ running in the field."<br>
The missing word is likely "sheep" rather than "cheap" because "cheap" does not fit the context.</p>
<h3>Topic of Conversation</h3>
<p>Knowing the subject of discussion helps narrow down possible words.<br>

If someone is talking about animals, the word "bat" is more likely than "mat."<br>
If discussing vehicles, "van" is more probable than "man."</p>
<h3>Facial Expressions and Body Language</h3>
<p>Nonverbal cues can indicate the speaker’s emotion and help determine the intended word.<br>

A confused expression may suggest a question.<br>
A smiling face could indicate a positive word rather than a negative one.</p>
<h3>Speaker’s Lip Movement and Additional Cues</h3>
<p>While some sounds look similar, subtle differences in lip movement (such as teeth touching the lip for V vs. full lip closure for M) can help. If a speaker exaggerates their pronunciation, it may provide more clarity.</p>
<br>
<h3>Final Tip:</h3>

<p>By combining sentence meaning, conversation context, facial expressions, and small lip movement differences, lip readers can make more accurate guesses and improve understanding.</p>
<br><br><p>Exercises: Watching short dialogues and guessing missing words.</p>
    </div>
<div class="d-flex justify-content-between">
    <a href="lipc4.php"><button class="btn btn-secondary text-info">previous</button></a>
    <a href="lipc6.php"><button class="btn btn-secondary text-info">next</button></a>
</div>     

</body>
<script src="speak.js"></script>
</html>
<?php
include "./layout/footer.php";
?>