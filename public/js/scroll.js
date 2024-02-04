document.getElementById("sponsorButton").addEventListener("click", function() {
    document.getElementById("sponsorTarget").scrollIntoView({
      behavior: "smooth"
    });
});

document.getElementById("askButton").addEventListener("click", function() {
    document.getElementById("askTarget").scrollIntoView({
      behavior: "smooth"
    });
});

document.getElementById("aboutButton").addEventListener("click", function() {
    document.getElementById("aboutTarget").scrollIntoView({
      behavior: "smooth"
    });
});

document.getElementById("aboutButton2").addEventListener("click", function() {
  document.getElementById("aboutTarget").scrollIntoView({
    behavior: "smooth"
  });
});

document.getElementById("championButton").addEventListener("click", function() {
    document.getElementById("championTarget").scrollIntoView({
      behavior: "smooth"
    });
});

document.getElementById("championButton2").addEventListener("click", function() {
  document.getElementById("championTarget").scrollIntoView({
    behavior: "smooth"
  });
});

document.getElementById("faqButton").addEventListener("click", function() {
    document.getElementById("faqTarget").scrollIntoView({
      behavior: "smooth"
    });
});

document.getElementById("faqButton2").addEventListener("click", function() {
  document.getElementById("faqTarget").scrollIntoView({
    behavior: "smooth"
  });
});


document.getElementById("timelineButton").addEventListener("click", function() {
    document.getElementById("timelineTarget").scrollIntoView({
      behavior: "smooth"
    });
});

document.getElementById("timelineButton2").addEventListener("click", function() {
  document.getElementById("timelineTarget").scrollIntoView({
    behavior: "smooth"
  });
});

document.getElementById("mentorButton").addEventListener("click", function() {
    document.getElementById("mentorTarget").scrollIntoView({
      behavior: "smooth"
    });
});

document.getElementById("mentorButton2").addEventListener("click", function() {
  document.getElementById("mentorTarget").scrollIntoView({
    behavior: "smooth"
  });
});

document.getElementById("homeButton").addEventListener("click", function() {
    document.getElementById("homeTarget").scrollIntoView({
      behavior: "smooth"
    });
});

function togglePlayPause() {
    var playButton = document.getElementById('playButton');
    var pauseButton = document.getElementById('pauseButton');

    if (playButton.classList.contains('visible')) {
        playButton.classList.remove('visible');
        playButton.classList.add('hidden');

        pauseButton.classList.remove('hidden');
        pauseButton.classList.add('visible');

        // Add your play functionality here
    } else {
        pauseButton.classList.remove('visible');
        pauseButton.classList.add('hidden');

        playButton.classList.remove('hidden');
        playButton.classList.add('visible');
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var firstImage = document.querySelector('.first-image');
    var secondImage = document.querySelector('.second-image');
    var thirdImage = document.querySelector('.third-image');

    var imageContainer = document.querySelector('.image-container');

    imageContainer.addEventListener('mousemove', function(event) {
        var containerRect = imageContainer.getBoundingClientRect();
        var mouseX = event.clientX - containerRect.left;
        var mouseY = event.clientY - containerRect.top;

        if (mouseX < containerRect.width / 3) {
            fadeInImage(firstImage);
            fadeOutImage(secondImage);
            fadeOutImage(thirdImage);
        } else if (mouseX > (containerRect.width * 2) / 3) {
            fadeInImage(thirdImage);
            fadeOutImage(firstImage);
            fadeOutImage(secondImage);
        } else {
            fadeInImage(secondImage);
            fadeOutImage(firstImage);
            fadeOutImage(thirdImage);
        }
    });

    function fadeInImage(image) {
        image.style.opacity = 1;
    }

    function fadeOutImage(image) {
        image.style.opacity = 0;
    }
});


