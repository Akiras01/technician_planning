<?php $ctr = isset($ctr) && !empty($ctr) ? $ctr : ''; ?>
<link rel="stylesheet" href="<?php echo url::base(FALSE).'media/js/dojo/dojox/grid/resources/claroGrid.css'; ?>"/>
<script>

var ctr = '<?php echo $ctr; ?>';
var gridResult   = null;
var frameCustomer       = null;
var storeAdress  = null;
var storeContact = null;
require(["dojo/parser","dojo/behavior","dojo/on","dijit/layout/AccordionContainer","dijit/layout/BorderContainer", "dojo/_base/xhr","dojo/query",
"dojo/store/Memory","dojo/data/ObjectStore", "dijit/layout/ContentPane", "dojo/ready","dijit/layout/TabContainer","dojox/grid/DataGrid","dijit/form/ComboBox","dijit/form/CheckBox",
"dojo/data/ItemFileReadStore","dijit/form/FilteringSelect","dijit/Dialog","dojo/create","dojo/connect","dojo/data/ItemFileWriteStore","dojox/grid/cells/Select",
"dijit/form/ValidationTextBox","dojox/layout/ContentPane", "dojo/dom","dojo/_base/lang","dijit/form/Form","dijit/form/Button","dijit/form/Textarea",
"classes/Data/retrieveData"]);


function emptyCustomer (){

    var node =  dijit.byId('createCustomerForm'+ctr);
    node.reset();
}


function createCustomer(){

    
   var id            = dijit.byId('createCustomerId'+ctr);
   var name          = dijit.byId('createCustomerName'+ctr);
   var surname       = dijit.byId('createCustomerSurname'+ctr);
   var tel           = dijit.byId('createCustomerTel'+ctr);
   var gsm           = dijit.byId('createCustomerGsm'+ctr);
   var fax           = dijit.byId('createCustomerFax'+ctr);
   var mail          = dijit.byId('createCustomerMail'+ctr);
   var activity      = dijit.byId('createActivityCustomer'+ctr);
   var liable        = dijit.byId('createCustomerLiable'+ctr);
   var active        = dijit.byId('createCustomerActive'+ctr);
   var vatCode       = dijit.byId('createVatCode'+ctr);
   var badBuyer      = dijit.byId('createCustomerBadBuyer'+ctr);
   var domiciliation = dijit.byId('createCustomerDomiciliationNumber'+ctr);
   var accountNumber = dijit.byId('createCustomerAccountNumber'+ctr);
   var reprieve      = dijit.byId('createCustomerReprieve'+ctr);
   var discount       = dijit.byId('createCustomerDiscount'+ctr);
   var discountReason = dijit.byId('createCustomerDiscountReason'+ctr);
   var remarks        = dijit.byId('createCustomerRemarks'+ctr);
   var vatNumber      = dijit.byId('createCustomerVatNumber'+ctr);

   var AdressToSave  = new retrieveData(storeAdress);

   var test = AdressToSave.getData();


   for(var ctr = 0; ctr < test.length; ctr ++){
         for (key in test[ctr]){
            alert('key ' + test[ctr][key]);
      }
   }

  

    dojo.xhr.post({
    
        url: "customer/create/"+ctr,
        handleAs: "json",
            
        content: {
            name          : name.value,
            surname       : surname.value,
            id            : id.value,
            activity      : activity.value,
            tel           : tel.value,
            gsm           : gsm.value,
            fax           : fax.value,
            mail          : mail.value,
            liable        : liable.value,
            vatCode       : vatCode.value,
            badBuyer      : badBuyer.value,
            domiciliation : domiciliation.value,
            accountNumber : accountNumber.value,
            reprieve      : reprieve.value,
            discount      : discount.value,
            discountReason : discountReason.value,
            remarks       : remarks.value,
            vatNumber     : vatNumber.value,
            active        : active.value,
 

            
       },

       load: function(id) {

               if (id !== undefined){
             
                   var tmp = dijit.byId('createCustomerId'+ctr);
                   tmp.set("value", id);
                
               }
             
        },
      
        error: function(error) {
               alert(error);
        }
    });
}

function searchCustomer (){


   var name     = dijit.byId('searchCustomerName'+ctr);
   var surname  = dijit.byId('searchCustomerSurname'+ctr);
   var id       = dijit.byId('searchCustomerId'+ctr);
   var activity = dijit.byId('searchCustomerActivy'+ctr);


   frameCustomer = frameCustomer || new dijit.Dialog({
                          title: "result",
                          style: "width: 80%",
                          content: dojo.byId("result"+ctr)}); 
   

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

                  var layoutGeneral   = dijit.byId('generalDataCustomerContainer'+ctr);
                  var layoutContact   = dijit.byId('customerContactPerson'+ctr);
                  var layoutAdress     = dijit.byId('customerAdress'+ctr);
                
                  layoutGeneral.href  = 'customer/generalData/'+ctr+'/'+id;
                  layoutGeneral.refresh();

                  layoutContact.href  = 'customer/contactPerson/'+ctr+'/'+id;
                  layoutContact.refresh();

                  layoutAdress.href  = 'customer/adress/'+ctr+'/'+id;
                  layoutAdress.refresh();

                  frameCustomer.hide();

                
		        		 });
            }
       
            frameCustomer.show();

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
                        <div data-dojo-type="dijit.form.Form" id="formSearchCustomer<?php echo $ctr; ?>" enctype="multipart/form-data" 
                            action="<?php echo URL::site('login/log'); ?>" 
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
                </div> 
            <div data-dojo-type="dijit.layout.TabContainer" data-dojo-props="region: 'center', tabPosition: 'top',splitter: true" >
            
                <div id="generalDataCustomerContainer<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('customer/generalData/'.$ctr);?>',preload:true" style="height:100%;padding:0" title="<?php echo __('general_data'); ?>">

                </div>
                <div  id="customerAdress<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane"style="height:100%;padding:0" data-dojo-props="href:'<?php echo URL::site('customer/adress/'.$ctr);?>',preload:true" title="<?php echo __('adress'); ?>">
          
                </div>
                <div  id="customerContactPerson<?php echo $ctr; ?>" data-dojo-type="dojox.layout.ContentPane" data-dojo-props="href:'<?php echo URL::site('customer/contactPerson/'.$ctr);?>',preload:true" style="height:100%;padding:0" title="<?php echo __('contact_person'); ?>">

                </div> 
            
            </div>  
                 <div data-dojo-type="dojox.layout.ContentPane" data-dojo-props="region: 'bottom'" style="height:10%;padding:0" title="<?php echo __('search'); ?>">

                    <div class="validation">
            
                    <input name="createCustomer" type="submit" value="<?php echo __("submit"); ?>" label="<?php echo __("submit"); ?>"  data-dojo-type="dijit.form.Button" 
                                                             data-dojo-props="onClick: createCustomer" />
                    
                    <input type="reset"  value="<?php echo __("cancel"); ?>" label="<?php echo __("cancel"); ?>"  
                                         data-dojo-type="dijit.form.Button" data-dojo-props="onClick: emptyCustomer" />

                    </div>
                </div>
            </div>
            <div class="dijitHidden">
    
              <div data-dojo-type="dijit.Dialog" style: "width: 80%" data-dojo-props="title:'Ajax Dialog',loadingMessage:'Loading dialog content...'">
                  <div id="result<?php echo $ctr;?>" style="width:70%"></div>
              </div>
            </div>
            
       </body>
       <script>

       </script>
</html>