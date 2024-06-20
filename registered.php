<?php

    require_once 'connection.php';

    if(isset($_REQUEST['b1']))
    {

        $imgUrl = NULL;

        $stmt = mysqli_prepare($con, "SELECT qrimage FROM dbmsqr WHERE prn = ?");
        mysqli_stmt_bind_param($stmt, "s", $_POST['prn']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $imgUrl);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        $imagePath = "C:\xampp\htdocs\DBMS_QR\images".$imgUrl;

    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" href="style.css">
    <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #ACE1AF;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .container {
                max-width: 600px;
                margin: 50px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .table-responsive {
                text-align: center;
            }

            h3 {
                color: #333;
            }

            .box {
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 6px;
                display: flex;
                background-color: #E0FFFF;
                flex-direction: column;
            }

            .form {
                margin-bottom: 15px;
                display: flex;
            }

            #lp {
                display: block;
                font-size: 16px;
                margin-bottom: 8px;
                margin-top:8px;
                font-weight:bold;
            }


            #prn{
                margin-left:85px;
            }

            #b1{

            }

            input[type="text"] {
                width: 75%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 14px;
            }

            .btn {
                display: flex;
                justify-content: space-between;

                background-color: #28a745;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
                margin-top: 50px;
                margin-left:180px;
                margin-right:50px;
            }

            .btn-success:hover {
                background-color: #218838;
            }
        </style>
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <center><h1>QR Code Generator</h1></center><br>
            <div class="box">
                <form action="registered.php" method="post">

                    <div class="form-group">
                        <label id="lp">PRN:</label><input type="text" name="prn" id="prn" placeholder="Enter PRN" required class="form-control">
                    </div>

                    <div class="form">
                        <input type="submit" name="b1" id="b1" value="Generate QR Code" class="btn"/>
                    </div>
                    
                    <img src="images/<?php echo $imgUrl?>" height="200" width="200" alt="Please insert PRN"></center><br>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
