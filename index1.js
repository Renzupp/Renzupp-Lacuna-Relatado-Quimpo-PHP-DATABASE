document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".contact-form");
    
    form.addEventListener("submit", (event) => {
        event.preventDefault(); // Prevent the default form submission
        
        // Validate form fields
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();

        if (!name || !email || !message) {
            alert("Please fill out all fields before submitting.");
            return;
        }

        // Optionally, display a confirmation alert
        alert("We really appreciate your message!");

        // Redirect to the homepage
        window.location.href = "./index1.html";
    });
});