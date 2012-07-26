<?php $ctr = isset($ctr) ? $ctr : 0; ?>
<script>
var ctr = '<?php echo $ctr; ?>';

</script>
</head>   
<?php i18n::lang(Cache::instance()->get('lang'));

       $identification = $name = $surname = $tel = $gsm  = $bad =
       $fax              =  $mail  = $liable  = $vat_number       = 
       $active           =  $account_number   = $domiciliation_number = 
       $discount         =  $discount_reason  = $reprieve         = 
       $remarks          =  $vat              =  $activity    = '';

      if (isset($customer)){

        $identification   = $customer['cust_id'] ?: '';
        $name             = $customer['cust_name'] ?: ''; 
        $surname          = $customer['cust_surname'] ?: '';
        $tel              = $customer['cust_tel'] ?: '';
        $gsm              = $customer['cust_gsm'] ?: '';
        $fax              = $customer['cust_fax'] ?: '';
        $mail             = $customer['cust_mail'] ?: '';
        $liable           = $customer['cust_is_liable'] ?: '';
        $vat_number       = $customer['cust_vat_number'] ?: '';
        $active           = $customer['cust_active'] ?: '';
        $account_number   = $customer['cust_account_number'] ?: '';
        $domiciliation_number = $customer['cust_domiciliation_number'] ?: '';
        $discount         = $customer['cust_discount'] ?: '';
        $discount_reason  = $customer['cust_discount_reason'] ?: '';
        $reprieve         = $customer['cust_reprieve'] ?: '';
        $remarks          = $customer['cust_remarks'] ?: ''; 
        $vat              = $customer['vat_id'] ?: ''; 
        $activity         = $customer['act_typ_id'] ?: ''; 
        $bad              = $customer['cust_bad'] ?: ''; 

      }


?>
<body class="claro">

<div data-dojo-type="dijit.form.Form" id="createCustomerForm<?php echo $ctr; ?>" enctype="multipart/form-data" >
<fieldset>
<label for="createCustomerId<?php echo $ctr; ?>"><?php echo __('id' ); ?>:</label>
<input id="createCustomerId<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                type="text" data-dojo-type="dijit.form.ValidationTextBox" 
                                                trim="true" value="<?php echo $id; ?>"
                                                data-dojo-props="readonly:true" >

<label for="createCustomerName<?php echo $ctr; ?>" ><?php echo __('name' ); ?>:</label>
<input id="createCustomerName<?php echo $ctr; ?>"  value="<?php echo $name; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                   type="text" data-dojo-type="dijit.form.ValidationTextBox" 
                                                   trim="true" 
                                                   data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'"  >

<label for="createCustomerSurname<?php echo $ctr; ?>"><?php echo __('surname' ); ?>:</label>
<input id="createCustomerSurname<?php echo $ctr; ?>" type="text" value="<?php echo $surname; ?>"
                                                     style="float:left;margin-top :5px;margin-left : 5px;"
                                                     trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                     data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'"  >
 <br />
 <br />

<label for="createCustomerTel<?php echo $ctr; ?>" for="tel"><?php echo __('phone' ); ?>:</label>
<input style="float:left;margin-top :5px;margin-left : 5px;" 
                                                 type="text" value="<?php echo $tel; ?>"
                                                 data-dojo-type="dijit.form.ValidationTextBox" 
                                                 trim="true" data-dojo-props="id : 'createCustomerTel<?php echo $ctr; ?>'">

<label for="createCustomerGsm<?php echo $ctr; ?>" ><?php echo __('gsm' ); ?>:</label>
<input id="createCustomerGsm<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                 type="text" value="<?php echo $gsm; ?>"
                                                 trim="true" data-dojo-type="dijit.form.ValidationTextBox">

<label for="createCustomerActive<?php echo $ctr; ?>"><?php echo __('active'); ?></label>       
<input type="checkbox" id="createCustomerActive<?php echo $ctr; ?>"  
       style="float:left;margin-top :5px;margin-left : 5px;" value="<?php echo $active; ?>"
       data-dojo-type="dijit.form.CheckBox">
  
 <br />
 <br />

<label  for="createCustomerFax<?php echo $ctr; ?>"><?php echo __('fax' ); ?>:</label>
<input  id="createCustomerFax<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                  type="text"  
                                                  trim="true" value="<?php echo $fax; ?>"
                                                  data-dojo-type="dijit.form.ValidationTextBox">

<label  for="createCustomerMail<?php echo $ctr; ?>"><?php echo __('mail' ); ?>:</label>
<input  id="createCustomerMail<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                  type="text" value="<?php echo $mail; ?>"
                                                   trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                   data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'" >

