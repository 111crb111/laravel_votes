//router

App.Router = Backbone.Router.extend({
	routes: {
		'': 'index',
		'addvote': 'addvote',
		'votes': 'votes',
	},
	index: function(){
		App.initialize_collection();
		console.log('index_ROUTE');
		
		$('#page_content > *').hide();
		//$('section#index_page').show();
	},
	addvote: function(){
		App.initialize_collection();
		console.log('addvote_ROUTE');

		$('#page_content > *').hide();
		$('section#addvote_tpl').show();

	},
	votes: function(){
		App.initialize_collection();

		console.log('votes_ROUTE');

		$('#page_content > *').hide();
		$('#votes_page').show()

	}
});