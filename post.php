<?php 
include 'partials/header.php';

// Fetch the post
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
    
    if (!$post) {
        header('location: ' . ROOT_URL . 'blog.php');
        die();
    }

    $author_id = $post['author_id'];
    $author_query = "SELECT * FROM users WHERE id=$author_id";
    $author_result = mysqli_query($connection, $author_query);
    $author = mysqli_fetch_assoc($author_result);
} else {
    header('location: ' . ROOT_URL . 'blog.php');
    die();
}
?>

<section class="singlepost">
    <div class="container singlepost__container">
        <h2><?= htmlspecialchars($post['title']) ?></h2> <!-- Sanitize title -->
        <div class="post__author">
            <div class="post__author-avatar">
                <img src="./images/<?= htmlspecialchars($author['avatar']) ?>" alt="Author Avatar"> <!-- Sanitize avatar -->
            </div>
            <div class="post__author-info">
                <h5>By: <?= htmlspecialchars("{$author['firstname']} {$author['lastname']}") ?></h5> <!-- Sanitize author info -->
                <small>
                    <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?>
                </small>
            </div>
        </div>
        <div class="singlepost__thumbnail">
            <img src="./images/<?= htmlspecialchars($post['thumbnail']) ?>" alt="Post Thumbnail"> <!-- Sanitize thumbnail -->
        </div>
        <div class="post__content"><?= $post['body'] ?></div> <!-- Directly output the body -->
    </div>
</section>

<?php
include './partials/footer.php';
?>
