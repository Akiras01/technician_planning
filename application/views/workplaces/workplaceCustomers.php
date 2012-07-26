,<?php $ctr = isset($ctr) ? $ctr : 0; i18n::lang(Cache::instance()->get('lang')); ?>
<link rel="stylesheet" href="<?php echo url::base(FALSE).'media/js/dojo/dojox/grid/resources/claroGrid.css'; ?>"/>
<style type="text/css"> 
             .dojoxGrid table { margin: 0; } 
             html, body { width: 100%; 
                         height: 100%; 
                         margin: 0; } 
</style>
<script>
var gridContact;
var ctr    = '<?php echo $ctr; ?>';
var count  = '<?php echo $count; ?>';
var customers = <?php echo $customers; ?>;
var data = { identifier: 'cust_id', items:customers};
storeCustomer = new dojo.data.ItemFileWriteStore( {  data: data }); 


function saveDone (){
      
      gridContact.store.close();
      gridContact.sort();
}

function saveFailed (){


}

dojo.addOnLoad(function(){

   gridOwners = new dojox.grid.DataGrid({
          store: storeCustomer,
          autoHeight:true,
          selectionMode:"single",
          clearOnClose:true,
          query: { cust_id: "*" },
          clientSort: 'true',
          structure: [ 
            { name: "<?php echo __('name'); ?>", field: "cust_name",  width :'20%' },
            { name: "<?php echo __('surname'); ?>", field: "cust_surname", width :'20%'  },
            { name: "<?php echo __('mail'); ?>", field: "cust_mail",    width :'20%' },
            { name: "<?php echo __('phone'); ?>", field: "cust_phone", width :'20%' },
            { name: "<?php echo __('fax'); ?>", field: "cust_fax", width :'20%'  },
            { name: "<?php echo __('add'); ?>", field: "add", editable: false, width :'16%',type: dojox.grid.cells._Widget,

                        formatter: function(item, rowIndex, cell){

                                var addButton = new dijit.form.Button({
                                      iconClass:'dijitIconNewTask',
                                      showLabel:false,
                                    });
                                  return addButton;  
                                 }                             
                            },
                        { name: "<?php echo __('delete'); ?>", field: "delete",editable: false,  width :'16%',type: dojox.grid.cells._Widget,

                        formatter: function(item, rowIndex, cell){

                                var addButton = new dijit.form.Button({
                                      iconClass:'dijitIconDelete',
                                      showLabel:false
                                    });
                                  return addButton;  
                                 }                             
                            }
                    ]
        }, 'gridOwners'+ctr);
                  
 
if (count == 1){
  //  storeContact.newItem({ con_id : 2, con_name : 'vertenoeil' ,con_surname : 'tom',con_mail:' ',con_phone : ' //', con_fax : ' '});
   //storeContact.save({onComplete: saveDone, onError: saveFailed});

}
});
</script>
     </head>
    <body class="claro">
        <div id="gridOwners<?php echo $ctr; ?>" style="height:200px,width:200px" 
             dojoType="dojox.data.DataGrid">
        </div>
    	
    </body>
</html>    
