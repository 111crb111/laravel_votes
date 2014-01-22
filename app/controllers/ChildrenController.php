<?php

	class ChildrenController extends BaseController{

		
		public function show($id){
			return json_encode(Children::find($id));
		}
	
	
	}
