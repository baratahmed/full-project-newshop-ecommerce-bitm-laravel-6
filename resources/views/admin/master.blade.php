<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        
        <link href="{{asset('/admin/css/all.min.css')}}" rel="stylesheet" />
        <link href="{{asset('/')}}admin/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

        <script src="{{asset('/')}}admin/ckeditor/ckeditor.js"></script>
        <script src="{{asset('/')}}admin/ckeditor/samples/js/sample.js"></script>
        <link rel="stylesheet" href="{{asset('/')}}admin/ckeditor/samples/css/samples.css">
        <link rel="stylesheet" href="{{asset('/')}}admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

        


    </head>
    <body class="sb-nav-fixed">
        @include('admin.includes.header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('admin.includes.menu')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">

                        @yield('admin-body')

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Cherished Dream, Barat, 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/admin/js/all.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        
        <script src="{{asset('/')}}admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        {{-- <script src="{{asset('/')}}admin/assets/demo/chart-area-demo.js"></script>
        <script src="{{asset('/')}}admin/assets/demo/chart-bar-demo.js"></script> --}}
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        {{-- <script src="{{asset('/')}}admin/assets/demo/datatables-demo.js"></script> --}}

        
        @if(Session::has('success'))
        <script>
            toastr["success"]("{{Session::get('success')}}", "New Shop")
        </script>
        @endif

        <script>
            initSample();
        <script>

        
    </body>
</html>
