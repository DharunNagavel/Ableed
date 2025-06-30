<?php
     include "./layout/header.php";
     include "./layout/lipnav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lip Reading Chapter 2</title>
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
    <h1>Chapter 2: Recognizing Mouth Shapes & Movements</h1></h1>
    <h2>How Lips, Teeth, and Tongue Move When Speaking</h2>
    <p>When we speak, our lips, teeth, and tongue work together to produce different sounds. Each plays a crucial role in shaping speech by controlling airflow, vibrations, and resonance.</p>
    <h3>Lips</h3>
    <p>The lips are essential for forming many speech sounds, especially labial (lip-based) and rounded vowel sounds.</p>
    <p><span class="sp">Closed Lips –</span> Sounds like /p/, /b/, and /m/ are made by pressing the lips together and releasing air.</p>
    <p><span class="sp">Partially Open Lips –</span> Sounds like /f/ and /v/ are made by lightly touching the upper teeth to the lower lip.</p>
    <p><span class="sp">Rounded Lips –</span> For vowels like /o/ and /u/ (as in "go" and "blue"), the lips round and protrude.</p>
    <p><span class="sp">Wide Lips – </span>In vowels like /i/ (as in "see"), the lips spread apart in a smile-like shape.</p>
    <h3>Teeth</h3>
    <p>The teeth help create certain consonant sounds by controlling airflow and forming obstacles for the tongue and lips.</p>

    <p><span class="sp">Front Teeth Contact – </span>Sounds like /f/ and /v/ are made by placing the lower lip against the upper teeth.</p>
    <p><span class="sp">Tongue Against Teeth – </span>/θ/ (as in "think") and /ð/ (as in "this") are produced by placing the tongue between the teeth.</p>
    <p><span class="sp">Blocking and Redirecting Air – </span>The teeth help shape sounds like /s/ and /z/ by directing air through a narrow gap.</p>
    <h3>Tongue</h3>
    <p>The tongue is one of the most flexible speech organs, responsible for shaping nearly all consonant and vowel sounds.</p>
    <p><span class="sp">Tip of the Tongue –</span> Used in sounds like /t/, /d/, /n/ (touching the roof of the mouth or behind the teeth).</p>
    <p><span class="sp">Blade of the Tongue – </span>Helps create sounds like /ʃ/ ("sh") and /ʒ/ ("measure") by controlling airflow.</p>
    <p><span class="sp">Back of the Tongue –</span> Used for sounds like /k/ and /g/, where it presses against the soft palate.</p>
    <p><span class="sp">Tongue Position for Vowels – </span>Vowels vary based on the height and position of the tongue (e.g., high for /i/ in "seat," low for /a/ in "car").</p>
    <h3>How They Work Together</h3>
    <p>For example, when saying the word "bat":<br>

The <span class="sp">lips </span>press together and release to make /b/.<br>
The<span class="sp"> tongue </span>moves near the roof of the mouth for /a/.<br>
The <span class="sp">tip of the tongue</span> touches behind the <span class="sp">upper teeth </span>to produce /t/.</p>
<p>By coordinating movements of the lips, teeth, and tongue, we produce clear and intelligible speech. Understanding these movements helps in lip reading, speech therapy, and language learning.</p>
<h3>Voiced vs. Unvoiced Sounds: Key Differences</h3>
<p>The main difference between voiced and unvoiced (voiceless) sounds is whether the vocal cords vibrate during pronunciation.</p>
<h3>Voiced Sounds</h3>
<p>Produced when the vocal cords vibrate while making the sound.<br>
You can feel this vibration by placing your fingers on your throat while speaking.<br>
Examples: /b/, /d/, /g/, /v/, /z/, /ʒ/ ("measure"), /m/, /n/</p>
<h3>Unvoiced (Voiceless) Sounds</h3>
<p>Produced without vocal cord vibration—only air passes through.
These sounds are softer and rely more on airflow and articulation.
Examples: /p/, /t/, /k/, /f/, /s/, /ʃ/ ("sh"), /θ/ ("thin")</p><br>
<h3>Examples of Voiced vs. Unvoiced Pairs</h3>
<img src="./assets/img/1.jpg">
<br>
<h3>How to Test Voicing</h3>
<p><span class="sp">Finger Test – </span>Place your fingers on your throat and say "z" (voiced) and "s" (unvoiced). You should feel vibration for "z" but not for "s."</p>
<p><span class="sp">Paper Test –</span> Hold a piece of paper in front of your mouth and say "p" and "b." The paper moves more with "p" because it is unvoiced and has more air release.</p>
<h3>Why Is This Important?</h3>
<p>Helps with lip reading (voicing differences can be hard to see).</p>
<p>Essential for language learning and pronunciation.</p>
<p>Important in speech therapy for distinguishing similar sounds.</p>
<p>Understanding voiced vs. unvoiced sounds improves speech clarity, pronunciation, and comprehension in communication.</p>
<br>

<p>Exercises: Watching silent videos and identifying basic mouth movements.</p>
    </div>
<div class="d-flex justify-content-between">
    <a href="lipc1.php"><button class="btn btn-secondary text-info">previous</button></a>
    <a href="lipc3.php"><button class="btn btn-secondary text-info">next</button></a>
</div>

</body>
<script src="speak.js"></script>
</html>
<?php
include "./layout/footer.php";
?>