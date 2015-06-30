<?php 

$mb[] = array(
    'id' => 'gallery items',
    'title' => __( 'Tilføj billeder', 'rwmb' ),
    'pages' => array('galleri'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Billeder', 'rwmb' ),
            'id'    => "_images",
            'type' => 'image_advanced',
            ),
    ),
);

?>