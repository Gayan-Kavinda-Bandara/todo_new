@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">My Todo List</h1>
        </div>
        <div class="col-lg-12 mt-5">
            <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" placeholder="Enter Task" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-12 mt-5">
            <div>
                <table class="table table-striped table-success">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $key => $task)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $task->title }}</td>
                            <td>
                            @if ($task->done == 0)
                            <span class="badge bg-warning">Not Completed</span>
                            @else
                            <span class="badge bg-success">Completed</span>
                            @endif
                            </td>
                            <td>
                                <a href="{{ route('todo.delete', $task->id)}}" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                                <a href="{{ route('todo.done', $task->id)}}" class="btn btn-success"><i class="fa-solid fa-circle-check"></i></i></a>
                            </td>
                            {{-- <td>
                                @can('delete_todo')
                                <a href="{{ route('todo.delete', $task->id)}}" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                                @endcan
                                @can('done_todo')
                                <a href="{{ route('todo.done', $task->id)}}" class="btn btn-success"><i class="fa-solid fa-circle-check"></i></i></a>
                                @endcan
                                @can('update_todo')
                                <a href="javascript:void(0)" class="btn btn-info"><i class="fas fa-pencil" onclick="taskEditModal({{ $task->id }})"></i></a>
                                @endcan
                                <a href="{{ route('todo.sub', $task->id)}}" class="btn btn-dark"><i class="fas fa-arrow-right"></i></a>
                            </td> --}}
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="taskEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="taskEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="taskEditLabel">Main Task Edit</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="taskEditContent">

        </div>
      </div>
    </div>
  </div>

@endsection
@push('css')
<style>
    .page-title{
        padding-top: 5vh;
        font-size: 5rem;
        color: #c72eed;
    }
</style>
@endpush

@push('js')
{{-- <script>
    function taskEditModal(task_id){
        var data = {
            task_id:task_id,
        };
        $.ajax({
            url:"{{ route('todo.edit') }}",
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'GET',
            dataType:'',
            data:data,
            success:function (response){
                $('#taskEdit').modal('show');
                $('#taskEditContent').html(response);
            }
        });
    }
</script> --}}
@endpush
