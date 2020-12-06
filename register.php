<html>
    <head>
        <title>Student Registration: Student Register</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head> 

    <body>
        <?php
        if (isset($_POST['sub'])) {

            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $roll = $_POST['roll'];
            $phno = $_POST['phno'];
            $dob = $_POST['dob'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $zipcode = $_POST['zipcode'];

            if ($fname == "") {
                $err_fname = "Please Enter First Name!";
            }
            if ($mname == "") {
                $err_mname = "Please Enter Middle Name!";
            }
            if ($lname == "") {
                $err_lname = "Please Enter Last Name!";
            }
            if ($email == "") {
                $err_email = "Please Enter Email Address!";
            }
            if ($roll == "") {
                $err_roll = "Please Enter Roll Number!";
            }
            if ($phno == "") {
                $err_phno = "Please Enter Contact Number!";
            }
            if ($gender == "") {
                $err_gender = "Please Select Gender!";
            }
            if ($dob == "") {
                $err_dob = "Please Enter Birthdate!";
            }
            if ($address == "") {
                $err_address = "Please Enter Address!";
            }
            if ($zipcode == "") {
                $err_zipcode = "Please Select Zip-code!";
            }
            if ($state == "" && $country == "" && $city == "") {
                $err_loc = "Please Select Location!";
            }

            if (!isset($err_address) && !isset($err_dob) && !isset($err_loc) && !isset($err_gender) && !isset($err_email) && !isset($err_fname) && !isset($err_lname) && !isset($err_mname) && !isset($err_phno) && !isset($err_roll) && !isset($err_state) && !isset($err_zipcode)) {
                if ($con = mysqli_connect("database-19mca012.c3z0bmuqh9ie.us-east-1.rds.amazonaws.com", "admin", "Viraj.8989", "student_registration")) {
//                echo "Database Connection SuccessFully.";
                } else {
                    die("Database Connection SuccessFully.");
                }

                $query = "INSERT INTO `studentdetails`(`stphno`, `fname`, `mname`, `lname`, `roll`, `address`, `gender`, `city`, `state`, `country`, `zipcode`, `birthdate`, `mail`) VALUES ('" . $phno . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $roll . "','" . $address . "','" . $gender . "','" . $city . "','" . $state . "','" . $country . "','" . $zipcode . "','" . $dob . "','" . $email . "')";
//            echo $query;

                $res = mysqli_query($con, $query);

                if ($res > 0) {
                    header('location:view.php');
                }
            }
        }
        ?>
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
        <div style="padding:20px;">
            <div class="adv">

            </div>
            <div class="main">

                <div style="border-bottom: 2px solid #008080;text-align: center;">
                    <h1 style="color:#008080;font-variant: all-petite-caps;text-shadow: 0px 0px 1px #333;">Student Registration</h1>
                </div>
                <div style="padding:10px 10px 10px 20px;" style="width: 100%;">
                    <form method="post">
                        <table cellpadding="5px" cellspacing="5px" style="width: 100%;">
                            <tr style="border-bottom: 1px solid black;">
                                <td>
                                    <label class="ftitle">First Name <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_fname)) {
                                            echo $err_fname;
                                        }
                                        ?>
                                    </label>
                                    <input type="text" name="fname" class="input" autofocus="" placeholder="Enter Your First Name" value=""/>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid black;">
                                <td>
                                    <label class="ftitle">Middle Name <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_mname)) {
                                            echo $err_mname;
                                        }
                                        ?>
                                    </label>
                                    <input type="text" name="mname" class="input" autofocus="" placeholder="Enter Your Middle Name" value=""/>
                                </td>
                            </tr>
                            <tr style="border-bottom: 1px solid black;">
                                <td>
                                    <label class="ftitle">Last Name <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_lname)) {
                                            echo $err_lname;
                                        }
                                        ?>
                                    </label>
                                    <input type="text" name="lname" class="input" autofocus="" placeholder="Enter Your Last Name" value=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="ftitle">Mail Address <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_email)) {
                                            echo $err_email;
                                        }
                                        ?>
                                    </label>
                                    <input type="email" name="email" class="input" placeholder="Enter Your Mail Address" value=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="ftitle">Roll Number <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_roll)) {
                                            echo $err_roll;
                                        }
                                        ?>
                                    </label>
                                    <input type="text" name="roll" class="input" placeholder="Enter Your Roll Number" value=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="ftitle">Contact Number <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_phno)) {
                                            echo $err_phno;
                                        }
                                        ?>
                                    </label>
                                    <input type="text" class="input" name="phno" placeholder="Enter Your Contact Number" value=""/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="ftitle">Birth Date <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_dob)) {
                                            echo $err_dob;
                                        }
                                        ?>
                                    </label>
                                    <input type="date" class="input"  id="dob" name="dob" value=""/>    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="ftitle">Address <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_address)) {
                                            echo $err_address;
                                        }
                                        ?>
                                    </label>
                                    <textarea name="address" class="input" placeholder="Enter Your Address" style="resize: none;" rows="5"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="ftitle">Gender <font color="red">*</font></label>&nbsp;&nbsp;
                                    <label class="ftitle"><input type="radio" name="gender" value="Male" checked="" />Male</label>&nbsp;&nbsp;
                                    <label class="ftitle"><input type="radio" name="gender" value="Female" />Female</label>
                                    <label class="ferr"><?php
                                        if (isset($err_gender)) {
                                            echo $err_gender;
                                        }
                                        ?>
                                    </label>
                                    <br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="ftitle" style="margin-right: 26%;">City <font color="red">*</font></label>
                                    <label class="ftitle" style="margin-right: 24%;">State <font color="red">*</font></label>
                                    <label class="ftitle" style="margin-right: 21%;">Country <font color="red">*</font></label>
                                    <select name="city" class="input" style="width: 33%">
                                        <option value="">Select Your City</option>
                                        <option>Surat</option>
                                        <option >Baroda</option>
                                        <option >Bombay</option>
                                        <option >Ahmedabad</option>
                                    </select>
                                    <select name="state" class="input" style="width: 32%">
                                        <option value="">Select Your State</option>
                                        <option>Gujarat</option>
                                        <option >Mahabharata</option>
                                        <option >kashmir</option>
                                        <option >punjab</option>
                                        <option >punjab</option>
                                    </select>
                                    <select name="country" class="input" style="width: 33%">
                                        <option value="">Select Your Country</option>
                                        <option>Surat</option>
                                        <option >Baroda</option>
                                        <option >Bombay</option>
                                        <option >Ahmedabad</option>
                                    </select>
                                    <label class="ferr"><?php
                                        if (isset($err_loc)) {
                                            echo $err_loc;
                                        }
                                        ?>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    <label class="ftitle">Zip-Code <font color="red">*</font></label>
                                    <label class="ferr"><?php
                                        if (isset($err_zipcode)) {
                                            echo $err_zipcode;
                                        }
                                        ?>
                                    </label>
                                    <input type="text" name="zipcode" class="input" autofocus="" placeholder="Enter Your Zip-Code" value=""/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="submit" class="btn sbtn" name="sub" value="SIGN UP"/>  
                                    <input type="reset" class="btn cbtn" name="clear" value="CLEAR"/> 
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="adv">

            </div>
        </div>

    </body>
</html>
