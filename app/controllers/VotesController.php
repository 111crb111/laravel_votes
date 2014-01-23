<?php

	class VotesController extends BaseController{

		
		public function getVotes(){
			$fetched_votes = Vote::getAllVotes();
			return $fetched_votes;
		}
		public function createVote(){
			
			$input = Input::all();
			// превращаем в нормальный обьект
			$input = json_encode($input);
			$input = json_decode($input);

			$id = Vote::createVote($input);
			VotesVariant::addVariants($input->variants, $id);

			//return $input->variants;
			//return print_r($input);
			// json_decode(in)
			// VotesChoices::create(array(
			// 		''
			// 	));

		}
	}
