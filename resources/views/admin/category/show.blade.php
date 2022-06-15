@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $category->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Категории</a></li>
                        <li class="breadcrumb-item active">{{ $category->title }}</li>
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
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-block btn-warning">Редактировать</a>
                </div>
                <div class="col-2 mb-4">
                    <form action="{{ route('admin.category.delete', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-block btn-danger">Удалить</button>
                    </form>
                </div>
            </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr class="text-center">
                                    <td>ID</td>
                                    <td>{{ $category->id }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Название</td>
                                    <td>{{ $category->title }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Изображение</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="category-image" class="w-50" >
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>Дата создания</td>
                                    <td>{{ $category->created_at }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
