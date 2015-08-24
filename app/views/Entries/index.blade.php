@extends('layouts.base')

<?php $section="New Entry"; $title="New Entry"; ?>

@section('content')


@if (is_array($errors))
      <div class="alert alert-danger">
        <h5>There were errors with this information: </h5>
        <ul>
        @foreach ($errors as $error)
          <li>
            {{{ $error }}}
          </li>
        @endforeach
        </ul>
      </div>
  @endif

  @if(isset($success))
      <div class="alert alert-success">
        {{{ $success }}}
      </div>
  @endif

  <section id="" class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>
                  Please be as thorough as possible.
                </h3>
              </div>
            </div>

            <div class="row">
              <div class="text-center">
                <p>
                  Entries for Oylmpiad (Keep on the Borderlands 2015)
                </p>
              </div>
            </div>
<?php $kingdoms = array(
  'Kingdoms' => array("Desert Winds" => "Desert Winds",
                      "Celestial Kingdom" => "Celestial Kingdom",
                      "Iron Mountains" => "Iron Mountains",
                      "Black Spire" => "Black Spire",
                      "Burning Lands" => "Burning Lands",
                      "Crystal Groves" => "Crystal Groves",
                      "Dragonspine" => "Dragonspine",
                      "Goldenvale" => "Goldenvale",
                      "Neverwinter" => "Neverwinter",
                      "Northern Lights" => "Northern Lights",
                      "Rivermoor" => "Rivermoor",
                      "Tal Dagore" => "Tal Dagore",
                      "Emerald Hills" => "Emerald Hills",
                      "Golden Plains" => "Golden Plains",
                      "Rising Winds" => "Rising Winds",
                      "Wetlands" => "Wetlands",
                      "Westmarch" => "Westmarch",
                      "Freehold" => "Freehold"),


  'Principalities' => array("Northreach" => "Northreach",
                  "Souls Crossing" => "Souls Crossing",
                  "Dreadmoor" => "Dreadmoor",
                  "Northern Empire" => "Northern Empire",
                  "Polaris" => "Polaris",
                  "StormHaven" => "StormHaven",
                  "Winters Edge" => "Winters Edge"));
?>

<?php $categories = array(
  'Categories' => array("Art" => "Art",
        "Bardic" => "Bardic",
        "Cooking" => "Cooking",
        "Construction - Active" => "Construction - Active",
        "Construction - Passive" => "Construction - Passive",
        "Compostion" => "Compostion",
        "Garb" => "Garb",
        "Service" => "Service",
        "Other" => "Other"));
?>
            <div class="well" id="form-well">
              <form class="form-horizontal" method="post" action="/entry/create" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-4">
                    <label for="mundane" class="control-label">Mundane Name</label>
                      <input type="name" class="form-control" name="mundane" placeholder="Mundane Name">
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <label for="player" class="control-label">Ork Name</label>
                      <input type="name" class="form-control" name="player" placeholder="Ork Name">
                  </div>
                  <div class="col-xs-12 col-sm-4">
                    <label for="contact" class="control-label">Contact (email/facebook link)</label>
                      <input type="name" class="form-control" name="contact" placeholder="Contact me here">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-xs-12 col-sm-6">
                      <label for="kingdom" class="control-label">Kingdom/ Principality</label>
                      <br>
                        {{ Form::select('kingdom', $kingdoms) }}
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <label for="park" class="control-label">Park</label>
                        <input type="name" class="form-control" name="park">
                    </div>

                  </div>
                  <hr>
                <div class="form-group">
                  <div class="col-xs-12 col-sm-6">
                    <label for="entry_name" class="control-label">Entry name</label>
                      <input type="text" class="form-control" name="entry_name" id="entry_name">
                  </div>

                  <div class="col-xs-12 col-sm-6">
                    <label for="category" class="control-label">Category</label>
                    <br>
                    {{ Form::select('category', $categories) }}

                  </div>

                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      </div>
                    <div class="col-xs-12">
                      <label for="message" class="control-label">Writeup/description</label>
                      <textarea class="form-control" name="entry_desc" id="entry_desc" rows="3"></textarea>
                    </div>
                  </div>
              </div>
              <hr>
              <div class="form-group">
                <div class="col-xs-12 col-sm-6">
                  <label>Was an award received for this?</label><br>
                    <input type="radio" name="award" value="Yes" checked>Yes &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" name="award" value="No">No

                </div>

                <div class="col-xs-12 col-sm-6">
                  <label for=""><strong>To assist the judges, please upload an image of your entry</strong></label>
                  <div class="text-center">
                    {{ Form::file('image') }}
                  </div>
                </div>


              </div>

                </div>
                {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}

              </form>
            </div>
  </section>
@stop
