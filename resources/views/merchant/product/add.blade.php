@extends('layouts.merchant.master')
@section('title', 'Product')

@section('content')

<div class="content-wrapper">
    @include('success-error')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <span class="font-weight-bold">Add New Job</span>
                <a href={{ url('products') }} class="btn btn-primary">
                  <i class="mdi mdi-arrow-left-bold"></i> Back
                </a>
              </div>
              <div class="row mt-2">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">      
                      <div class="card-body">
                        <form action={{url('/job/add')}} class="forms-sample" method="POST" enctype="multipart/form-data" autocomplete="on">
                          @csrf
                          <div class="row">
                            <div class="col-6 p-2">
                              <div class="form-group">
                                  <label for="exampleInputName1">Name<span class="text-danger">*</span></label>
                                  <input type="text" name="name"  class="form-control"  rows="4" value={{ old('name') }} >
                                  @if($errors->has('name'))
                                    <p class="text-danger">
                                        {{ $errors->first('name');}}
                                    </p>
                                  @endif
                              </div>
                            </div>
                            <div class="col-6 p-2">
                              <div class="form-group">
                                  <label for="exampleInputName1">Cost<span class="text-danger">*</span></label>
                                  <input type="text" name="cost" class="form-control" value={{ old('cost') }}>
                                  @if($errors->has('cost'))
                                    <p class="text-danger">
                                        {{ $errors->first('cost');}}
                                    </p>
                                  @endif
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-6 p-2">
                              <div class="form-group">
                                  <label for="exampleInputName1">Description<span class="text-danger">*</span></label>
                                  <input type="text" name="address" class="form-control"  value={{ old('address') }}>
                                  @if($errors->has('address'))
                                    <p class="text-danger">
                                        {{ $errors->first('address');}}
                                    </p>
                                  @endif
                              </div>
                            </div>
                            <div class="col-6 p-2">
                                <div class="col-6">
                                    {{-- <div class="form-group">
                                      <label>Upload Multiple Picture<span class="text-secondary">(optional)</span></label>
                                      <input id="formFileDisabled"  type="file" name="images[]" class="form-control" id="image" multiple>
                                    </div> --}}
                                    <label>Upload Multiple Picture<span class="text-secondary">(optional)</span></label>
                                    <div class="fileUpload blue-btn btn width100 shadow ">
                                      <span>Upload your Job Images</span>
                                      <input type="file" class="uploadlogo " type="file" name="images[]" class="form-control" id="image" multiple/>
                                    </div>
                                  </div>
                              {{-- <div class="form-group">
                                  <label for="exampleInputName1"><span class="text-danger">*</span></label>
                                  <input type="text" name="last_name" class="form-control" placeholder="Enter Your Last Name" value="{{ $data->last_name }}">
                                  @if($errors->has('last_name'))
                                    <p class="text-danger">
                                        {{ $errors->first('last_name');}}
                                    </p>
                                  @endif
                              </div> --}}
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-6 p-2">
                              <div class="form-group">
                                <label for="exampleInputName1">Category<span class="text-danger"></span></label>
                                <select name="category" class="form-control" id="select_company">
                                  <option value="">Select Category</option>
                                  @foreach ($categorys as $category)
                                    <option value={{ $category->id }}>{{ $category['name']}}</option>
                                  @endforeach
                                </select>
                                @if($errors->has('poster'))
                                    <p class="text-danger">
                                        {{ $errors->first('poster');}}
                                    </p>
                                  @endif
                              </div>
                            </div>
                            {{-- <div class="col-6 p-2">
                              <div class="form-group">
                                  <label for="exampleInputName1">Category<span class="text-danger">*</span></label>
                                  <input type="text" name="category" class="form-control" value={{ old('category') }}>
                                  @if($errors->has('category'))
                                    <p class="text-danger">
                                        {{ $errors->first('category');}}
                                    </p>
                                  @endif
                              </div>
                            </div> --}}
                            <div class="col-6 p-2">
                              <div class="form-group">
                                  <label for="exampleInputName1">Description<span class="text-danger">*</span></label>
                                  <input type="text" name="description" class="form-control" value={{ old('description') }}>
                                  @if($errors->has('description'))
                                    <p class="text-danger">
                                        {{ $errors->first('description');}}
                                    </p>
                                  @endif
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-6 p-2">
                              <div class="form-group">
                                <label for="exampleInputName1">Discount<span class="text-danger">*</span></label>
                                <input type="text" name="discount" class="form-control" value={{ old('discount') }} >
                                @if($errors->has('discount'))
                                  <p class="text-danger">
                                      {{ $errors->first('date');}}
                                  </p>
                                @endif
                            </div>
                            </div>
                            <div class="col-6 p-2">
                              <div class="form-group">
                                <label for="exampleInputName1">Date<span class="text-danger">*</span></label>
                                <input type="date" name="date" class="form-control" value={{ old('date') }} >
                                @if($errors->has('date'))
                                  <p class="text-danger">
                                      {{ $errors->first('date');}}
                                  </p>
                                @endif
                            </div>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary mr-3 ">Submit</button>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection
@section('page_script')

@endsection
@section('page_style')
<style>
    .popular-items-chart-wrapper {
        width: 50%;
        float: left;
    }
    .form-group {
        margin-bottom: 0px;
    }
    .blue-btn:hover,
.blue-btn:active,
.blue-btn:focus,
.blue-btn {
  background: transparent;
  border: solid 1px #0e0f0f;
  border-radius: 3px;
  color: #424349;
  font-size: 16px;
  margin-bottom: 20px;
  outline: none !important;
  padding: 10px 20px;
}

.fileUpload {
  position: relative;
  overflow: hidden;
  height: 43px;
  margin-top: 0;
}

.fileUpload input.uploadlogo {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
  width: 100%;
  height: 42px;
}

/*Chrome fix*/
input::-webkit-file-upload-button {
  cursor: pointer !important;
  height: 42px;
  width: 100%;
}
</style>
@endsection
