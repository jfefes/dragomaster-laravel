<?php

class AmyController extends BaseController {

  protected $layout = 'layouts.base';

  public function index()
  {
    return View::make("amy");
  }

}
