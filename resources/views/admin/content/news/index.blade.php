@extends('admin.layouts.app')
@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">News</h1>

<div class="">
        <!-- Circle Buttons -->
    <div class="card shadow">
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Gallery</h6>
        </div> --}}
        <div class="d-flex justify-content-between align-items-center p-3">
                <h2 class="m-0">News</h2>
            <div>
                <a href="{{ route('news.create') }}" class="btn btn-sm btn-primary">Add News</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead table-striped>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Created By</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($news->isEmpty())
                        <tr>
                            <td colspan="4">Tidak ada data</td>
                        </tr>
                    @else
                        @foreach ($news as $n)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $n->title }}</td>
                                <td>{{ $n->created_by }}</td>
                                <td>
                                    <img src="{{ $n->image_url }}" style="width: 100px" alt="{{ $n->image_name }}">
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ route('news.edit', $n->id) }}" class="text-success"><i class="fas fa-edit"></i></a>
                                        
                                        <a class="btn text-danger btn-modal-delete" data-id="{{ $n->id }}" href="#" data-toggle="modal" data-target="#deleteModal">
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
                var url = '{{ route('news.destroy', ':id') }}';
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