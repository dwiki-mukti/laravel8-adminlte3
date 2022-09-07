@extends('layouts.sidenav.panel')

@section('title', 'SampleTable')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data SampleTable</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">SampleTable</li>
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
                                <h3 class="card-title">Form SampleTable</h3>
                                <form class="card-tools">
                                    {{-- filter --}}
                                    <div class="dropdown">
                                        <a class="btn d-flex border" style="gap: .25rem" data-toggle="dropdown"
                                            href="#" aria-expanded="false">
                                            <i class="fas fa-filter"></i>
                                            <span>Filter</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right"
                                            style="z-index: 11; right: 10px;">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="filter_1">filter_1</label>
                                                        <select name="filter_1" id="filter_1" class="form-control">
                                                            @for ($i = date('Y'); $i > 2015; $i--)
                                                                <option
                                                                    value="{{ $i }}"{{ $i == ($_GET['filter_1'] ?? null) ? 'selected' : null }}>
                                                                    {{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-sm btn-primary ml-auto">
                                                        Terapkan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end filter --}}


                                    {{-- search --}}
                                    <div class="input-group" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    {{-- end search --}}
                                </form>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Task</th>
                                            <th style="width: 250px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ([1, 2, 3, 4] as $key => $table)
                                            <tr>
                                                <td>{{ $key + 1 }}.</td>
                                                <td>{{ 'HelloWorld' }}</td>
                                                <td>
                                                    <x-btn-crud id="{{ $table }}" />
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="ml-auto">
                                    $tables->paginate()->link()
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        sidebarActive('sidebarSampleTable')
    </script>
@endsection
