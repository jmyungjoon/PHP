<?php
    require_once('lib/print.php');
    require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
        <P>
            <input type="text" name="title" placeholder="Title">
        </P>
        <p>
            <textarea name="description" placeholder="description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
<?php
require_once('view/bottom.php');
?>