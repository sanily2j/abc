<tr>
        <td>
                <?php
                    if (substr($this->action, -5) != '_copy') {
                        echo $this->AlaxosForm->input('Address.id');
                    }
                ?>
                <?php ___('Edition Name') ?>
        </td>
        <td>*:</td>
        <td>
                <?php echo $this->AlaxosForm->input('Address.city_id', array('label' => false, 'class' => 'AddressCityId', 'empty' => _('Enter City Name'))); ?>
        </td>
</tr>
<tr>
        <td>
                <?php ___('Address Line 1') ?>
        </td>
        <td>*:</td>
        <td>
                <?php echo $this->AlaxosForm->input('Address.address_line_1', array('label' => false)); ?>
        </td>
</tr>
<tr>
        <td>
                <?php ___('Address Line 2') ?>
        </td>
        <td>:</td>
        <td>
                <?php echo $this->AlaxosForm->input('Address.address_line_2', array('label' => false)); ?>
        </td>
</tr>
<tr>
        <td>
                <?php ___('District Name') ?>
        </td>
        <td>*:</td>
        <td>
                <?php echo $this->AlaxosForm->input('Address.district_id', array('label' => false, 'class' => 'AddressDistrictId', 'empty' => _('Select District'))); ?>
        </td>
</tr>
<tr>
        <td>
                <?php ___('State Name') ?>
        </td>
        <td>*:</td>
        <td>
                <?php echo $this->AlaxosForm->input('Address.state_id', array('label' => false, 'class' => 'AddressStateId', 'empty' => _('Select State'))); ?>
        </td>
</tr>
<tr>
        <td>
                <?php ___('Zone Name') ?>
        </td>
        <td>*:</td>
        <td>
                <?php echo $this->AlaxosForm->input('Address.zone_id', array('label' => false, 'class' => 'AddressZoneId', 'empty' => _('Select Zone'))); ?>
        </td>
</tr>
<tr>
        <td>
                <?php ___('Country Name') ?>
        </td>
        <td>*:</td>
        <td>
                <?php echo $this->AlaxosForm->input('Address.country_id', array('label' => false, 'class' => 'AddressCountryId', 'empty' => _('Select Country'))); ?>
        </td>
</tr>
<tr>
        <td>
                <?php ___('Pin Code') ?>
        </td>
        <td>*:</td>
        <td>
                <?php echo $this->AlaxosForm->input('Address.pin', array('label' => false, 'maxlength' => 6)); ?>
        </td>
</tr>