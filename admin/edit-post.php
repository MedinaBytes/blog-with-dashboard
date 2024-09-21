<?php
include "partials/header.php";

$category_query = "SELECT * FROM categories";
$categories = mysqli_query($connection, $category_query);

// Fetch post data from database if id is set
if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $post = mysqli_fetch_assoc($result);
}
?>

<!-- Include TinyMCE -->
<script src="https://cdn.tiny.cloud/1/gcsa0pbgqh1vmka8tk8ulayo8j7hn39rvfga61r2ozwqh34t/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea', // Change this to the specific textarea selector if needed
        plugins: 'lists link image preview',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image | preview',
        height: 300 // Set height of the editor
    });
</script>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Post</h2>
        <form action="<?= ROOT_URL ?>admin/edit-post-logic.php" enctype="multipart/form-data" method="POST">
            <input type="text" value="<?= htmlspecialchars($post['title']) ?>" name="title" placeholder="Title" required>
            <input type="hidden" value="<?= htmlspecialchars($post['id']) ?>" name="id">
            <input type="hidden" value="<?= htmlspecialchars($post['thumbnail']) ?>" name="previous_thumbnail_name">
            <select name="category_id" required>
                <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                    <option value='<?= $category['id'] ?>' <?= $category['id'] == $post['category_id'] ? 'selected' : '' ?>><?= htmlspecialchars($category['title']) ?></option>
                <?php endwhile ?>
            </select>
            <?php if (isset($_SESSION['user_is_admin'])) : ?>
            <div class="form__control inline">
                <input type="checkbox" id="is_featured" name="is_featured" value="1" <?= $post['is_featured'] ? 'checked' : '' ?>>
                <label for="is_featured">Featured</label>
            </div>
            <?php endif ?>
            <textarea rows="8" name="body" placeholder="Body" required><?= htmlspecialchars($post['body']) ?></textarea>

            <div class="form__control">
                <label for="thumbnail">Change Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" name="submit" class="btn">Update Post</button>
        </form>
    </div>
</section>

<?php
include "../partials/footer.php";
?>
