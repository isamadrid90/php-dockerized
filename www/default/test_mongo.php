<?php
// Config
$dbhost = 'mongo';
$dbname = 'test';
 
// Connect to test database
$m = new Mongo("mongodb://$dbhost");
$db = $m->$dbname;
 
echo "sucess";

// select the collection
$collection = $db->shows;
 
// pull a cursor query
$cursor = $collection->find();

foreach($cursor as $document) {
 var_dump($document);
}
?>
