<?php

class LeadsController extends BaseController {

    public $restful = true;

    public function get_index() {
      return View::make('admin.index');
    }

}
