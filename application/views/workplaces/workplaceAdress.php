<?php $ctr = isset($ctr) ? $ctr : 0; i18n::lang(Cache::instance()->get('lang')); ?>
<link rel="stylesheet" href="<?php echo url::base(FALSE).'media/js/dojo/dojox/grid/resources/claroGrid.css'; ?>"/>
<script>
var gridAdress;
var ctr = '<?php echo $ctr; ?>';
var adresses = <?php echo $adresses; ?>;
var data = { items: adresses};
storeAdress = new dojo.data.ItemFileWriteStore( { identifier: 'adr_id',data: data });   

dojo.addOnLoad(function(){
            
           
            
             gridAdress = new dojox.grid.DataGrid({
             
                    store: storeAdress,
                    clearOnClose:true,
                    query: { adr_id: "*" },
                    structure: [
                        { name: "<?php echo __('number'); ?>", field: "adr_street_number", width: "16%" },
                        { name: "<?php echo __('street'); ?>", field: "adr_street_name", width: "16%" },
                        { name: "<?php echo __('postcode'); ?>", field: "adr_postcode", width: "16%" },
                        { name: "<?php echo __('town'); ?>", field: "town_label", width: "16%" },
                        { name: "<?php echo __('province'); ?>", field: "prov_label", width: "16%" },
                        { name: "<?php echo __('country'); ?>", field: "count_name", width: "16%" },
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
                }, "gridWorkplacesAdresses"+ctr);
                gridAdress.startup();
 
});

</script>
     </head>
    <body class="claro">

        <div id="gridWorkplacesAdresses<?php echo $ctr; ?>">

        </div>
    	
    </body>
</html>    
