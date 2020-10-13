<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/assets/css/cssAdmin')}}/bootstrap.min.css" >
    <link rel="stylesheet" href="{{asset('/assets/css/cssAdmin')}}/fonts/all.css" >
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <title> Home Page </title>
  </head>
  <body>
    <h1 class="p-3">All travels! <i class="fas fa-ad"></i> </h1>




    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add New travel </button>
                <hr>
            </div>
            <div class="col-sm-12">
                <h3 class="col alert alert-info text-center"> All travels</h3>
                <div class="table-responsive" >
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">name_fr</th>
                            <th scope="col">name_en</th>
                            <th scope="col">description_fr</th>
                            <th scope="col">description_en</th>
                            <th scope="col">price</th>
                            <th scope="col">date</th>
                            <th scope="col">places</th>
                            <th scope="col">type</th>
                            <th scope="col">members</th>
                        </tr>
                    </thead>
                    <tbody class="cont-data">
                        @foreach($rows as $row)
                        <tr id="{{$row->id}}">
                            <td>{{$row->name_fr}}</td>
                            <td>{{$row->name_en}}</td>
                            <td>{{$row->description_fr}}</td>
                            <td>{{$row->description_en}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->date}}</td>
                            <td>{{$row->places}}</td>
                            <td>{{$row->type}}</td>
                            <td>{{$row->members}}</td>

                            
                            <td>
                                <button class="btn btn-info edit" data-route="{{url('/edit-client/'.$row->id)}}" data-toggle="modal" data-target="#exampleModal2">Edit <i class="fa fa-edit"></i> </button>
                                <button class="btn btn-danger delete" data-route="{{url('/delete-client/'.$row->id)}}" >Delete <i class="fa fa-times"></i> </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

                   


            </div>
        </div>
    </div>




    -- <!-- Modal -->
<div class="modal fade bd-example-modal-xl"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <form id="addtravel">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New travel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul id="errors" class="list-unstyled"></ul>
                <div class="form-group">
                    <label>name_fr</label>
                    <input type="text"  name="name_fr" class="form-control">
                </div>
                <div class="form-group">
                    <label>name_en</label>
                    <input type="text"  name="name_en" class="form-control">
                </div>
                <div class="form-group">
                    <label>description_fr</label>
                    <input type="text"  name="description_fr" class="form-control">
                </div>
                <div class="form-group">
                    <label>description_en</label>
                    <input type="text"  name="description_en" class="form-control">
                </div>
            

                <div class="form-group">
                    <label>price</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label>date</label>
                    <input type="date" name="date" class="form-control">
                </div>

                <div class="form-group">
                    <label>places</label>
                    <input type="text" name="places" class="form-control">
                </div>
                <div class="form-group">
                    <label>type</label>
                    <input type="text" name="type" class="form-control">
                </div>
                <div class="form-group">
                    <label>members</label>
                    <input type="number" name="members" class="form-control">
                </div>
            
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save changes" name="submit">
            </div>
      </form>
    </div>
  </div>
</div>








    <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form id="updateClient">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul id="errorUpdate" class="list-unstyled"></ul>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text"  id="name"  name="name" class="form-control">
                    <input type="hidden"  id="id"  name="id" >
                </div>
            

                <div class="form-group">
                    <label>Email</label>
                    <input type="email"  id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Position</label>
                    <input type="text"  id="position" name="position" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text"  id="mobile" name="mobile" class="form-control">
                </div>
            
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save changes" name="submit">
            </div>
      </form>
    </div>
  </div>
</div>







 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('/assets/js/jsAdmin')}}/jquery-3.4.1.js"  ></script>
    <script src="{{asset('/assets/js/jsAdmin')}}/popper.min.js" ></script>
    <script src="{{asset('/assets/js/jsAdmin')}}/bootstrap.min.js"></script>


    <script>

    $.ajaxSetup({
                    headers: 
                    {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    

        $("#addtravel").submit(function(e)
        {
            e.preventDefault();
            var formData  = $('#addtravel').serialize();
            // console.log(formData);
            $.ajax({
                url:"{{url('/ajouter')}}",
                type:"POST",
                data:formData,
                contentType: false,
                processData: false,
                success:function(dataBack)
                {          

                            

                    $("#error").html("<li class='alert alert-success text-center p-1'> Added Success </li>");
                    $(".cont-data").prepend(dataBack)
                    $('#exampleModal').modal('hide')

                }, error: function (xhr, status, error) 
                {
                
                
                    // console.log(xhr.responseJSON.errors);
                    $.each(xhr.responseJSON.errors,function(key,item)
                    {
                       
                        $("#errors").html("<li class='alert alert-danger text-center p-1'>"+ item +" </li>");
                    })
                }
            })

        })





        // $(document).on("click",".delete",function()
        // {

        //     var route = $(this).attr("data-route");
        //     $.ajax({
        //         type:"get",
        //         url:route,
        //         success:function(data)
        //         {
        //             alert(data.success);
        //             $("#"+data.id).remove();

        //         }

                
        //     })
        // })




        // $(document).on("click",".edit",function()
        // {

        //     var route = $(this).attr("data-route");
        //     $.ajax({
        //         type:"get",
        //         url:route,
        //         success:function(data)
        //         {
        //             $("#id").val(data.id);
        //             $("#name").val(data.name);
        //             $("#email").val(data.email);
        //             $("#position").val(data.position);
        //             $("#mobile").val(data.mobile);
        //         }

                
        //     })
        // })





        // //  update  


        // $("#updateClient").submit(function(e)
        // {
        //     e.preventDefault();
        //     var formData  = new FormData(jQuery('#updateClient')[0]);
        //     var idRow = $("#id").val();
        //     // console.log(formData);
        //     $.ajax({
        //         url:"{{url('/update')}}",
        //         type:"POST",
        //         data:formData,
        //         contentType: false,
        //         processData: false,
        //         success:function(dataBack)
        //         {
        //             $("#errorUpdate").html("<li class='alert alert-success text-center p-1'> Edited Success </li>");
        //             $("#"+idRow).html('')
        //             $("#"+idRow).html(dataBack)
        //             $('#exampleModal2').modal('hide')

        //         }, error: function (xhr, status, error) 
        //         {
                
        //             // console.log(xhr.responseJSON.errors);
        //             $.each(xhr.responseJSON.errors,function(key,item)
        //             {
                       
        //                 $("#errorUpdate").html("<li class='alert alert-danger text-center p-1'>"+ item +" </li>");
        //             })
        //         }
        //     })

        // })

 

    
    
       </script> 





  </body>
</html>