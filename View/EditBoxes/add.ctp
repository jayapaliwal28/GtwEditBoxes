<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */
?>
<h1>Add EditBox</h1> <hr/>
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
        'label' => 'Name',
        'placeholder' => 'EditBox name'
    ));
    
    echo $this->Form->input('body', array(
        'label' => 'Body',
        'rows' => '3',
        'placeholder' => 'EditBox body'
    ));
    ?>
    
    <div class="row">
        <div class="col col-md-12">
            <?php echo $this->Form->submit('Save EditBox', array(
                'div' => false,
                'class' => 'btn btn-primary'
            ));?>
            <?php echo $this->Html->actionBtn('Cancel', 'index'); ?>
        </div>
    </div>
    
    
</fieldset>

<?php echo $this->Form->end(); ?>