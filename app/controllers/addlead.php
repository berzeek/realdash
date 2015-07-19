<?php

class addlead extends BaseController {

	public $restful = true;
	
	public function set_lead {
		$D = (object)Input::all();

		DB::table('leads')->insert(
			array(
				'first_name'=>$D->first_name,
				'last_name'=>$D->last_name,
				'phone'=>$D->phone,
				'zip'=>$D->zip,
				'address'=>$D->address,
				'timestamp'=>time()
			)
		);
		return Response::json(true);	
}
}