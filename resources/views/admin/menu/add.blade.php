@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input name="menu" type="text" class="form-control" id="name" placeholder="Nhập tên">
            </div>
            <div class="form-group">
                <label for="category">Danh mục</label>
                <select id="category" class="form-control" name="parent_id">
                    <option value="0">Danh mục cha</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea id="description" name="description" class="form-control" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
                <label for="content">Mô tả chi tiết</label>
                <textarea id="content" name="content" class="form-control" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" value="1" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" value="0" id="no_active" name="active">
                    <label for="no_active" class="custom-control-label">Không</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection
