@extends('layouts.panel')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div>form</div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            $('#bar_sample_form').addClass('active')
            $('#bar_sample_form').parents('.nav-item').addClass('menu-open')
            $('#bar_sample_form').parents('ul').first().siblings('.nav-link').addClass('active')
        }, false)
    </script>
@endsection
