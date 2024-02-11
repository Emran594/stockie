@extends('layout.sidenav-layout')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form method="POST" class="tablelist-form" action="{{ url('update-customer', ['id' => $data->id]) }}">
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Customer Name</label>
                                <input type="text" id="categoryName" name="name" class="form-control" value="{{ $data->name }}" required />
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Customer Email</label>
                                <input type="text" id="categoryName" name="email" class="form-control" value="{{ $data->email }}" required />
                            </div>
                            <div class="mb-3">
                                <label for="customername-field" class="form-label">Customer Mobile</label>
                                <input type="text" id="categoryName" name="mobile" class="form-control" value="{{ $data->mobile }}" required />
                            </div>
                            <div class="hstack gap-2 justify-content-end">
                                <button type="submit" class="btn btn-success" id="edit-btn">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
