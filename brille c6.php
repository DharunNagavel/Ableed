<?php
    include "./layout/header.php";
    include "./layout/brillenav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brille literacy chapter 6</title>
</head>
<body>
<button class="btn btn-secondary text-info" id="speakButton">Read</button>
<button class="btn btn-secondary text-info" id="stopButton">Stop</button>
<button class="btn btn-secondary text-info" id="pauseButton">Pause</button>
<button class="btn btn-secondary text-info" id="resumeButton">Resume</button>
<div id="content">
<h1>Using a Braille Typewriter (Perkins Brailler)</h1>
<li>

The Perkins Brailler is a specialized typewriter designed for writing Braille efficiently and accurately.<br> Unlike a standard typewriter or keyboard, it has only six main keys, each corresponding to one of the six dots in a Braille cell. By pressing different key combinations simultaneously, users can produce letters, numbers, and punctuation marks in Braille. <br>This chapter introduces the layout and function of the Perkins Brailler, guiding learners through the basics of typing Braille characters.<br> Additionally, students will learn about modern refreshable Braille displays—electronic devices that use moving pins to create dynamic Braille text, enabling real-time reading and digital access to information.<br>

To develop proficiency, learners will begin by practicing typing individual letters, common words, and simple sentences.<br> The goal is to build muscle memory for key combinations while ensuring accuracy in dot placement.<br> Proper hand positioning and even pressure on the keys are essential for creating legible Braille text.<br> By starting with short, familiar words, learners can gradually increase their speed and confidence in using the Braille typewriter.<br>

The final exercise in this chapter involves typing and reading a full paragraph in Braille.<br> This task helps reinforce both writing and reading skills, as students will not only produce Braille text but also practice reading what they have typed.<br> Through regular practice, learners will gain fluency in using the Braille typewriter, making it easier to write letters, take notes, and engage in longer reading and writing tasks independently.
</li>
A Braille Typewriter, like the Perkins Brailler, is a mechanical device used for writing in Braille.<br> It works similarly to a typewriter but has only six main keys, which correspond to the six dots of the Braille system, along with a spacebar, a backspace, and a line feed key.
<br>

<h1>Writing a Simple Word:</h1>

<h4>To type the Braille for "cat":</h4><br>
"C" (dots 1-4)<br>
"A" (dot 1)<br>
"T" (dots 2-3-4-5)<br>
<h4>Typing a Sentence "I love Braille."</h4><br>
"I" (dots 2-4)<br>
"love" (dots 1-2-3, 1-2-3-5, 1-3-5, 1-2-3)<br>
"Braille" (capital sign + dots 1-2, 1-2-3-5, 1, 2-4, 2-4, 1-2-3)<br>
Creating a Shopping List:
<br>
<h4>2 + 3 = 5</h4>
<br>
"2" (dots 2-5)<br>
"+" (Braille math symbol)<br>
"3" (dots 2-5-6)<br>
"=" (Braille math symbol)<br>
"5" (dots 2-3-5-6)<br>
Using Braille for Music Notation:
The Perkins Brailler can also be used to type Braille music, which follows specific rules for musical notes and rhythms
</div>
<div class="d-flex justify-content-between">
    <a href="brille c5.php">
<button class="btn btn-secondary text-info">previous</button></a>
<a href="brille c7.php">
<button class="btn btn-secondary text-info">Next</button></a>
</div>
</body>
<script src="speak.js"></script>
</html>
<?php
include "./layout/footer.php";
?>