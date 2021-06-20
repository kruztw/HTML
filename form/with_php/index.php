<html>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button> submit </button>
    </form>

    <?php
        if (!empty($_FILES['file']))
            echo var_dump($_FILES['file']);
        else
            echo "no file";
    ?>

</html>
