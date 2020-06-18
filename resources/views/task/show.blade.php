<!DOCTYPE html>
<html>
<head>
<title>Todo List</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
@yield("content")
</body>
</html>
<div class="container">
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Done !!! </strong>{{ session()->get('message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<div class="col-md-6">
<h1>Todo List</h1>
<form method="POST" action={{route('task.save')}}>
@csrf
<div class="form-group">
<input type="text" class="form-control" name="task" placeholder="Enter Task">
</div>
<div class="form-group">
<button type="submit" class="btn btn-success">Add</button>
</div>
</form>
<hr>
<ol>
@foreach($tasks as $task)
<li><a href ={{url('/'.$task->id.'/complete')}}>{{ $task->task }}</a></li>
@endforeach
</ol>
<h4>Completed</h4>
<ol>
@foreach($completed_tasks as $c_task)
<li><a href ={{url('/'.$c_task->id.'/delete')}}>{{ $c_task->task }}</a></li>
@endforeach
</ol>
</div>
</div>