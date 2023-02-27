var x = document.getElementById("song_id");

function playAudio() {
    x.play();
}

function pauseAudio() {
    x.pause();
}


const rating = document.querySelector('.detect-hover > sl-rating');

var lastRating = 0;
rating.addEventListener('sl-hover', event => {
     lastRating = event.detail.value;
    // TODO get the value of rating and push to database with song id but until the change event
});


rating.addEventListener('sl-change', async event => {
    console.log(lastRating);
    // TODO get the value of rating and push to database with song id
    // use fetch and await to push this to database and then update the rating
    const songRate = document.getElementById("rate_song");
    const userRating = document.getElementById("user_rating");
    console.log(userRating.value + " " + songRate.value);
    const url = "/ratings"; // replace with your server endpoint URL
    const token  = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const data = {
        song_id: songRate,
        user_id: userRating,
        rating: lastRating,
    };

    const form = new FormData();
    form.append('song_id', songRate.value);
    form.append('user_id', userRating.value);
    form.append('rating', lastRating);
    form.append('_token', token);
    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token,

            },
            body: form
        });
        const responseData = await response.json();
        // update UI with new rating value if successful
        console.log(responseData);


    } catch (error) {
        console.log('Error:', error);
    }

})
