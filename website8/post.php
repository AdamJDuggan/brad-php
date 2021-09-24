<?php
    require("config/config.php");
    require("config/db.php");

    // Get id
    $id = mysqli_escape_string($conn, $_GET["id"]);

    // Query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $post = mysqli_fetch_assoc($result);
 
    // Free the result from memory
    mysqli_free_result($result);

    // Close the connection
    mysqli_close($conn);
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Blog</title>
    </head>
    <body>
        <a href="<?php echo ROOT_URL; ?>">Back</a>
            <h1><?php echo $post["title"]; ?></h1>
            <small>Created on <?php echo $post["created_at"]; ?> by <?php echo $post["author"];?> </small>
            <p><?php echo $post["body"];?> </p>
            <a href="post.php?id=<?php echo $post['id']; ?>">Read more</a>
    </body>
</html>
    