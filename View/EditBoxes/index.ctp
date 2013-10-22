<?php
/**
 * Gintonic Web
 * @author    Philippe Lafrance
 * @link      http://gintonicweb.com
 */

 $this->Helpers->load('GtwRequire.GtwRequire');
 $this->GtwRequire->req("ui/app/datatables");
 $this->GtwRequire->req("editbox/app/editbox");
?>

<h1>EditBoxes</h1>

<p><?php echo $this->Html->actionBtn('Add EditBox', 'add', null, 'btn btn-primary'); ?></p>

<table class='table table-hoover table-striped datatable'>
    
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($editBoxes as $editBox): ?>
        <tr>
            <td><?php echo $editBox['EditBox']['id']; ?></td>
            <td>
                <a class="editbox-edit" href="#" data-editbox="<?php echo $editBox['EditBox']['id']; ?>"><?php echo $editBox['EditBox']['name'] ?></a>
            </td>
            <td>
                <?php echo $editBox['EditBox']['created']; ?>
            </td>
            <td>
            <?php
                echo $this->Html->actionIcon('icon-edit', 'edit', $editBox['EditBox']['id']);
                echo $this->Html->actionIcon('icon-remove', 'delete', $editBox['EditBox']['id']);
            ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>