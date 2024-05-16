function addToFavorites(foodName) {
    // Example of sending a request to add the item to the user's favorites
    fetch('add_to_favourite.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', },
        body: JSON.stringify({ foodName: foodName })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) { alert('Added to favourites!'); } else { alert('Failed to add to favourites.'); }
    })
    .catch((error) => { console.error('Error:', error); });
}