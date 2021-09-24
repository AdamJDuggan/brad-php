<?php
    require("config/db.php");

    // Query
    $query = 'SELECT * FROM posts';

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
    // Free the result from memory
    mysqli_free_result($result);

    // Close the connection
    mysqli_close($conn);
    ?>

<?php include("inc/header.php"); ?>
         <h1>Posts</h1>
         <?php foreach($posts as $post) :?>
              <hr/>
            <h3><?php echo $post["title"]; ?></h3>
            <small>Created on <?php echo $post["created_at"]; ?> by <?php echo $post["author"];?> </small>
            <p><?php echo $post["body"];?> </p>
            <a href="post.php?id=<?php echo $post['id']; ?>">Link</a>
            <?php endforeach; ?>

<?php include("inc/footer.php"); ?>



