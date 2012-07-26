<?php $ctr = isset($ctr) ? $ctr : 0; i18n::lang(Cache::instance()->get('lang')); ?>
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
var contacts = <?php echo $contacts; ?>;
var data = { identifier: 'con_id', items:contacts};
storeContact = new dojo.data.ItemFileWriteStore( { data: data }); 
var last  = '<?php echo $last; ?>';


function saveDone (){
      
      gridContact.store.close();
      gridContact.sort();
}

function saveFailed (){


}

dojo.addOnLoad(function(){

                  gridContact = new dojox.grid.DataGrid({
                    store: storeContact,
                    autoHeight:true,
                    selectionMode:"single",
                    clearOnClose:true,
                    query: { con_id: "*" },
                    clientSort: 'true',
                    structure: [ 
                        { name: "<?php echo __('name'); ?>", field: "con_name",    editable: true, width :'16%' },
                        { name: "<?php echo __('surname'); ?>", field: "con_surname",   editable: true, width :'16%'  },
                        { name: "<?php echo __('mail'); ?>", field: "con_mail",    editable: true , width :'16%' },
                        { name: "<?php echo __('phone'); ?>", field: "con_phone",   editable: true , width :'16%' },
                        { name: "<?php echo __('add'); ?>", field: "add", editable: false, width :'16%',

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
                }, 'gridCustomersContacts'+ctr);
                


                dojo.connect(gridContact,"onRowClick",function(e){

                    var item   = gridContact.getItem(e.rowIndex);
                    var index  = e.cellIndex;

                    switch (index){
                        case 4 :  last ++;
                                  storeContact.newItem({ con_id : last, con_name : 'vertenoeil' ,con_surname : 'tom',con_mail:' ',con_phone : ' ', con_fax : ' '});
                                  storeContact.save({onComplete: saveDone, onError: saveFailed});
                            break;
                        case 5 :
                            break;
                    }

                });
  
});
</script>
     </head>
    <body class="claro">
        <div id="gridCustomersContacts<?php echo $ctr; ?>" style="height:200px,width:200px"  dojoType="dojox.data.DataGrid" dojoAttachPoint="gridContact">
        </div>
    	
    </body>
</html>    
