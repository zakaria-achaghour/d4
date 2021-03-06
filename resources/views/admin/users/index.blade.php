@extends('layouts.dashboard.designe')

@section('content')

           <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">{{__('Users')}}</h4>
                        <div class="ml-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dash') }}">{{__('Dashboard')}}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a>{{__('Users')}}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->






                         





             <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               
                       
                      
                        <div class="card row my-2">
                            <div class="card-body col-12">
                                <div class="card-title">
                        <!-- flash message -->

                        <div class="container ">
                            <div class="row ">
                                <div class="col-md-12 mx-auto ">
                                    
                                        @include('partials.alerts')
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end flash message -->

                                </div>
                                <div class="table-responsive">
                                    <table id="users-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('Username') }}</th>
                                                <th>{{__('Firstname')}}</th>
                                                <th>{{__('Lastname')}}</th>
                                                <th>{{__('E-mail')}}</th>
                                                <th>{{__('Gender')}}</th>
                                                <th>{{__('Contact')}}</th>
                                                <th>{{__('Role')}}</th>

                                                <th>Actions</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                            
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->firstname }}</td>
                                                <td>{{ $user->lastname }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->gender }}</td>
                                                <td>{{ $user->contact }}</td>
                                                <td>{{ $user->role }}</td>

                                                <td>
                                                    
                                                    <a href="{{ route('users.edit',['user'=>$user->id]) }}" class="btn btn-outline-warning my-1"><i
                                                        class="fas fa-edit"></i></a>
                                                       
                                                            <a href="javascript:void(0);" class="btn btn-outline-danger deleteUser" data-toggle="modal" data-target="#userConfirm"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                                @if($user->deleted_at)
                                                                <form method="POST" class="fm-inline"
                                                                action="{{ url('/admin/dashboard/users/'.$user->id.'/restore') }}">
                                                                @csrf
                                                                @method('PATCH')
                                            
                                                                <input type="submit" value="Restore!" class="btn btn-sm btn-success"/>
                                                            </form>
                                                            @endif
                                                            
                                                </td>

                                            </tr>
                                            @endforeach
                                          
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('Username') }}</th>
                                                <th>{{__('Firstname')}}</th>
                                                <th>{{__('Lastname')}}</th>
                                                <th>{{__('E-mail')}}</th>
                                                <th>{{__('Gender')}}</th>
                                                <th>{{__('Contact')}}</th>
                                                <th>{{__('Role')}}</th>
                                                <th>Actions</th>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                   
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->


<!-- Modal -->
<div class="modal fade" id="userConfirm" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form  action="{{ route('users.destroy') }}" id="form-delete-user" method="post">
            @csrf
            
        <div class="modal-content">
            <div class="modal-header">
                
                <h5 class="modal-title">{{__('Delete Confirmation')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="deleteUserid" id="deleteUserid">
                <h5 >{{__('Qestion Delete')}}</h5>
            </div>
            <div class="modal-footer">
               
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
                <button type="submit"  class="btn btn-danger">{{__('Delete')}}</button>
            </div>
        </div>
        </form>
    </div>
</div>

   <!-- Modal -->
            
 @endsection
