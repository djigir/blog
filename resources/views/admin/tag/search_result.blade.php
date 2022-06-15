@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Результаты по запросу: <b>{{ $search }}</b></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Тэги</a></li>
                        <li class="breadcrumb-item active">{{ $search }}</li>
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
                @if($tags->count() > 0)
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Найдено тэгов: <b>{{ $tags->total() }} </b> | Показано:
                                <b>{{ $tags->lastItem() }}</b> из <b>{{ $tags->total() }}</b>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr class="text-center">
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Дата создания</th>
                                    <th colspan="3">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tags as $tag)
                                <tr class="text-center">
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->title }}</td>
                                    <td>{{ $tag->created_at }}</td>
                                    <td><a href="{{ route('admin.tag.show', $tag->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                                    <td><a style="color: #ebba34" href="{{ route('admin.tag.edit', $tag->id) }}"><i class="fa-solid fa-pen"></i></a></td>
                                    <td>
                                        <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
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

                    @include('partials.pagination', ['items' => $tags])

                </div>
                    @else
                    <div class="col-12">
                        <h2>По данному запросу нет результатов:)</h2>
                    </div>
                @endif
                <!-- ./col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
