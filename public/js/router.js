//router

App.Router = Backbone.Router.extend({
	routes: {
		'': 'index',
		'addvote': 'addvote'
	},
	index: function(){
		$('#page_content > *').hide();
		$('#index_content').show();
	},
	addvote: function(){
		var template = _.template($('#addvote_tpl').html());
		$('#page_content > *').hide();
		$('#page_content').append(template());

	}
});