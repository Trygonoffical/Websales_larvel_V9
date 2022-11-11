@extends('layouts.dashboardlayout')
@section('content')
   
<form method="POST" action="{{ route('storeuser') }}" class="w-100 ">
    @csrf
    <div class="row overflow-hidden">
        <div class="col-xxl-10 col-xl-10 col-lg-10 mx-auto mt-20 ">
            
            
            <div class="row gx-3">
                <div class="form-group col-lg-12">
                    <x-jet-label for="name" value="{{ __('Name') }}"  class="form-label"/>
                    <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    
                    {{-- <input class="form-control" placeholder="Enter your name" value="" type="text"> --}}
                </div>
                <div class="form-group col-lg-12">
                    <x-jet-label for="email" value="{{ __('Email') }}"  class="form-label"/>
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                    
                    {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
                </div>
                {{-- <div class="form-group col-lg-12">
                    <label class="form-label">Email</label>
                    <input class="form-control" placeholder="Enter your email id" value="" type="text">
                </div> --}}
                <div class="form-group col-lg-12">
                    <x-jet-label for="password" value="{{ __('Password') }}" class="form-label" />
                    <div class="input-group password-check">
                        <span class="input-affix-wrapper affix-wth-text">
                            {{-- <input class="form-control" placeholder="6+ characters" value="" type="password"> --}}
                            <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />

                            <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                <span>Show</span>
                                <span class="d-none">Hide</span>
                            </a>
                        </span>
                    </div>
                </div>

                <div class="form-group col-lg-12">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="form-label" />

                    <div class="input-group password-check">
                        <span class="input-affix-wrapper affix-wth-text">
                            {{-- <input class="form-control" placeholder="6+ characters" value="" type="password"> --}}
                            <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />


                            {{-- <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                <span>Show</span>
                                <span class="d-none">Hide</span>
                            </a> --}}
                        </span>
                    </div>
                </div>
            </div>
            
            
            <button href="{{ route('storeuser') }}" class="btn btn-primary btn-rounded btn-uppercase  w-4"> {{ __('create user') }}</button>
            
        </div>
    </div>
</form>
<x-jet-validation-errors />



@endsection