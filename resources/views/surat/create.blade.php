@extends('adminlte.layouts.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Surat</h1>
                    </div><!-- /.col -->
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
            <class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Surat</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('surat.store') }}" method="POST">
                                    @csrf                                    
                                    <div class="form-group">
                                        <label for="perusahaan_id" class="form-label">Perusahaan</label>
                                        <select name="perusahaan_id" id="perusahaan_id" class="form-control" required>
                                            <option value="">Pilih Perusahaan</option>
                                            @foreach($perusahaan as $p)
                                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="template_id" class="form-label">Template Surat</label>
                                        <select name="template_id" id="template_id" class="form-control" required>
                                            <option value="">Pilih Template</option>
                                            @foreach($templates as $t)
                                                <option value="{{ $t->id }}">{{ $t->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="up" class="form-label">UP (Opsional)</label>
                                        <input type="text" name="up" id="up" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="perihal" class="from-label">Perihal</label>
                                        <input type="text" name="perihal" id="perihal" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.content -->
    </div>
@endsection