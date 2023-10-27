@extends('admin.layouts.app')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Gallery</h1>

<div class="">
        <!-- Circle Buttons -->
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Edit Image</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('gallery.update', $image->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $image->title }}" id="">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input class="form-control" type="text" name="description" value="{{ $image->description }}"  id="">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" id="image" name="image" accept=".jpg, .png" type="file" >
                </div>
                <div class="w-25">
                    <label>Thumbnail</label>
                    <img src="{{ $image->image_url }}" id="image_thumbnail" class="bg-secondary border border-dark img-fluid"  alt="">
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        
        $('#image').on('change', function () {
            var reader =  new FileReader();       
            reader.onload = (e) => {
                $('#image_thumbnail').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]); 
        });
        // $('.ckeditor').ckeditor();
    });
</script>
@endsection