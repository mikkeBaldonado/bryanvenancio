@extends('layouts.admin.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="modal fade" id="deleteModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                     <h5 class="text-center">
                                        Are you sure you want to delete this data?
                                     </h5>
                                </div>
                                <div class="modal-footer">
                                    <form method="post" action="{{url('cart/1')}}" class="btn-ok"> @csrf @method('delete')
                                        <button type="submit" class="btn btn-info">
                                            Yes
                                        </button>
                                    </form>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-dark">
                        <div class="card-header">
                            <div class="card-title">
                                Contacts
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <div>
                                <div class="mb-4">
                                    <a class="btn btn-primary" href="{{ url('Admin/Products/create') }}"> Add item </a>
                                </div>
                            </div> --}}
                            <div class="col-xl-12">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $value)
                                            <tr>
                                                <td>{{ $count++ }}</td>
                                                <td>{{ $value->name }} </td>
                                                <td>
                                                    {{ $value->email }}
                                                </td>
                                                <td>{{ $value->comment }} </td>
                                                
                                                <td>
                                                    @if(Auth::user()->role == 'Viewer')
                                                        <a href="#" class="btn btn-dafault btn-sm">No Action Allowed</a>
                                                    @else
                                                    <div class="row pl-1">
                                                        
                                                        <a class="delte btn btn-danger btn-sm text-white" data-href="{{ url('Admin/Contact/'.$value->id) }}" id="deletecart">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(function () {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });

            $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
            });
        })
    </script>
    <script>
      $(function () {
        $('#example1').DataTable({
          "paging": true,
          "pageLength": 50,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
        });
      });
        $('.delte').click(function () {
            var id = $(this).data('href');
            $('.btn-ok').attr('action', id);
            $('#deleteModal').modal('show');
        });
    </script>
@endsection