@extends('admin.layouts.admin_master')

@section('admin_content')

<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sub Category Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Category</li>
              <li class="breadcrumb-item active">Sub Category Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">


            <div class="card card-primary  card-outline">
                <div class="card-header">
                    <div class="row mb-2">
                            <div class="col-sm-8">
                                <h2 class="pt-2">All Sub Categories</h2>
                              </div>
                              <div class="col-sm-4 mt-2">
                                {{-- <a href="{{ route('category.create') }}" class="btn btn-outline-success float-right">Add Category</a> --}}
                                     <!-- Button to Open the Modal -->
                                    {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#categoryModel">
                                        Add New
                                    </button> --}}
                                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#CategoryModal">
                                        Add New
                                      </button>
                              </div>
                    </div>
                </div>
                {{-- @if (session()->has('success'))
                     <strong class="text-success text-center mt-3">{{ session()->get('success') }}</strong>
                @endif --}}

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Sub Category name</th>
                                <th>Sub Category Slug</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)

                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $row->subcategory_name }}</td>
                                    <td>{{ $row->subcategory_slug }}</td>
                                    <td>{{ $row->category->category_name }}</td>
                                    <td>

                                        <a href="#" class="btn btn-info btn-sm edit" data-id="{{ $row->id }}" data-toggle="modal" data-target="#editModal" ><i class="fas fa-edit"></i></a>

                                        <a href="{{ route('subcategory.delete',$row->id) }}" class="btn btn-danger btn-sm" id="delete"><i class="fas fa-solid fa-trash"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Sub Category name</th>
                                <th>Sub Category Slug</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

{{-- Model Card  --}}

<!-- Category insert The Modal -->

<div class="modal fade" id="CategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('subcategory.store') }}" method="POST">
            @csrf
        <div class="modal-body">

                <div class="form-group mt-1">
                    <label for="category_id">Category Name:</label>
                    <select name="category_id" required="" class="form-control">
                        <option value=""> >> Select Category << </option>
                            @foreach ($category as $row)
                                <option value="{{ $row->id }}"> {{ $row->category_name }} </option>
                            @endforeach
                    </select>
                </div>

            <div class="form-group mt-1">
                <label>Sub Category Name:</label>
                <input type="text" class="form-control mt-1" placeholder="Write Your Sub Category..." name="subcategory_name">
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>

 {{-- edit modal --}}
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Subategory</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
       <div id="modal_body">

       </div>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>

    //  $('body').on('click','.edit',function(){
    //      let subcat_id =$(this).data('id');
    //     $.get("subcategory/edit/"+subcat_id, function(data){
    //         $("#modal_body").html(data);
    //     });
    //  });

     $('body').on('click','.edit', function(){
		let subcat_id=$(this).data('id');
		$.get("/subcategory/edit/"+subcat_id, function(data){
			$("#modal_body").html(data);
		});
	});


  </script>



@endsection

