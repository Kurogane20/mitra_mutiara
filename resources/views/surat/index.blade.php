@extends('adminlte.layouts.app')

@section('content')   
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Daftar Surat</h1>
                    </div><!-- /.col -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <a href="{{ route('surat.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Surat</a>
                    </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor</th>
                                        <th>Perusahaan</th>
                                        <th>Perihal</th>
                                        <th>Aksi</th>                                                                           
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($surat as $s)
                                        <tr>
                                            <td>{{ ($surat->currentPage() - 1) * $surat->perPage() + $loop->iteration }}</td>
                                            <td>{{ $s->nomor_surat }}</td>
                                            <td>{{ $s->perusahaan->name }}</td>
                                            <td>{{ $s->perihal }}</td>
                                            <td>
                                                {{-- <a href="{{ route('surat.show', $s->id) }}" class="btn btn-primary">Lihat</a> --}}
                                                <a href="{{ route('surat.download', $s->id) }}" class="btn btn-info">Download PDF</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $surat->links('pagination::bootstrap-4') }}
                        </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection