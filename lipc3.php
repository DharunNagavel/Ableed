<?php
     include "./layout/header.php";
     include "./layout/lipnav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Lip Reading Chapter 3</title>
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
     <h1>Chapter 3: Learning the Lip Patterns of Vowels</h1>
     <h3>How Vowels Are Formed: A, E, I, O, U</h3>
     <p>Vowels are produced without significant obstruction of airflow, unlike consonants. They are shaped by the position of the tongue, lips, and jaw in the mouth.</p>
     <h3>Key Factors in Vowel Formation</h3>
     <p><span class="sp">Tongue Height – </span>How high or low the tongue is in the mouth.</p>

     <p><span class="sp">Tongue Position – </span>How far forward or backward the tongue is.
     <p><span class="sp"> Front vowels:</span> /i/ ("see"), /e/ ("bet") 
     <p><span class="sp"> Back vowels:</span> /u/ ("blue"), /o/ ("go")

     <p><span class="sp"> Lip Shape –</span> Whether the lips are rounded or unrounded.
     <p><span class="sp"> Rounded vowels: </span>/o/ ("go"), /u/ ("blue")
     <p><span class="sp">Unrounded vowels:</span> /a/ ("cat"), /e/ ("bet") 

     <p><span class="sp">Tenseness –</span> Whether the vowel is tense (longer, stronger) or lax (shorter, relaxed).
     <p><span class="sp">Tense vowels: </span>/i/ ("see"), /u/ ("blue")
     <p><span class="sp">Lax vowels:</span> /ɪ/ ("sit"), /ʊ/ ("book")
     <br>
     <h3>Vowel Breakdown</h3>
     <br>
     <img src="./assets/img/2.jpg">
     <br>
     <br>
     <h3>Diphthongs (Gliding Vowels)</h3>
     <p>Some vowels change shape during pronunciation:<br>

/aɪ/ – "I, buy" (tongue moves from low to high)<br>
/oʊ/ – "go, no" (tongue moves from mid to high)</p>
<br>
<h3>Why Vowel Formation Matters</h3>
<p>Crucial for clear speech and pronunciation<br>
Helps in accent training and phonetics<br>
Important in lip reading and language learning</p>
<br>
<p>Understanding how vowels are formed makes speech more natural and intelligible, improving both speaking and listening skills.</p>
<h3>Commonly Misread Vowels in Lip Reading & How to Differentiate Them</h3>
<p>Since vowel sounds are primarily shaped by the tongue inside the mouth, they can be difficult to distinguish visually in lip reading. Many vowels look similar or have subtle lip movement differences.</p>
<h3>Commonly Confused Vowel Pairs</h3>
<br>
<img src="./assets/img/3.jpg">
<br>
<br>
<h3>Tips for Differentiating Vowels in Lip Reading</h3>
<p><span class="sp">Lip Shape – </span>Rounded vowels (/o/, /u/) have clear lip protrusion.
<p><span class="sp">Mouth Opening – </span>Low vowels (/a/, /æ/) require a larger mouth opening.
<p><span class="sp">Jaw Position – </span>Some vowels need more jaw movement (e.g., /æ/ vs. /e/).
<p><span class="sp">Context Clues – </span>Using the surrounding consonants and sentence meaning helps predict the word.</p>
<br>
<p>Since vowels rely more on internal mouth shaping, lip readers often rely on context, facial expressions, and gestures to improve understanding.</p>
<br>
<br>
<p>Exercises: Practicing vowel sounds with slow-motion videos.</p>
    </div>
<div class="d-flex justify-content-between">
    <a href="lipc2.php"><button class="btn btn-secondary text-info">previous</button></a>
    <a href="lipc4.php"><button class="btn btn-secondary text-info">next</button></a>
</div>
</body>
<script src="speak.js"></script>
</html>
<?php
include "./layout/footer.php";
?>