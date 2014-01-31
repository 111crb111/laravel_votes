//router

App.Router = Backbone.Router.extend({
	routes: {
		'': 'index',
		'addvote': 'addvote'
	},
	index: function(){
		App.initialize_collection();
		
		$('#page_content > *').hide();
		$('#index_content').show();

		App.Napolnity_colekciyu(1,2);
	},
	addvote: function(){
		App.initialize_collection();

		var template = _.template($('#addvote_tpl').html());
		$('#page_content > *').hide();
		$('#page_content').append(template());

	}
});