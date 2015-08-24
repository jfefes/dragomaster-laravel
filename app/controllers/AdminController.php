<?php

class AdminController extends BaseController {

	public function index()
	{
		$entries = Entry::get();


		return View::make('Admin.index', array('entries' => $entries));
	}

}
