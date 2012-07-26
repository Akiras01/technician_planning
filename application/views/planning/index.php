		<style>


#appLayout {
    height: 100%;
    background: #FFFFFF;
	color: #333333;
}
#leftCol {
    width: 14em;
    background: #FFFFFF;
	color: #333333;
}



		</style>

		<script>

			require(["dojo/ready","dijit/layout/BorderContainer", "dijit/layout/ContentPane",
					 "dijit/layout/TabContainer",
					 "dojo/parser","dijit/Menu", "dijit/MenuItem","dijit/MenuBar","dijit/PopupMenuBarItem",
					"dijit/DropDownMenu","dojox/layout/ContentPane"],

					function(ready, BorderContainer,ContentPane,TabContainer,parser,Menu,MenuItemMenuBar,PopupMenuBarItem,
							DropDownMenu){

							dojo.addOnLoad(function(){
  								ready(function(){
    									parser.parse();
  								});
  							});
			});

			var id = 0;
	
			function redirectionMenuItem (dijitComponent){

				++ id;
		
				var key    = dijitComponent.title;
				var unique = key + id;
				var label  = dijitComponent.label;

				var uniqueFrame = key + "/"+ id;
               

				var tabs = dijit.byId("planning");
				var pane = new dojox.layout.ContentPane({ id:unique, title:label, style:"height:100%;padding:0",doLayout:true, 
														  closable:true , preload:true,href:'<?php echo URL::site("'+uniqueFrame+'"); ?>' });
					tabs.addChild(pane);
					tabs.selectChild(pane);
			
			}

			function technicianClick (dijitComponent){
	
				++ id;

				var tabs 		= dijit.byId("planning");
				var technician  = dijitComponent.title;
				var layout      = dijit.byId('planningToShow');
				var redirection = id+"/"+technician;

				layout.href  = '<?php echo URL::site("planning/show/'+redirection+'"); ?>';
				layout.refresh();

				tabs.selectChild(layout);


			}
		</script>
	</head>
	<body class="claro">
		<div id="appLayout" data-dojo-type="dijit.layout.BorderContainer" >	
			<div id="topPanel" name="topPanel" data-dojo-type="dijit.layout.ContentPane" data-dojo-props="region: 'top',splitter: true" >    
	   			   <div data-dojo-type="dijit.MenuBar" id="navMenu" >
	   			   	<?php  $menus =  Cache::instance()->get('menus'); i18n::lang(Cache::instance()->get('lang'));?>
	  			    <?php foreach ($menus as $label => $columns): ?>			   	
    					<div data-dojo-type="dijit.PopupMenuBarItem">
        					<span><?php echo __($label); ?></span>
                				 <div data-dojo-type="dijit.DropDownMenu" id="<?php echo $label; ?>" >
        							 <?php foreach ($columns as $column): ?>
        								 <?php $column = unserialize($column);?>
            							<div data-dojo-type="dijit.MenuItem"  data-dojo-props="title:'<?php echo ($column->screen_label); ?>', onClick:function(){redirectionMenuItem(this)}">
            							<?php echo __($column->screen_label); ?>
           								</div>
        							<?php endforeach; ?>
        	       				</div>
            			</div>
    				<?php endforeach; ?>
				 </div> 
			</div>
			<div id="center" class="center"	data-dojo-type="dijit.layout.BorderContainer" data-dojo-props="region: 'center'" > 
		
					<div  data-dojo-type="dijit.layout.ContentPane" data-dojo-props="region: 'left',splitter: true" >
					<div id="technician" name="technician"  data-dojo-type="dijit.Menu" >
						<?php foreach($technicians as $technician): ?>
			            	<div data-dojo-type="dijit.MenuItem" data-dojo-props="title:'<?php echo $technician['tech_id']; ?>', onClick:function(){technicianClick(this)}" >
			                	<?php echo $technician['tech_name'].' '.$technician['tech_surname']; ?>
			            	</div>
						<?php endforeach;?>
			 		</div>
			    </div>

			  <div id="planning" name="planning" class="centerPanel" data-dojo-type="dijit.layout.TabContainer" data-dojo-props="region: 'center', tabPosition: 'bottom',splitter: true" >
			
				<div data-dojo-type="dojox.layout.ContentPane" id="planningToShow" style="height:100%;width:100%;padding:0" title="<?php echo __('schedule'); ?>">
					<h4></h4>
				</div>	
 			</div>	
		</div>
 </div>	
	<p><?php echo (isset($errors) ? $errors : ''); ?></p> 

</body>
</html>
	