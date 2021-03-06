<div class="coverPrices view">
	<div class="h2bg"><span class="h2-left"></span>
	    <span class="h2-center">
		<h2><?php ___('cover price');?><?php echo !empty($coverPrice['CoverPrice']['id']) ? ' - ' . $coverPrice['CoverPrice']['id'] : ''; ?>
	    </h2></span>
        <span class="h2-right"></span></div>
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => false, 'list' => true, 'edit_id' => $coverPrice['CoverPrice']['id'], 'copy_id' => $coverPrice['CoverPrice']['id'], 'delete_id' => $coverPrice['CoverPrice']['id'], 'delete_text' => ___('do you really want to delete this cover price ?', true)));
	?>

	<table border="0" class="view">
	<tr>
		<td>
			<?php ___('Cover Price Id'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $coverPrice['CoverPrice']['id']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Cover Price'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $coverPrice['CoverPrice']['cover_price']; ?>
		</td>
	</tr>
	<tr class="display_none">
		<td>
			<?php ___('Qualifying Circulation Name'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $coverPrice['QualifyingCirculation']['id']; //$this->Html->link($coverPrice['QualifyingCirculation']['id'], array('controller' => 'qualifying_circulations', 'action' => 'view', $coverPrice['QualifyingCirculation']['id'])); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('No Of Publishing Days'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $coverPrice['CoverPrice']['no_of_publishing_days']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Total Copies'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $coverPrice['CoverPrice']['total_copies']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Copies Per Publishing Day'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $coverPrice['CoverPrice']['copies_per_publishing_day']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Single Combo Other Variant'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $coverPrice['CoverPrice']['single_combo_other_variant']; ?>
		</td>
	</tr>
	</table>
</div>
