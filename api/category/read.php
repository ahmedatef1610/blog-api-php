<?php
    // Headers
    header( 'Access-Control-Allow-Origin: *' );
    header( 'Content-Type: application/json' );

    include_once '../../config/Database.php';
    include_once '../../models/Category.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    $category = new Category( $db );
    $result = $category->read();
    $num = $result->rowCount();

    if ( $num > 0 ) {
        $categories_arr = [];
        while( $row = $result->fetch() ) {
            extract( $row );
            $category_item = [
                'id' => $id,
                'name' => $name
            ];
            array_push( $categories_arr, $category_item );
        }
        echo json_encode( $categories_arr );
    } else {
        echo json_encode([ 'message' => 'No Categories Found' ]);
    }


?>