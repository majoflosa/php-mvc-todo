<?php 

    function todo_autoload( $class_name ) {
        require_once './classes' . '/' . $class_name . '.php';
    }

    spl_autoload_register( 'todo_autoload' );

    require_once( './Routes.php' );

?>