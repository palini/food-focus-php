<!doctype html>
<title>Form validation Project</title>
<meta charset="utf-8" />
 <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
<head>
<!-- <script type="text/javascript" src="jquery.min.js"></script> -->
<script type ="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type ="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div id="funtion_content">
    
    <?php
    
        $maincourse= $_POST['main_course']; 
        $appetizers = $_POST['appetizers'];
        $deserts = $_POST['deserts'];
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test1"; 

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        } 
//        else {
//            echo "Connected successfully";
//        }

        $sql = "INSERT INTO orde (main_course,appetizers,deserts) VALUES('$maincourse','$appetizers','$deserts')";

        if($conn->query($sql) === TRUE) {
            
            echo  "<h2>  Your order has been placed </h2>"; 
         
        }
        else {
            echo "error";
        }    
    ?>
    <a href="index.php">Home Page</a>
</div>
</body>
