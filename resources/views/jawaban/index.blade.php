@extends('adminlte::page')

@section('title', 'Jawaban')
@section('plugins.Datatables', true)


@section('content_header')
    <h1>Jawaban</h1>
@stop

@section('content')
    @php
        $heads = [
            'NIS',
            'Nama',
            'Klaster',
            'Lokasi File',
            ['label' => 'Download', 'no-export' => true, 'width' => 5]
        ];

        $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                        <i class="fa fa-lg fa-fw fa-download"></i>
                    </button>';
        $config = [
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config"
                          striped hoverable bordered compressed>
        @foreach($jawabans as $jawaban)
            <tr>
                <td>{{$jawaban->nis}}</td>
                <td>{{$jawaban->nama_siswa}}</td>
                <td>Klaster {{$jawaban->cluster}}</td>
                <td>{{$jawaban->jawaban}}</td>
                <td>
                    <a class="btn btn-xs btn-default text-primary mx-1 shadow" title="Download" href="{{asset('uploads/'.$jawaban->jawaban)}}">
                        <i class="fa fa-lg fa-fw fa-download"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </x-adminlte-datatable>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
