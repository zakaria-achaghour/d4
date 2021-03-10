@extends('layouts.dashboard.designe')

@section('content')

           <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">{{__('Clients')}}</h4>
                        <div class="ml-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dash') }}">{{__('Dashboard')}}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a>{{__('Clients')}}</a></li>
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
                                    <table id="clients-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('Name') }}</th>
                                                <th>{{__('City')}}</th>
                                                <th>Type</th>
                                               <th>Patente</th>
                                               <th>ICE</th>
                                               <th>IF</th>
                                               <th>Autorisation</th>
                                               <th>RC</th>
                                               <th>Adress</th>
                                               <th>Pharmacien</th>
                                               <th>Contact</th>
                                               <th>Cin</th>


                                                <th>Actions</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clients as $client)
                                            <tr>
                                            
                                                
                                                <td>
                                                    
                                                    <a href="{{ route('clients.edit',['client'=>$client->id]) }}" class="btn btn-outline-warning my-1"><i
                                                        class="fas fa-edit"></i></a>
                                                       
                                                            <a href="javascript:void(0);" class="btn btn-outline-danger deleteClient" data-toggle="modal" data-target="#clientConfirm"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                            
                                                </td>

                                            </tr>
                                            @endforeach
                                          
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('Name') }}</th>
                                                <th>{{__('City')}}</th>
                                                <th>Type</th>
                                               <th>Patente</th>
                                               <th>ICE</th>
                                               <th>IF</th>
                                               <th>Autorisation</th>
                                               <th>RC</th>
                                               <th>Adress</th>
                                               <th>Pharmacien</th>
                                               <th>Contact</th>
                                               <th>Cin</th>


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
<div class="modal fade" id="clientConfirm" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form  action="{{ route('clients.destroy') }}" id="form-delete-client" method="post">
            @csrf
            
        <div class="modal-content">
            <div class="modal-header">
                
                <h5 class="modal-title">{{__('Delete Confirmation')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="deleteClientid" id="deleteClientid">
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
