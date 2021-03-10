@extends('layouts.dashboard.designe')

@section('content')

           <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">{{__('Account Setting')}}</h4>
                       
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
                        <form id="account-form" method="POST" action="{{ route('settings') }}" class="m-t-40">
                            @csrf
                           @method('PUT')
                               
                         
                           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="from-group">
                                    <label for="language">{{__('Language')}}</label>
                                    <select name="locale" id="language" class="form-control mb-3">
                                      @foreach(App\User::LOCALES as $locale => $label)
                                         <option value="{{ $locale }}" {{ $user->locale === $locale ? 'selected' : '' }} >{{ $label }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                                
                                
                              
                                   
                                
                               
                        
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 mx-auto">
                                        <button type="submit" class="btn btn-warning btn-sm mt-1" style="width: 100%">{{__('Update')}}</button>
                                    </div>
                                   
                                   
                                </div>
                           

                        </form>
                    </div>
                </div>
        
          
            </div>

 @endsection

   