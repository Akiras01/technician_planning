<?php $ctr = isset($ctr) ? $ctr : 0; ?>
<script>
var ctr           = '<?php echo $ctr; ?>';
var gridResultWorkorder   = null;
var frameWorkorder        = null;

require(["dojo/parser","dojo/behavior","dojo/on","dijit/layout/AccordionContainer",
		 "dijit/layout/BorderContainer", "dojo/_base/xhr","dojo/query",
		 "dijit/layout/ContentPane", "dojo/ready","dijit/layout/TabContainer",
		 "dojox/grid/DataGrid","dijit/form/ComboBox","dijit/form/CheckBox",
		 "dojo/data/ItemFileReadStore","dijit/form/FilteringSelect","dijit/Dialog","dojo/create",
		 "dojo/connect","dojo/data/ItemFileWriteStore","dojox/grid/cells/Select",
		 "dijit/form/ValidationTextBox","dojox/layout/ContentPane", "dojo/dom","dijit/form/DateTextBox",
		 "dojo/_base/lang","dijit/form/Form","dijit/form/Button","dijit/form/Textarea"]);

function emptyWorkorder (){

    var node =  dijit.byId('createWorkorderForm'+ctr); 
    node.reset();
}

function searchWorkorder (){

   var id         = dijit.byId('searchWorkorderId'+ctr);
   var beginDate  = dijit.byId('searchWorkorderBeginDate'+ctr);
   var endDate    = dijit.byId('searchWorkorderEndDate'+ctr); 
   var type       = dijit.byId('searchWorkorderType'+ctr); 


   frameWorkorder = frameWorkorder || new dijit.Dialog({
                          title: "result",
                          style: "width: 80%",
                          content: dojo.byId("resultWorkorder"+ctr)}); 

   alert(beginDate.value);


    dojo.xhr.post({
    
        url: "workorder/"+ctr+"/search/",
        handleAs: "json",
            
        content: {
            id         : id.value,
            beginDate  : (beginDate.value == null ? '' : beginDate.value),
            endDate    : (endDate.value == null ? '' : endDate.value),
            type       : type.value
            
        },

        load: function(results) {
              
            var data = { identifier: 'work_id',  items: results};
            var store = new dojo.data.ItemFileReadStore( { data: data });  
          

            if (gridResultWorkorder != null){

                gridResultWorkorder.setStore(store);
            
            }else{
      
             gridResultWorkorder = new dojox.grid.DataGrid({
             
                    store: store,
                    autoHeight:true,
                    query: { work_id: "*" },
                    structure: [
                        { name: "<?php echo __('id'); ?>", field: "work_id" }, 
                        { name: "<?php echo __('begin_date'); ?>", field: "work_begin_date" },
                        { name: "<?php echo __('end_date'); ?>", field: "work_end_date"},
                        { name: "<?php echo __('status'); ?>", field: "work_status"},
                        { name: "<?php echo __('type'); ?>", field: "work_type_name"},
                    ]
                }, 'resultWorkorder'+ctr);
            
                
           dojo.connect(gridResultWorkorder, 'onRowDblClick',
                function(event) {
                 
                  var item       = gridResultWorkorder.getItem(event.rowIndex);
                  var id         = gridResultWorkorder.store.getValue(item, "work_id");

                  var layoutGeneral    = dijit.byId('generalWorkorderContainer'+ctr);
                  var layoutCustomers  = dijit.byId('generalWorkorderCustomersContainer'+ctr);
                  var layoutWorkplaces = dijit.byId('generalWorkorderWorkplacesContainer'+ctr);
                  var layoutEquipments = dijit.byId('generalWorkorderEquipmentsContainer'+ctr);
                  var layoutParts      = dijit.byId('generalWorkorderPartsContainer'+ctr);
                  var layoutTasks      = dijit.byId('generalWorkorderTasksContainer'+ctr);
                
                  layoutGeneral.href  = 'workorder/generalData/'+ctr+'/'+id; 
                  layoutGeneral.refresh();

                  layoutWorkplaces.href  = 'workorder/workplaces/'+ctr+'/'+id; 
                  layoutWorkplaces.refresh();

                  layoutCustomers.href  = 'workorder/customers/'+ctr+'/'+id; 
                  layoutCustomers.refresh();

                  layoutEquipments.href  = 'workorder/equipments/'+ctr+'/'+id;
                  layoutEquipments.refresh();

                  layoutParts.href  = 'workorder/parts/'+ctr+'/'+id;
                  layoutParts.refresh();

                  layoutTasks.href  = 'workorder/tasks/'+ctr+'/'+id;
                  layoutTasks.refresh();

                  frameWorkorder.hide();

                
                 });
            }
            gridResultWorkorder.startup();
            frameWorkorder.show();

        },
      
        error: function(error) {
               alert(error);
        }
    });
}

function createWorkorder (){


}

