function updateClock() {
  var now = new Date();
  var estTime = new Date(now.getTime() - (5*60*60*1000));
  var timeString = estTime.toUTCString();
  document.getElementById('time').textContent = timeString;
}

setInterval(updateClock, 1000);

document.getElementById("contact").addEventListener("click", function() {
   document.getElementById("myModal").style.display = "block";
 });
 
 window.onclick = function(event) {
   if (event.target == document.getElementById("myModal")) {
     document.getElementById("myModal").style.display = "none";
   }
 };

let toggle = true;
function updateTextAndLink() {
    var element = document.getElementById('linkToPages');
    if (toggle) {
        element.innerHTML = 'Also check out my Professional Experience: <a href="experience.html">Professional Experience</a>';
    } else {
        element.innerHTML = 'Also check out my Projects: <a href="project.html">Projects</a>';
    }
    toggle = !toggle;
}

setInterval(updateTextAndLink, 4000);

window.onload = function() {
  setTimeout(function() {
      var messageElement = document.getElementById('message');
      if (messageElement) {
          messageElement.style.display = 'none';
      }
  }, 5000);
};