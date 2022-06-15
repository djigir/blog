@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Контакты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Контакты</li>
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
            <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Всего сообщений: <b>{{ $contacts->total() }} </b> | Показано:
                                <b>{{ $contacts->lastItem() }}</b> из <b>{{ $contacts->total() }}</b>
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
                                    <th>Имя</th>
                                    <th>Зарегистрирован</th>
                                    <th>Дата создания</th>
                                    <th colspan="2">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $index => $contact)
                                <tr class="text-center">
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td class="{{ $contact->is_registered == 0 ? 'text-danger' : 'text-success' }}">
                                        {{ $contact->is_registered == 0 ? 'Нет' : 'Да' }}
                                    </td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td><a href="{{ route('admin.contact.show', $contact->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                                    <td>
                                        <form action="{{ route('admin.contact.delete', $contact->id) }}" method="POST">
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

                    @include('partials.pagination', ['items' => $contacts])

                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
