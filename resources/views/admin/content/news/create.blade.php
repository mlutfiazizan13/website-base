@extends('admin.layouts.app')
@section('custom-style')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endsection
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Gallery</h1>

<div class="">
        <!-- Circle Buttons -->
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Create Image</h6>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Title</label>
                    <input class="form-control" type="text" name="title" id="">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" id="image" accept=".jpg, .png" name="image" type="file" >
                </div>
                <div class="w-25 form-group">
                    <label>Image Preview</label>
                    <img id="image_thumbnail" class="bg-secondary border border-dark img-fluid"  alt="">
                </div>
                <div class="form-group">
                    <label for="editor">Content Preview</label>
                    <textarea class="form-control" name="content_preview" rows="5" cols="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="editor">Content</label>
                    <textarea name="content" id="editor"></textarea>
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
<script>
    // console.log(ClassicEditor.builtinPlugins.map( plugin => plugin.pluginName ););
    ClassicEditor
            .create( document.querySelector( '#editor' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            })
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );

        
</script>
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