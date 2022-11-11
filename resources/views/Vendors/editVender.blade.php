@extends('layouts.dashboardlayout')

@section('content')

<form action="{{ route('vendor.update',['vendor'=>$vendor->id]) }}" method="post">
    @csrf
    @method('PUT')
    
    <div class="col-xxl-10 col-xl-10 col-lg-10 mx-auto  mt-20">
                
                
        <div class="row gx-3">
            {{-- <div class="form-group col-lg-6">
                <x-jet-label for="name" value="{{ __('Name') }}"  class="form-label"/>
                <x-jet-input id="name" class="form-control" type="text" name="Name" value="{{$product->Name}} "  required autofocus autocomplete="name" />
                
            </div>
            <div class="form-group col-lg-6">
                <x-jet-label for="category" value="{{ __('Category') }}"  class="form-label"/>
                <x-jet-input id="category" class="form-control" type="text" name="Category" value="{{$product->Category}} "  required />
                
            </div> --}}
            {{-- <div class="form-group col-lg-12">
                <label class="form-label">Email</label>
                <input class="form-control" placeholder="Enter your email id" value="" type="text">
            </div> --}}
    
            <div class="form-group col-lg-12">
                <x-jet-label for="email" value="{{ __('Campony_Name') }}"  class="form-label"/>
                <x-jet-input id="email" class="form-control" type="text" name="Campany_Name" value="{{$vendor->Campany_Name}} "  required />
                
                {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
            </div>
            
    
            <div class="form-group col-lg-12">
                <x-jet-label for="password_confirmation" value="{{ __('Address') }}" class="form-label" />
    
                <div class="input-group password-check">
                    <span class="input-affix-wrapper affix-wth-text">
                        {{-- <input class="form-control" placeholder="6+ characters" value="" type="password"> --}}
                        <x-jet-input id="password_confirmation" class="form-control" type="text" name="Address" value="{{$vendor->Address}} " required  />
    
    
                        {{-- <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                            <span>Show</span>
                            <span class="d-none">Hide</span>
                        </a> --}}
                    </span>
                </div>
            </div>
    
    
            <div class="form-group col-lg-12">
                <x-jet-label for="price" value="{{ __('GST_NO') }}"  class="form-label"/>
                <x-jet-input id="price" class="form-control" type="text" name="GST_NO" value="{{$vendor->GST_NO}} "  required />
                
                {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
            </div>
            
            <div class="form-group col-lg-12">
                <x-jet-label for="email" value="{{ __('Mobile') }}"  class="form-label"/>
                <x-jet-input id="email" class="form-control" type="text" name="Mobile"  value="{{$vendor->Mobile}} " required />
                
                {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
            </div>
    
        </div>
        
        
        <button href="#" class="btn btn-primary btn-rounded btn-uppercase  w-4"> {{ __('Update Vendor') }}</button>
        
    </div>
    
    </form>

    
@endsection