<?php
    function print_title() {
         if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        } else {
            echo "WEB";
        }
    }
    function print_description() {
        if(isset($_GET['id'])){
            echo htmlspecialchars_decode(file_get_contents("data/".$_GET['id']));
            } else {
                echo "A website (also written as web site) is a collection of web pages and related content that is identified by a common domain name and published on at least one web server. Notable examples are wikipedia.org, google.com, and amazon.com.";
            }
    }
    function print_list() {
        $list = scandir('./data');
        $i = 0;
        while($i < count($list)){
            $title = htmlspecialchars($list[$i]);
            if($list[$i] != '.') {
                if($list[$i] != '..') {
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
        }
            $i = $i + 1;
        }
    }
?>