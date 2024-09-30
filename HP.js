// Handle Modal Open and Close
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();  // Prevent default form submission behavior

    // Get form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Prepare form data to send
    const formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('message', message);

    // Send data to PHP using fetch
    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert('Your message has been sent successfully!');  // Show alert on success
        // Optionally, clear the form
        document.getElementById('contactForm').reset();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error sending your message. Please try again.');
    });
});
