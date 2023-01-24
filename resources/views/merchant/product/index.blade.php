@extends('layouts.merchant.master')
@section('title', 'Products')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <div class="content-inner">

        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-lg-inline">
                <div class="page-title d-flex">
                    <h4> <span class="font-weight-semibold">{{
                            $data['page_title'] ?? 'Dashboard' }}</span></h4>
                    <a href="#"
                        class="header-elements-toggle text-body d-lg-none"><i
                            class="icon-more"></i></a>
                </div>



                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">

                        {{-- <a href="{{ route('avtar.create') }}" type="button"
                            class="btn btn-primary">Add</a> --}}

                        {{-- <form style="margin-left: 5px;"
                            action="{{ route('category') }}">
                            <div
                                class="navbar-search d-flex align-items-center py-2 py-lg-0">
                                <div
                                    class="form-group-feedback form-group-feedback-left flex-grow-1">
                                    <input type="search" name="q"
                                        class="form-control my-search-box"
                                        placeholder="Search"
                                        value="{{ $data['q'] ?? '' }}">
                                    <button type="submit" id="search-btn-my"
                                        class="btn btn-primary"><i
                                            class="icon-search4 fa fa-fw"></i></button>
                                    <div class="form-control-feedback">
                                        <i class="icon-search4 opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </form> --}}

                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Product Listing</h4>
                <a href={{ url('create-product') }} class="btn btn-primary">
                    <i class="mdi mdi-plus menu-icon"></i>
                    Add Product
                </a>
            </div>
            @include('success-error')
            <div class="card">
                <div class="table-responsive">
                    <table class="table ">
                        <thead class="t-head " style="text-align: center;vertical-align: middle;">
                            <tr class="">
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category name</th>
                                <th>Cost</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;vertical-align: middle;">
                            @if (count($result) > 0)
                            <?php $firstItemIndex = $result->firstItem(); ?>
                            @foreach ($result as $key => $value)
                            
                            <tr>
                                <td>{{ $firstItemIndex++ }}</td>
                                
                                <td><img src={{$value['category']['image']}} alt="profile"
                                    style="height: 40px; width: 40px;  border-radius: 20px;">
                                </td>
                                <td>{{ $value['name'] ?? '' }}</td>
                                <td>{{ $value['category']['name'] ?? '' }}</td>
                                <td>{{ $value['cost'] ?? '' }}</td>
                                <td>{{ $value['status'] ?? '' }}</td>
                                <td>{{
                                    date('Y-m-d h:m A',strtotime($value['created_at']))
                                    }}</td>
                                <td>
                                    <div class="icons">
                                        <a href=""
                                            class="btn btn-sm btn-"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="change status">
                                            @if($value['status'] == 'Active')
                                            <i><img src={{ asset('images')
                                                    . '/bulbon2.png' }}
                                                    class="rounded-pill "
                                                    height="34" alt=""></i>
                                            @else
                                            <img src={{ asset('images')
                                                . '/bulboff2.png' }}
                                                class="rounded-pill "
                                                height="34" alt="">    
                                            @endif
                                        </a>
                                       
                                        <a href={{route('edit-product',
                                            $value['id'])}}
                                            class="btn btn-sm btn-primary"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="edit job">
                                            <i class="icon-pencil"></i>
                                        </a>
                                                                                <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter{{$value['id']}}"
                                            tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenter{{$value['id']}}Title"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="exampleModalLongTitle">
                                                            Delete Job</h5>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span
                                                                aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>Are you sure to delete {{
                                                            $value['name'] ?? "" }} ?</h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-danger"
                                                            onclick="$('#myFormId{{$value['id']}}').submit()" >Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        <tfoot class="datatable">
                            <tr>
                                <td class="text" colspan="8">
                                    <?php echo 'Showing ' . $result->firstItem() . ' to ' . $result->lastItem() . ' out of ' . $result->total() . ' entries'; ?>
                                    <div style="float: right;">
                                        {{ $result->links() }}
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                        @else
                        <tr>
                            <td class="text-center" colspan="12">No Record Found
                            </td>
                        </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Delete
                    Employer</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Are you sure to delete Job ?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    id="dlts">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_script')
<script>
    $(document).ready(function() {
            $('#myBtnId').click( function(e){
             $('#myModal').modal('show');
                e.preventDefault();
            });
            $('#dlts').click(function(){
                $('#myFormId').submit();
            })   
      });
</script>
@endsection