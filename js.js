// Get references to DOM elements
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;
let slideInterval;
// Function to show the current slide
function showSlide() {
  // Hide all slides
  slides.forEach((slide) => {
    slide.style.display = 'none';
  }); 
  // Show the current slide
  slides[currentSlide].style.display = 'block';
}
// Function to change the slide (next/previous)
function changeSlide(n) {
  currentSlide += n;
  // Wrap around to the first slide if at the end
  if (currentSlide >= slides.length) {
    currentSlide = 0;
  }
  // Wrap around to the last slide if at the beginning
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  } 
  showSlide();
}
// Function to start the auto slide show
function startSlideShow() {
  slideInterval = setInterval(() => {
    changeSlide(1);
  }, 3000); // Change slide every 3 seconds
}
// Function to stop the auto slide show
function stopSlideShow() {
  clearInterval(slideInterval);
}
// Show the initial slide
showSlide();
// Start the auto slide show
startSlideShow();

//search code
function searchSections() {
  // Get the user input from the search input field
  var searchQuery = document.getElementById("searchInput").value.toLowerCase();
  // Get all the sections in the document
  var sections = document.getElementsByTagName("section");
  // Loop through each section and check if the search query matches the section's content
  for (var i = 0; i < sections.length; i++) {
    var section = sections[i];
    var sectionContent = section.innerText.toLowerCase();
    // If the section's content contains the search query, display the section; otherwise, hide it
    if (sectionContent.includes(searchQuery)) {
      section.style.display = "block";
    } else {
      section.style.display = "none";
    }
  }
}

//greeting code
document.addEventListener("DOMContentLoaded", function() {
  var greetingElement = document.getElementById("greeting");
  var currentTime = new Date();
  var currentHour = currentTime.getHours();

  var greeting;

  if (currentHour < 12) {
    greeting = "GOON MORNING!!";
  } 
  else if (currentHour < 18) {
    greeting = "GOOD AFTERNOON!!";
  } 
  else {
    greeting = "GOOD EVENING!!";
  }
  greetingElement.textContent = greeting;
});

function updateTime() {
  var now = new Date();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();
  // Add leading zeros to the time components if necessary
  hours = addLeadingZero(hours);
  minutes = addLeadingZero(minutes);
  seconds = addLeadingZero(seconds);
  // Format the time as a string
  var time = hours + ":" + minutes + ":" + seconds;
  // Update the HTML element with the current time
  document.getElementById("clock").textContent = time;
}
function addLeadingZero(value) {
  if (value < 10) {
    return "0" + value;
  } else {
    return value;
  }
}
// Call updateTime function every second to keep updating the time
setInterval(updateTime, 1000);

function validateForm() {
  // Retrieve the input values
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  
  // Perform validation checks
  if (name === "") {
    alert("Please enter your name");
    return false;
  }
  
  if (email === "") {
    alert("Please enter your email");
    return false;
  }
  
  // Additional validation checks can be added as needed
  
  // If all validations pass, the form can be submitted
  return true;
}

function initMap() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      
      var mapOptions = {
        center: { lat: latitude, lng: longitude },
        zoom: 10
      };
      
      var map = new google.maps.Map(document.getElementById("map"), mapOptions);
      
      // Additional map functionality can be added here
      
    }, function(error) {
      // Handle error cases
      console.error("Error retrieving location:", error);
    });
  } else {
    // Geolocation is not supported by the browser
    console.error("Geolocation is not supported");
  }
}