new App.Router();
Backbone.history.start();


App.votes = new App.Collections.Votes();
App.votes.fetch().then(function(){
	new App.Views.App({ collection: App.votes });
});

//add_vote  btn