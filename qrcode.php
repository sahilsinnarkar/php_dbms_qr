<?php

    require_once 'connection.php';
    require_once 'phpqrcode/qrlib.php';
    $path = "images/";
    $qrcode = $path.time().".png";
    $qrimage = time().".png";

    if(isset($_REQUEST['sbt-btn'])){
        $prn = (int)$_REQUEST['prn'];
        $rollno = (int)$_REQUEST['rollno'];
        $name = $_REQUEST['name'];
        $year = $_REQUEST['year'];
        $department = $_REQUEST['department'];
        $contact = $_REQUEST['contact'];
        $email = $_REQUEST['email'];
        try{
            $query = mysqli_query($con, "insert into dbmsqr set prn='$prn', rollno='$rollno', name='$name', year='$year', department='$department', contact='$contact', email='$email', qrimage='$qrimage';");
            if($query)
            {
                ?>
                    <script>
                        alert("Data Saved Successfully!");
                    </script>
                <?php
            }
            $additionalData = "PRN : " . $prn . "\nRoll Number : ". $rollno . "\nName : ". $name ."\nYear : " . $year . "\nDepartment : " . $department . "\nContact : " . $contact . "\nEmail : " . $email;

            QRcode :: png($additionalData, $qrcode, 'H', 7, 7);
            echo "<center><img src='".$qrcode."'></center>"; 
        }
        catch(Exception $e)
        {
            ?>
                    <script>
                        alert("PRN is already existing!");
                        window.location.href='http://localhost/DBMS_QR/index.php';
                    </script>
                <?php
        }
        
    }



?>