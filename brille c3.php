<?php
include "./layout/header.php";
include "./layout/brillenav.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brille literacy chapter 3</title>
</head>
<body>
<button class="btn btn-secondary text-info" id="speakButton">Read</button>
<button class="btn btn-secondary text-info" id="stopButton">Stop</button>
<button class="btn btn-secondary text-info" id="pauseButton">Pause</button>
<button class="btn btn-secondary text-info" id="resumeButton">Resume</button>
<div id="content">
<h1>Numbers and Punctuation in Braille</h1>
<li>
Numbers are an essential part of communication in Braille, used for writing dates, phone numbers, prices, and mathematical expressions. In Braille, numbers 0-9 are represented by the same dot patterns as the first ten letters of the alphabet (A-J) but are preceded by a special number indicator. This number sign signals that the following characters should be read as digits instead of letters. Learning these numerical symbols is crucial for reading addresses, price tags, and performing simple calculations in Braille.

In addition to numbers, punctuation marks play a significant role in structuring sentences and conveying meaning. Common punctuation marks in Braille include the comma, period, question mark, exclamation point, and quotation marks. Each of these symbols is made up of unique dot combinations, allowing readers to differentiate between sentence structures, pauses, and expressions. Understanding punctuation helps learners read and write clearly, ensuring proper sentence flow and comprehension.

To reinforce these concepts, students will engage in exercises that involve reading and writing basic sentences containing numbers and punctuation. For example, they will practice writing simple phrases such as "I have 3 books." or "What time is it?" using Braille. These activities help learners become more comfortable with numeric and grammatical elements, improving their overall Braille literacy. Through consistent practice, students will develop the ability to read and write fluently, enhancing their independence and communication skills.
</li>


<h1>Braille Numbers 1-9 in Text Description</h1>

<h4 class="d-inline">Braille numbers use a special number sign (⠼) before the digits to indicate that they are numbers and not letters.</h4><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/number.jpg" alt="">
<h4>The numbers 1-9 in Braille correspond to the first nine letters of the alphabet (A-I) after the number sign.</h4>
<br>

<p class="d-inline">1 → Write the number sign (⠼), then dot 1 → (⠼⠁)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/one.jpg" alt="">
<br>


<p class="d-inline">2 → Write the number sign (⠼), then dots 1 and 2 → (⠼⠃)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/two.jpg" alt="">
<br>


<p class="d-inline">3 → Write the number sign (⠼), then dots 1 and 4 → (⠼⠉)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/three.jpg" alt="">
<br>


<p class="d-inline">4 → Write the number sign (⠼), then dots 1, 4, and 5 → (⠼⠙)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/four.jpg" alt="">
<br>


<p class="d-inline">5 → Write the number sign (⠼), then dots 1 and 5 → (⠼⠑)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/five.jpg" alt="">
<br>


<p class="d-inline">6 → Write the number sign (⠼), then dots 1, 2, and 4 → (⠼⠋)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/six.jpg" alt="">
<br>


<p class="d-inline">7 → Write the number sign (⠼), then dots 1, 2, 4, and 5 → (⠼⠛)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/seven.jpg" alt="">
<br>


<p class="d-inline">8 → Write the number sign (⠼), then dots 1, 2, and 5 → (⠼⠓)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/eight.jpg" alt="">
<br>


<p class="d-inline">9 → Write the number sign (⠼), then dots 2 and 4 → (⠼⠊)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/nine.jpg" alt="">
<br>
<h2> ZERO can be written as:</h2>
<p class="d-inline">0 → Write the number sign (⠼), then dots 2, 4 and 5 → (⠼⠚)</p><img class="m-4 d-inline" style="width:60px; height:50px" src="./assets/img/zero.jpg" alt="">
<br>


Each number is written by first adding the number sign ⠼, 
followed by the Braille letter corresponding to the number (A=1, B=2, C=3, etc.).
</div>
<div class="d-flex justify-content-between">
    <a href="brille c2.php">
<button class="btn btn-secondary text-info">previous</button></a>
<a href="brille c4.php">
<button class="btn btn-secondary text-info">Next</button></a>
</div>
<script src="speak.js"></script>
</body>

</html>
<?php
include "./layout/footer.php";
?>