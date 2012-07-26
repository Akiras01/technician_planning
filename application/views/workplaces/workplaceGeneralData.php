<?php $ctr = isset($ctr) ? $ctr : 0; ?>
<script>
var ctr = '<?php echo $ctr; ?>';

</script>
</head>   
<?php i18n::lang(Cache::instance()->get('lang'));

       $identification = $name =  $tel = $gsm  = $bad =
       $fax              =  $mail     = $vat_number       = 
       $active           =  $account_number   = $domiciliation_number = 
       $discount         =  $discount_reason  = $reprieve         = 
       $remarks          =  $vat          =  '';

      if (isset($workplace)){

        $identification   = $workplace['workp_id'] ?: '';
        $name             = $workplace['workp_name'] ?: ''; 
        $tel              = $workplace['workp_tel'] ?: '';
        $gsm              = $workplace['workp_gsm'] ?: '';
        $fax              = $workplace['workp_fax'] ?: '';
        $mail             = $workplace['workp_mail'] ?: '';
        $vat_number       = $workplace['workp_vat_number'] ?: '';
        $active           = $workplace['workp_active'] ?: '';
        $remarks          = $workplace['workp_remarks'] ?: ''; 
        $vat              = $workplace['vat_id'] ?: ''; 

      }


?>
<body class="claro">
<div data-dojo-type="dijit.form.Form" id="createWorkplaceForm<?php echo $ctr; ?>" enctype="multipart/form-data" >
<fieldset>
<label for="createWorkplaceId<?php echo $ctr; ?>"><?php echo __('id' ); ?>:</label>
<input id="createWorkplaceId<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                type="text" data-dojo-type="dijit.form.ValidationTextBox" 
                                                trim="true" value="<?php echo $id; ?>"
                                                data-dojo-props="readonly:true" >

<label for="createWorkplaceName<?php echo $ctr; ?>" ><?php echo __('name' ); ?>:</label>
<input id="createWorkplaceName<?php echo $ctr; ?>"  value="<?php echo $name; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                   type="text" data-dojo-type="dijit.form.ValidationTextBox" 
                                                   trim="true" 
                                                   data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'"  >

 <br />
 <br />

<label for="createWorkplaceTel<?php echo $ctr; ?>" for="tel"><?php echo __('phone' ); ?>:</label>
<input style="float:left;margin-top :5px;margin-left : 5px;" 
                                                 type="text" value="<?php echo $tel; ?>"
                                                 data-dojo-type="dijit.form.ValidationTextBox" 
                                                 trim="true" data-dojo-props="id : 'createWorkplaceTel<?php echo $ctr; ?>'">

<label for="createWorkplaceGsm<?php echo $ctr; ?>" ><?php echo __('gsm' ); ?>:</label>
<input id="createWorkplaceGsm<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                 type="text" value="<?php echo $gsm; ?>"
                                                 trim="true" data-dojo-type="dijit.form.ValidationTextBox">

 <br />
 <br />

<label  for="createWorkplaceFax<?php echo $ctr; ?>"><?php echo __('fax' ); ?>:</label>
<input  id="createWorkplaceFax<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                  type="text"  
                                                  trim="true" value="<?php echo $fax; ?>"
                                                  data-dojo-type="dijit.form.ValidationTextBox">

<label  for="createWorkplaceMail<?php echo $ctr; ?>"><?php echo __('mail' ); ?>:</label>
<input  id="createWorkplaceMail<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" 
                                                  type="text" value="<?php echo $mail; ?>"
                                                   trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                   data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'" >

<br />
<br />


<label for="createVatCode<?php echo $ctr; ?>"><?php echo __('vat_codes'); ?>:</label>
<select id="createVatCode<?php echo $ctr; ?>" name="createVatCode<?php echo $ctr; ?>" 
                                        value="<?php echo $vat; ?>"
                                        style="float:left;margin-top :5px;margin-left : 5px;" 
                                        data-dojo-type="dijit.form.FilteringSelect"
                                        data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'">
                                    
<?php foreach($vat_codes as $vat_code): ?>

       <option value="<?php echo $vat_code['vat_id']; ?>"><?php echo __($vat_code['vat_name']);?></option>

        <?php endforeach; ?>
</select>


<label for="createWorkplaceActive<?php echo $ctr; ?>"><?php echo __('active'); ?></label>       
<input type="checkbox" id="createWorkplaceActive<?php echo $ctr; ?>"  
       style="float:left;margin-top :5px;margin-left : 5px;" value="<?php echo $active; ?>"
       data-dojo-type="dijit.form.CheckBox">
  



<br />
<br />


<label for="createWorkplaceRemarks<?php echo $ctr; ?>"><?php echo __('remarks' ); ?>:</label>

<textarea id="createWorkplaceRemarks<?php echo $ctr; ?>" cols="150"
                                                       rows="" 
                                                       value="<?php echo $remarks; ?>"
                                                       style="margin-top :5px;margin-left : 5px;"
                                                       trim="true" data-dojo-type="dijit.form.Textarea" >
</textarea>
  
</fieldset>
</div>
</body>
</html>