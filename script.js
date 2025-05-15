document.getElementById("oneCardBtn").addEventListener("click", function () {
  fetchReading(1);
});

document.getElementById("threeCardBtn").addEventListener("click", function () {
  fetchReading(3);
});

function fetchReading(cardCount) {
  const resultDiv = document.getElementById("result");
  resultDiv.innerHTML = "<p>🔄 Shuffling cards... aligning with the Nexus...</p>";

  fetch(`draw-cards.php?cards=${cardCount}`)
    .then(response => response.json())
    .then(data => {
      let html = '';
      data.cards.forEach((card, index) => {
        html += `<div class="card">
                   <h3>Card ${index + 1}: ${card.name}</h3>
                   <p>${card.meaning}</p>
                 </div>`;
      });
      resultDiv.innerHTML = html;
    })
    .catch(error => {
      resultDiv.innerHTML = `<p>Error fetching reading: ${error}</p>`;
    });
}

