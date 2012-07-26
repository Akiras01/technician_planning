<?php $ctr = isset($ctr) && !empty($ctr) ? $ctr : ''; ?>
<script>
var ctr = '<?php echo $ctr; ?>';
var gridResult    = null;
var frame         = null;
var storeAdress   = null;
var storeContact  = null;
var storeCustomer = null;


function searchWorkplace (){


   var name     = dijit.byId('searchWorkplaceWorkorderName'+ctr);
   var surname  = dijit.byId('searchWorkplaceWorkorderSurname'+ctr);
   var id       = dijit.byId('searchWorkplaceWorkorderId'+ctr);
   var owner    = dijit.byId('searchWorkplaceWorkorderOwners'+ctr);


   frame = frame || new dijit.Dialog({
                          title: "result",
                          style: "width: 80%",
                          content: dojo.byId("result"+ctr)}); 
   

    dojo.xhr.post({
    
        url: "workplace/search/"+ctr,
        handleAs: "json",
            
        content: {
            name     : name.value,
            surname  : surname.value,
            id       : id.value,
            owner    : owner.value
            
        },

        load: function(results) {
              
            var data = { items: results};
            var store = new dojo.data.ItemFileReadStore( { data: data });  
          

            if (gridResult != null){

                gridResult.setStore(store);
            
            }else{
      
             gridResult = new dojox.grid.DataGrid({
             
                    store: store,
                    autoHeight:true,
                    query: { cust_id: "*" },
                    structure: [
                        { name: "<?php echo __('id'); ?>", field: "cust_id" },
                        { name: "<?php echo __('name'); ?>", field: "cust_name" },
                        { name: "<?php echo __('surname'); ?>", field: "cust_surname"},
                    ]
                }, 'result'+ctr);
            
                
           dojo.connect(gridResult, 'onRowDblClick',
                function(event) {
                 
                  var item       = gridResult.getItem(event.rowIndex);
                  var id         = gridResult.store.getValue(item, "cust_id");

                  var layoutGeneral    = dijit.byId('generalDataWorkplaceWorkorderContainer'+ctr);
                
                  layoutGeneral.href  = 'workplace/generalData/'+ctr+'/'+id;
                  layoutGeneral.refresh();


                  frame.hide();
                  
                 });
            }
       
            frame.show();

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

           <div data-dojo-type="dijit.layout.BorderContainer" style="height:100%;padding:0"  > 
            
                   <div data-dojo-type="dojox.layout.ContentPane" data-dojo-props="region: 'top'" 
                        style="height:20%;padding:0" title="<?php echo __('search'); ?>">
                        <div data-dojo-type="dijit.form.Form" id="formSearchWorkplaceWorkorder<?php echo $ctr; ?>" enctype="multipart/form-data"  method="post">                        
                            <fieldset>
                                <label for="searchWorkplaceWorkorderId<?php echo $ctr; ?>"><?php echo __('id' ); ?>:</label>
                                <input id="searchWorkplaceWorkorderId<?php echo $ctr; ?>" 
                                style="float:left;margin-top :5px;margin-left : 5px;" type="text" 
                                trim="true" data-dojo-type="dijit.form.ValidationTextBox" >
                
                                <label for="searchWorkplaceWorkorderName<?php echo $ctr; ?>">
                                  <?php echo __('name' ); ?>:</label>
                                <input id="searchWorkplaceWorkorderName<?php echo $ctr; ?>" 
                                       style="float:left;margin-top :5px;margin-left : 5px;" type="text"
                                       trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                       data-dojo-props="" >
                                
                                <label for="searchWorkplaceWorkorderSurname<?php echo $ctr; ?>"><?php echo __('surname' ); ?>:</label>
                                <input id="searchWorkplaceWorkorderSurname<?php echo $ctr; ?>" type="text" 
                                       style="float:left;margin-top :5px;margin-left : 5px;" 
                                       trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                       data-dojo-props="" >
                              
                                <br />
                                <br />

                                <label for="searchWorkplaceWorkorderOwners<?php echo $ctr; ?>"><?php echo __('owners'); ?></label>
                                <select id="searchWorkplaceWorkorderOwners<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;"  
                                        data-dojo-type="dijit.form.FilteringSelect">

                                <option value=" "> </option>
                                    
                                <?php foreach($owners as $owner): ?>

                                             <option value="<?php echo $owner['id']; ?>"><?php echo __($owner['name']);?></option>

                                <?php endforeach; ?>
                                </select>
                               

                                <div class="validation">
            
                                    <input name="searchButton" type="button" value="<?php echo __("submit"); ?>" 
                                           label="<?php echo __("submit"); ?>"  
                                           data-dojo-type="dijit.form.Button" 
                                           data-dojo-props="onClick: searchWorkplace" />
                                    <input type="reset"  value="<?php echo __("cancel"); ?>" 
                                           label="<?php echo __("cancel"); ?>"  data-dojo-type="dijit.form.Button" />

                                </div>
                                <div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                <div id="generalDataWorkplaceWorkorderContainer<?php echo $ctr; ?>" 
                     data-dojo-type="dojox.layout.ContentPane" 
                     data-dojo-props="href:'<?php echo URL::site('workplace/generalData/'.$ctr);?>',preload:true" 
                     style="height:80%;padding:0" title="<?php echo __('general_data'); ?>">

                </div>
             </div>

            <div class="dijitHidden">
    
              <div data-dojo-type="dijit.Dialog" style: "width: 80%" data-dojo-props="title:'Ajax Dialog',loadingMessage:'Loading dialog content...'">
                  <div id="result<?php echo $ctr;?>" style="width:70%"></div>
              </div>
            </div>
            
       </body>
</html>