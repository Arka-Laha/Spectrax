
  // Get the form element and the notification element
  const form = document.getElementById("reservation-form");
  const notification = document.getElementById("notification");

  // Add submit event listener to the form
  form.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    // Display the notification message
    notification.textContent = "Your reservation has been submitted.";
    notification.style.display = "block";
    notification.classList.add("fade-in");

    // Reset the form
    form.reset();

    // Set a timeout to hide the notification after 3 seconds
    setTimeout(function() {
      notification.classList.remove("fade-in");
      notification.classList.add("fade-out");
      setTimeout(function() {
        notification.style.display = "none";
        notification.classList.remove("fade-out");
      }, 500); // Fade-out animation duration is 0.5s
    }, 3000); // Display the notification for 3 seconds
  });
