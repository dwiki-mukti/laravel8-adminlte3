@extends('layouts.panel')

@section('title', 'SampleForm')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ isset($varForm) ? 'Edit' : 'Tambah' }} Data SampleForm</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">SampleForm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Form SampleForm</div>
                            </div>
                            <form action="" method="POST" onsubmit="return confirm('Submit data ini?')">
                                @csrf
                                @isset($varForm)
                                    @method('PUT')
                                @endisset

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="myName">myLabel</label>
                                        <input class="form-control" id="myName" name="myName"
                                            value="{{ old('myName', $varForm->myName ?? null) }}"
                                            placeholder="Masukkan myLabel">
                                        @error('myName')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer d-flex">
                                    <button class="btn btn-primary ml-auto">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        sidebarActive('sidebarSampleForm')
    </script>
@endsection
