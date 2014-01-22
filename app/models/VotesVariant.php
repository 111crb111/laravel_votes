<?php
    class VotesVariant extends Eloquent {
        public $table = 'votes_variants';

        public static function addVariants($variants,$vote_id){
        	foreach ($variants as $value) {
        		$variant = new VotesVariant();

        		$variant->value = $value;
                $variant->parent_id = $vote_id;

        		$variant->save();
        	}
        }

    }
 