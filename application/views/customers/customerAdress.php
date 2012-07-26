<?php $ctr = isset($ctr) ? $ctr : 0; i18n::lang(Cache::instance()->get('lang')); ?>
<link rel="stylesheet" href="<?php echo url::base(FALSE).'media/js/dojo/dojox/grid/resources/claroGrid.css'; ?>"/>
<script>
var gridAdress;
var ctr = '<?php echo $ctr; ?>';
var count  = '<?php echo $count; ?>';
var adresses = <?php echo $adresses; ?>;
var data = { identifier: 'adr_id',items: adresses};
//var countries = <?php echo $countries; ?>;
var last  = '<?php echo $last; ?>';
storeAdress = new dojo.data.ItemFileWriteStore( {data: data });   


var dataCountries  = {items : <?php echo $countries; ?> };
var storeCountries = new dojo.data.ItemFileReadStore( { data: dataCountries }); 

var dataProvinces  = {items : <?php echo $provinces; ?> };
var storeProvinces = new dojo.data.ItemFileReadStore( { data: dataProvinces });


var dataPostcodes  = {items : <?php echo $postcodes; ?> };
var storePostcodes = new dojo.data.ItemFileReadStore( { data: dataPostcodes });

var dataTownShips   = {items : <?php echo $town_ships; ?> };
var storeTownShips  = new dojo.data.ItemFileReadStore( { data: dataTownShips });



function saveDone (){
      
      gridAdress.store.close();
     
}

function saveFailed (){

    alert('failed');
}

function deleteDone (){
      
      gridAdress.store.close();


         if (gridAdress.rowCount == 1){
  
            last ++;
            storeAdress.newItem({ adr_id :last ,adr_street_number : ' ',
                                   adr_street_name : ' ',town_id: '',
                                  prov_id : '', town_ship_id: ' ',
                                  town_ship_postcode: ' ',count_id : ' '
               });
             storeAdress.save({onComplete: saveDone, onError: saveFailed});
                       
          }
  
}

function deleteFailed (){

    alert('failed');
}

dojo.addOnLoad(function(){
            
           
            
             gridAdress = new dojox.grid.DataGrid({
             
                    store: storeAdress,
                    query: { adr_id: "*" },
                    clearOnClose:true,
                    structure: [
                        { name: "<?php echo __('street'); ?>", editable:true, field: "adr_street_name", width: "8%" },
                        { name: "<?php echo __('number'); ?>", editable:true, field: "adr_street_number", width: "8%" },
                        { name: "<?php echo __('town'); ?>", field: "town_id", width: "8%" },
                        { name: "<?php echo __('postcode'); ?>",  field: "town_ship_postcode", width: "9%",
                          type: dojox.grid.cells._Widget,
                        formatter: function(item, rowIndex, cell){
                                                                var comboBoxPostcode = new dijit.form.FilteringSelect({
                                                                        // name: "provinces",
                                                                        // id  : "provinces"+new Date().getTime(),
                                                                        // value: "setting1",
                                                                         store: storePostcodes,
                                                                         searchAttr: "town_ship_postcode",
                                                                 });
                                                                return comboBoxPostcode;  
                                                                }},
                        { name: "<?php echo __('town_ship'); ?>", field: "town_ship_id", width: "8%" ,

                        formatter: function(item, rowIndex, cell){
                                                                var comboBoxTownShips = new dijit.form.FilteringSelect({
                                                                        // name: "provinces",
                                                                        // id  : "provinces"+new Date().getTime(),
                                                                        // value: "setting1",
                                                                         store: storeTownShips,
                                                                         searchAttr: "town_ship_label",
                                                                 });
                                                                return comboBoxTownShips;  
                                                                }},
                        { name: "<?php echo __('province'); ?>", field: "prov_id", width: "8%",
                                                                 type: dojox.grid.cells._Widget,
                                                                formatter: function(item, rowIndex, cell){

                                                                var comboBoxProvince = new dijit.form.FilteringSelect({
                                                                        // name: "provinces",
                                                                        // id  : "provinces"+new Date().getTime(),
                                                                        // value: "setting1",
                                                                         store: storeProvinces,
                                                                         searchAttr: "prov_label",
                                                                 });
                                                                return comboBoxProvince;  
                                                                }                             
                                                                 },

                        { name: "<?php echo __('country'); ?>", field: "count_id", width: "8%", 
                                                                type: dojox.grid.cells._Widget,
                                                                formatter: function(item, rowIndex, cell){
                                    
                                                                var comboBoxCountry = new dijit.form.FilteringSelect({
                                                                        // name: "country",
                                                                      //   id  : 'country'+new Date().getTime(),
                                                                        // value: "setting1",
                                                                         store: storeCountries,
                                                                         searchAttr: "count_name",
                                                                         onChange : function (index){
                                                                             //   var item =  comboBoxCountry.getItem(index);
                                                                              //  alert(storeCountries.getValue(item,"count_name"));
                                                                            
                                                                         }
                                                                 });
                                                                return comboBoxCountry;

                            }
                          },
                        { name: "<?php echo __('add'); ?>", field: "add", editable: false, width :'8%',

                        formatter: function(item, rowIndex, cell){

                                var addButton = new dijit.form.Button({
                                      iconClass:'dijitIconNewTask',
                                      showLabel:false,
                                      onClick : function (){
                                        return false;
                                      }
                                    });
                                  return addButton;  
                                 }                             
                            },
                        { name: "<?php echo __('delete'); ?>", field: "delete",editable: false,  width :'8%',type: dojox.grid.cells._Widget,

                        formatter: function(item, rowIndex, cell){

                                var deleteButton = new dijit.form.Button({
                                      iconClass:'dijitIconDelete',
                                      showLabel:false,
                                      onClick : function (){
                                        return false;
                                       } 
                                    });
                                  return deleteButton;  
                                 }                             
                            }
                      
                    ]
                }, "gridCustomersAdresses"+ctr);


                dojo.connect(gridAdress,"onRowClick",function(e){

                    var item     = gridAdress.getItem(e.rowIndex);
                    var index    = e.cellIndex;
                    var rowIndex = e.rowIndex;
     
                    switch (index){

                    

                        case 7 :  last ++;
                                  storeAdress.newItem({ adr_id :last ,adr_street_number : ' ',
                                                        adr_street_name : ' ',town_id: '',
                                                        prov_id : '', town_ship_id: ' ',
                                                        town_ship_postcode: ' ',count_id : ' '
                                                     });
                                  storeAdress.save({onComplete: saveDone, onError: saveFailed});
                            break;
                        case 8 :storeAdress.deleteItem(item);
                                storeAdress.save({onComplete: deleteDone, onError: deleteFailed});


                            break;
                    }

                    return true;

                });

                gridAdress.startup();
 
});
</script>
     </head>
    <body class="claro">

        <div id="gridCustomersAdresses<?php echo $ctr; ?>" style="height=300px">

        </div>
    	
    </body>
</html>     