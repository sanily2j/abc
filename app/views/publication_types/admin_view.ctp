<div class="publicationTypes view">
	<div class="h2bg"><span class="h2-left"></span>
	    <span class="h2-center">
		<h2><?php ___('publication type');?><?php echo ' - ' . $publicationType['PublicationType']['publication_type_name']; ?>
	    </h2></span>
        <span class="h2-right"></span></div>
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'delete' => false, 'add' => true, 'list' => true, 'edit_id' => $publicationType['PublicationType']['id'], 'copy_id' => $publicationType['PublicationType']['id'], 'delete_id' => $publicationType['PublicationType']['id'], 'delete_text' => ___('do you really want to delete this publication type ?', true)));
	?>

	<table border="0" class="view">
	<tr>
		<td>
			<?php ___('Publication Type Id'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $publicationType['PublicationType']['id']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Publication Type Name'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $publicationType['PublicationType']['publication_type_name']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Description'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $publicationType['PublicationType']['description']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Minimum Circulation'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $publicationType['PublicationType']['minimum_circulation']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Active'); ?>
		</td>
		<td>:</td>
		<td>
			<?php
			echo $this->AlaxosHtml->get_active_inactive($publicationType['PublicationType']['active']);
			?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Created'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($publicationType['PublicationType']['created']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Created By'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->Html->link($publicationType['CreatedBy']['username'], array('controller' => 'users', 'action' => 'view', $publicationType['CreatedBy']['id'])); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Modified'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo DateTool :: sql_to_date($publicationType['PublicationType']['modified']); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Modified By'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->Html->link($publicationType['ModifiedBy']['username'], array('controller' => 'users', 'action' => 'view', $publicationType['ModifiedBy']['id'])); ?>
		</td>
	</tr>
	</table>
</div>
