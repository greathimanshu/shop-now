@extends('layouts.merchant.master')
@section('title', 'Edit-Product')

@section('content')

<div class="content-wrapper">
    @include('success-error')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <span class="font-weight-bold">Edir Product</span>
                <a href={{ url('products') }} class="btn btn-primary">
                  <i class="mdi mdi-arrow-left-bold"></i> Back
                </a>
              </div>
              <div class="row mt-2">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">      
                      <div class="card-body">
                        <form action={{url('store-product')}} class="forms-sample" method="POST" enctype="multipart/form-data" autocomplete="on">
                          @csrf
                          <div class="row">
                            <div class="col-6 p-2">
                              <div class="form-group">
                                  <label for="exampleInputName1">Name<span class="text-danger">*</span></label>
                                  <input type="text" name="name"  class="form-control"  rows="4" value={{ $data['name'] }} >
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
                                  <input type="text" name="cost" class="form-control" value={{ $data['cost'] }}>
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
                                  <input type="text" name="description" class="form-control"  value={{ $data['description'] }}>
                                  @if($errors->has('description'))
                                    <p class="text-danger">
                                        {{ $errors->first('description');}}
                                    </p>
                                  @endif
                              </div>
                            </div>
                            <div class="col-6 p-2">
                              <div class="form-group">
                                <label for="exampleInputName1">Category<span class="text-danger"></span></label>
                                <select name="category" class="form-control" id="select_company">
                                  <option value={{$data['category']['name']}}>Select Category</option>
                                  @foreach ($categorys as $category)
                                    <option value={{$category->id }}>{{ $category['name']}}</option>
                                  @endforeach
                                </select>
                                @if($errors->has('category'))
                                    <p class="text-danger">
                                        {{ $errors->first('category');}}
                                    </p>
                                  @endif
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 p-2">
                              <div class="form-group">
                                <label for="exampleInputName1">Discount<span class="text-danger">*</span></label>
                                <input type="text" name="discount" class="form-control" value={{ $data['discount'] }} >
                                @if($errors->has('discount'))
                                  <p class="text-danger">
                                      {{ $errors->first('date');}}
                                  </p>
                                @endif
                             </div>
                            </div>
                            <div class="col-6 p-2">
                              <div class="form-group">
                                <label for="exampleInputName1">Quantity<span class="text-danger">*</span></label>
                                <input type="text" name="quantity" class="form-control" value={{ $data['quantity'] }} >
                                @if($errors->has('quantity'))
                                  <p class="text-danger">
                                      {{ $errors->first('quantity');}}
                                  </p>
                                @endif
                             </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6 p-2">
                              <div class="col-6">
                                <label>Upload Multiple Picture<span class="text-secondary">(optional)</span></label>
                                <div class="fileUpload blue-btn btn width100 shadow ">
                                  <span>Upload Product Images</span>
                                  <input type="file" class="uploadlogo " type="file" name="images[]" class="form-control" id="image" multiple/>
                                </div>
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
