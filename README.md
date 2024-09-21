
# Responsive Blog Website

This project is a fully functional blog application built using PHP and MySQL, designed to provide users with an engaging platform to read and interact with various posts across multiple categories.

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/MedinaBytes/blog-with-dashboard.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd blog-with-dashboard
   ```

3. **Ensure you have a local server** (like XAMPP or MAMP) running.

4. **Import the database**:
   - Inside the repository, you'll find the file `blog.sql`. 
   - Import this file using phpMyAdmin or any MySQL database management tool to create the necessary database structure and tables.

5. **Place the project folder** in your server's root directory (e.g., `htdocs` for XAMPP).

6. **Access the application via your web browser**:
   ```arduino
   http://localhost/blog-with-dashboard/
   ```

## Technologies Used

- **PHP**: For server-side logic.
- **MySQL**: For database management.
- **HTML**: For structuring the web pages.
- **CSS**: For styling the web application.
- **JavaScript**: For interactive features.
- **TinyMCE**: For rich text editing in the admin panel.

## Database Configuration

The application requires a MySQL database to function. The database connection is managed using two files:

1. **constants.php**: 
   - This file should be created and modified in the `admin/config` folder and also in the root `config` folder if you clone the repository. 
   - It contains constant definitions for the database credentials and the root URL.

   **Example structure for constants.php**:
   ```php
   <?php
   session_start();
   define("ROOT_URL", "http://localhost/blog/");
   define('DB_HOST', 'localhost');
   define('DB_USER', 'your_database_user');
   define('DB_PASS', 'your_database_password');
   define('DB_NAME', 'your_database_name');
   ```

2. **database.php**: 
   - Establishes the connection to the database using the constants defined in constants.php.
   ```php
   <?php
   require 'constants.php';

   $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

   if (mysqli_errno($connection)) {
       die(mysqli_error($connection));
   }
   ```

## Home Page Features

The home page displays:

1. **Featured Post**: 
   - Showcases one highlighted post at the top.
   - Includes the post's thumbnail, title, excerpt, and author information.

2. **Recent Posts**:
   - Displays the latest nine posts in a grid format.
   - Each post contains:
     - A thumbnail image.
     - A title linking to the full post.
     - A brief excerpt of the post's body.
     - Author details with an avatar.

3. **Category Buttons**:
   - Provides quick navigation to various categories at the bottom of the page, allowing users to filter posts by topics of interest.

4. **Navigation Bar**:
   - Includes links to major sections such as Blog, About, Services, and Contact.
   - User profile options for accessing the admin dashboard or logging out.

5. **Footer**:
   - Displays social media links and quick access links to important pages.
   - Lists categories for easy navigation.

## Features

- Blog post management (CRUD functionality)
- Category management (CRUD functionality)
- User management and authentication (CRUD functionality)
- Sign in and sign up functionality
- Dashboard for users and admin
- Responsive Design
- Search functionality
- Featured posts section on the homepage
- Live demo available

## Category Posts Feature

The `category-posts.php` file allows users to view all posts within a specific category. 

- **Functionality**:
  - Retrieves the category ID from the URL and fetches all associated posts from the database.
  - Displays the category title prominently at the top.
  - If posts are found, they are listed with thumbnails, titles, excerpts, and author details.
  - If no posts exist in the selected category, a friendly message is shown.

## Live Demo

|  #  | WebPage           | Live Demo                                                                                 |
| :-: | ----------------- | ----------------------------------------------------------------------------------------- |
| 01  | Index             | [Live Demo](https://medinabytes.lovestoblog.com/index.php)                              |
| 02  | Blog              | [Live Demo](https://medinabytes.lovestoblog.com/blog.php)                               |
| 03  | Category Post     | [Live Demo](https://medinabytes.lovestoblog.com/category-posts.php)                     |
| 04  | About             | [Live Demo](https://medinabytes.lovestoblog.com/about.php)                              |
| 05  | Services          | [Live Demo](https://medinabytes.lovestoblog.com/services.php)                           |
| 06  | Contact           | [Live Demo](https://medinabytes.lovestoblog.com/contact.php)                            |
| 07  | Sign In           | [Live Demo](https://medinabytes.lovestoblog.com/signin.php)                             |
| 08  | Sign Up           | [Live Demo](https://medinabytes.lovestoblog.com/signup.php)                             |
| 09  | Dashboard         | [Live Demo](https://medinabytes.lovestoblog.com/dashboard.php)                          |
| 10  | Edit Posts        | [Live Demo](https://medinabytes.lovestoblog.com/edit-post.php)                          |
| 11  | Add Post          | [Live Demo](https://medinabytes.lovestoblog.com/add-post.php)                           |
| 12  | Add User          | [Live Demo](https://medinabytes.lovestoblog.com/add-user.php)                           |
| 13  | Manage Users      | [Live Demo](https://medinabytes.lovestoblog.com/manage-users.php)                       |
| 14  | Edit User         | [Live Demo](https://medinabytes.lovestoblog.com/edit-user.php)                          |
| 15  | Add Category      | [Live Demo](https://medinabytes.lovestoblog.com/add-category.php)                       |
| 16  | Manage Categories | [Live Demo](https://medinabytes.lovestoblog.com/manage-categories.php)                  |
| 17  | Edit Category     | [Live Demo](https://medinabytes.lovestoblog.com/edit-category.php)                      |

## Demo User Credentials

- **Administrator User**:
  - Username: `admin`
  - Password: `password`
  
- **Author Access**:
  - Username: `user`
  - Password: `password`

## Screenshots
![image](https://github.com/user-attachments/assets/b0988cbb-0b25-4b08-9bb9-2c6fb50540cd)
![image](https://github.com/user-attachments/assets/fff797ec-3126-4a13-9bb3-2f08c3f945ba)
![image](https://github.com/user-attachments/assets/cfc97381-fc57-46ce-855a-060128b388c4)
![image](https://github.com/user-attachments/assets/3d59c3a9-f6a4-4741-8abf-6ec0c7a2c0ca)
![image](https://github.com/user-attachments/assets/bf7f9544-62ae-4a0f-ba69-f0da0e00557b)


## Additional Resources

For the complete source code and more information, visit the [GitHub Repository](https://github.com/MedinaBytes).

## Admin Dashboard

The admin dashboard allows authorized users to manage posts, categories, and users efficiently:

- **Manage Posts**: View, edit, or delete existing posts.
- **Add Post**: Create new posts with a title, category, body content, and optional thumbnail.
- **Manage Categories**: Organize blog content into different categories.
- **User Management**: Add new users and manage existing ones.

### Adding a Post

1. Navigate to the "Add Post" section in the admin panel.
2. Fill in the title, select a category, and add the post content using the TinyMCE editor.
3. Optionally upload a thumbnail image.
4. Click "Add Post" to save your changes.

## License

This project is licensed under the MIT License.
