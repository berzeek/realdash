<?php

class LeadsController extends BaseController {

    public $restful = true;

    public function getIndex() {
      return View::make('dash.dash');
    }

}
