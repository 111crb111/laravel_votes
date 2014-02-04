//Views

// Global App View

App.Views.App = Backbone.View.extend({
	initialize: function(){
		var addVote = new App.Views.addVote({ collection: App.votes });

		var allVotes = new App.Views.Votes({ collection: App.votes }).render();

		$('#votes_table').append(allVotes.el);
	}
});

// allVotes View

App.Views.Votes = Backbone.View.extend({
	tagName: 'tbody',

	render: function(){
		this.collection.each(this.addOne, this);

		return this;
	},
	addOne: function(vote){
		var singleVote = new App.Views.Vote({ model: vote });
		this.$el.append( singleVote.render().el );
	}
});

// Single Vote View

App.Views.Vote = Backbone.View.extend({
	tagName: 'tr',
	template: _.template($('#votes_tr_tpl').html()),

	render: function(){
		this.$el.html( this.template( this.model.toJSON() ) );
		return this;
	}
});

// AddVote View

App.Views.addVote = Backbone.View.extend({
	el: '#add_vote_form',
	initialize: function(){
		console.log(this.el);
	},
	events: {
		'submit' : 'add_vote',
		'click #add_variant' : 'add_variant',
		'click .remove_variant' : 'remove_variant',
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
		console.log('add_variant_btn_click');
		var variant_counter = $('.variant').length + 1;
		var variant_template = '<div class="input-append"><div><input type="text" class="variant" placeholder="Вариант ' + variant_counter + '"><button class="btn hide remove_variant"><span class="icon-remove-sign"></span></button></div></div>';
		$(variant_template).appendTo('#variants');

		this.toggleDelBtn();
	},
	remove_variant: function(e){
		e.target.parentNode.remove();
		this.toggleDelBtn();
	},
});
