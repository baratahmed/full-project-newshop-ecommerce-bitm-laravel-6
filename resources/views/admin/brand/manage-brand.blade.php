@extends('admin.master')
@section('admin-body')
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="text-center text-success">Manage Brand Info</h4>
                </div>
                <div class="card-body">
                        <table class="table table-bordered">
                            <tr class="bg-warning">
                                <th>SL NO</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            @php($i=1)
                            @foreach($brands as $brand)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$brand->brand_name}}</td>
                                <td>{{$brand->brand_description}}</td>
                                <td>{{$brand->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    @if($brand->publication_status == 1)
                                        <a href="{{route('unpublished-brand',['id'=>$brand->id])}}" class="btn btn-info btn-xl">
                                            <i class="fas fa-arrow-up"></i>
                                        </a>
                                    @else
                                        <a href="{{route('published-brand',['id'=>$brand->id])}}" class="btn btn-warning btn-xl">
                                            <i class="fas fa-arrow-down"></i>
                                        </a>
                                    @endif
                                    <a href="{{route('edit-brand',['id'=>$brand->id])}}" class="btn btn-success btn-xl">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-brand',['id'=>$brand->id])}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-xl">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            @endforeach
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection