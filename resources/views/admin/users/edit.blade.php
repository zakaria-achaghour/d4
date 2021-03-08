@extends('layouts.dashboard.designe')

@section('content')

           <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Users</h4>
                        <div class="ml-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dash') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('users.index') }}">Users</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a>Update User</a></li>

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
            <!-- Start Form Create User -->
            <!-- ============================================================== -->

            <div class="card row my-2">
                <div class="card-body col-md-8 mx-auto">
                    <form  method="POST" action="{{ route('users.update',['user'=>$user]) }}" >
                        @csrf
                        @method('PUT')
                   
                        @include('admin.users._form')
                   
                   
                <div class="border-top">
                    <div class="card-body col-md-8 mx-auto">
                        <div class="row ">
                            <div class="col-md-6 col-sm-12 mb-1">
                                <button type="submit" style="width: 100%" class="btn btn-outline-success">Save</button>

                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a href="{{ route('users.index') }}"  style="width: 100%" class="btn btn-outline-primary">Back</a>
                            </div>
                                    
                        </div>
                      
                    </div>
                </div>
                    </form>
            </div>
            </div>
            
             <!-- ============================================================== -->
            <!-- End Form Create User -->
            <!-- ============================================================== -->



            
 @endsection
