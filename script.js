document.getElementById("oneCardBtn").addEventListener("click", function () {
  fetchReading("1");
});

document.getElementById("threeCardBtn").addEventListener("click", function () {
  fetchReading("3");
});

function fetchReading(type) {
  const resultDiv = document.getElementById("result");
  resultDiv.innerHTML = "<p>🔄 Shuffling cards... aligning with the Nexus...</p>";

  // Simulate loading
  setTimeout(() => {
    // Replace this with a real fetch to PHP later
    resultDiv.innerHTML = `<p>🔮 Your ${type}-card reading will appear here (PHP backend coming soon).</p>`;
  }, 1500);
}
