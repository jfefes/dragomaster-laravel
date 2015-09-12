<?php

class AdminController extends BaseController {

	public function index()
	{
		$entries = Entry::get();

		return View::make('Admin.index', array('entries' => $entries));
	}

	public function export(){
		$query = Entry::select('mundane', 'player', 'kingdom', 'contact', 'entry_name', 'awarded', 'category', 'entry')->get();

		$output='';

		foreach($query as $entry){
				$entry->entry = str_replace(',', '', $entry->entry);
				$entry = json_decode(json_encode($entry), true);

				$output.=  implode(',', $entry);

				$output.= "\n";
		}

		$headers = array(
      'Content-Type' => 'text/csv',
      'Content-Disposition' => 'attachment; filename=' ."export.csv",
  	);

		return Response::make(rtrim($output, "\n"), 200, $headers);
	}

}
