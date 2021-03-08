<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo.png')}}">
   
    


     <!-- Custom CSS -->
     <link href="{{ asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
     <link href="{{ asset('assets/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
     <link href="{{ asset('assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
     <link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">


     <!-- datatabels css -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/extra-libs/multicheck/multicheck.css')}}">
     <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
     <link rel="stylesheet" type="text/css"
         href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/quill/dist/quill.snow.css')}}">
    
</head>

<body>
    @include('layouts.dashboard.preloader')
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layouts.dashboard.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.dashboard.sidebare')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            

            @yield('content')

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
          @include('layouts.dashboard.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!-- this page js -->
    <script src="{{ asset('assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>


<!-- tables -->
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
 <!-- this page js -->
 <script src="{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
 <script src="{{ asset('assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
 <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
 
  <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>



    
      
        

 






<!--form c-->

<script src="{{ asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/pages/mask/mask.init.js') }}"></script>
<script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>

<script>
    /**
 * check password in the front
 */
$( document ).ready(function() {
  $("#new_password").focus(function() {
      var current_password = $("#current_password").val();
      var token = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
          url:"{{ route('checkPassword') }}",
          method: "POST",
          dataType: 'JSON',
          data: {
              "_method": 'POST',
              "_token": token,
              "current_password": current_password,
           },
        
          success: function(response){
          //   alert(response);
          
          var result = $.trim(response);
              if(result === "true"){
                
                  $("#pwdchk").html("<font color='green'>Current Password is correct</font>");
              }else{
                
                  $("#pwdchk").html("<font color='red'>Current Password is incorrect</font>");
                  
              }
          },
          error:function(){
              alert("Error");
          }
      });
     
   });    
   


   /**
    * form validation user 
   */

var form_user = $("#addUserForm");
form_user.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
   
   rules: {
       firstname: {
           required: true,
           minlength: 3,


       },
       lastname: {
           required: true,
           minlength: 3,


       },
       
       email: {
            required: true,
            email: true,
        },

        gedner: {
            required: true,
           },

        contact: {
            required: true,
           },

      role: {
            required: true,
           },

   }
});

   
/**
 * form validation settings page 
 * account form
 */
     
 var form = $("#account-form");
 form.validate({
    
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
   
    rules: {
        username: {
            required: true,
            minlength: 3,


        },
        current_password: {
            required: true,
            minlength: 8,


        },
        new_password: {
            required: true,
            minlength: 8

        },

        confirm_password: {
            required: true,
            equalTo: "#new_password"
        },

        email: {
             required: true,
             email: true,
             disabled:true
         },

         firstname: {
             required: true,
             minlength: 2
            },
         lastname: {
             required: true,
             minlength: 2
            }
    }
});

  });   

    
       //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function () {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function (value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
       


       
  /**
   * datatables users initialize
   */
 
     /****************************************
      *       Basic Table                   *
      ****************************************/
     $('#users-table').DataTable();

     // start confirmation delete users table 
    $('#users-table').on('click','.deleteUser',function(){
       
         $tr = $(this).closest('tr');
         var id = $tr.children("td").map(function() {
             return $(this).text();
         }).get();
         $('#deleteUserid').val(id[0]);
        
    });



</script>
<script src="{{ asset('js/app.js') }}"></script>


</body>

</html>