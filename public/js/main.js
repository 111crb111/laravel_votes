(function(){
	window.App = {
		Models: {},
		Collections: {},
		Views: {},
		Router: {},
		votes_table: {
			start_lines_amount: (function(){
				var body_h = $('body').height();
				var tr_h = $('tr').height();
				
				var lines = Math.round(((body_h*70)/100)/tr_h);

				return lines;
			})(),
		},
		initialize_collection: function(){
			if( ! App.votes){
				App.votes = new App.Collections.Votes();
				App.votes.fetch({data:{
					limit: App.votes_table.start_lines_amount,
				}}).then(function(){
					new App.Views.App({ collection: App.votes });
				});
			}
		}
	}

	window.vent = _.extend({}, Backbone.Events);
}());
