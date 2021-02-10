<?php

require 'database/Connection.php';

require 'database/QueryBuilder.php';

// $pdo = Connection::make(); -- $pdo only used as param

// $query = new QueryBuilder($Connection::make()); -- make $query global or simply return

//return new QueryBuilder($Connection::make()); -- php threw an error 
// (Uncaught Error: Class name must be a valid object or a string) with this construction.
// so I reverted to the prior syntax

$pdo = Connection::make();
return new QueryBuilder($pdo);