@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.secrets.update') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $secrets->title }}" class="form-control"
                                placeholder="Title*">
                        </div>
                        <div class="form-group">
                            <label>Video</label>
                            <input type="text" name="video" value="{{ $secrets->video }}" class="form-control"
                                placeholder="Video*">
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="secret_id" value="{{ $secrets->id }}">
                            <label>Description</label>
                            <textarea id="" class="editor form-control" col="10" row="3" name="secrets_des">{{ $secrets->secrets_des }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="secrets_img"
                                class="form-control"value="{{ $secrets->secrets_img }}">

                        </div>

                        <div class="form-group">
                            <label>Image Left</label>
                            <input type="file" name="secrets_img_l" class="form-control"
                                value="{{ $secrets->secrets_img_l }}">

                        </div>

                        <div class="form-group">
                            <label>Image Right</label>
                            <input type="file" name="secrets_img_r" class="form-control"
                                value="{{ $secrets->secrets_img_r }}">

                        </div>

                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($secrets->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($secrets->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
