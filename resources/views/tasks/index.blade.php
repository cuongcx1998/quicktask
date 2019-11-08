<!-- resources/views/tasks.blade.php -->

@extends('layouts.master')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->
        <form action="{{ route('tasks') }}" method="POST" class="form-horizontal border col-sm-6">
        {{ csrf_field() }}
        <!-- Task Name -->
            <div class="form-group">
                <nav class="navbar-brand ">{{ trans('layout.new_task') }}</nav>
                <div class="">
                    <b><label for="task-name">{{ trans('layout.task') }}</label></b>
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-info">
                        <i class="fas fa-plus"></i> {{ trans('layout.add_task') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <!-- TODO: Current Tasks -->
    @if (count($tasks) > config('compare.zero'))
        <div class="panel panel-default col-sm-6 border">
            <div class="panel-heading">
                <nav class="navbar-brand">{{ trans('layout.current_task') }}</nav>
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                    <th>{{ trans('layout.task') }}</th>
                    <th>&nbsp;</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <td>
                                <!-- TODO: Delete Button -->
                                <form action="{{ route('delete.task',$task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger ">
                                        <i class="fa fa-btn fa-trash"></i>{{ trans('layout.delete') }}
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
@endsection

