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

    .services-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: calc(100vh - 200px); /* Adjust height considering header */
        padding: 20px;
    }

    .service-card {
        max-width: 70%; /* Set max-width to 70% */
        width: 100%;
        padding: 20px;
        background-color: #ffffff; /* White background for the content area */
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin: 10px 0; /* Space between cards */
        text-align: left; /* Align text to the left */
    }

    .service-card h2 {
        font-size: 1.8em;
        color: #333; /* Dark gray color for subheadings */
        margin-bottom: 10px;
    }

    .service-card p {
        margin-bottom: 15px;
        line-height: 1.6;
        color: #333; /* Dark gray for text */
    }
</style>

<section class="header-section">
    <h1>Services</h1>
</section>

<section class="services-container">
    <div class="service-card">
        <h2>Full-Stack Development</h2>
        <p>Offering expertise in both front-end and back-end development, I can create responsive and user-friendly web applications using technologies like HTML, CSS, JavaScript, PHP, and frameworks such as React and Node.js.</p>
    </div>
    
    <div class="service-card">
        <h2>Cloud Solutions</h2>
        <p>With a solid foundation in cloud computing, I can help businesses migrate to platforms like AWS and Google Cloud, ensuring seamless integration and optimized performance.</p>
    </div>
    
    <div class="service-card">
        <h2>AI Integration</h2>
        <p>I specialize in integrating AI solutions into existing systems, enhancing functionalities and providing intelligent insights to drive business growth.</p>
    </div>
    
    <div class="service-card">
        <h2>Server Support</h2>
        <p>As a Server Support Specialist, I provide comprehensive support for server maintenance, troubleshooting, and optimization, ensuring your systems run smoothly and efficiently.</p>
    </div>
    
    <div class="service-card">
        <h2>E-Commerce Development</h2>
        <p>Leverage my experience in e-commerce to build scalable online stores using platforms like WooCommerce and Shopify, tailored to meet your business needs.</p>
    </div>
    
    <div class="service-card">
        <h2>Consulting and Training</h2>
        <p>I offer consulting services to help businesses understand and implement the latest technologies. Additionally, I provide training sessions to upskill teams in web development and cloud technologies.</p>
    </div>
</section>

<?php
include './partials/footer.php';
?>
