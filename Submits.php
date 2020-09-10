<?php

function isHTML($string)
{
    //strip_tags 
    if ($string != strip_tags($string)) {
        // is HTML
        return true;
    } else {
        // not HTML
        return false;
    }
}

$title1 = $_POST["title"];
$content1 = $_POST["content"];

if (isHTML($title1)) {
    echo '<p style="text-align: center;
                    font-size: 49px; 
                    color: #FF0000; 
                    padding-top: 3em;">
            <b>หัวข้อชื่อกระทู้ไม่อนุญาตใส่ HTML</b></p>';
    echo '<br>';
    echo '<a href="Home.php"><center>back</center></a>';
    return;
} else {
    echo '<center>';
    echo '<h1 style="padding-top: 1em;"> ชื่อกระทู้ : ';
    echo $title1 ;
    echo '</h1>';
    echo '<p>เนื้อหากระทู้ : ';
    echo $content1;
    echo '</p></center>';
}

?>