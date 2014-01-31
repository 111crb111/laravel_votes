<?php

	class VotesController extends BaseController{

		
		public function getVotes(){

			$input = Input::all();
			if($input){
				$input = json_encode($input);
				$input = json_decode($input);
				if($input->limit){
						$fetched_votes = Vote::getVotes($input->limit);
				}
				return $fetched_votes;		
			}

			$fetched_votes = Vote::getVotes();
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
