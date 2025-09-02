// Pre-loader functionality
var loader = document.getElementById("pre-loader");

window.addEventListener("load", function () {
    setTimeout(function () {
        loader.style.display = "none";
    }, 1500);
});

// Debounce function
function debounce(func, delay) {
    let timeout;
    return function(...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), delay);
    };
}

//Search bar functionality
const handleSearch = debounce(function () {
    const searchTeam = this.value.trim().toLowerCase();
    const movieCards = document.querySelectorAll('.displayCard');

    movieCards.forEach(card => {
        const title = card.querySelector('.movieTitle').textContent.toLocaleLowerCase();
        if (title.includes(searchTeam)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}, 5);

document.getElementById('searchBar').addEventListener('input', handleSearch);


// Play Movie functionality
// Movie List
const movie = {
    1: 'movies/HeneralLuna.mp4',
    2: 'movies/Bonifacio.mp4',
    3: 'movies/JoseRizal.mp4',
    4: 'movies/Clarita.mp4',
    5: 'movies/FiveBreakupsAndARomance.mp4',
    6: 'movies/MyExAndWhys.mp4',
    7: 'movies/ILoveLizzy.mp4',
    8: 'movies/AngPangarapKongHoldap.mp4',
    9: 'movies/MangKepweng.mp4',
    10: 'movies/DaBestInDaWest2.mp4'
};

// Function to create a popup and play the movie
function playMovieInPopup(movieId) {
    const moviePath = movie[movieId];

    if (moviePath) {
        // Create a popup container
        const popup = document.createElement('div');
        popup.style.position = 'fixed';
        popup.style.top = '0';
        popup.style.left = '0';
        popup.style.width = '100%';
        popup.style.height = '100%';
        popup.style.backgroundColor = 'rgba(0, 0, 0, 0.95)';
        popup.style.display = 'flex';
        popup.style.justifyContent = 'center';
        popup.style.alignItems = 'center';
        popup.style.zIndex = '1000'

        // Create a video element
        const videoPlayer = document.createElement('video');
        videoPlayer.src = moviePath;
        videoPlayer.controls = true;
        videoPlayer.style.maxWidth = '100%';
        videoPlayer.style.maxHeight = '100%';
        videoPlayer.setAttribute('controlsList', 'nodownload');

        // Append video player to popup
        popup.appendChild(videoPlayer);

        // Add close functionality
        popup.addEventListener('click', function () {
            document.body.removeChild(popup);
        });

        // Prevent click on video from closing popup
        videoPlayer.addEventListener('click', function (event) {
            event.stopPropagation();
        });

        // Append popup to body
        document.body.appendChild(popup);

        // Play the video
        videoPlayer.play();
    } else {
        console.error('Movie not found!');
    }
}

// Add event listeners to buttons
window.onload = function () {
    const buttons = document.querySelectorAll('.displayCard button, .lmList button');
    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const movieId = this.id;
            playMovieInPopup(movieId);
        });
    });
};

//register: password checker | Match or not
function validateForm() {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm_password').value;
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return false;
    }
    return true;
}