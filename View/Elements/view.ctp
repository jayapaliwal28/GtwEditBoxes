<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>

<?php
    echo $this->requestAction(array(
            'plugin' => 'gtw_edit_boxes', 
            'controller' => 'edit_boxes', 
            'action' => 'get',
            $name
    ));
?>