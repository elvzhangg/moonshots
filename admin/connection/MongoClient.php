<?php
final MongoDB\Driver\Manager {
final public __construct ([ string $uri = "mongodb://127.0.0.1/" [, array $uriOptions = [] [, array $driverOptions = [] ]]] )
final public MongoDB\Driver\WriteResult executeBulkWrite ( string $namespace , MongoDB\Driver\BulkWrite $bulk [, MongoDB\Driver\WriteConcern $writeConcern ] )
final public MongoDB\Driver\Cursor executeCommand ( string $db , MongoDB\Driver\Command $command [, MongoDB\Driver\ReadPreference $readPreference ] )
final public MongoDB\Driver\Cursor executeQuery ( string $namespace , MongoDB\Driver\Query $query [, MongoDB\Driver\ReadPreference $readPreference ] )
final public MongoDB\Driver\ReadConcern getReadConcern ( void )
final public MongoDB\Driver\ReadPreference getReadPreference ( void )
final public array getServers ( void )
final public MongoDB\Driver\WriteConcern getWriteConcern ( void )
final public MongoDB\Driver\Server selectServer ( MongoDB\Driver\ReadPreference $readPreference )
}

?>