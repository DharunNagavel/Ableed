<?php
     include "./layout/header.php";
     include "./layout/lipnav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lip Reading Chapter 4</title>
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
    <h1>Chapter 4: Recognizing Consonant Sounds</h1>
    <h5>Easy-to-Read Consonants: P, B, M, F, and V</h3>
    <h3> Highly Visible Lip Movements</h3>
    <br>
    <p>The consonants P, B, M, F, and V are among the easiest to read in lip reading because they involve distinct and highly visible lip movements. These sounds are produced at the front of the mouth, making them stand out clearly when spoken.</p>
    <h3>Labial Consonants: P, B, and M</h3>
    <p>P, B, and M are formed by pressing both lips together, which makes them highly visible. However, they look identical when spoken, creating challenges for lip readers.<br><br><span class="sp">The key differences are:</span><br>
P is voiceless (no vocal cord vibration).<br>
B is voiced (vocal cords vibrate).<br>
M is also voiced, but airflow is directed through the nose.</p>
<h3>Labiodental Consonants: F and V</h3>
<p>F and V are produced by touching the upper teeth to the lower lip. This movement is distinct, making them easy to recognize in lip reading. The difference between them is:<br>

F is voiceless, meaning no vocal cord vibration.<br>
V is voiced, meaning the vocal cords vibrate.</p>
<h3>Challenges in Differentiation</h3>
<p>Although these sounds are easy to see, P, B, and M look exactly the same when spoken, which can lead to confusion. For example, words like "pat," "bat," and "mat" all appear identical in lip reading. To differentiate them, lip readers must rely on context clues, facial expressions, and sentence structure to determine the intended word.</p>
<h3> Importance in Lip Reading and Speech Clarity</h3>
<p>Because these consonants are highly visible, they serve as a great foundation for lip reading, speech therapy, and language learning. Mastering them can significantly improve communication for individuals who are deaf or hard of hearing and enhance speech clarity for language learners.</p>
<h1>Hard-to-Read Consonants: K, G, H, T, D, N</h1>
<h3>Limited Lip Movement</h3>
<p>Unlike highly visible consonants like P, B, M, F, and V, these sounds involve tongue and throat movements, which are mostly hidden inside the mouth. This makes them difficult to distinguish in lip reading.</p>
<h3>Hidden Tongue and Throat Movements</h3>
<p><span class="sp">K and G –</span>Produced at the back of the mouth, where the tongue touches the soft palate, making them nearly invisible.</p>
<p><span class="sp">T and D – </span>Formed by tapping the tongue against the roof of the mouth, which is hidden from view.</p>
<p><span class="sp">N – </span>Similar to T and D but involves air flowing through the nose.</p>
<h3>Breathy and Subtle Sound: H</h3>
<p>The H sound is created by pushing air through the mouth without significant lip or tongue movement, making it almost impossible to see unless exaggerated.</p>
<h3>Why These Sounds Are Hard to Read</h3>
<p>Since these consonants rely on movements inside the mouth, they often look identical or have no visible cues in lip reading. Words like "cat" and "gad" may appear the same, causing confusion.</p>
<h3>How to Overcome These Challenges</h3>
<p>Lip readers rely on context clues, facial expressions, and sentence flow to fill in missing sounds. Paying attention to surrounding words, speaker rhythm, and non-verbal cues can help improve understanding despite these limitations.</p>
<br><br><p>Exercises: Matching words with similar-looking consonants (e.g., “pat” vs. “bat”).</p>
    </div>
<div class="d-flex justify-content-between">
    <a href="lipc3.php"><button class="btn btn-secondary text-info">previous</button></a>
    <a href="lipc5.php"><button class="btn btn-secondary text-info">next</button></a>
</div>
</body>
<script src="speak.js"></script>
</html>
<?php
include "./layout/footer.php";
?>