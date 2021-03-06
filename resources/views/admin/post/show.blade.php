@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $post->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Посты</a></li>
                        <li class="breadcrumb-item active">{{ $post->title }}</li>
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
                    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-block btn-warning">Редактировать</a>
                </div>
                <div class="col-2 mb-4">
                    <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
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
                                    <td>{{ $post->id }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Название</td>
                                    <td>{{ $post->title }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Превью</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="preview_image" class="w-25">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>Главное изображение</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $post->main_image) }}" alt="main_image" class="w-25">
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>Дата создания</td>
                                    <td>{{ $post->created_at }}</td>
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


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
