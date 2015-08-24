@extends('layouts.base')

<?php $section="Admin"; $title="Admin"; ?>

@section('content')


<div class="well">
  <a href="/admin/export" class="btn btn-primary">Export all Entries</a>
</div>



@foreach($entries as $entry)
  <div class="well">
    <div class="row">
      <div class="col-sm-4">
        Entrant: <strong>{{$entry->mundane}}</strong> <br>
        Persona: <strong>{{$entry->player }}</strong> <br>
        <br>
        Residing Kingdom: <strong>{{$entry->kingdom }}</strong> <br>
        Park: <strong>{{$entry->park }}</strong> <br>
        <br>
        Contact info: <strong>{{$entry->contact }}</strong>
      </div>

      <div class="col-sm-4">
        Entry name: <strong>{{$entry->entry_name }} </strong> <br>
        Previously awarded? <strong>{{$entry->awarded }}</strong> <br>
        Category: <strong>{{$entry->category }}</strong> <br>
        Description: <strong>{{$entry->entry }}</strong>
      </div>

      <div class="col-sm-4">
        <strong>{{$entry->upload_choice }}</strong>

        <a href="/uploads/{{$entry->img_link }}" target="_blank"> <img src="/uploads/{{$entry->img_link }}" alt="" /> </a>

      </div>
    </div>

  </div>
@endforeach

@stop
