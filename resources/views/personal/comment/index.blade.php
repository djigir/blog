@extends('personal.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Коментарии</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Коментарии</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Всего постов: <b>{{ $comments->total() }} </b> | Показано:
                                <b>{{ $comments->lastItem() }}</b> из <b>{{ $comments->total() }}</b>
                            </h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr class="text-center">
                                    <th>№</th>
                                    <th>Коментарий</th>
                                    <th>Пост</th>
                                    <th>Дата создания</th>
                                    <th colspan="2">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $index => $comment)
                                    <tr class="text-center">
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $comment->message }}</td>
                                        <td>{{ $comment->post->title }}</td>
                                        <td>{{ $comment->created_at }}</td>
{{--                                        <td><a href="{{ route('post.show', $comment->post->id) }}" target="_blank"><i class="fa-solid fa-eye"></i></a></td>--}}
                                        <td><a style="color: #ebba34" href="{{ route('personal.comment.edit', $comment->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                                        <td>
                                            <form action="{{ route('personal.comment.delete', $comment->id) }}" method="POST">
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

                    @include('partials.pagination', ['items' => $comments])


                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
