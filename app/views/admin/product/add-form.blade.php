@extends('layouts.main')
@section('content')
<form action="">
    <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="cate_id" class="form-controll">
                        @foreach ($categories as $item)
                            <option value="{{$item->id}}">{{$item->cate_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
</form>
@endsection