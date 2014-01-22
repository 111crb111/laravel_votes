//Views

// Global App View

App.Views.App = Backbone.View.extend({
	initialize: function(){
		var addVote = new App.Views.addVote({ collection: App.votes });
	}
});

// Add Vote View

App.Views.addVote = Backbone.View.extend({
	el: '#add_vote_form',
	initialize: function(){
		console.log('INIT');
	},
	events: {
		'submit' : 'add_vote',
		'click #add_variant' : 'add_variant',
		'click .remove_variant' : 'remove_variant',
		'click #add_vote': 'show_form'
	},

	add_vote: function(e){
		e.preventDefault();
		var variants = new Array();

		$('.variant').each(function(){
			variants.push($(this).val());
		});

		this.collection.create({
			name: this.$('#name').val(),
			question: this.$('#question').val(),
			variants: variants
		});

		console.log(this.collection);
	},
	add_variant: function(){
		console.log('add_variant');
		var variant_template = '<div><input type="text" class="variant"><span class="remove_variant icon-remove-sign"></span></div>';
		$(variant_template).appendTo('#variants');
	},
	remove_variant: function(e){
		e.target.parentNode.remove();
	},
	show_form: function(){
		$("add_vote").modal();
	}
});