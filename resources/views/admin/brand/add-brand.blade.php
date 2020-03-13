@extends('admin.master')

@section('admin-body')
    <div class="">
        <div class="col-md-10 offset-md-2">

            <div class="card text-center mt-5" style="width: 40rem;">
                <h5 class="card-header text-center text-success">Add Brand Form</h5>
                <div class="card-body">                    
                    <form action="{{route('new-brand')}}" method="POST" >
                        {{csrf_field()}}
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label">Brand Name</label>
                          <div class="col-md-8">
                            <input type="text" name="brand_name" class="form-control">
                          <span class="text-danger">{{$errors->has('brand_name')?$errors->first('brand_name'):''}}</span>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Brand Description</label>
                            <div class="col-md-8">
                              <textarea name="brand_description" cols="30" rows="5" class="form-control"></textarea>
                              <span class="text-danger">{{$errors->has('brand_description') ? $errors->first('brand_description') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Publication Status</label>
                            <div class="col-md-8">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" checked id="published" type="radio" name="publication_status" value="1">
                                    <label class="form-check-label" for="published">Published</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" id="unpublished" type="radio" name="publication_status" value="0">
                                    <label class="form-check-label" for="unpublished">Unpublished</label>
                                  </div> <br>
                                  <span class="text-danger">{{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                              <input type="submit" name="btn"  class="btn btn-primary btn-block" value="Save Brand Info">
                            </div>
                          </div>
                      </form>
                </div>
              </div>

        </div>
    </div>
@endsection