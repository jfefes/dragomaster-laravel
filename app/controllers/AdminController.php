<?php

class AdminController extends BaseController {

	public function index()
	{
		$entries = Entry::get();

		return View::make('Admin.index', array('entries' => $entries));
	}

	public function export(){
		$query = Entry::select('mundane', 'player', 'kingdom', 'contact', 'entry_name', 'awarded', 'category', 'entry', 'img_link')->get();

		$output='';

		foreach($query as $entry){
			$entry->img_link = "http://olympiad.amtgard.io/uploads/" . $entry->img_link;

			 $entry->entry = str_replace(' ', '-', $entry->entry);
				$entry->entry = preg_replace('/[^A-Za-z0-9.\-]/', '', $entry->entry);
 				$entry->entry = str_replace('-', ' ', $entry->entry);

				$entry->entry_name = str_replace(' ', '-', $entry->entry_name);
 				$entry->entry_name = preg_replace('/[^A-Za-z0-9.\-]/', '', $entry->entry_name);
  				$entry->entry_name = str_replace('-', ' ', $entry->entry_name);


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
