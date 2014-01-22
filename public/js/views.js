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
	toggleDelBtn: function(){
			var remove_icons = $('.remove_variant');
			if(remove_icons.length > 2){
				remove_icons.removeClass('hide');
			}
			else {
				remove_icons.addClass('hide');
			}

	},
	add_variant: function(){
		var variant_counter = $('.variant').length + 1;
		var variant_template = '<div class="input-append"><div><input type="text" class="variant" placeholder="Вариант ' + variant_counter + '"><button class="btn hide remove_variant"><span class="icon-remove-sign"></span></button></div></div>';
		$(variant_template).appendTo('#variants');

		this.toggleDelBtn();
	},
	remove_variant: function(e){
		e.target.parentNode.remove();
		this.toggleDelBtn();
	},
	show_form: function(){
		$("add_vote").modal();
	}
});