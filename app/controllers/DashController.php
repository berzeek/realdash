<?php

class DashController extends BaseController {

	public $restful = true;

  public function getDash() {
		if (Auth::check()) {
			return View::make('dash.dash', array(
	    'user'=>DB::query("SELECT * FROM users;")));
		}
  }
}
