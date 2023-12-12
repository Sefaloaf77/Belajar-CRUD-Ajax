<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD AJAX Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>
                    Belajar CRUD Dengan ajax
                </h1>
                <button class="btn btn-primary" onclick="create()">+ Tambah product</button>
                <div id="read" class="mt-3"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">

                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-2" id="page">

                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    {{-- jquery ajax --}}
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>

        $(document).ready(function(){
            read();
        })
        //read database
        function read(){
            $.get("{{url('show')}}",{},function(data,status){
                $("#read").html(data);
            })
        }
        // modal create
        function create(){
            $.get("{{url('create')}}",{},function(data,status){
                $("#exampleModalLabel").html('Create Product')
                $("#page").html(data)
                $("#exampleModal").modal("show")
            });
        }

        //proses create data
        function store(){
            var name = $("#name").val();
            $.ajax({
                type:"get",
                url: "{{url('store')}}",
                data: "name="+name,
                success: function(data){
                    $(".btn-close").click();
                    read()
                    // $("#page").html('')

                }
            });
        }

    </script>
</body>

</html>