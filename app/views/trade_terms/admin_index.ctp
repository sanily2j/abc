<?php if (isset($tradeTerms) && is_array($tradeTerms) && count($tradeTerms) > 0 && isset($export_to_excel) && $export_to_excel == 1) {
    $excel->generate($tradeTerms, 'Trade Terms List');
    exit;
}
?><div class="tradeTerms index">
	
	<div class="h2bg"><span class="h2-left"></span>
	    <span class="h2-center">
		<h2><?php ___('trade terms');?></h2>
	    </span>
        <span class="h2-right"></span></div>
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'select_rec_per_page' => true, 'export_excel' => true, 'print' => true, 'add' => true, 'container_class' => 'toolbar_container_list'));
	?>

	<?php
	echo $this->AlaxosForm->create('TradeTerm', array('url' => $this->passedArgs, )); //'url' => $this->passedArgs allows to keep the sort when searching
	?>
    
	<table cellspacing="0" class="administration">
	
	<tr class="sortHeader">
		<th style="width:5px;"></th>
		<th><?php echo $this->Paginator->sort(__('Trade Term Id', true), 'TradeTerm.id');?></th>
		<th><?php echo $this->Paginator->sort(__('Subscription Type Name', true), 'SubscriptionType.subscription_type_name');?></th>
		<th><?php echo $this->Paginator->sort(__('Qualifying Circulation Name', true), 'QualifyingCirculation.qualifying_circulation_name');?></th>
		<th><?php echo $this->Paginator->sort(__('Sale Type Name', true), 'SaleType.sale_type_name');?></th>
		<th><?php echo $this->Paginator->sort(__('Copies Sold', true), 'TradeTerm.copies_sold');?></th>
		<th><?php echo $this->Paginator->sort(__('Sold At Trade Term', true), 'TradeTerm.sold_at_trade_term');?></th>
		<th><?php echo $this->Paginator->sort(__('Active', true), 'TradeTerm.active');?></th>
		
		<th class="actions">&nbsp;</th>
	</tr>
	
	<tr class="searchHeader">
		<td></td>
			<td>
			<?php
				echo $this->AlaxosForm->filter_field('id');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('subscription_type_id');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('qualifying_circulation_id');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('sale_type_id');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('copies_sold');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('sold_at_trade_term');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('active');
			?>
		</td>
		<td class="searchHeader">
    		<div class="submitBar">
    					<?php echo $this->AlaxosForm->end(___('search', true));echo $this->AlaxosForm->button(___('reset', true), array('type' => 'reset'));?>
    		</div>
    		
    		<?php
			echo $this->AlaxosForm->create('TradeTerm', array('id' => 'chooseActionForm', 'url' => array('controller' => 'tradeTerms', 'action' => 'actionAll')));
			?>
    	</td>
	</tr>
	
	<?php
	$i = 0;
	foreach ($tradeTerms as $tradeTerm):
		$class = null;
		if ($i++ % 2 == 0)
		{
			$class = ' class="row"';
		}
		else
		{
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
		<?php
		echo $this->AlaxosForm->checkBox('TradeTerm.' . $i . '.id', array('value' => $tradeTerm['TradeTerm']['id']));
		?>
		</td>
		<td>
			<?php echo $tradeTerm['TradeTerm']['id']; ?>
		</td>
		<td>
			<?php echo $this->Html->link($tradeTerm['SubscriptionType']['subscription_type_name'], array('controller' => 'subscription_types', 'action' => 'view', $tradeTerm['SubscriptionType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tradeTerm['QualifyingCirculation']['id'], array('controller' => 'qualifying_circulations', 'action' => 'view', $tradeTerm['QualifyingCirculation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tradeTerm['SaleType']['sale_type_name'], array('controller' => 'sale_types', 'action' => 'view', $tradeTerm['SaleType']['id'])); ?>
		</td>
		<td>
			<?php echo $tradeTerm['TradeTerm']['copies_sold']; ?>
		</td>
		<td>
			<?php echo $tradeTerm['TradeTerm']['sold_at_trade_term']; ?>
		</td>
		<td>
			<?php
			echo $this->AlaxosHtml->get_active_inactive($tradeTerm['TradeTerm']['active']);
			?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/loupe.png'), array('action' => 'view', $tradeTerm['TradeTerm']['id']), array('class' => 'to_detail', 'escape' => false, 'title' => 'View')); ?>
			<?php echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/small_edit.png'), array('action' => 'edit', $tradeTerm['TradeTerm']['id']), array('escape' => false, 'title' => 'Edit')); ?>
			<?php echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/copy.png'), array('action' => 'copy', $tradeTerm['TradeTerm']['id']), array('escape' => false, 'title' => 'Copy')); ?>
			<?php echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/small_drop.png'), array('action' => 'delete', $tradeTerm['TradeTerm']['id']), array('escape' => false, 'title' => 'Delete'), sprintf(___("are you sure you want to delete '%s' ?", true), $tradeTerm['TradeTerm']['id'])); ?>

		</td>
	</tr>
<?php endforeach; ?>
	</table>
         	
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 |
	 	<?php echo $this->Paginator->numbers(array('modulus' => 5, 'first' => 2, 'last' => 2, 'after' => ' ', 'before' => ' '));?>	 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
	
	<?php
if($i > 0)
{
	echo '<div class="choose_action">';
	echo ___d('alaxos', 'action to perform on the selected items', true);
	echo '&nbsp;';
	echo $this->AlaxosForm->input_actions_list();
	echo '&nbsp;';
	echo $this->AlaxosForm->end(array('label' =>___d('alaxos', 'go', true), 'div' => false));
	echo '</div>';
}
?>
</div>
	<div class="select_rec_per_page">
            <?php

	$passedArgs = $this->passedArgs;
	unset($passedArgs['limit']);
	echo $this->AlaxosForm->create('TradeTerm', array('url' => $passedArgs, 'id' => 'SelectRecPerPage', 'class' => 'SelectRecPerPage')); //'url' => $this->passedArgs allows to keep the sort when searching
	echo 'Select Records Per page: ';
	$options = Configure::read('select_rec_per_page');
	$paginingParams = ($paginator->params) ? $paginator->params : array();
	$pagining = !empty($paginingParams) ? array_pop($paginingParams['paging']) : array();
	$value = (empty($pagining) && empty($pagining['options']) && empty($pagining['options']['limit'])) ? $pagining['defaults']['limit'] : $pagining['options']['limit'];
	echo $this->AlaxosForm->select('limit', $options, $value, array(
            'value'=>$value, 
            'default'=>20, 
            'empty' => FALSE, 
            'onChange'=>'update_limit(this); return false;', 
            'name'=>'limit'
            )
        );
	echo $this->AlaxosForm->end();
	?>
        </div>
