<!doctype html>
<title>Food Focus</title>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<head>
<!-- <script type="text/javascript" src="jquery.min.js"></script> -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel = "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
    
<div class="page-header">
  <h1>Food Focus <small>Created By Palini</small></h1>
</div>
<div class="container">
    <ul class="nav nav-pills">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="contactus.html">Contact US</a></li>
    </ul>

    <form class="form-horizontal" method = "post" action="function.php">
        <div class="form-group ">
            <div class="panel panel-success">
              <div class="panel-body">Appetizers</div>
              <div class="panel-footer">
                <?php

                    mysql_connect('localhost', 'root', '');
                    mysql_select_db('test1');
                    
                    $sql = "SELECT * FROM appetizers";
                    $result = mysql_query($sql);

                    echo "<select class='form-control col-md-4' name='appetizers'>";
                    while ($row = mysql_fetch_array($result)) {
                        echo "<option value='" . $row['name'] . "'>" . $row['name'] ."      ( Price: $" .$row['price'] . " ) </option>";
                    }
                    echo "</select>";
                  
                ?>
                </div>
            </div>
        </div><!--appetizers end --> 

        <div class="form-group">
            <div class="panel panel-default">
              <div class="panel-body ">Main Course</div>
                <div class="panel-footer">
                    <?php
                        mysql_connect('localhost', 'root', '');
                        mysql_select_db('test1');

                        $sql = "SELECT * FROM main_course";
                        $result = mysql_query($sql);

                        echo "<select class='form-control col-md-4' name='main_course'>";
                        while ($row = mysql_fetch_array($result)) {
                            echo "<option value='" . $row['name'] . "'>" . $row['name'] ."      ( Price: $" .$row['price'] . " ) </option>";
                        }
                        echo "</select>";

                    ?>
                </div>
            </div>    
        </div><!--maincourse end -->

        <div class="form-group">
            <div class="panel panel-default">
              <div class="panel-body ">Deserts</div>
                <div class="panel-footer">
                    <?php
                        mysql_connect('localhost', 'root', '');
                        mysql_select_db('test1');

                        $sql = "SELECT * FROM deserts";
                        $result = mysql_query($sql);

                        echo "<select class='form-control col-md-4' name='deserts'>";
                        while ($row = mysql_fetch_array($result)) {
                            echo "<option value='" . $row['name'] . "'>" . $row['name'] ."      ( Price: $" .$row['price'] . " ) </option>";
                        }
                        echo "</select>";

                    ?>
                </div>
            </div>    
        </div><!--desert end -->

        <div class="btn-group" role="group" aria-label="...">
                    <input id = "submit" class="btn btn-default"  type="submit"  value = "Submit" name = 'submit'>
        </div><!--submit div -->
    </form> <!--    end form-->
</div><!--end container-->


<script type = "text/javascript" src = "js/scripts.js"> </script>
<script type ="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type ="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

</body>
</html>