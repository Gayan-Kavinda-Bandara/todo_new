@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">My Sub Tasks</h1>
            <h5 class="page-task-main">{{ $task->title }}</h5>
        </div>
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Create New Sub Task
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('todo.sub.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row pt-3">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="sub_title" maxlength="20" placeholder="Enter Sub Title" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="number" name="phone"
                                            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"
                                            placeholder="Enter Phone Number" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                        <select name="priority" id="priority" class="form-control" required>
                                            <option value="1">Priority 1</option>
                                            <option value="2">Priority 2</option>
                                            <option value="3">Priority 3</option>
                                            <option value="4">Priority 4</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <textarea name="note" id="note" cols="30" rows="2" placeholder="Enter note" required="required" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input class="form-control" type="date" name="date" placeholder="Enter Date" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center col-lg-12 mt-3">
                                <input type="hidden" name="task_id" value="{{ $task->id }}">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-5">
            <div>
                <table class="table table-striped table-success">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sub Title</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Note</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($sub_tasks as $key => $sub_task)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $sub_task->sub_title }}</td>
                            <td>{{ $sub_task->phone }}</td>
                            <td>{{ $sub_task->priority }}</td>
                            <td>{{ $sub_task->note }}</td>
                            <td>{{ $sub_task->date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
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

    .page-task-main{
        font-size: 3rem;
        color: #30e077;
    }
</style>
@endpush

@push('js')
<script>

</script>
@endpush
