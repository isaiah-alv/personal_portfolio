window.onload = function() {
  // Update Clock
  function updateClock() {
    var now = new Date();
    var estTime = new Date(now.getTime() - (5*60*60*1000));
    var timeString = estTime.toUTCString();
    var timeElement = document.getElementById('time');
    if (timeElement) {
      timeElement.textContent = timeString;
    }
  }

  setInterval(updateClock, 1000);

  // Contact Modal
  var contactElement = document.getElementById("contact");
  if (contactElement) {
    contactElement.addEventListener("click", function() {
      var modal = document.getElementById("myModal");
      if (modal) {
        modal.style.display = "block";
      }
    });
  }

  // Click Outside Modal to Close
  window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (modal && event.target == modal) {
      modal.style.display = "none";
    }
  };

  // Toggle Link Text
  let toggle = true;
  function updateTextAndLink() {
    var element = document.getElementById('linkToPages');
    if (element) {
      if (toggle) {
        element.innerHTML = 'Also check out my Professional Experience: <a href="experience.html">Professional Experience</a>';
      } else {
        element.innerHTML = 'Also check out my Projects: <a href="project.html">Projects</a>';
      }
      toggle = !toggle;
    }
  }

  setInterval(updateTextAndLink, 4000);

  // Hide Message after Timeout
  setTimeout(function() {
    var messageElement = document.getElementById('message');
    if (messageElement) {
        messageElement.style.display = 'none';
    }
  }, 5000);
};
