<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>
<h1><?php echo __d('gtw_edit_boxes',' Add EditBox'); ?></h1> <hr/>
<?php
echo $this->Form->create('EditBox', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
));
?>

<fieldset>
    <?php
    echo $this->Form->input('name', array(
        'label' => __d('gtw_edit_boxes','Name'),
        'placeholder' => __d('gtw_edit_boxes','EditBox name')
    ));
    
    echo $this->Form->input('body', array(
        'label' => __d('gtw_edit_boxes','Body'),
        'rows' => '3',
        'placeholder' => __d('gtw_edit_boxes','EditBox body')
    ));
    ?>
    
    <div class="row">
        <div class="col col-md-12">
            <?php echo $this->Form->submit(__d('gtw_edit_boxes','Save EditBox') , array(
                'div' => false,
                'class' => 'btn btn-primary'
            ));?>
            <?php echo $this->Html->actionBtn(__d('gtw_edit_boxes','Cancel') , 'index'); ?>
        </div>
    </div>
    
    
</fieldset>

<?php echo $this->Form->end(); ?>