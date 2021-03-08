@extends('layouts.dashboard.designe')

@section('content')

           <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Settings Profile</h4>
                       
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->


              <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="card row">
                    
                         <!-- flash message -->

                         <div class="container ">
                            <div class="row ">
                                <div class="col-md-12 mx-auto ">
                                    
                                        @include('partials.alerts')
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end flash message -->
                    <div class="card-body col-md-8 mx-auto">
                        
                        <h6 class="card-subtitle"></h6>
                        <form id="account-form" method="POST" action="{{ route('profile_edit') }}" class="m-t-40">
                            @csrf
                           @method('PUT')
                               
                           <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">First name *</label>
                                <input id="firstname" name="firstname" type="text" value="{{ $user->firstname }}" autocomplete="false" class="required form-control" disabled >
                            </div>
                            <div class="col-md-6">
                                <label for="lastname">Last name *</label>
                              <input id="lastname" name="lastname" type="text" value="{{ $user->lastname }}" autocomplete="false" class="required form-control" disabled >
                             </div>

                        </div>
                           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  
                            <label for="username">UserName *</label>
                            <input id="username" name="username" type="text" value="{{ $user->username }}"autocomplete="false" class="required  form-control" disabled>
                            
                                </div>
                            </div>
                        </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="text" value="{{ $user->email }}"autocomplete="false" class="required email form-control" disabled>
                                    
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="current_password">Current Password *</label>
                                    <span id="pwdchk"></span>
                                    <input id="current_password" name="current_password" type="password" class="required form-control">
                                    
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="new_password">New Password *</label>
                                    <input id="new_password" name="new_password" type="password" class="required form-control">
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password *</label>
                                            <input id="confirm_password" name="confirm_password" type="password" class="required form-control">
                                           
                                        </div>
                                    </div>
                                </div>
                                     
                                   
                              
                                   
                                
                               
                        
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mx-auto">
                                        <button type="submit" class="btn btn-warning btn-sm mt-1" style="width: 100%">Update</button>
                                    </div>
                                   
                                   
                                </div>
                           

                        </form>
                    </div>
                </div>
        
          
            </div>

 @endsection

   