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
        background-color: rgb(76 76 76); 
        color: #333; /* Dark gray text color */
        text-align: center; /* Centered text */
        padding: 40px 20px; /* Padding for spacing */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for separation */
        margin-top: 70px;
    }

    .about-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 200px); /* Adjust height considering header */
        padding: 20px;
    }

    .about-me {
        max-width: 70%; /* Set max-width to 70% */
        width: 100%;
        padding: 30px;
        background-color: #ffffff; /* White background for the content area */
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        text-align: left; /* Align text to the left */
    }

    .about-me h1 {
        font-size: 2.5em;
        color: #007BFF; /* Blue color for the main heading */
        margin-bottom: 20px;
        text-align: center; /* Center the main heading */
    }

    .about-me h2 {
        font-size: 2em;
        margin: 20px 0 10px;
        color: #333; /* Dark gray color for subheading */
        text-align: center; /* Center the subheading */
    }

    .about-me p {
        margin-bottom: 15px;
        line-height: 1.6;
        color: #333; /* Dark gray for text */
    }

    .about-me a {
        color: #007BFF; /* Blue for links */
        text-decoration: none;
        transition: color 0.3s;
    }

    .about-me a:hover {
        text-decoration: underline; /* Underline on hover */
    }

    h3 {
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 1.5em;
        color: #0056b3; /* Darker blue for subheadings */
    }
</style>

<section class="header-section">
    <h1>About Me</h1>
</section>

<section class="about-container">
    <div class="about-me">
        <h2>Hi 👋, I'm Jonathan Medina</h2>
        <p>A Full-Stack Developer | Cloud & AI Enthusiast | Server Support Specialist</p>
        <p>🔭 I’m currently working at Microsoft</p>
        <p>🌱 I’m currently learning Generative AI and DevOps</p>
        <p>📝 Microsoft Certified on MS-900, AZ-900, and MS-900</p>
        <p>📫 How to reach me: <a href="mailto:jonathan.medinalabrador@gmail.com">jonathan.medinalabrador@gmail.com</a></p>
        <p>📄 Know about my experiences: <a href="https://www.linkedin.com/in/medina-jonathan/">LinkedIn Profile</a></p>
        <p>⚡ Fun fact: Coffee = my Fuel!</p>

        <h3>About Me</h3>
        <p>Since I was 10 years old, I discovered my passion for programming and web development when I created my first HTML webpage. During my teenage years, I worked closely with my brothers—one a programmer and the other a graphic designer—allowing me to learn and deepen my understanding of computers and design. My environment exposed me to different operating systems: one of my brothers was an Apple enthusiast, while the other preferred Microsoft and Linux. This gave me the opportunity to gain fundamental knowledge about each system.</p>
        <p>Soon after, I discovered blogs and launched my first tech blog on Blogspot. Later, I learned how to use WordPress as a CMS and developed my first website with basic functions. This experience allowed me to understand how CMS platforms work in real-world projects. Meanwhile, my brother taught me about e-commerce development using Joomla. As I learned more about CSS, HTML, and new technologies like HTML5, I improved my blog by making it responsive and adding animations. This led to my first job as a junior web developer, focused on WordPress, which opened doors to larger and more challenging projects.</p>
        <p>In 2014, my blog "TecnologíaContigo" was affected by a total loss of the hosting service I was using, and I couldn't recover it. I still regret not saving it, but the desire to blog again remains. Now, in 2024, I’ve decided to rekindle that passion by creating a GitHub account after more than 10 years of experience in the tech industry, currently working with AI and cloud services.</p>
        <p>Most of my knowledge has come from online resources—blogs, YouTubers, and other programmers who have inspired and helped me learn. I believe it's time to give back, to share my knowledge, and help others along their own learning journeys.</p>
        
        <h3>Languages and Tools:</h3>
        <p>C, C++, C#, Git, Java, JavaScript, PHP, Python, GNU Bash, VS Code, HTML5, CSS3, NodeJS, Oracle, MySQL, MongoDB, PostgreSQL, Firebase, Photoshop, Illustrator, After Effects, Google Cloud, WordPress, Wix, .NET, Amazon Web Services, Docker, Linux, MacOS</p>
    </div>
</section>

<?php
include './partials/footer.php';
?>
