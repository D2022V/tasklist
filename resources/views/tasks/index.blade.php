@extends('layouts.app')

@section('content')

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
        <a href="{{ route('task.create') }}" class="btn btn-default"><i class="fa-fa-plus"></i>New task </a>
    @include('common.errors')
    @section('content')
        <!-- Форма создания задачи... -->

            <!-- Текущие задачи -->
            @if (count($tasks) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Текущая задача
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Заголовок таблицы -->
                            <thead>
                            <th>id</th>
                            <th>Task</th>
                            <th>Action</th>
                            </thead>

                            <!-- Тело таблицы -->
                            <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <!-- Имя задачи -->
                                    <td class="table-text">
                                        <div>{{ $task->id }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>
                                    <td>
                                        <!-- TODO: Кнопка Удалить -->
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        @endsection

    </div>

    <!-- TODO: Текущие задачи -->
@endsection
