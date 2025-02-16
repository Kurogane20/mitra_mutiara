@extends('adminlte.layouts.app')

@section('content')   
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Daftar Perusahaan</h1>
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
                        <a href="{{ route('perusahaan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Perusahaan</a>
                    </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kode</th>
                                        <th>Aksi</th>                                                                           
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($perusahaan as $p)
                                        <tr>
                                            <td>{{ ($perusahaan->currentPage() - 1) * $perusahaan->perPage() + $loop->iteration }}</td>
                                            <td>{{ $p->name }}</td>
                                            <td>{{ $p->alamat }}</td>
                                            <td>{{ $p->Kode }}</td>
                                            <td>
                                                <a href="{{ route('perusahaan.edit', $p->id) }}" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                <form action="{{ route('perusahaan.destroy', $p->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $perusahaan->links('pagination::bootstrap-4') }}
                        </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection