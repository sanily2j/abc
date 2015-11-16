<?php if (isset($weekdaysSundays) && is_array($weekdaysSundays) && count($weekdaysSundays) > 0 && isset($export_to_excel) && $export_to_excel == 1) {
    $excel->generate($weekdaysSundays, 'Weekdays Sundays List');
    exit;
}
?><div class="weekdaysSundays index">
	
	<div class="h2bg"><span class="h2-left"></span>
	    <span class="h2-center">
		<h2><?php ___('weekdays sundays');?></h2>
	    </span>
        <span class="h2-right"></span></div>
	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'select_rec_per_page' => true, 'export_excel' => true, 'print' => true, 'add' => true, 'container_class' => 'toolbar_container_list'));
	?>

	<?php
	echo $this->AlaxosForm->create('WeekdaysSunday', array('url' => $this->passedArgs, )); //'url' => $this->passedArgs allows to keep the sort when searching
	?>
    
	<table cellspacing="0" class="administration">
	
	<tr class="sortHeader">
		<th style="width:5px;"></th>
		<th><?php echo $this->Paginator->sort(__('Weekdays Sunday Id', true), 'WeekdaysSunday.id');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Weekdays Month 1', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_weekdays_month_1');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Sunday Month 1', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_sunday_month_1');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Weekdays Month 1', true), 'WeekdaysSunday.number_of_publishing_days_weekdays_month_1');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Sunday Month 1', true), 'WeekdaysSunday.number_of_publishing_days_sunday_month_1');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Weekdays Month 1', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_weekdays_month_1');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Sunday Month 1', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_sunday_month_1');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Weekdays Month 2', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_weekdays_month_2');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Sunday Month 2', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_sunday_month_2');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Weekdays Month 2', true), 'WeekdaysSunday.number_of_publishing_days_weekdays_month_2');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Sunday Month 2', true), 'WeekdaysSunday.number_of_publishing_days_sunday_month_2');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Weekdays Month 2', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_weekdays_month_2');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Sunday Month 2', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_sunday_month_2');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Weekdays Month 3', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_weekdays_month_3');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Sunday Month 3', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_sunday_month_3');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Weekdays Month 3', true), 'WeekdaysSunday.number_of_publishing_days_weekdays_month_3');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Sunday Month 3', true), 'WeekdaysSunday.number_of_publishing_days_sunday_month_3');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Weekdays Month 3', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_weekdays_month_3');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Sunday Month 3', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_sunday_month_3');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Weekdays Month 4', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_weekdays_month_4');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Sunday Month 4', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_sunday_month_4');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Weekdays Month 4', true), 'WeekdaysSunday.number_of_publishing_days_weekdays_month_4');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Sunday Month 4', true), 'WeekdaysSunday.number_of_publishing_days_sunday_month_4');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Weekdays Month 4', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_weekdays_month_4');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Sunday Month 4', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_sunday_month_4');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Weekdays Month 5', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_weekdays_month_5');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Sunday Month 5', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_sunday_month_5');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Weekdays Month 5', true), 'WeekdaysSunday.number_of_publishing_days_weekdays_month_5');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Sunday Month 5', true), 'WeekdaysSunday.number_of_publishing_days_sunday_month_5');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Weekdays Month 5', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_weekdays_month_5');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Sunday Month 5', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_sunday_month_5');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Weekdays Month 6', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_weekdays_month_6');?></th>
		<th><?php echo $this->Paginator->sort(__('Total Monthly Qualifying Circulation Sunday Month 6', true), 'WeekdaysSunday.total_monthly_qualifying_circulation_sunday_month_6');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Weekdays Month 6', true), 'WeekdaysSunday.number_of_publishing_days_weekdays_month_6');?></th>
		<th><?php echo $this->Paginator->sort(__('Number Of Publishing Days Sunday Month 6', true), 'WeekdaysSunday.number_of_publishing_days_sunday_month_6');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Weekdays Month 6', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_weekdays_month_6');?></th>
		<th><?php echo $this->Paginator->sort(__('Average Monthly Qualifying Circulation Sunday Month 6', true), 'WeekdaysSunday.average_monthly_qualifying_circulation_sunday_month_6');?></th>
		
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
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_weekdays_month_1');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_sunday_month_1');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_weekdays_month_1');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_sunday_month_1');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_weekdays_month_1');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_sunday_month_1');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_weekdays_month_2');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_sunday_month_2');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_weekdays_month_2');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_sunday_month_2');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_weekdays_month_2');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_sunday_month_2');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_weekdays_month_3');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_sunday_month_3');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_weekdays_month_3');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_sunday_month_3');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_weekdays_month_3');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_sunday_month_3');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_weekdays_month_4');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_sunday_month_4');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_weekdays_month_4');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_sunday_month_4');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_weekdays_month_4');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_sunday_month_4');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_weekdays_month_5');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_sunday_month_5');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_weekdays_month_5');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_sunday_month_5');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_weekdays_month_5');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_sunday_month_5');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_weekdays_month_6');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('total_monthly_qualifying_circulation_sunday_month_6');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_weekdays_month_6');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('number_of_publishing_days_sunday_month_6');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_weekdays_month_6');
			?>
		</td>
		<td>
			<?php
				echo $this->AlaxosForm->filter_field('average_monthly_qualifying_circulation_sunday_month_6');
			?>
		</td>
		<td class="searchHeader">
    		<div class="submitBar">
    					<?php echo $this->AlaxosForm->end(___('search', true));echo $this->AlaxosForm->button(___('reset', true), array('type' => 'reset'));?>
    		</div>
    		
    		<?php
			echo $this->AlaxosForm->create('WeekdaysSunday', array('id' => 'chooseActionForm', 'url' => array('controller' => 'weekdaysSundays', 'action' => 'actionAll')));
			?>
    	</td>
	</tr>
	
	<?php
	$i = 0;
	foreach ($weekdaysSundays as $weekdaysSunday):
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
		echo $this->AlaxosForm->checkBox('WeekdaysSunday.' . $i . '.id', array('value' => $weekdaysSunday['WeekdaysSunday']['id']));
		?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['id']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_weekdays_month_1']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_sunday_month_1']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_weekdays_month_1']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_sunday_month_1']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_weekdays_month_1']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_sunday_month_1']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_weekdays_month_2']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_sunday_month_2']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_weekdays_month_2']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_sunday_month_2']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_weekdays_month_2']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_sunday_month_2']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_weekdays_month_3']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_sunday_month_3']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_weekdays_month_3']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_sunday_month_3']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_weekdays_month_3']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_sunday_month_3']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_weekdays_month_4']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_sunday_month_4']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_weekdays_month_4']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_sunday_month_4']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_weekdays_month_4']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_sunday_month_4']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_weekdays_month_5']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_sunday_month_5']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_weekdays_month_5']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_sunday_month_5']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_weekdays_month_5']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_sunday_month_5']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_weekdays_month_6']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['total_monthly_qualifying_circulation_sunday_month_6']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_weekdays_month_6']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['number_of_publishing_days_sunday_month_6']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_weekdays_month_6']; ?>
		</td>
		<td>
			<?php echo $weekdaysSunday['WeekdaysSunday']['average_monthly_qualifying_circulation_sunday_month_6']; ?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/loupe.png'), array('action' => 'view', $weekdaysSunday['WeekdaysSunday']['id']), array('class' => 'to_detail', 'escape' => false, 'title' => 'View')); ?>
			<?php echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/small_edit.png'), array('action' => 'edit', $weekdaysSunday['WeekdaysSunday']['id']), array('escape' => false, 'title' => 'Edit')); ?>
			<?php echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/copy.png'), array('action' => 'copy', $weekdaysSunday['WeekdaysSunday']['id']), array('escape' => false, 'title' => 'Copy')); ?>
			<!--<?php echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/small_drop.png'), array('action' => 'delete', $weekdaysSunday['WeekdaysSunday']['id']), array('escape' => false, 'title' => 'Delete'), sprintf(___("are you sure you want to delete '%s' ?", true), $weekdaysSunday['WeekdaysSunday']['id'])); ?>-->

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
	echo $this->AlaxosForm->create('WeekdaysSunday', array('url' => $passedArgs, 'id' => 'SelectRecPerPage', 'class' => 'SelectRecPerPage')); //'url' => $this->passedArgs allows to keep the sort when searching
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
