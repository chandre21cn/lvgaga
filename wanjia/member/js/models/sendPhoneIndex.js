
define(['backbone'],function(Backbone){
	var model = Backbone.Model.extend({
	    urlRoot : '/sendPhone',
	    parse : function(data){
	      this.id = null;
	      return data;
	    }
	});
	return model;
});