<?php

class AdminController extends BaseController {

	public function index()
	{
		$entries = Entry::get();

		
		return View::make('admin.index', array('entries' => $entries));
	}

}
