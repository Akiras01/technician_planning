<?php $ctr = isset($ctr) && !empty($ctr) ? $ctr : ''; ?>
<script>
var ctr = '<?php echo $ctr; ?>';
var gridResult    = null;
var frame         = null;
var storeAdress   = null;
var storeContact  = null;
var storeCustomer = null;
require(["dojo/parser","dojo/behavior","dojo/on","dijit/layout/AccordionContainer","dijit/layout/BorderContainer", "dojo/_base/xhr","dojo/query",
"dojo/store/Memory","dojo/data/ObjectStore", "dijit/layout/ContentPane", "dojo/ready","dijit/layout/TabContainer","dojox/grid/DataGrid","dijit/form/ComboBox","dijit/form/CheckBox",
"dojo/data/ItemFileReadStore","dijit/form/FilteringSelect","dijit/Dialog","dojo/create","dojo/connect","dojo/data/ItemFileWriteStore",
"dijit/form/ValidationTextBox","dojox/layout/ContentPane", "dojo/dom","dojo/_base/lang","dijit/form/Form","dijit/form/Button","dijit/form/Textarea"]);


function emptyWorkplace (){

    var node =  dijit.byId('createWorkplaceForm'+ctr);
    node.reset();
}

function createWorkplace(){

    
   var id            = dijit.byId('createWorkplaceId'+ctr);
   var name          = dijit.byId('createWorkplaceName'+ctr);
   var tel           = dijit.byId('createWorkplaceTel'+ctr);
   var gsm           = dijit.byId('createWorkplaceGsm'+ctr);
   var fax           = dijit.byId('createWorkplaceFax'+ctr);
   var mail          = dijit.byId('createWorkplaceMail'+ctr);
   var active        = dijit.byId('createWorkplaceActive'+ctr);
   var vatCode       = dijit.byId('createVatCode'+ctr);
   var remarks       = dijit.byId('createWorkplaceRemarks'+ctr);

    dojo.xhr.post({
    
        url: "workplace/create/"+ctr,
        handleAs: "json",
            
        content: {
            name          : name.value,
            id            : id.value,
            tel           : tel.value,
            gsm           : gsm.value,
            fax           : fax.value,
            mail          : mail.value,
            vatCode       : vatCode.value,
            remarks       : remarks.value,
            active        : active.value,
            
       },

       load: function(id) {

               if (id !== undefined){
             
                   var tmp = dijit.byId('createWorkplaceId'+ctr);
                   tmp.set("value", id);
                
               }
             
        },
      
        error: function(error) {
               alert(error);
        }
    });
}

