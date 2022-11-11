@extends('layouts.dashboardlayout')


@section('content')

<div class="form-group col-lg-12">
    <form  id="productform" action="" method="post">
        @csrf
        {{-- <x-jet-label for="name" value="{{ __('Product_Name') }}"  class="form-label"/> --}}
        <div class="input-group">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Product Name" name='P_name'>
                <div class="input-group-append">
                  <button class="btn btn-success" type="submit">Add</button>  
                 </div>
              </div>
        </div>
    </form>
</div>
<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
@csrf

<div class="col-xxl-10 mt-20 col-xl-10 col-lg-10 mx-auto ">
    <div class="form-group col-lg-2 text-center">
        OR
    </div>
            
    <div class="row gx-3">
        <div class="form-group col-lg-12">
            <x-jet-label for="name" value="{{ __('Product_Name') }}"  class="form-label"/>
            {{-- <x-jet-input id="name" class="form-control" type="text" name="Product_Name"  required autofocus autocomplete="Product_Name" /> --}}


            <div class="mb-3 xl:w-96">
                <select id="proval" name="Product_Name" class="form-select appearance-none
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding bg-no-repeat
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">

                  @if ($productList)
                    
                  <option  selected>Open this select menu</option>
                @foreach ($productList as $item)
                
                     <option value="{{$item->id}}">{{$item->Product_Name}}</option>
                    
                    @endforeach
                @endif
                </select>
              </div>






            
            {{-- <input class="form-control" placeholder="Enter your name" value="" type="text"> --}}
        
        </div>
        
        
        <div class="form-group col-lg-12">
            <x-jet-label for="Category" value="{{ __('Product_Code') }}"  class="form-label"/>
            <x-jet-input id="Category" class="form-control" type="text" name="Product_Code" required />
            
            {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
        </div>
        {{-- <div class="form-group col-lg-12">
            <label class="form-label">Email</label>
            <input class="form-control" placeholder="Enter your email id" value="" type="text">
        </div> --}}

        <div class="form-group col-lg-12">
            <x-jet-label for="email" value="{{ __('Description') }}"  class="form-label"/>
            <x-jet-input id="email" class="form-control" type="text" name="Description"  required />
            
            {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
        </div>
        

        <div class="form-group col-lg-12">
            <x-jet-label for="password_confirmation" value="{{ __('How_Many_In_Bundle') }}" class="form-label" />

            <div class="input-group password-check">
                <span class="input-affix-wrapper affix-wth-text">
                    {{-- <input class="form-control" placeholder="6+ characters" value="" type="password"> --}}
                    <x-jet-input id="password_confirmation" class="form-control" type="text" name="How_Many_In_Bundle" required  />


                    {{-- <a href="#" class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                        <span>Show</span>
                        <span class="d-none">Hide</span>
                    </a> --}}
                </span>
            </div>
        </div>


        <div class="form-group col-lg-12">
            <x-jet-label for="price" value="{{ __('Price(CAD)') }}"  class="form-label"/>
            <x-jet-input id="price" class="form-control" type="text" name="Price_CAD"  required />
            
            {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
        </div>
        
        <div class="form-group col-lg-12">
            <x-jet-label for="email" value="{{ __('Product_Image') }}"  class="form-label"/>
            <x-jet-input id="email" class="form-control" type="file" name="Product_Image"  required />
            
            {{-- <input class="form-control" placeholder="Enter username" value="" type="text"> --}}
        </div>

    </div>
    
    
    <button href="#" class="btn btn-primary btn-rounded btn-uppercase  w-4"> {{ __('Create Product') }}</button>
    
</div>

</form>
    



@endsection