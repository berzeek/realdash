<?php

class DashController extends BaseController {

	public $restful = true;

  public function get_index() {
    return View::make('dash.dash', array(
    'user'=>DB::query("SELECT * FROM users;")));
  }

}
