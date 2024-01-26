<div class="col-lg-12 mt-5">
    <form action="{{ route('todo.update' , $task->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <input class="form-control" type="text" name="title" value="{{ $task->title }}" placeholder="Enter Task" required>
                </div>
            </div>
            <div class="col-lg-4">
                <button type="submit" class="btn btn-success">update</button>
            </div>
        </div>
    </form>
</div>
