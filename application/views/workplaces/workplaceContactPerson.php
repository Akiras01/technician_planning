<?php $ctr = isset($ctr) ? $ctr : 0; i18n::lang(Cache::instance()->get('lang')); ?>
<link rel="stylesheet" href="<?php echo url::base(FALSE).'media/js/dojo/dojox/grid/resources/claroGrid.css'; ?>"/>
<script>
var gridContact, storeContact;
var ctr = '<?php echo $ctr; ?>';
var contacts = <?php echo $contacts; ?>;
var data = { items: contacts};
storeContact = new dojo.data.ItemFileWriteStore( { data: data }); 

dojo.addOnLoad(function(){
                  
             gridContact = new dojox.grid.DataGrid({
 
                    store: storeContact,
                    clearOnClose:true,
                    query: { con_id: "*" },
                    structure: [
                        { name: "<?php echo __('name'); ?>", field: "con_name", width: "16%" },
                        { name: "<?php echo __('surname'); ?>", field: "con_surname", width: "16%" },
                        { name: "<?php echo __('mail'); ?>", field: "con_mail", width: "16%" },
                        { name: "<?php echo __('phone'); ?>", field: "con_phone", width: "16%" },
                        { name: "<?php echo __('fax'); ?>", field: "con_fax", width: "16%" },
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
                }, "gridWorkplacesContacts"+ctr);
                gridContact.startup();
 
});

if (contacts.length == 0){
    storeContact.newItem({con_name: '', con_surname: '', con_mail: '',con_phone : '', conf_fax : ''});
    gridContact.setStore(storeContact);
}

</script>
     </head>
    <body class="claro">

        <div id="gridWorkplacesContacts<?php echo $ctr; ?>">

        </div>
    	
    </body>
</html>    
