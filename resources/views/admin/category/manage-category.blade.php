@extends('admin.master')

@section('admin-body')
    <div class="">
        <div class="col-md-10 offset-md-1 pr-5">

            <div class="card text-center mt-5" style="width: 50rem;">
                <h5 class="card-header text-center text-success">Manage Category</h5>
                <div class="card-body">                    
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="bg-info">
                                <th>Sl no.</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_description}}</td>
                                <td>{{$category->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                    <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="btn btn-info btn-sm">
                                        <i class="fas fa-arrow-up"></i>
                                    </a>
                                    @else
                                    <a href="{{route('published-category',['id'=>$category->id])}}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-arrow-down"></i>
                                    </a>
                                    @endif
                                    <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-success btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a  href="{{route('delete-category',['id'=>$category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>

        </div>
    </div>
@endsection