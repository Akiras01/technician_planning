
<script>
	require([
			"dojo/ready",
			"dojo/parser",
			"dijit/form/ValidationTextBox",
			"dojo/on", 
			"dojo/dom",
			"dojo/_base/lang",
			"dijit/form/Form",
			"dijit/form/Button"
		],function(ready,parser,ValidationTextBox,on,dom,lang,Form,Button){

		 dojo.addOnLoad(function(){

		 	ready(function(){

		 		parser.parse();

				var form = dojo.byId("myForm");
				  on(form, "submit", function (){
		    		if(!(dijit.byId("myForm").validate())){
					
					  alert('Form contains invalid data.  Please correct first');
					  return false;
					}
					return true;

		 		 });
			});
		 })	;
		});
	</script>
</head>
<body class="claro">
	<div data-dojo-type="dijit.form.Form" id="myForm" enctype="multipart/form-data" 
	      action="<?php echo URL::site('login/log'); ?>" 
			method="post">
		<table style="border: 1px solid #9f9f9f;" cellspacing="10">
			<tr>
				<td>
					<label for="login"><?php echo __('login' ); ?>:</label>
				</td>
				<td>
					<input type="text" id="login" dojo-data-id="login" data-dojo-type="dijit.form.ValidationTextBox" name="login" trim="true" id="login" data-dojo-type="dijit.form.ValidationTextBox" data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'" ></input>
				</td>
			</tr>
			<tr>
				<td>
					<label for="passwd"><?php echo __('password' ); ?>:</label>
				</td>
				<td>
					<input type="password" dojo-data-id="passwd" id="passwd" trim="true" name="passwd" data-dojo-type="dijit.form.ValidationTextBox"
							data-dojo-props="required:true, invalidMessage:'Invalid Non-Space Text.'" ></input>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Submit Form" label="Submit Form" id="submitButton" dojoType="dijit.form.Button" /></td>
			</tr>
		</table>
	</div>
	<p><?php echo (isset($errors) ? $errors : ''); ?></p>
</body>
</html>