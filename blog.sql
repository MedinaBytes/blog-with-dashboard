-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2024 a las 20:25:18
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(2, 'Uncategorized', 'This is uncategorised section'),
(13, 'Tutorials', 'Step-by-step guides on specific development tasks or projects.'),
(14, 'Tips &amp; Tricks', 'Quick, actionable advice or coding shortcuts.'),
(15, ' Best Practices', 'Posts discussing recommended approaches to web development.'),
(16, 'Tools &amp; Resources', 'Reviews or recommendations of development tools, libraries, and learning resources.'),
(17, ' Project Showcase', 'Demonstrations of personal or client projects with insights into the development process.'),
(18, 'Problem Solving', 'Solutions to common programming issues or challenges faced in web development.'),
(19, 'DevOps &amp; Deployment', 'Articles about setting up hosting, CI/CD, and deployment automation.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `author_id` int(11) UNSIGNED NOT NULL,
  `is_featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `thumbnail`, `date_time`, `category_id`, `author_id`, `is_featured`) VALUES
(34, 'The Rise of Generative AI in Content Creation', '&lt;p&gt;&lt;strong&gt;Generative AI &lt;/strong&gt;tools are rapidly transforming the landscape of content creation across various industries in 2024. With advancements in natural language processing and machine learning, these tools are capable of generating high-quality articles, marketing copy, and even visual art. Businesses are adopting generative AI to enhance productivity and creativity, streamlining their workflows while producing diverse content.&lt;/p&gt;\r\n&lt;p&gt;As organizations integrate AI into their strategies, discussions surrounding ethics and potential job displacement are intensifying. The capability of generative AI to create human-like content raises questions about authenticity and accountability. However, many experts believe that rather than replacing jobs, these tools will serve to augment human creativity, allowing creators to focus on higher-level tasks.&lt;/p&gt;', '1726914555images.jpg', '2024-09-21 10:29:15', 19, 14, 0),
(35, 'Quantum Computing: Breaking New Ground in 2024', '&lt;p&gt;In 2024, quantum computing is making significant strides that promise to revolutionize various industries. Companies like IBM and Google are showcasing breakthroughs in quantum algorithms that tackle complex problems unattainable for classical computers. This progress is particularly evident in fields such as cryptography, pharmaceuticals, and financial modeling, where the potential for speed and efficiency is unprecedented.&lt;/p&gt;\r\n&lt;p&gt;As research advances, partnerships between tech firms and academic institutions are fostering innovation in quantum technologies. The focus is shifting toward practical applications, with startups emerging to capitalize on quantum computing&#039;s capabilities, potentially leading to a new era of technological advancement.&lt;/p&gt;', '1726914612download.jpg', '2024-09-21 10:30:12', 17, 14, 0),
(36, 'The Growth of 5G Technology and Its Impact on IoT', '&lt;p&gt;As 5G technology continues to roll out globally in 2024, its implications for the Internet of Things (IoT) are profound. With faster speeds and lower latency, 5G is enabling the development of smarter cities, enhanced autonomous vehicles, and improved healthcare systems. This connectivity revolution is allowing devices to communicate in real-time, paving the way for innovations that were previously unimaginable.&lt;/p&gt;\r\n&lt;p&gt;Industries are rapidly adapting to leverage 5G, implementing solutions that enhance operational efficiency and customer experiences. The shift toward interconnected devices is transforming how businesses operate, emphasizing the importance of robust cybersecurity measures to protect sensitive data.&lt;/p&gt;', '1726914658download (1).jpg', '2024-09-21 10:30:58', 14, 14, 0),
(37, 'Cybersecurity Trends to Watch in 2024', '&lt;p&gt;&nbsp;With the rise in cyberattacks, 2024 sees an increased focus on cybersecurity as businesses seek to protect their data and systems. Emerging trends include the use of AI-driven security solutions that can detect and respond to threats in real time. Organizations are also adopting zero-trust architectures, emphasizing that no one&mdash;inside or outside the organization&mdash;should be trusted by default.&lt;/p&gt;\r\n&lt;p&gt;Additionally, employee education about phishing scams and other cyber threats is becoming paramount. Organizations recognize that human error often contributes to security breaches, leading to comprehensive training programs designed to equip staff with the knowledge to identify and mitigate risks.&lt;/p&gt;', '1726914736download (2).jpg', '2024-09-21 10:32:16', 18, 14, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `avatar`, `is_admin`) VALUES
(14, 'Joe', 'Doe', 'admin', 'admin@gmail.com', '$2y$10$CEIEJE8GUMvJdCnDTR47/uVy3oQP6J4IsJMUlSt3lEHN3xiZtmAX.', '17268998921672726695avatar11.jpg', 1),
(15, 'Demo', 'Demo', 'demo', 'demo@demo.com', '$2y$10$nHHorEv1VkY8uiXxYHTLRejgmvfcHnWkgzxtcsEG3LejAAHdU0z/.', '17269000381677835638blog15.jpg', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_blog_category` (`category_id`),
  ADD KEY `FK_blog_author` (`author_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_blog_author` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_blog_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
