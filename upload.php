<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["sele"] . ".txt";
        $lecName = $_POST["name"];
        $leclink = $_POST["link"];
        $file = fopen($name,"a");
        fwrite($file,$lecName . "\n");
        fwrite($file,$leclink . "\n");
        header('Location:index.php');
        }  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Upload Notes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
    <body>
            <div style = "background-color:crimson"class="jumbotron text-center title">
                    <h1 style="font-weight: bolder; color: white;font-size: 250%;"><i class="fa fa-book"></i>&nbsp;&nbsp;LECTURE NOTES</h1>
                </div>
                
        <div class="container">
            <form class="pin-form">
              <div class="form-group">
                <label for="email">Enter PIN:</label>
                <input type="email" class="form-control" id="pin" placeholder="Enter PIN" name="email">
              </div>
            </form>
            <button type="submit" class="btn btn-primary submit">Submit</button>
           <form class="notes-form" style="display: none" method="POST" action="upload.php">
                <div class="form-group">
                <label for="sel1">Select Subject:</label>
                <select class="form-control" id="sel1" name = "sele">
                  <option>CALCULUS-2</option>
                  <option>TOA</option>
                  <option>COAL</option>
                  <option>OOP</option>
                </select>
                </div>
                        <div class="form-group">
                                <label for="email">Enter Lecture Name</label>
                                <input  name = "name" class="form-control" id="name" placeholder="Enter Lecture Name">
                        </div>
                        <div class="form-group">
                                <label for="email">Enter Link</label>
                                <input name = "link" class="form-control" id="link" placeholder="Enter Link">
                        </div>
           <button type="submit" class="btn btn-danger" id="btn-upl"style="display:none">Submit</button>
           </form> 
          </div>
          
    </body>
    
    <script src="jquery-3.4.1.min.js"></script>
    <script src="index.js"></script>
</html>