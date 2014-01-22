<?php
	class Vote extends Eloquent {
		public $table = 'votes';
		//public static $timestamps = false;
		
		public static function createVote($input){
			$vote = new Vote();

			$vote->name = $input->name;
			$vote->question = $input->question;

			$vote->save();

			return $vote->id;	
		}
	}
 