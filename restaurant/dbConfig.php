<?php 
try{ $db = new PDO("mysql:host=localhost;dbname=restaurant", 'root', ''); }
catch(PDOException $e) { echo $e->getMessage(); }
?>