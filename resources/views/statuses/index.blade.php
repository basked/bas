@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="fade-in">
               @livewire('check-statuses',['statuses'=>$statuses])
        </div>
    </div>
@endsection
