<?php

// Link: http://php-sandbox.test/index.php/
// var_dump($_GET); // == array(0) { }


// Link: http://php-sandbox.test/index.php/?name=Brad
// var_dump($_GET); //  == array(1) { ["name"]=> string(4) "Brad" }
// name gets added to associative array


// Link: http://php-sandbox.test/index.php/?name=Brad&age=30
// var_dump($_GET); //  == array(2) { ["name"]=> string(4) "Brad" ["age"]=> string(2) "30" }
// Notice "age" => "30" is a string, so dont forget to cast it to the int


// We will get an error if it does not exist (you need check for it beforehand)
//echo $_GET['name'];
// echo isset($_GET['name']) ? $_GET['name'] : ''; // the right way
// echo isset($_GET['name']) ??  ''; // null coalesting operator


// This makes PHP vulnerable, for example:
// php-sandbox.test/index.php/?name=<script>alert(1);</script>
// We can send malicious code on accident
echo htmlspecialchars(($_GET['name'] ?? '')); // we get: &lt;script&gt;alert(1)&lt;/script&gt; (javascript source code with no harm done)
