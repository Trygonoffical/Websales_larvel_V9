<div>
   
<div class="card-body">
    <div class="contact-list-view">
        <table id="datable_1" class="table nowrap w-100 mb-5">
            <thead>
                <tr>
                    <th><span class="form-check fs-6 mb-0">
                        <input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
                        <label class="form-check-label" for="customCheck1"></label>
                    </span></th>
                    <th>Name</th>
                    <th class="w-25">Email</th>
                    <th>Join Date</th>
                    <th>Is Admin</th>
                    <th></th>
                </tr>
                
            </thead>
            <tbody>
                @if (count($users) > 0)
                @foreach ($users as $user)
                    
                

                    
                
                <tr>
                    <td>
                    </td>
                    <td>
                        <div class="media align-items-center">
                            <div class="media-head me-2">
                                <div class="avatar avatar-xs avatar-rounded">
                                    <img src="{{ asset('dist/img/logo-avatar-1.png') }}" alt="user" class="avatar-img">
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="text-high-em text-uppercase">{{$user->name}} </div> 
                                <div class="fs-7"><a href="#" class="table-link-text link-medium-em"></a></div> 
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="progress-lb-wrap">
                            <div class="d-flex align-items-center">
                                
                                    <div class="text-high-em">{{$user->email}} </div>  
                                
                               
                            </div>
                        </div>
                    </td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <span class="badge badge-soft-secondary  my-1  me-2"> {{$user->role}}</span>
                        <span class="badge badge-soft-secondary my-1  me-2">{{$user->id}}</span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#"><span class="icon"><span class="feather-icon"><i data-feather="edit-2"></i></span></span></a>
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#"><span class="icon"><span class="feather-icon"><i data-feather="trash"></i></span></span></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
                
            </tbody>
        </table>
    </div>
</div>
</div>