@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <!-- Current Tasks -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                        <form action="{{url('task/create')}}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" id="create-task" class="btn btn-primary">
                                <i class="fa fa-btn fa-plus"></i> 할일작성
                            </button>
                        </form>
                    </div>


                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                            <th>Task</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td class="table-text"><div>{{ $task->name }}</div></td>
                                    <td class="table-text"><div>{{ $task->created_at }}</div></td>
                                    <td class="table-text"><div>{{ $task->created_at }}</div></td>

                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" id="detail-task-{{ $task->id }}" class="btn btn-info">
                                                <i class="fa fa-btn fa-th-large"></i> Detail
                                            </button>
                                        </form>
                                        <form action="{{url('task/' . $task->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
