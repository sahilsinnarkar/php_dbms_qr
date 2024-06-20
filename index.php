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

            .form-group {
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
            #lr{
                font-weight: bold;
                display: block;
                font-size: 16px;
                margin-bottom: 8px;
                margin-top:8px;
            }
            #ld{
                font-weight: bold;
                display: block;
                font-size: 16px;
                margin-bottom: 8px;
                margin-top:8px;
            }


            #prn{
                margin-left:85px;
            }
            #rollno{
                margin-left:25px;
            }
            #name{
                margin-left:77px;
            }
            #year{
                margin-left:88px;
            }
            #department{
                margin-left:33px;
            }
            #contact{
                margin-left:63px;
            }
            #email{
                margin-left:75px;
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

            .btn-success {
                display: flex;
                justify-content: space-between;

                background-color: #28a745;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
                margin-left:180px;
                margin-right:180px;
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
                <form action="qrcode.php" method="post">

                    <div class="form-group">
                        <label id="lp">PRN:</label><input type="text" name="prn" id="prn" placeholder="Enter PRN" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label id="lr">Roll Number:</label> <input type="text" name="rollno" id="rollno" placeholder="Enter roll no." class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label id="lr">Name:</label> <input type="text" name="name" id="name" placeholder="Enter Name" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label id="lr">Year: </label><input type="text" name="year" id="year" placeholder="Enter Year (Ex- FY)" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label id="ld">Department:</label> <input type="text" name="department" id="department" placeholder="Enter Department" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label id="lr">Contact:</label> <input type="text" name="contact" id="contact" placeholder="Enter Contact" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label id="lr">Email:</label> <input type="text" name="email" id="email" placeholder="Enter College mail-id" required class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="sbt-btn" id="b1" value="Generate QR Code" class="btn btn-success"/>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="sbt-btn" id="b2" value="Already Registered"
                         onclick = "window.location.href='http://localhost/DBMS_QR/registered.php';" class="btn btn-success"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
