<!DOCTYPE html>
<?php
    function gettingFromFile($filename,&$links,&$lecName){
        $fileLinks = fopen($filename,"r");
        while(!feof($fileLinks)){
            $name = fgets($fileLinks);
            $lec = fgets($fileLinks);
            array_push($lecName,$name);
            array_push($links,$lec);
            if(feof($fileLinks))
                break;
        }
    }
    
?>
<html>
    <head>
        <title>Lecture Notes</title>
    <style>
        #accordian{
            margin:20px;
        }
        .card{
            margin-top: 40px;
        }
        h4{
            padding: 10px;
            border-radius: 5px;
        }
        h4:hover{
            background-color: crimson;
            color: white;
            transition: 0.2s;
        }
        h4 > i{
            float:right;
        }
        .content {
            font-size:20px;
        }
    </style>
    <link rel="stylesheet" href="bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="jquery-3.4.1.min.js"></script>
    <script src = "func.js"></script>
    </head>
    <body>
        <div style = "background-color:crimson"class="jumbotron text-center title">
            <h1 style="font-weight: bolder; color: white;font-size: 250%;"><i class="fa fa-book"></i>&nbsp;&nbsp;LECTURE NOTES</h1>
        </div>
        
        <div class="container">
            <button class="btn btn-dark upload-btn" style ="float:right">Upload Notes</button>
            <br><br><br>
            <h1>3rd Semester</h1>
            <p>(Click on Subject and then on Lecture Name to Download)</p>
            <div class="card">
                <div id="accordian">
                <div id="calc"><h4>Calculus-2<i class="fa fa-angle-down"></i><i style="display: none" class="fa fa-angle-up"></i></h4>
                    <div class="content text-center">
                        <p style="display: none">No Lecture Yet</p>
                        <div id="calclinks" style="display:none">
                        <?php
                                $links = array();
                                $lecName = array();
                                gettingFromFile("CALCULUS-2.txt",$links,$lecName);
                        ?>
                        <script>
                            var lecture = <?php echo json_encode($lecName)?>;
                            var links = <?php echo json_encode($links)?>;
                            appending("#calclinks",lecture,links);

                        </script>
                        </div>
                    </div>
                </div>
                <div id="toa"><h4>Theory Of Automata<i class="fa fa-angle-down"></i><i style="display: none" class="fa fa-angle-up"></i></h4>
                    <div class="content text-center">
                            <p style="display: none">No Lecture Yet</p>
                            <div id="toalinks"  style="display:none">
                        <?php
                                $links = array();
                                $lecName = array();
                                gettingFromFile("TOA.txt",$links,$lecName);
                        ?>
                        <script>
                            var lecture = <?php echo json_encode($lecName)?>;
                            var links = <?php echo json_encode($links)?>;
                            appending("#toalinks",lecture,links);
                        </script>
                        </div>
                    </div>
                </div>
                <div id="coal"><h4>COAL<i class="fa fa-angle-down"></i><i style="display: none" class="fa fa-angle-up"></i></h4>
                    <div class="content text-center">
                            <p style="display: none">No Lecture Yet</p>
                            <div id="coallinks"  style="display:none">
                        <?php
                                $links = array();
                                $lecName = array();
                                gettingFromFile("COAL.txt",$links,$lecName);
                        ?>
                        <script>
                            var lecture = <?php echo json_encode($lecName)?>;
                            var links = <?php echo json_encode($links)?>;
                            appending("#coallinks",lecture,links);
                        </script>
                        </div>
                    </div>
                </div>
                <div id="oop"><h4>OOP<i class="fa fa-angle-down"></i><i style="display: none" class="fa fa-angle-up"></i></h4>
                    <div class="content text-center">
                            <p style="display: none">No Lecture Yet</p>
                            <div id="ooplinks"  style="display:none">
                        <?php
                                $links = array();
                                $lecName = array();
                                gettingFromFile("OOP.txt",$links,$lecName);
                        ?>
                        <script>
                            var lecture = <?php echo json_encode($lecName)?>;
                            var links = <?php echo json_encode($links)?>;
                            appending("#ooplinks",lecture,links);
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="index.js"></script>
    </body>
</html>