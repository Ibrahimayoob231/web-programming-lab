<?php
$students = array("Aseem","Ameen","Luqman","Rojina","Abhinav");
echo "<h2>Array Before Sorting:</h2>";
print_r($students);
echo "<br><br>";
asort($students);
echo "<h2>Array After Ascending Sorting (asort):</h2>";
print_r($students);
echo "<br><br>";
asort($students);
echo "<h2>Array Descending Sorting(assort):<h2>";
print_r($students);
?>