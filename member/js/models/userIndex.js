
define(['backbone'],function(Backbone){
	var model = Backbone.Model.extend({
	    urlRoot : '/user',
	    parse : function(data){
	    	if (data.id){
	    		this.id = data.id;
	    	}
	      return data;
	    },
	    validate : function(attrs,options){
	    }
	    // Domain-specific methods go here
	});
	return model;
});