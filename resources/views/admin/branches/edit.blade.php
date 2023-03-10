@extends('admin.layouts.app')
@section('content')
@include('admin.layouts.error')

<form method="POST" action="{{route('branches.update',$branch->id)}}">
    @method('PUT')
    @csrf
    <div class="row">
        <div style="font-size: 40px" class="col-3"><a href="{{route('branches.index')}}"><i
                    class="bi bi-chevron-left"></i></a></div>
        <h2 class="col col-6" style="text-align: center">Edit Branch</h2>
        <div class="card border border-1 p-4 mt-4 offset-md-3 col-md-6">
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label" style="font-size:22px;">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name', $branch->name)}}"
                        placeholder="Post Slug" required>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success py-3 px-5 ">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
