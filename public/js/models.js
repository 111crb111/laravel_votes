//Models

App.Models.Vote = Backbone.Model.extend({
	//validate
	validate: function(attrs){
		function showError(){
			var errorDiw = $('#add_vote_error');

			errorDiw.slideDown();

			$(errorDiw).find('.close').one('click', function(){
				errorDiw.slideUp();
			})
		}
		function showSuccess(){
			var successDiw = $('#add_vote_success');

			successDiw.slideDown();

			$(successDiw).find('.close').one('click', function(){
				successDiw.slideUp();
			})
		}
		function chekVariants(){
			var answer = true;
			$('.variant').each(function(){
				if($(this).val() == ''){
					console.log('false');
					answer = false;
					return;
				}
			});
			return answer;
		}
		if ( ! attrs.name || ! attrs.question || ! chekVariants()) {
			showError();
			return "errorrrrr";
		}else{
			showSuccess();
			console.log('Uspeh');
		}
	}
});