<label for="createCustomerLiable<?php echo $ctr; ?>"><?php echo __('liable'); ?>:</label>         
<input type="checkbox" id="createCustomerLiable<?php echo $ctr; ?>" 
        style="float:left;margin-top :5px;margin-left : 5px;" value="<?php echo $liable;?>"
       data-dojo-type="dijit.form.CheckBox">

<br />
<br />
<label for="createActivityCustomer<?php echo $ctr; ?>"><?php echo __('activities'); ?>:</label>
<select id="createActivityCustomer<?php echo $ctr; ?>" value="<?php echo $activity; ?>"
                                        style="float:left;margin-top :5px;margin-left : 5px;" 
                                        data-dojo-type="dijit.form.FilteringSelect" data-dojo-props="required:true">

                                    
<?php foreach($activities as $activity): ?>

       <option value="<?php echo $activity['act_typ_id']; ?>"><?php echo __($activity['act_typ_name']);?></option>

        <?php endforeach; ?>
</select>

<label for="createVatCode<?php echo $ctr; ?>"><?php echo __('vat_codes'); ?>:</label>
<select id="createVatCode<?php echo $ctr; ?>" name="createVatCode<?php echo $ctr; ?>" 
                                        value="<?php echo $vat  ; ?>"
                                        style="float:left;margin-top :5px;margin-left : 5px;" 
                                        data-dojo-type="dijit.form.FilteringSelect"
                                        data-dojo-props="required:true">
                                    
<?php foreach($vat_codes as $vat_code): ?>

       <option value="<?php echo $vat_code['vat_id']; ?>"><?php echo __($vat_code['vat_name']);?></option>

        <?php endforeach; ?>
</select>

<label for="createCustomerBadBuyer<?php echo $ctr; ?>"><?php echo __('bad_buyer'); ?>:</label>         
<input type="checkbox" id="createCustomerBadBuyer<?php echo $ctr; ?>" value="<?php echo $bad; ?>"
       style="float:left;margin-top :5px;margin-left : 5px;"  data-dojo-type="dijit.form.CheckBox">

<br />
<br />

<label for="createCustomerDomiciliationNumber<?php echo $ctr; ?>"><?php echo __('domiciliation_number' ); ?>:</label>
<input id="createCustomerDomiciliationNumber<?php echo $ctr; ?>" type="text" 
                                                     style="float:left;margin-top :5px;margin-left : 5px;"
                                                     trim="true" value="<?php echo $domiciliation_number; ?>"
                                                      data-dojo-type="dijit.form.ValidationTextBox" >

<label for="createCustomerAccountNumber<?php echo $ctr; ?>"><?php echo __('account_number' ); ?>:</label>
<input id="createCustomerAccountNumber<?php echo $ctr; ?>" type="text" value="<?php echo $account_number; ?>"
                                                     style="float:left;margin-top :5px;margin-left : 5px;"
                                                     trim="true" data-dojo-type="dijit.form.ValidationTextBox"  >

<label for="createCustomerReprieve<?php echo $ctr; ?>"><?php echo __('reprieve' ); ?>:</label>
<input id="createCustomerReprieve<?php echo $ctr; ?>" type="text" value="<?php echo $reprieve  ; ?>"
                                                     style="float:left;margin-top :5px;margin-left : 5px;"
                                                     trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                     data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'"  >

<br />
<br />


<label for="createCustomerDiscount<?php echo $ctr; ?>"><?php echo __('discount' ); ?>:</label>
<input id="createCustomerDiscount<?php echo $ctr; ?>" type="text" value="<?php echo $discount; ?>"
                                                     style="float:left;margin-top :5px;margin-left : 5px;"
                                                     trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                     data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'"  >

<label for="createCustomerDiscountReason<?php echo $ctr; ?>"><?php echo __('discount_reason' ); ?>:</label>
<input id="createCustomerDiscountReason<?php echo $ctr; ?>" type="text" value="<?php echo $discount_reason ; ?>"
                                                     style="float:left;margin-top :5px;margin-left : 5px;"
                                                     trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                     data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'"  >

<label for="createCustomerVatNumber<?php echo $ctr; ?>"><?php echo __('vat_number'); ?>:</label>
<input id="createCustomerVatNumber<?php echo $ctr; ?>" type="text" value="<?php echo   $vat_number;  ?>"
                                                     style="float:left;margin-top :5px;margin-left : 5px;"
                                                     trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                     data-dojo-props=""  >

<br />
<br />


<label for="createCustomerRemarks<?php echo $ctr; ?>"><?php echo __('remarks' ); ?>:</label>

<textarea id="createCustomerRemarks<?php echo $ctr; ?>" cols="150"
                                                       rows="" 
                                                       value="<?php echo $remarks; ?>"
                                                       style="margin-top :5px;margin-left : 5px;"
                                                       trim="true" data-dojo-type="dijit.form.Textarea" >
</textarea>
  
</fieldset>
</div>
</body>
</html>