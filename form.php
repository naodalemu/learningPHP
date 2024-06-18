<!DOCTYPE html>
<html>

<head>
    <title>PHP Form Handling</title>
</head>

<body>
    <?php
        if (isset($_POST['studentname']))
            echo "You entered " . htmlspecialchars($_POST["studentname"]) . " into the text field.";
    ?>
    <form action="" method="post">
        Enter Name <BR>
        <input type="text" name="studentname" value="<?php if (isset($_POST['studentname'])) echo $_POST['studentname']; ?>" placeholder="Your Name">
        <BR><BR>
        Favorite Subject(s)<BR>
        <input type="checkbox" name="subj[]" value="EL" <?php if (isset($_POST["subj"]) && in_array("EL", $_POST["subj"])) echo "checked"; ?> >English
        <input type="checkbox" name="subj[]" value="MA" <?php if (isset($_POST["subj"]) && in_array("MA", $_POST["subj"])) echo "checked"; ?> >Math
        <input type="checkbox" name="subj[]" value="PG" <?php if (isset($_POST["subj"]) && in_array("PG", $_POST["subj"])) echo "checked"; ?> >Programming
        <BR><BR>
        Gender <BR>
        <input type="radio" name="gender" value="M">Male
        <input type="radio" name="gender" value="F">Female
        <BR><BR>
        <input type="submit" name="sm" value="Submit Form">
    </form>
</body>

</html>