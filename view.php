<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration: View Student</title>
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
        <br>
        <div style="text-align: center;width: 90%;margin-left: 5%;padding-bottom: 20px;" class="main">
            <center>
                <table  class="tb_view" cellpadding="5">
                    <caption style="margin-bottom: 10px;">
                        <div style="border-bottom: 2px solid #008080;text-align: center;">
                            <h1 style="color:#008080;font-variant: all-petite-caps;text-shadow: 0px 0px 1px #333;">Student Details</h1>
                        </div>
                    </caption>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Roll Number</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Birth date</th>
                            <th>Gender</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($con = mysqli_connect("database-19mca012.c3z0bmuqh9ie.us-east-1.rds.amazonaws.com", "admin", "Viraj.8989", "student_registration")) {
//                echo "Database Connection SuccessFully.";
                } else {
                    die("Database Connection Failed.");
                }

                        $query = "SELECT * FROM `studentdetails`";
                        $result = mysqli_query($con, $query);
                        $c = 0;
                        while ($data = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo ++$c; ?></td>
                            <td><?php echo $data['mname'] . " " . $data['fname']; ?></td>
                            <td><?php echo $data['roll']; ?></td>
                            <td><?php echo $data['mail']; ?></td>
                            <td><?php echo $data['stphno']; ?></td>
                            <td><?php echo $data['birthdate']; ?></td>
                            <td><?php echo $data['gender']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>



                        <?php
                        ?>
                    </tbody>
                </table>

            </center>
        </div>
    </body>
</html>

