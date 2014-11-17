<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>

<?php
$textbox = $this->requestAction(array(
    'plugin' => 'gtw_edit_boxes', 
    'controller' => 'edit_boxes', 
    'action' => 'get',
    $name
));

if(CakeSession::read('Auth.User.role') == 'admin'){
	$this->Helpers->load('GtwRequire.GtwRequire');
	echo $this->GtwRequire->req('editbox/editbox');
	
	$edit_class = '';
	if(isset($edit_html) && $edit_html == true){
		echo $this->GtwRequire->req('editbox/wysiwyg');
		$edit_class = 'editbox-html';
	}
?>
<div class="editbox" data-editbox="<?php echo $name; ?>">

    <div class="closed">
        <?php echo $textbox; ?>
    </div>
    
    <div class="opened" style="display:none">
        <div class="form-group">
            <textarea class="form-control <?php echo $edit_class; ?>"><?php echo $textbox; ?></textarea>
        </div>
        <div class="form-group pull-right">
            <button class="btn btn-primary">Save</button>
            <button class="btn btn-default close_box">Cancel</button>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php } else {
	echo $textbox;
}