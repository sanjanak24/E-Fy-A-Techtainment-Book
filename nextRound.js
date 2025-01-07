function nextRound(button) {
     let currentRoundElement = button.parentNode.parentNode.querySelector('td:nth-child(6)');
     let currentRound = currentRoundElement.innerText;

     let nextRound = getNextRound(currentRound);
     currentRoundElement.innerText = nextRound;
     button.innerText = `Next ${nextRound} Round`;

}

function getNextRound(currentRound) {
     let currentRoundNumber = parseInt(currentRound);
     return `${currentRoundNumber + 1}st`;
}

function disqualifiedRound(button) {
     
}