<?php
    include "./layout/header.php";
    include "./layout/signnav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign language Chapter 2</title>
</head>
<body>
<button class="btn btn-secondary text-info" id="speakButton">Read</button>
<button class="btn btn-secondary text-info" id="stopButton">Stop</button>
<button class="btn btn-secondary text-info" id="pauseButton">Pause</button>
<button class="btn btn-secondary text-info" id="resumeButton">Resume</button>
<div id="content">
    <p>
   <h1> Learning A-Z in Sign Language</h1>
   <ul>
<li>The foundation of sign language begins with the alphabet.</li><br><li> Learning the ASL (American Sign Language) alphabet is essential for communication, especially when signing names, unfamiliar words, or specific terms.</li><br><li> Each letter has a distinct handshape, and mastering them will improve your fluency in fingerspelling.</li><br>

<h2>Fingerspelling Practice for Names and Common Words</h2>
<li>Fingerspelling is used to spell out words that do not have specific signs, such as names, places, or technical terms.</li><br><li> Practicing common words and names will help you build speed and accuracy.</li><br><li> Begin with short words and gradually move to longer names and terms.</li><br><li> Pay attention to hand positioning and movement for clarity.</li><br>

<h2>Exercises: Signing Your Name and Spelling Simple Words</h2>
<li>Signing Your Name  Start by fingerspelling your name slowly, ensuring each letter is formed correctly.</li><br><li> Use a mirror or record yourself to check accuracy.</li><br>
<li>Spelling Simple Words Practice words like "cat," "dog," "book," and "tree." Spell them multiple times, increasing speed while maintaining accuracy.</li><br><li> Try signing them with a partner for better retention.<li><br>
</ul>
</p>
</div>
<div class="d-flex justify-content-between">
    <a href="sign c1.php">
<button class="btn btn-secondary text-info">previous</button></a>
<a href="sign c3.php">
<button class="btn btn-secondary text-info">Next</button></a>
</div>
</body>
<script src="speak.js"></script>
</html>
<?php
include "./layout/footer.php";
?>