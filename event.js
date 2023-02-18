function createEvent() {
    event.preventDefault(); // prevent form submission

    // get input values
    var eventName = document.getElementById("event-name").value;
    var eventDate = document.getElementById("event-date").value;
    var eventTime = document.getElementById("event-time").value;
    var eventLocation = document.getElementById("event-location").value;
    var eventDescription = document.getElementById("event-description").value;

    // perform some action with the input values
    console.log("New event created: " + eventName);
    console.log("Date: " + eventDate + ", Time: " + eventTime);
    console.log("Location: " + eventLocation);
    console.log("Description: " + eventDescription);
  }
