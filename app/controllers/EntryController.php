<?php

class EntryController extends BaseController {

	public function index()
	{
		return View::make('Entries.index');
	}

	public function create()
	{
		$input = Input::all();

		$validator = Validator::make(
        array(
            'mundane'       		 => $input['mundane'],
						'player'         		 => $input['player'],
						'contact type'       => $input['contact'],
						'park'        			 => $input['park'],
						'entry name'         => $input['entry_name'],
						'entry description'  => $input['entry_desc'],
        ),
        array(
					'mundane' 							=> 'required|min:2',
					'player' 								=> 'required|min:2',
					'contact type' 					=> 'required|min:2',
					'park' 									=> 'required|min:2',
					'entry name'						=> 'required|min:2',
					'entry description' 		=> 'required|min:2',
        )
    );

    $messages = $validator->messages();

    if(count($messages) > 0)
      return View::make("Entries.index", array('input' => $input, 'errors' => $messages->all()));



		$entry = new Entry();

		$entry->mundane = $input["mundane"];
		$entry->player = $input["player"];
		$entry->contact = $input["contact"];
		$entry->kingdom = $input["kingdom"];
		$entry->park = $input["park"];
		$entry->awarded = $input["award"];
		$entry->entry_name = $input["entry_name"];
		$entry->entry = $input["entry_desc"];
		$entry->category = $input["category"];
		$entry->upload_choice = $input["upload_choice"];
		$entry->img_link="";
		$entry->save();


		if ($input["upload_choice"] == "Uploaded an image:")
		{
			$file = Input::file('image');

			$name = $entry->player . "-" . $entry->id;
	    $storage = public_path();
	    $path = $storage . '/uploads/';

	    $file->move($path, $name);

			$entry->img_link = $name;
			$entry->save();
		}

		return View::make("Entries.index", array('success' => "Entry has been received! You may now enter another one.", 'input' => $input));


	}

}
