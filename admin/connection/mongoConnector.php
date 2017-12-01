<?php
// include ("MongoClient.php");

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$result = $manager->executeQuery("db.collection");
foreach($result as $document) {
    echo $document, "\n";
}
// $bulk = new MongoDB\Driver\BulkWrite;
// $bulk->find();
// $manager->executeBulkWrite('dbname.collection', $bulk);

// $command = new MongoDB\Driver\Command([
//     'aggregate' => 'collection',
//     'pipeline' => [
//         ['$group' => ['_id' => '$y', 'sum' => ['$sum' => '$x']]],
//     ],
//     'cursor' => new stdClass,
// ]);
// $cursor = $manager->executeCommand('db', $command);

// foreach($cursor as $c){
//     print_r($c);
//     echo '<br>';
// }
/* The aggregate command can optionally return its results in a cursor instead
 * of a single result document. In this case, we can iterate on the cursor
 * directly to access those results. */
// foreach ($cursor as $document) {
//     var_dump($document);
// }
?>