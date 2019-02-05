const tips = [
    "Always keep your budget information up-to-date",
    "No more than 30% of your monthly income should be spent on housing",
    "You should put at least 20% of your monthly income towards savings",
    "Allocate money in your budget for potential emergency funds",
    "When budgeting, underestimate your income and overestimate your expenses"
]


setInterval(function(){
    let tip = document.getElementById('tip');

    tip.innerHTML = tips[Math.floor(Math.random() * tips.length)];
}, 5000);