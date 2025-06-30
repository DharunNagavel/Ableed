<?php
include "./layout/header.php";
include "./layout/brillenav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Brille literacy chapter 1</title>
</head>
<body><p>

<button class="btn btn-secondary text-info" id="speakButton">Read</button>
<button class="btn btn-secondary text-info" id="stopButton">Stop</button>
<button class="btn btn-secondary text-info" id="pauseButton">Pause</button>
<button class="btn btn-secondary text-info" id="resumeButton">Resume</button>
<br>
<div id="content">
<h1 class="text-center"> Brille literacy</h1>
<h1 class="one">Introduction to Braille</h1>
<div class="d-flex justify-content-center">
    <img class="img-fluid h-20 w-50 rounded" src="./assets/img/brille.jpg" alt=""><br>
</div>
<span style="font-weight:bold">What is Braille, and why is it important?</span>
<br>
<p>
<ul>
<li>Braille is a tactile writing system used by individuals who are blind or visually impaired.</li>
<li>It consists of patterns of raised dots that represent letters, numbers, punctuation marks, and even musical or mathematical symbols. By feeling these dots with their fingertips, users can read and write independently, allowing them to access information, education, and communication.</li>

<li>The importance of Braille lies in its role as a tool for literacy and empowerment.</li><li> Just as printed text is essential for sighted individuals, Braille enables those with visual impairments to read books, write notes, and navigate the world more effectively.</li><li> It promotes independence, equal opportunities, and full participation in society.</li>
</ul>
<h3>History and Development of Braille</h3>
<div class="d-flex justify-content-center">
    <img src="./assets/img/louis brille.png" alt="">
</div>
<ul>

<li>The origins of Braille date back to the early 19th century.</li><li> Before its invention, visually impaired individuals relied on raised print or embossed letters, which were difficult to read by touch. In 1824, a French teenager named Louis Braille, who had lost his sight due to an accident, developed a system based on raised dots. Inspired by a military "night writing" code used for silent communication in the dark, he refined the system to make it simpler and more efficient.</li>

<li>Louis Braille’s system was officially recognized and adopted in the late 19th century.</li><li> Over time, Braille expanded to include adaptations for various languages, mathematics, and music notation.</li><li> Today, it remains the most widely used reading and writing system for the visually impaired, supported by modern technology such as Braille displays and printers.</li>
</ul>
<h3>Introduction to the Braille Cell (6-Dot System)</h3>
<div class="d-flex justify-content-center">
    <img src="./assets/img/brille cell.jpg" alt="">
</div>
<br>
<ul>
    <li>
The Braille system is built around a basic unit called the Braille cell.</li><li> This cell consists of six raised dots arranged in two vertical columns of three dots each. Each dot within the cell is numbered from 1 to 6, starting from the top left (dots 1, 2, and 3) and continuing to the bottom right (dots 4, 5, and 6).</li>

<li>Different combinations of these six dots form letters, numbers, punctuation marks, and other symbols.</li> <li>For example, the letter "A" is represented by a single dot in position 1, while the letter "B" consists of dots in positions 1 and 2.</li><li> By learning to recognize these dot patterns, Braille users can read and write efficiently.</li>

<li>Understanding the Braille cell is the foundation for mastering the Braille system.</li><li> As learners progress, they will discover how different dot arrangements create words, sentences, and even complex concepts in various fields of study.</li>
</ul>
</p>
</div>
<div class="d-flex justify-content-end">
    <a href="brille c2.php">
<button class="btn btn-secondary text-info">Next</button>
</a>
</div>
</body>
<script src="speak.js"></script>
</html>
<?php
include "./layout/footer.php";
?>