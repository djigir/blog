@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователи</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Пользователи</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-2 mb-4">
                    <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-primary">Создать</a>
                </div>
            </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Всего пользователей: <b>{{ $users->total() }} </b> | Показано:
                                <b>{{ $users->lastItem() }}</b> из <b>{{ $users->total() }}</b>
                            </h3>
                            <div class="card-tools">
                                <form action="{{ route('admin.user.search') }}">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="query" class="form-control float-right" placeholder="Поиск">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Имя</th>
                                    <th>Дата создания</th>
                                    <th colspan="3">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr class="text-center">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td><a href="{{ route('admin.user.show', $user->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                                    <td><a style="color: #ebba34" href="{{ route('admin.user.edit', $user->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                                    <td>
                                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fa-solid fa-trash text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    @include('partials.pagination', ['items' => $users])

                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