</script>
</head>   
<?php i18n::lang(Cache::instance()->get('lang'));?>
<body class="claro">
   <div data-dojo-type="dijit.layout.BorderContainer" style="height:100%;padding:0"  > 

        <div data-dojo-type="dijit.layout.TabContainer" data-dojo-props="region: 'top', tabPosition: 'top'" style="height:25%;padding:0"  >
            
            <div data-dojo-type="dojox.layout.ContentPane" data-dojo-props="region: 'top'" style="height:100%;padding:0" title="<?php echo __('search'); ?>">
                <div data-dojo-type="dijit.form.Form" id="formSearchWorkorder<?php echo $ctr; ?>" enctype="multipart/form-data" action="<?php echo URL::site('login/log'); ?>" 
                method="post">                        
                <fieldset>
                 <label for="searchWorkorderId<?php echo $ctr; ?>"><?php echo __('id' ); ?>:
                 </label>
                 <input id="searchWorkorderId<?php echo $ctr; ?>" 
                        style="float:left;margin-top :5px;margin-left : 5px;" type="text"
                    	data-dojo-type="dijit.form.ValidationTextBox" 
                    	name="id" trim="true" data-dojo-type="dijit.form.ValidationTextBox" >
                
                 <label for="searchWorkorderBeginDate<?php echo $ctr; ?>"><?php echo __('begin_date' ); ?>:
                 </label>
                 <div id="searchWorkorderBeginDate<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" type="text" 
                        data-dojo-type="dijit.form.DateTextBox" trim="true" data-dojo-props="" >

                 </div>
                                
                 <label for="searchWorkorderEndDate<?php echo $ctr; ?>"><?php echo __('end_date' ); ?>:</label>
                 <div id="searchWorkorderEndDate<?php echo $ctr; ?>" 
                        type="text" style="float:left;margin-top :5px;margin-left : 5px;"  
                        data-dojo-type="dijit.form.DateTextBox" 
                        trim="true" 
                        data-dojo-props="" >
                </div>
                              
                <br />
                <br />
                               
                <label for="searchWorkorderType<?php echo $ctr; ?>"><?php echo __('types'); ?></label>
                <select id="searchWorkorderType<?php echo $ctr; ?>"  
                         style="float:left;margin-top :5px;margin-left : 5px;"  
                         data-dojo-type="dijit.form.FilteringSelect">

                         <option value=" "> </option>
                                    
                         <?php foreach($types as $type): ?>

                             <option value="<?php echo $type['work_type_id']; ?>">
                                   <?php echo __($type['work_type_name']);?>
                             </option>

                          <?php endforeach; ?>
                         </select>
       
                                <br />
                                <br />
                                <div class="validation">
            
                                    <input name="searchButton" type="button" value="<?php echo __("submit"); ?>" label="<?php echo __("submit"); ?>"  data-dojo-type="dijit.form.Button" 
                                          data-dojo-props="onClick: searchWorkorder" />
                                    <input type="reset"  value="<?php echo __("cancel"); ?>" label="<?php echo __("cancel"); ?>"  data-dojo-type="dijit.form.Button" />

                                </div>
                                <div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div> 
            <div data-dojo-type="dijit.layout.TabContainer" data-dojo-props="region: 'center', tabPosition: 'top',splitter: true" >
            
                <div id="generalWorkorderContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('workorder/'.$ctr.'/generalData');?>',preload:true" style="height:100%;overflow:auto;padding:0" title="<?php echo __('general_data'); ?>">

                </div>
                <div  id="generalWorkorderCustomersContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane"style="height:100%;overflow:auto;padding:0" data-dojo-props="href:'<?php echo URL::site('workorder/'.$ctr.'/customers');?>',preload:true" title="<?php echo __('customers'); ?>">
          
                </div>
                <div  id="generalWorkorderWorkplacesContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane"style="height:100%;overflow:auto;padding:0" data-dojo-props="href:'<?php echo URL::site('workorder/'.$ctr.'/workplaces');?>',preload:true" title="<?php echo __('workplaces'); ?>">
          
                </div>
                <div  id="generalWorkorderEquipmentsContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('workorder/'.$ctr.'/equipments');?>',preload:true" style="height:100%;overflow:auto;padding:0" title="<?php echo __('equipments'); ?>">

                </div> 
                <div  id="generalWorkorderPartsContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('workorder/'.$ctr.'/parts');?>',preload:true" style="height:100%;overflow:auto;padding:0" title="<?php echo __('parts'); ?>">

                </div> 
                <div  id="generalWorkorderTasksContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('workorder/'.$ctr.'/tasks');?>',preload:true" style="height:100%;overflow:auto;padding:0" title="<?php echo __('tasks'); ?>">

                </div> 
            </div>  
                 <div data-dojo-type="dojox.layout.ContentPane" data-dojo-props="region: 'bottom'" style="height:10%;padding:0" title="<?php echo __('search'); ?>">

                    <div class="validation">
            
                    <input name="createCustomer" type="submit" value="<?php echo __("submit"); ?>" label="<?php echo __("submit"); ?>"  data-dojo-type="dijit.form.Button" 
                                                             data-dojo-props="onClick: createWorkorder" />
                    
                    <input type="reset"  value="<?php echo __("cancel"); ?>" label="<?php echo __("cancel"); ?>"  
                                         data-dojo-type="dijit.form.Button" data-dojo-props="onClick: emptyWorkorder" />

                    </div>
                </div>
            </div>
            <div class="dijitHidden">
    
              <div data-dojo-type="dijit.Dialog" style: "width: 80%" data-dojo-props="title:'Ajax Dialog',loadingMessage:'Loading dialog content...'">
                  <div id="resultWorkorder<?php echo $ctr;?>" style="width:70%"></div>
              </div>
            </div>
</body>
</html>  