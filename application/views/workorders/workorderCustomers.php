<?php $ctr = isset($ctr) && !empty($ctr) ? $ctr : ''; ?>
<link rel="stylesheet" href="<?php echo url::base(FALSE).'media/js/dojo/dojox/grid/resources/claroGrid.css'; ?>"/>
<script>
var ctr = '<?php echo $ctr; ?>';
var gridResultWorkorderCustomer   = null;
var frameWorkorderCustomer        = null;


function searchCustomer (){


   var name     = dijit.byId('searchCustomerName'+ctr);
   var surname  = dijit.byId('searchCustomerSurname'+ctr);
   var id       = dijit.byId('searchCustomerId'+ctr);
   var activity = dijit.byId('searchCustomerActivy'+ctr);

   frameWorkorderCustomer = frameWorkorderCustomer || new dijit.Dialog({
                           title: "result",
                           style: "width: 80%",
                          content: dojo.byId("resultWorkorderCustomer"+ctr)}); 
       
   

    dojo.xhr.post({
    
        url: "customer/search/"+ctr,
        handleAs: "json",
            
        content: {
            name     : name.value,
            surname  : surname.value,
            id       : id.value,
            activity : activity.value
            
        },

        load: function(results) {
              
            var data = { items: results};
            var store = new dojo.data.ItemFileReadStore( { data: data });  
            

            if (gridResultWorkorderCustomer != null){

                gridResultWorkorderCustomer.setStore(store);
            
            }else{
      
             gridResultWorkorderCustomer = new dojox.grid.DataGrid({
             
                    store: store,
                    autoHeight:true,
                    query: { cust_id: "*" },
                    structure: [
                        { name: "<?php echo __('id'); ?>", field: "cust_id" },
                        { name: "<?php echo __('name'); ?>", field: "cust_name" },
                        { name: "<?php echo __('surname'); ?>", field: "cust_surname"},
                    ]
                }, 'resultWorkorderCustomer'+ctr);
            
                
           dojo.connect(gridResultWorkorderCustomer, 'onRowDblClick',
		        		function(event) {
		        		 
		        			var item       = gridResultWorkorderCustomer.getItem(event.rowIndex);
                  var id         = gridResultWorkorderCustomer.store.getValue(item, "cust_id");

                  var layoutGeneral   = dijit.byId('generalDataCustomerContainer'+ctr);
                                 
                  layoutGeneral.href  = 'customer/generalData/'+ctr+'/'+id;
                  layoutGeneral.refresh();

                  frame.hide();

                
		        		 });
            };

            gridResultWorkorderCustomer.startup();
            frameWorkorderCustomer.show();

        },
      
        error: function(error) {
               alert(error);
        }
    });
}



</script>
     </head>   
     <?php i18n::lang(Cache::instance()->get('lang'));?>
    <body class="claro" >

           <div data-dojo-type="dijit.layout.BorderContainer" style="height:100%;padding:0;overfllow:auto"  >             
                   <div data-dojo-type="dojox.layout.ContentPane" data-dojo-props="region: 'top'" style="height:20%;overflow:auto;padding:0,overflow:auto;" title="<?php echo __('search'); ?>">
                        <div data-dojo-type="dijit.form.Form" id="formSearchCustomer<?php echo $ctr; ?>" enctype="multipart/form-data" 
                                method="post">                        
                            <fieldset>
                                <label for="searchCustomerId<?php echo $ctr; ?>"><?php echo __('id' ); ?>:</label>
                                <input id="searchCustomerId<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" type="text" data-dojo-type="dijit.form.ValidationTextBox" name="id" trim="true" data-dojo-type="dijit.form.ValidationTextBox" >
                
                                <label for="searchCustomerName<?php echo $ctr; ?>"><?php echo __('name' ); ?>:</label>
                                <input id="searchCustomerName<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" type="text" data-dojo-type="dijit.form.ValidationTextBox" name="name" trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                 data-dojo-props="" >
                                
                                <label for="searchCustomerSurname<?php echo $ctr; ?>"><?php echo __('surname' ); ?>:</label>
                                <input id="searchCustomerSurname<?php echo $ctr; ?>" type="text" style="float:left;margin-top :5px;margin-left : 5px;"  data-dojo-type="dijit.form.ValidationTextBox" name="surname" trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                        data-dojo-props="" >
                              
                                <br />
                                <br />
                               

                                <label for="searchCustomerActivy<?php echo $ctr; ?>"><?php echo __('activities'); ?></label>
                                <select id="searchCustomerActivy<?php echo $ctr; ?>"   style="float:left;margin-top :5px;margin-left : 5px;" name="activy<?php echo $ctr; ?>" 
                                        data-dojo-type="dijit.form.FilteringSelect">

                                <option value=" "> </option>
                                    
                                <?php foreach($activities as $activity): ?>

                                             <option value="<?php echo $activity['act_typ_id']; ?>"><?php echo __($activity['act_typ_name']);?></option>

                                <?php endforeach; ?>
                                </select>
       
                                <br />
                                <br />
                                <div class="validation">
            
                                    <input name="searchButton" type="button" value="<?php echo __("submit"); ?>" label="<?php echo __("submit"); ?>"  data-dojo-type="dijit.form.Button" 
                                                             data-dojo-props="onClick: searchCustomer" />
                                    <input type="reset"  value="<?php echo __("cancel"); ?>" label="<?php echo __("cancel"); ?>"  data-dojo-type="dijit.form.Button" />

                                </div>
                                <div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                <div id="generalDataCustomerContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" 
                     style="height:80%;overflow:auto;" data-dojo-props="region: 'center',href:'<?php echo URL::site('customer/generalData/'.$ctr);?>',preload:true" style="height:80%;padding:0" title="<?php echo __('general_data'); ?>">

                </div>

  

            </div>

            <div class="dijitHidden">
    
              <div data-dojo-type="dijit.Dialog" style: "width: 100%" data-dojo-props="title:'Ajax Dialog',loadingMessage:'Loading dialog content...'">
                  <div id="resultWorkorderCustomer<?php echo $ctr;?>" style="width:100%"></div>
              </div>
            </div>
            
       </body>
       <script>

       </script>
</html>