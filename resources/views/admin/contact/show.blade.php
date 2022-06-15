@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Контакты (сообщение)</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.contact.index') }}">Контакты</a></li>
                        <li class="breadcrumb-item active">{{ $contact->name }}</li>
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
                    <form action="{{ route('admin.contact.delete', $contact->id) }}" method="POST">
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
                                    <td>{{ $contact->id }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Имя</td>
                                    <td>{{ $contact->name }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Зарегистрирован</td>
                                    <td class="{{ $contact->is_registered == 0 ? 'text-danger' : 'text-success' }}">
                                        {{ $contact->is_registered == 0 ? 'Нет' : 'Да' }}
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>Сообщение</td>
                                    <td>{{ $contact->message }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Дата создания</td>
                                    <td>{{ $contact->created_at }}</td>
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
