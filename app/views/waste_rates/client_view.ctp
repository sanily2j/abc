<div class="wasteRates view">
	<div class="h2bg"><span class="h2-left"></span>
	    <span class="h2-center">
		<h2><?php ___('waste rate');?><?php echo !empty($wasteRate['WasteRate']['id']) ? ' - ' . $wasteRate['WasteRate']['id'] : ''; ?>
	    </h2></span>
        <span class="h2-right"></span></div>
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'add' => true, 'list' => true, 'edit_id' => $wasteRate['WasteRate']['id'], 'copy_id' => $wasteRate['WasteRate']['id'], 'delete_id' => $wasteRate['WasteRate']['id'], 'delete_text' => ___('do you really want to delete this waste rate ?', true)));
	?>

	<table border="0" class="view">
	<tr>
		<td>
			<?php ___('Waste Rate Id'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $wasteRate['WasteRate']['id']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Qualifying Circulation Name'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $wasteRate['QualifyingCirculation']['id']; //$this->Html->link($wasteRate['QualifyingCirculation']['id'], array('controller' => 'qualifying_circulations', 'action' => 'view', $wasteRate['QualifyingCirculation']['id'])); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Average Rate In Waste Per Kg Prevalent In The Market Place'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $wasteRate['WasteRate']['average_rate_in_waste_per_kg_prevalent_in_the_market_place']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php ___('Summary Reconciling Acquisition With Consumption'); ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $wasteRate['WasteRate']['summary_reconciling_acquisition_with_consumption']; ?>
		</td>
	</tr>
	</table>
</div>
