<?php
/*******************************************************************************************************
 * This element allows to render an horizontal toolbar containing icons for CRUD actions
 * By default, the toolbar also contains the Paginator %count and %pages numbers.
 */

/*
* include CSS required to format the toolbar
*/
$this->AlaxosHtml->css('/alaxos/css/alaxos', null, array('inline' => false));

$container_class = isset($container_class) ? $container_class : 'toolbar_container';
$toolbar_class   = isset($toolbar_class)   ? $toolbar_class   : 'toolbar';
$separator       = isset($separator) ? $separator : '&nbsp;&nbsp;';

echo '<div class="' . $container_class . '">';
echo '  <div class="' . $toolbar_class . '">';
        /*******************************************************************************************
	 * Export Excel link
	 */
    if((isset($export_excel) && $export_excel) || isset($export_excel_link))
    {
    	if(isset($export_excel) && $export_excel)
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Export to Excel">Export to Excel</span>', array_merge($this->passedArgs, array('export_excel' => 1)), array('title' => ___d('alaxos', 'Export to Excel', true), 'escape' => false));
    	}
    	elseif(isset($export_excel_link))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Export to Excel">Export to Excel</span>', $export_excel_link, array('title' => ___d('alaxos', 'Export to Excel', true), 'escape' => false));
    	}
    	
    	if(isset($export_excel_text) && $export_excel_text)
	    {
	        echo '&nbsp;' . $export_excel_text;
	    }
	    
		echo $separator;
    }
        /*******************************************************************************************
	 * print link
	 */
    if((isset($print) && $print) || isset($print_link))
    {
    	if(isset($print) && $print)
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Print">Print</span>', array_merge($this->passedArgs, array('print' => 1)), array('target' => '_blank', 'title' => ___d('alaxos', 'print', true), 'escape' => false));
    	}
    	elseif(isset($print_link))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Print">Print</span>', $print_link, array('target' => '_blank', 'title' => ___d('alaxos', 'print', true), 'escape' => false));
    	}
    	
    	if(isset($print_text) && $print_text)
	    {
	        echo '&nbsp;' . $print_text;
	    }
	    
		echo $separator;
    }
	/*******************************************************************************************
	 * add link
	 */
    if((isset($add) && $add) || isset($add_link))
    {
    	if(isset($add) && $add)
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Add">Add</span>', array('action'=>'add'), array('title' => ___d('alaxos', 'add', true), 'escape' => false));
    	}
    	elseif(isset($add_link))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Add">Add</span>', $add_link, array('title' => ___d('alaxos', 'add', true), 'escape' => false));
    	}
    	
    	if(isset($add_text) && $add_text)
	    {
	        echo '&nbsp;' . $add_text;
	    }
	    
		echo $separator;
    }
    
    /*******************************************************************************************
	 * back to list link
	 */
    if((isset($list) && $list) || isset($list_link))
    {
    	if(isset($list) && $list)
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="List">List</span>', array('action' => 'index'), array('title' => ___d('alaxos', 'list', true), 'escape' => false));
    	}
    	elseif(isset($list_link))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="List">List</span>', $list_link, array('title' => ___d('alaxos', 'list', true), 'escape' => false));
    	}
    	
    	echo $separator;
    }
    
    /*******************************************************************************************
	 * separator between general actions and actions that apply to a specific action
	 */
    if(((isset($add) && $add) || isset($add_link) || (isset($list) && $list) || isset($list_link))
        &&
        (isset($back_to_view_id) || isset($back_to_view_link) || isset($edit_id) || isset($edit_link) || isset($copy_id) || isset($copy_link) || isset($delete_id) || isset($delete_link) || isset($deactivate_id) || isset($deactivate_link) || isset($reactivate_id) || isset($reactivate_link)))
    {
//        echo $this->Html->image('/alaxos/img/toolbar/separator.png');
        echo $separator;
    }
    
    /*******************************************************************************************
	 * back to view link
	 */
    if(isset($back_to_view_id) || isset($back_to_view_link))
    {
    	if(isset($back_to_view_id))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="View">View</span>', array('action'=>'view', $back_to_view_id), array('title' => ___d('alaxos', 'cancel', true), 'escape' => false));
    	}
    	elseif(isset($back_to_view_link))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Back">Back</span>', $back_to_view_link, array('title' => ___d('alaxos', 'cancel', true), 'escape' => false));
    	}
    	
    	echo $separator;
    }
    
	/*******************************************************************************************
	 * edit link
	 */
    if(isset($edit_id) || isset($edit_link))
    {
    	if(isset($edit_id))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Edit">Edit</span>', array('action'=>'edit', $edit_id), array('title' => ___d('alaxos', 'edit', true), 'escape' => false));
    	}
    	elseif(isset($edit_link))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Edit">Edit</span>', $edit_link, array('title' => ___d('alaxos', 'edit', true), 'escape' => false));
    	}
    	
    	echo $separator;
    }
    
    /*******************************************************************************************
	 * copy link
	 */
    if(!empty($copy_id) || isset($copy_link))
    {
    	if(isset($copy_id))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Copy">Copy</span>', array('action' => 'copy', $copy_id), array('title' => ___d('alaxos', 'copy', true), 'escape' => false));
    	}
    	elseif(isset($copy_link))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Copy">Copy</span>', $copy_link, array('title' => ___d('alaxos', 'copy', true), 'escape' => false));
    	}
    	
    	echo $separator;
    }
    
	
	
	/*******************************************************************************************
	 * delete link
	 */
    if(isset($delete_id) || isset($delete_link))
    {
        $delete_text = isset($delete_text) ? $delete_text : ___d('alaxos', 'do you really want to delete this item ?', true);
        
    	if(isset($delete_id))
    	{
    		echo $this->Html->link('<span class="toolbar-button" title="Delete">Delete</span>', array('action' => 'delete', $delete_id), array('title' => ___d('alaxos', 'delete', true), 'escape' => false), $delete_text);
    		
    	}
    	elseif(isset($delete_link))
    	{
    	    echo $this->Html->link('<span class="toolbar-button" title="Delete">Delete</span>', $delete_link, array('title' => ___d('alaxos', 'delete', true), 'escape' => false), $delete_text);
    	}
    	
    	echo $separator;
    }
	
	/*******************************************************************************************
	 * deactivate link
	 */
    if(isset($deactivate_id) || isset($deactivate_link))
    {
        $deactivate_text = isset($deactivate_text) ? $deactivate_text : ___d('alaxos', 'do you really want to deactivate this item ?', true);
        
    	if(isset($deactivate_id))
    	{
    		echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/deactivate22.png', array('alt' => __d('alaxos', 'deactivate', true))), array('action' => 'deactivate', $deactivate_id), array('title' => ___d('alaxos', 'deactivate', true), 'escape' => false), $deactivate_text);
    	}
    	elseif(isset($deactivate_link))
    	{
    		echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/deactivate22.png', array('alt' => __d('alaxos', 'deactivate', true))), $deactivate_link, array('title' => ___d('alaxos', 'deactivate', true), 'escape' => false), $deactivate_text);
    	}
    	
    	echo $separator;
    }
	
	/*******************************************************************************************
	 * reactivate link
	 */
    if(isset($reactivate_id) || isset($reactivate_link))
    {
        $reactivate_text = isset($reactivate_text) ? $reactivate_text : ___d('alaxos', 'do you really want to reactivate this item ?', true);
        
    	if(isset($reactivate_id))
    	{
    		echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/reactivate22.png', array('alt' => __d('alaxos', 'reactivate', true))), array('action' => 'activate', $reactivate_id), array('title' => ___d('alaxos', 'reactivate', true), 'escape' => false), $reactivate_text);
    	}
    	elseif(isset($reactivate_link))
    	{
    		echo $this->Html->link($this->Html->image('/alaxos/img/toolbar/reactivate22.png', array('alt' => __d('alaxos', 'reactivate', true))), $reactivate_link, array('title' => ___d('alaxos', 'reactivate', true), 'escape' => false), $reactivate_text);
    	}
    	
    	echo $separator;
    }
	
	/*******************************************************************************************
	 * additional links
	 */
	if(isset($additional_buttons))
	{
	    foreach($additional_buttons as $additional_button)
	    {
	        echo $additional_button;
	        echo $separator;
	    }
	}
	
	echo '</div>';
	
	/*******************************************************************************************
	 * PaginatorHelper counters
	 */
	if((!isset($counter) || $counter) && (empty($hidePaginator)))
	{
		if(isset($this->Paginator->params['paging']) && count($this->Paginator->params['paging']) > 0)
		{
		    echo '<div class="paging_info">';
		    
			echo $this->Paginator->counter(array('format' => ___d('alaxos', 'Total Records: %count%', true)));
			echo '<br/>';
			echo $this->Paginator->counter(array('format' => ___d('alaxos', 'page %page% on %pages%', true)));
			
			echo '</div>';
		}
	}
	
echo '</div>';
?>
