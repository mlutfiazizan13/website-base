@extends('admin.layouts.app')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Gallery</h1>

<div class="">
        <!-- Circle Buttons -->
    <div class="card shadow">
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Gallery</h6>
        </div> --}}
        <div class="d-flex justify-content-between align-items-center p-3">
                <h2 class="m-0">Gallery</h2>
            <div>
                <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary">Add new Image</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead table-striped>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($galleries->isEmpty())
                        <tr>
                            <td colspan="4">Tidak ada data</td>
                        </tr>
                    @else
                        @foreach ($galleries as $g)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $g->title }}</td>
                                <td>{{ $g->description }}</td>
                                <td>
                                    <img src="{{ $g->image_url }}" style="width: 100px" alt="{{ $g->image_name }}">
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ route('gallery.edit', $g->id) }}" class="text-success"><i class="fas fa-edit"></i></a>
                                        
                                        <a class="btn text-danger btn-modal-delete" data-id="{{ $g->id }}" href="#" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash-alt"></i>
                                            
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.content.gallery.delete-modal')
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        $('.btn-modal-delete').on('click', function () {
            // confirm($('.btn-modal-delete').attr('id'))
            var id = $(this).data('id');

            $('#btn-delete').attr('data-id', id);
            // console.log($('#btn-delete').attr('data-id'));
            $('#btn-delete').on('click', function () {
                var url = '{{ route('gallery.destroy', ':id') }}';
                url = url.replace(':id', id);
                // console.log(url)

                $.ajax(
                {
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (){
                        window.location.href = window.location.href;
                    }
                });
            });

        });
        });
    </script>
@endsection