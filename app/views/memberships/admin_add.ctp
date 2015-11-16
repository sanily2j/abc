<div class="memberships form">

	<?php echo $this->AlaxosForm->create('Membership', array('enctype' => 'multipart/form-data'));?>
	<div class="h2bg"><span class="h2-left"></span>
	    <span class="h2-center">
		<h2><?php ___('admin add membership'); ?></h2>
	    </span>
	<span class="h2-right"></span></div>
 	
 	<?php
	echo $this->element('toolbar/toolbar', array('plugin' => 'alaxos', 'list' => true));
	?>
 	
 	<table border="0" cellpadding="5" cellspacing="0" class="add">
	<tr class="display_none">
		<td>
			<?php ___('Membership Type Name') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('membership_type_id', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('User Name') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('user_id', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('name', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Publication Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('publication_id', array('label' => false)); ?>
		</td>
	</tr>
<!--                	<tr>
		<td>
			<?php ___('Edition Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('edition_id', array('label' => false, 'empty' => _('Enter Edition Name'))); ?>
		</td>
	</tr>-->
                <?php echo $this->element("only_address_form");?>
	<tr>
		<td>
			<?php ___('Publication Type Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('publication_type_id', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Language Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('language_id', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Frequency Type Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('frequency_type_id', array('label' => false)); ?>
		</td>
	</tr>
<!--                	<tr>
		<td>
			<?php ___('Date Of First Issue') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('date_of_first_issue', array('label' => false)); ?>
		</td>
	</tr>-->
                	<tr>
		<td>
			<?php ___('Category Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('category_id', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Website') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('website', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Other Publications') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('other_publications', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Branch Offices') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('branch_offices', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Belong To Other Prof Org') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('belong_to_other_prof_org', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Cover Price') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('cover_price', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Proposer 1 Representative Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('proposer_1_representative_id', array('label' => false)); ?>
                        <label for="MembershipProposer1RepresentativeId" class="error MembershipProposer1RepresentativeId"></label>
		</td>
	</tr>                	<tr>
		<td>
			<?php ___('Proposer 2 Representative Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('proposer_2_representative_id', array('label' => false)); ?>
                        <label for="MembershipProposer2RepresentativeId" class="error MembershipProposer2RepresentativeId"></label>
		</td>
	</tr>
        <tr>
		<td>
			<?php ___('File Pub Confr Letter') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input_file('file_pub_confr_letter', array('label' => false)); ?>
		</td>
	</tr>
        <tr>
		<td>
			<?php ___('File Letter Of Auth') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input_file('file_letter_of_auth', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Date Of Establishment') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('date_of_establishment', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Company Type Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('company_type_id', array('label' => false)); ?>
		</td>
	</tr>
        <tr>
		<td>
			<?php ___('Nature Of Business') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('nature_of_business', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Product Or Services Advertised') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('product_or_services_advertised', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Total Exp On Press Adver During Prev Yr') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('total_exp_on_press_adver_during_prev_yr', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Name Of Publications Used For Advert') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('name_of_publications_used_for_advert', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Name Of Client Served') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('name_of_client_served', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Agency Accredited') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('agency_accredited', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Date Of Application') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('date_of_application', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Date Of Bod Approval') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('date_of_bod_approval', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Member Status Name') ?>
		</td>
		<td>*:</td>
		<td>
			<?php echo $this->AlaxosForm->input('member_status_id', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Other Details') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('other_details', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Reason Name') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('reason_id', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Comments') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('comments', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Date Inactive') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('date_inactive', array('label' => false)); ?>
		</td>
	</tr>
                	<tr>
		<td>
			<?php ___('Active') ?>
		</td>
		<td>:</td>
		<td>
			<?php echo $this->AlaxosForm->input('active', array('label' => false)); ?>
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