function searchWorkplace (){


   var name     = dijit.byId('searchWorkplaceName'+ctr);
   var surname  = dijit.byId('searchWorkplaceSurname'+ctr);
   var id       = dijit.byId('searchWorkplaceId'+ctr);
   var owner    = dijit.byId('searchWorkplaceOwners'+ctr);


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

                  var layoutGeneral    = dijit.byId('generalDataWorkplaceContainer'+ctr);
                  var layoutContact    = dijit.byId('workplaceContactPerson'+ctr);
                  var layoutAdress     = dijit.byId('workplaceAdress'+ctr);
                  var layoutCustomers  = dijit.byId('workplaceCustomer'+ctr);
                
                  layoutGeneral.href  = 'workplace/generalData/'+ctr+'/'+id;
                  layoutGeneral.refresh();

                  layoutContact.href  = 'workplace/contactPerson/'+ctr+'/'+id;
                  layoutContact.refresh();

                  layoutAdress.href  = 'workplace/adress/'+ctr+'/'+id;
                  layoutAdress.refresh();

                  layoutCustomers.href  = 'workplace/customers/'+ctr+'/'+id;
                  layoutCustomers.refresh();

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

                <div data-dojo-type="dijit.layout.TabContainer" data-dojo-props="region: 'top', tabPosition: 'top'" style="height:25%;padding:0"  >
            
                   <div data-dojo-type="dojox.layout.ContentPane" data-dojo-props="region: 'top'" style="height:100%;padding:0" title="<?php echo __('search'); ?>">
                        <div data-dojo-type="dijit.form.Form" id="formSearchWorkplace<?php echo $ctr; ?>" enctype="multipart/form-data" 
                            action="<?php echo URL::site('login/log'); ?>" 
                                method="post">                        
                            <fieldset>
                                <label for="searchWorkplaceId<?php echo $ctr; ?>"><?php echo __('id' ); ?>:</label>
                                <input id="searchWorkplaceId<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" type="text" data-dojo-type="dijit.form.ValidationTextBox" name="id" trim="true" data-dojo-type="dijit.form.ValidationTextBox" >
                
                                <label for="searchWorkplaceName<?php echo $ctr; ?>"><?php echo __('name' ); ?>:</label>
                                <input id="searchWorkplaceName<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;" type="text" data-dojo-type="dijit.form.ValidationTextBox" name="name" trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                 data-dojo-props="" >
                                
                                <label for="searchWorkplaceSurname<?php echo $ctr; ?>"><?php echo __('surname' ); ?>:</label>
                                <input id="searchWorkplaceSurname<?php echo $ctr; ?>" type="text" style="float:left;margin-top :5px;margin-left : 5px;"  data-dojo-type="dijit.form.ValidationTextBox" name="surname" trim="true" data-dojo-type="dijit.form.ValidationTextBox"
                                                        data-dojo-props="" >
                              
                                <br />
                                <br />

                                <label for="searchWorkplaceOwners<?php echo $ctr; ?>"><?php echo __('owners'); ?></label>
                                <select id="searchWorkplaceOwners<?php echo $ctr; ?>" style="float:left;margin-top :5px;margin-left : 5px;"  
                                        data-dojo-type="dijit.form.FilteringSelect">

                                <option value=" "> </option>
                                    
                                <?php foreach($owners as $owner): ?>

                                             <option value="<?php echo $owner['id']; ?>"><?php echo __($owner['name']);?></option>

                                <?php endforeach; ?>
                                </select>
                               

                                <div class="validation">
            
                                    <input name="searchButton" type="button" value="<?php echo __("submit"); ?>" label="<?php echo __("submit"); ?>"  data-dojo-type="dijit.form.Button" 
                                                             data-dojo-props="onClick: searchWorkplace" />
                                    <input type="reset"  value="<?php echo __("cancel"); ?>" label="<?php echo __("cancel"); ?>"  data-dojo-type="dijit.form.Button" />

                                </div>
                                <div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div> 
            <div data-dojo-type="dijit.layout.TabContainer" data-dojo-props="region: 'center', tabPosition: 'top',splitter: true" >
            
                <div id="generalDataWorkplaceContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('workplace/generalData/'.$ctr);?>',preload:true" style="height:100%;padding:0" title="<?php echo __('general_data'); ?>">

                </div>
                <div  id="workplaceAdress<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane"style="height:100%;padding:0" data-dojo-props="href:'<?php echo URL::site('workplace/adress/'.$ctr);?>',preload:true" title="<?php echo __('adress'); ?>">
          
                </div>
                <div  id="workplaceContactPerson<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('workplace/contactPerson/'.$ctr);?>',preload:true" style="height:100%;padding:0" title="<?php echo __('contact_person'); ?>">

                </div> 
                <div  id="workplaceCustomer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('workplace/customers/'.$ctr);?>',preload:true" style="height:100%;padding:0" title="<?php echo __('owners'); ?>">

                </div> 
            </div>  
                 <div data-dojo-type="dojox.layout.ContentPane" data-dojo-props="region: 'bottom'" style="height:10%;padding:0" title="<?php echo __('search'); ?>">

                    <div class="validation">
            
                    <input name="createWorkplace" type="submit" value="<?php echo __("submit"); ?>" label="<?php echo __("submit"); ?>"  data-dojo-type="dijit.form.Button" 
                                                             data-dojo-props="onClick: createWorkplace" />
                    
                    <input type="reset"  value="<?php echo __("cancel"); ?>" label="<?php echo __("cancel"); ?>"  
                                         data-dojo-type="dijit.form.Button" data-dojo-props="onClick: emptyWorkplace" />

                    </div>
                </div>
            </div>

            <div class="dijitHidden">
    
              <div data-dojo-type="dijit.Dialog" style: "width: 80%" data-dojo-props="title:'Ajax Dialog',loadingMessage:'Loading dialog content...'">
                  <div id="result<?php echo $ctr;?>" style="width:70%"></div>
              </div>
            </div>
            
       </body>
</html>