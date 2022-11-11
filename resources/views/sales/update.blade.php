@extends('layouts.dashboardlayout')
@section('content')

<div class="mt-20 mx-auto">
<form action="{{ url('user/'.$user->id ) }}" method="post">
    @csrf
    @method('PUT')
<div class="form-group col-lg-12">
    <x-jet-label for="name" value="{{ __('Name') }}"  class="form-label"/>
    <x-jet-input id="name" class="form-control" type="text" name="name" value="{{$user->name}}" required autofocus autocomplete="name" />
    
    {{-- <input class="form-control" placeholder="Enter your name" value="" type="text"> --}}
</div>
<div class="form-group col-lg-12">
    <x-jet-label for="name" value="{{ __('Email') }}"  class="form-label"/>
    <x-jet-input id="name" class="form-control" type="email" name="email" value="{{$user->email}}" required autofocus autocomplete="email" />
    
    {{-- <input class="form-control" placeholder="Enter your name" value="" type="text"> --}}
</div>
<div class="form-group col-lg-12">
    <x-jet-label for="name" value="{{ __('Password') }}"  class="form-label"/>
    <x-jet-input id="name" class="form-control" type="text" name="password"  autofocus  />
    
    {{-- <input class="form-control" placeholder="Enter your name" value="" type="text"> --}}

    <button href="#" class="btn btn-primary btn-rounded btn-uppercase my-2 w-4"> {{ __('Update user') }}</button>
    
</div>
</form>
</div>

@endsection