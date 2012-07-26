<?php $ctr = isset($ctr) ? $ctr : 0; ?>
<script>
var ctr = '<?php echo $ctr; ?>';

</script>
</head>   
<?php i18n::lang(Cache::instance()->get('lang'));

       $id             = $beginDate = $endDate = $comments = $status  = $workplace =
       $customer       =  $invoice  = $workorder_type  = '';

      if (isset($workorder)){

        $id               = $workorder['work_id'] ?: '';
        $beginDate        = $workorder['work_begin_date'] ?: ''; 
        $endDate          = $workorder['work_end_date'] ?: '';
        $comments         = $workorder['work_comments'] ?: '';
        $status           = $workorder['work_status'] ?: '';
        $workplace        = $workorder['workp_id'] ?: '';
        $customer         = $workorder['cust_id'] ?: '';
        $invoice          = $workorder['inv_id'] ?: '';
        $workorder_type   = $workorder['work_type_id'] ?: '';
      }


?>
<body class="claro">

<div data-dojo-type="dijit.form.Form" id="createWorkorderForm<?php echo $ctr; ?>"
     enctype="multipart/form-data" >
<fieldset>
<label for="createWorkorderId<?php echo $ctr; ?>"><?php echo __('id' ); ?>:</label>
<input id="createWorkorderId<?php echo $ctr; ?>" 
       style="float:left;margin-top :5px;margin-left : 5px;" 
       type="text" data-dojo-type="dijit.form.ValidationTextBox" 
       trim="true" value="<?php echo $id; ?>"
       data-dojo-props="readonly:true" >

<label for="createWorkorderType<?php echo $ctr; ?>"><?php echo __('types'); ?>:</label>
<select id="createWorkorderType<?php echo $ctr; ?>" value="<?php echo $workorder_type; ?>"
        style="float:left;margin-top :5px;margin-left : 5px;" 
        data-dojo-type="dijit.form.FilteringSelect" data-dojo-props="required:true">

                                    
<?php foreach($types as $type): ?>

       <option value="<?php echo $type['work_type_id']; ?>">
                  <?php echo __($type['work_type_name']);?>
       </option>

        <?php endforeach; ?>
</select>

<br />
<br />

<label for="createWorkorderBeginDate<?php echo $ctr; ?>" ><?php echo __('begin_date' ); ?>:
</label>
<input id="createCustomerBeginDate<?php echo $ctr; ?>"  value="<?php echo $beginDate; ?>" 
       style="float:left;margin-top :5px;margin-left : 5px;" 
       type="text" data-dojo-type="dijit.form.DateTextBox" trim="true" 
       data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'"  >

<label for="createWorkorderEndDate<?php echo $ctr; ?>"><?php echo __('end_date' ); ?>:</label>
<input id="createWorkorderEndDate<?php echo $ctr; ?>" 
       type="text" value="<?php echo $endDate; ?>"
       style="float:left;margin-top :5px;margin-left : 5px;"
       trim="true" data-dojo-type="dijit.form.DateTextBox"
       data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'"  >
 <br />
 <br />



<label for="createWorkorderInvoiced<?php echo $ctr; ?>"><?php echo __('invoiced'); ?>
</label>       
<input type="checkbox" id="createWorkorderInvoiced<?php echo $ctr; ?>"  
       style="float:left;margin-top :5px;margin-left : 5px;" 
       value="<?php echo $invoice; ?>" 
       data-dojo-type="dijit.form.CheckBox" 
       data-dojo-props="readonly:true" >
  
 <br />
 <br />


<label for="createWorkorderComments<?php echo $ctr; ?>"><?php echo __('comments' ); ?>:</label>

<textarea id="createWorkorderComments<?php echo $ctr; ?>" cols="150" rows="" 
          value="<?php echo $comments; ?>"
          style="margin-top :5px;margin-left : 5px;"
          trim="true" data-dojo-type="dijit.form.Textarea" >
</textarea>
  
</fieldset>
</div>
</body>
</html>