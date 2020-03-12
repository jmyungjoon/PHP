<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Good Life Mission</title>
    <link href="https://fonts.googleapis.com/css?family=Caladea&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="colors.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        body {
            /* max-width:1160px; */
        }
        h1 {
        color:rgb(41, 248, 14);
        font-family: 'Caladea', serif;
        text-align: center;
        /* border: 2px solid yellow; */
        padding: 5px;
        background: url('philbeach.jpg') no-repeat fixed center top;
        }
        a {
        font-size: 20px;
        padding-left: 15px;
        padding-right: 15px;
        text-decoration:none;
        text-align: center;
        }
        a:hover{
        background-color : yellow;
        }
        #good { 
        color:powderblue;
        text-decoration:none;
        }
        li {
            display:inline; 
        }
    </style>
</head>

<body>
    <h1><a id="good" href="glm.php">Good Life Mission in Philippine</a></h1>
    <ul>
        <?php
            $list = scandir('./GLMdata');
           
            $i = 0;
            while($i < count($list)){
                if($list[$i] != '.') {
                    if($list[$i] != '..') {
                echo "<li><a href=\"glm.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
            }
                $i = $i + 1;
            }
        ?>
    </ol>
    <h2>
        <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        } else {
            echo "Good Life Mission Home Page";
        }
        ?>  
    </h2>
    <?php
    if(isset($_GET['id'])){
    echo file_get_contents("GLMdata/".$_GET['id']);
    } else {
        echo "A website (also written as web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. Notable examples are wikipedia.org, google.com, and amazon.com.";
    }
    ?>
</body>
</html>