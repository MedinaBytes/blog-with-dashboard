<?php 
include 'partials/header.php';
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0; /* Light gray background */
        margin: 0;
        padding: 0;
    }

    .header-section {
        background-color: rgb(76, 76, 76); /* Dark gray background */
        color: #ffffff; /* White text color */
        text-align: center; /* Centered text */
        padding: 40px 20px; /* Padding for spacing */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for separation */
        margin-top: 70px;
    }

    .contact-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: calc(100vh - 200px); /* Adjust height considering header */
        padding: 20px;
    }

    .contact-info {
        max-width: 70%; /* Set max-width to 70% */
        width: 100%;
        padding: 30px;
        background-color: #ffffff; /* White background for the content area */
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: left; /* Align text to the left */
    }

    .contact-info h2 {
        font-size: 2em;
        color: #333; /* Dark gray color for subheading */
        margin-bottom: 20px;
        text-align: center; /* Center the heading */
    }

    .contact-info p {
        margin-bottom: 15px;
        line-height: 1.6;
        color: #333; /* Dark gray for text */
        text-align: center; /* Center the text */
    }

    .contact-info a {
        color: #007BFF; /* Blue for links */
        text-decoration: none;
        transition: color 0.3s;
    }

    .contact-info a:hover {
        text-decoration: underline; /* Underline on hover */
    }
</style>

<section class="header-section">
    <h1>Contact Me</h1>
</section>

<section class="contact-container">
    <div class="contact-info">
        <h2>Get in Touch</h2>
        <p>If you have any questions or would like to discuss a project, feel free to reach out!</p>
        <p>📧 Email: <a href="mailto:jonathan.medinalabrador@gmail.com">jonathan.medinalabrador@gmail.com</a></p>
        <p>🔗 LinkedIn: <a href="https://www.linkedin.com/in/medina-jonathan/">in/medina-jonathan</a></p>
    </div>
</section>

<?php
include './partials/footer.php';
?>
