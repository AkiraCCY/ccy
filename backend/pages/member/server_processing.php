<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'tbl_member';
 
// Table's primary key
$primaryKey = 'member_id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'm_name', 'dt' => 0 ),
    array( 'db' => 'm_email',  'dt' => 1 ),
    array( 'db' => 'm_tel',   'dt' => 2 ),
    array( 'db' => 'm_address',     'dt' => 3 ),
    array(
        'db'        => 'member_id',
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            return '<button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="'.$d.'">Edit</button>  <button onclick="deleteRow('.$d.')" class="btn btn-sm btn-danger">Delete</button>';
         
            }
    )
    // array(
    //     'db'        => 'salary',
    //     'dt'        => 5,
    //     'formatter' => function( $d, $row ) {
    //         return '$'.number_format($d);
    //     }
    // )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'pro',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);