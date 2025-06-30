// script.js

// Get the buttons and content elements
const speakButton = document.getElementById('speakButton');
const stopButton = document.getElementById('stopButton');
const content = document.getElementById('content');

// Check if the browser supports the Web Speech API
if ('speechSynthesis' in window) {
  // Create a new SpeechSynthesisUtterance object
  const utterance = new SpeechSynthesisUtterance();

  // Set the text to be spoken
  utterance.text = content.innerText;

  // Set the voice (optional)
  utterance.voice = speechSynthesis.getVoices()[0]; // Use the default voice

  // Add an event listener to the "Read Aloud" button
  speakButton.addEventListener('click', () => {
    // Stop any ongoing speech
    speechSynthesis.cancel();
    // Start speaking the content
    speechSynthesis.speak(utterance);
  });

  // Add an event listener to the "Stop" button
  stopButton.addEventListener('click', () => {
    // Stop the speech
    speechSynthesis.cancel();
  });
} else {
  // If the browser doesn't support the Web Speech API
  speakButton.textContent = 'Text-to-Speech Not Supported';
  speakButton.disabled = true;
  stopButton.disabled = true;
}
// Add a Pause button
const pauseButton = document.getElementById('pauseButton');
pauseButton.addEventListener('click', () => {
  speechSynthesis.pause();
});

// Add a Resume button
const resumeButton = document.getElementById('resumeButton');
resumeButton.addEventListener('click', () => {
  speechSynthesis.resume();
});