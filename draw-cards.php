<?php
// Set the content type to JSON
header('Content-Type: application/json');


// Define a sample tarot deck
$deck = [
    ['name' => 'The Fool', 'meaning' => 'New beginnings, spontaneity, free spirit'],
    ['name' => 'The Magician', 'meaning' => 'Manifestation, resourcefulness, power'],
    ['name' => 'The High Priestess', 'meaning' => 'Intuition, unconscious knowledge, mystery'],
    ['name' => 'The Empress', 'meaning' => 'Fertility, femininity, beauty, nature'],
    ['name' => 'The Emperor', 'meaning' => 'Authority, structure, control, fatherhood'],
    ['name' => 'The Hierophant', 'meaning' => 'Tradition, conformity, morality, ethics'],
    ['name' => 'The Lovers', 'meaning' => 'Love, harmony, relationships, choices'],
    ['name' => 'The Chariot', 'meaning' => 'Control, willpower, victory, assertion'],
    ['name' => 'Strength', 'meaning' => 'Courage, persuasion, influence, compassion'],
    ['name' => 'The Hermit', 'meaning' => 'Soul-searching, introspection, being alone'],
    ['name' => 'Wheel of Fortune', 'meaning' => 'Good luck, karma, life cycles, destiny'],
    ['name' => 'Justice', 'meaning' => 'Fairness, truth, law, cause and effect'],
    ['name' => 'The Hanged Man', 'meaning' => 'Pause, surrender, letting go, new perspectives'],
    ['name' => 'Death', 'meaning' => 'Endings, change, transformation, transition'],
    ['name' => 'Temperance', 'meaning' => 'Balance, moderation, patience, purpose'],
    ['name' => 'The Devil', 'meaning' => 'Addiction, materialism, playfulness'],
    ['name' => 'The Tower', 'meaning' => 'Sudden change, upheaval, chaos, revelation'],
    ['name' => 'The Star', 'meaning' => 'Hope, faith, rejuvenation'],
    ['name' => 'The Moon', 'meaning' => 'Illusion, fear, anxiety, subconscious'],
    ['name' => 'The Sun', 'meaning' => 'Positivity, fun, warmth, success'],
    ['name' => 'Judgement', 'meaning' => 'Reflection, reckoning, awakening'],
    ['name' => 'The World', 'meaning' => 'Completion, integration, accomplishment, travel']
];

// Determine the number of cards to draw
$cardsToDraw = 1;
if (isset($_GET['cards']) && in_array($_GET['cards'], ['1', '3'])) {
    $cardsToDraw = (int)$_GET['cards'];
}

// Shuffle the deck and draw cards
shuffle($deck);
$drawnCards = array_slice($deck, 0, $cardsToDraw);

// Return the drawn cards as JSON
echo json_encode(['cards' => $drawnCards]);
