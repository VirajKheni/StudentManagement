<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration: HOME PAGE</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="header">
            <div class="logo" style="text-align: center">STUDENT REGISTRATION SYSTEM</div>
        </div>
        <div class="menu">

            <?php
            $path = $_SERVER['PHP_SELF'];
            $page = explode("/", $path);
            ?>
            <ul>
                <li><a href="index.php" target="_self" 
                    <?php
                    if ($page[2] == "index.php") {
                        echo "class=\"focus_menu\"";
                    }
                    ?> >Home</a></li>
                <li><a href="register.php" target="_new"
                    <?php
                    if ($page[2] == "register.php") {
                        echo "class=\"focus_menu\"";
                    }
                    ?> >Registration</a></li>
                <li><a href="view.php" target="_new"
                    <?php
                    if ($page[2] == "view.php") {
                        echo "class=\"focus_menu\"";
                    }
                    ?> >View Student</a></li>
            </ul>
        </div>
        <div>
            <div class="content">Welcome To Student Registration System</div>
        </div>
    </body>
</html>

