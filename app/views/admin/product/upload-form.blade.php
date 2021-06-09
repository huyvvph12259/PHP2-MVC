@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Chon anh</label>
                    <input type="file" name="image[]" multiple class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
@endsection