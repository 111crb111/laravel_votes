//Collections

App.Collections.Votes = Backbone.Collection.extend({
	model: App.Models.Vote,
	url: 'votes'
});