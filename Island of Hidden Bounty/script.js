// Function to generate a random integer within a specified range
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Function to create a random pirate position on the screen
function setRandomPiratePosition() {
  const pirate = document.getElementById("pirate");
  const screenWidth = window.innerWidth;
  const screenHeight = window.innerHeight;

  const randomX = getRandomInt(0, screenWidth - 100);
  const randomY = getRandomInt(0, screenHeight - 100);

  pirate.style.left = randomX + "px";
  pirate.style.top = randomY + "px";
}

// Initialize pirate position on load and add event listener to reposition the pirate on window resize
window.addEventListener("load", setRandomPiratePosition);
window.addEventListener("resize", setRandomPiratePosition);
