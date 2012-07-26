(function (){

  define(["dojo/_base/declare"]);

  var dataToFetch = [];

  dojo.declare("retrieveData", null, {
  
  	constructor: function(args,search){
       
       dataToFetch = [];
    	 args.fetch({onItem:this._save, onError : this._failed, query : search });
  	},

   _save : function (item){
  
          dataToFetch.push(item);
  	},

  	_failed : function (){

    	  dataToFetch = [];
  	},

  	 getData : function (){

          return dataToFetch;
     }
  });

})();