<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */


$this->Helpers->load('GtwRequire.GtwRequire');
echo $this->GtwRequire->req('editbox/editbox');

$textbox = $this->requestAction(array(
    'plugin' => 'gtw_edit_boxes', 
    'controller' => 'edit_boxes', 
    'action' => 'get',
    $name
));
?>

<div class="row editbox" data-editbox="<?php echo $name; ?>">
    
    <div class="closed panel panel-default">
        <div class="panel-body">
            <i class="icon-edit"></i>
            <span><?php echo $textbox; ?></span>
        </div>
    </div>
    
    <div class="opened" style="display:none">
        <div class="form-group">
            <textarea class="editbox-body form-control"><?php echo $textbox; ?></textarea>
        </div>
        <div class="form-group pull-right">
            <button class="btn btn-primary">Save</button>
            <button class="btn btn-default">Cancel</button>
        </div>
    </div>
    
</div>