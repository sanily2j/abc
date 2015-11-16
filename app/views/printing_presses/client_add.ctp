<div class="printingPresses form">

	<?php echo $this->AlaxosForm->create('PrintingPress', array('enctype' => 'multipart/form-data', 'action' => 'client_add', 'id' => 'PrintingPressClientAddForm'));?>
	<div class="h2bg"><span class="h2-left"></span>
	    <span class="h2-center">
		<h3><?php ___('client add printing press'); ?></h3>
	    </span>
	<span class="h2-right"></span></div>
 	
 	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'list' => true, 'hidePaginator' => true,
            'additional_buttons' => array(
                __('INCOMING CERTIFICATE', true) => $this->Html->link(__('INCOMING CERTIFICATE', true), array('action' => 'showpage', 'controller' => 'dynamic_pages', 'yellow_form', 'sub_div_view999' => 'printing_center-' . $this->Session->read('PrintingCenter.id')), array('escape' => false, 'title' => __('INCOMING CERTIFICATE', true))),
            )));
	?>
 	
 	<table border="0" cellpadding="5" cellspacing="0" class="edit">
	<tr class="display_none">
		<td>
			<?php ___('Qualifying Circulation Name') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('qualifying_circulation_id', array('label' => false)); ?>
		</td>
	</tr>
        <tr>
                <td colspan="3" class="ic-heading">
                        <?php ___('DETAILS OF PRINTING PRESS') ?>
                </td>
        </tr>
        <tr>
                <td colspan="3" class="ic-heading-left">
                        <?php ___('a) Name and Address of the Printing Press / s :') ?>
                </td>
        </tr>
                	<tr>
		<td>
			<?php ___('Printing Press Name') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('printing_press_name', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Address') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('address', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Std Code') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('std_code', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Phone Number 1') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('phone_number_1', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Fax Number') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('fax_number', array('label' => false)); ?>
		</td>
	</tr>
        <tr>
                <td colspan="3" class="ic-heading-left">
                        <?php ___('Please Specify the normal printing schedule of your publication') ?>
                </td>
        </tr>                
        <?php
        $publication_type_id = $this->Session->read('Auth.Membership.publication_type_id');
        if ($this->Support->isMagazine($publication_type_id)) {
        ?>
        <tr>
		<td>
			<?php ___('Dates On Which Publication Is Normally Sent For Printing') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('dates_on_which_publication_is_normally_sent_for_printing', array('label' => false)); ?>
		</td>
	</tr>
        <tr>
		<td>
			<?php ___('Normal Printing Schedule') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('normal_printing_schedule', array('label' => false)); ?>
		</td>
	</tr>
        <?php
        }
        ?>
        <tr>
		<td>
			<?php ___('Normal Start Time') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('normal_start_time', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Normal Completion Time') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('normal_completion_time', array('label' => false)); ?>
		</td>
	</tr>
<!--                	<tr>
		<td>
			<?php ___('Sent For Printing') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('sent_for_printing', array('label' => false)); ?>
		</td>
	</tr>-->
        <tr>
                <td colspan="3" class="ic-heading-left">
                        <?php ___('c) Mechanical details') ?>
                </td>
        </tr>  
        <tr>
		<td>
			<?php ___('Size Of Page') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('size_of_page', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Number Of Pages') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('number_of_pages', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Make Of Newprint Used') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('make_of_newprint_used', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Make Of Printing Machine') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('make_of_printing_machine', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Printing Capacity') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('printing_capacity', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Printing Units') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('printing_units', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
 		<td></td>
 		<td></td>
 		<td>
			<?php echo $this->AlaxosForm->end(___('submit', true)); ?> 		</td>
 	</tr>
	</table>

</div>
