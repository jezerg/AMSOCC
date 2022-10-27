<!doctype html>
<html lang="en">
    <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>OCC Assets Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .body{
    margin-top: 100px;
    margin-left: 30px;
    position: relative;
    }

    </style>


    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <title>Laravel 9 Create PDF File using DomPDF Tutorial - LaravelTuts.com</title>
</head>
<body>

@include('layouts.partials.navbar')
        <div class="page-container">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-2">

                    @include('layouts.partials.sidebar')

                    </div>
                    <div class="col-9" position="relative">
                    @yield('content')

                    </div>

                </div>
            </div>
        </div>


    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
      <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>|

    <script type="text/javascript">

    $(document).ready(function() {

        var table = $('#datatable').DataTable();

        table.on('click', '.edit', function () {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#name').val(data[1]);
            $('#details').val(data[2]);
            $('#serial').val(data[3]);
            $('#category_id').val(data[4]);
            $('#status_id').val(data[5]);
            $('#quantity').val(data[6]);
            $('#build_id').val(data[7]);
            $('#dept_id').val(data[8]);

            $('#editform').attr('action', '/asset/'+data[0]);
            $('#editModal').modal('show');
        });


        table.on('click', '.delete', function () {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#deleteFormaseet').attr('action', '/asset/'+data[0]);
            $('#deleteModalasset').modal('show');
            });
    });


    $(document).ready(function() {

        var table = $('#datatable').DataTable();

                table.on('click', '.edit', function () {

                 $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')) {
                 $tr = $tr.prev('.parent');
    }

            var data = table.row($tr).data();
            console.log(data);

                $('#build_name').val(data[1]);
                $('#serial').val(data[2]);
                $('#details').val(data[3]);
                $('#status_id').val(data[4]);
                $('#dept_id').val(data[5]);


                $('#editFormbuild').attr('action', '/build/'+data[0]);
                $('#editModalbuild').modal('show');
        });


            table.on('click', '.delete', function () {

            $tr = $(this).closest('tr');
             if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);


        $('#deleteForm').attr('action', '/build/'+data[0]);
        $('#deleteModal').modal('show');
    });
});


$(document).ready(function() {

var table = $('#datatable').DataTable();

        table.on('click', '.edit', function () {

         $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
         $tr = $tr.prev('.parent');
}

    var data = table.row($tr).data();
    console.log(data);

        $('#dept_name').val(data[1]);
        $('#details').val(data[2]);


        $('#editFormdept').attr('action', '/department/'+data[0]);
        $('#editModaldept').modal('show');
});


    table.on('click', '.delete', function () {

    $tr = $(this).closest('tr');
     if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
    }

    var data = table.row($tr).data();
    console.log(data);


        $('#deleteFormdept').attr('action', '/department/'+data[0]);
        $('#deleteModaldept').modal('show');
    });
});


</script>
  </body>
  <footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="footer_nav_container">
          <div class="cr"><p align="center">©2022 All Rights Reserverd. TeamSyntax</p></div>
        </div>
      </div>
    </div>
  </div>
</footer>
</html>
