<?php

/**
 * Function globals
 */

 /**
  * Funzione per mostrare la vista di ogni classe sul componente
  */
 function view(string $view, array $items){
    extract($items);
    ob_start();
    include_once 'resources/views/products/'.$view.'.tpl.php';
    $data = ob_get_contents();
    ob_end_clean();
    return $data;
 }