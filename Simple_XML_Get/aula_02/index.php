<!-- PHP SimpleXML - Get Node Values of Specific Elements -->
<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]->title . "<br>";
echo $xml->book[1]->title . "<br>";
echo $xml->book[2]->title; 
// foreach($xml as $books) {
//     echo "Título= " . $books->title;
//     echo "<br>";
// }
?>
