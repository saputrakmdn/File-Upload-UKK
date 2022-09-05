@extends('adminlte::page')

@section('title', 'Soal')
@section('plugins.Datatables', true)


@section('content_header')
    <h1>Jawaban</h1>
@stop

@section('content')
    @php
        $heads = [
            'Nama Soal',
            'File',
            ['label' => 'Action', 'no-export' => true, 'width' => 5]
        ];

        $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                        <i class="fa fa-lg fa-fw fa-download"></i>
                    </button>';
        $config = [
            'order' => [[1, 'asc']],
            'columns' => [null, null, ['orderable' => false]],
        ];
    @endphp
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-adminlte-alert theme="danger" title="Error">
                <p>{{ $error }}</p>
            </x-adminlte-alert>
        @endforeach
    @endif
    @if (session('status'))
        <x-adminlte-alert theme="success" title="Success">
            {{session('status')}}
        </x-adminlte-alert>
    @endif
    <x-adminlte-button label="Primary" theme="primary" label="Tambah Soal" icon="fa fa-fw fa-plus-circle" data-toggle="modal" data-target="#addSoal"/>
    <br>

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table2" :heads="$heads" head-theme="dark" :config="$config"
                          striped hoverable bordered compressed>
        @foreach($soals as $soal)
            <tr>
                <td>{{$soal->nama_soal}}</td>
                <td>{{$soal->file}}</td>
                <td>
                    <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                        <i class="fa fa-lg fa-fw fa-download"></i>
                    </button>
                    <button class="btn btn-xs btn-default text-primary mx-1 shadow delete-soal" data-id="{{$soal->id}}" title="Delete" data-toggle="modal" data-target="#deleteSoal">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </x-adminlte-datatable>

    <x-adminlte-modal id="addSoal" title="Tambah Soal">
        <form id="add_pegawai" action="{{route('soal.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <x-adminlte-input name="nama" type="text" label="Nama Soal" required placeholder="Nama Soal" value="{{old('nama')}}" label-class="text-lightblue">
            </x-adminlte-input>
            <x-adminlte-input-file name="file" label="File" required value="{{old('file')}}" placeholder="File" label-class="text-lightblue">
            </x-adminlte-input-file>
            <x-adminlte-button label="Submit" type="submit" theme="primary" icon="fa fa-fw fa-paper-plane"/>
        </form>
    </x-adminlte-modal>

    <x-adminlte-modal id="deleteSoal" title="Hapus Soal" >
        <div>Apakah Yakin Menghapus?</div>

        <x-slot name="footerSlot">
            <form id="delete_soal" action="{{route('soal.store')}}" method="post">
                {{ csrf_field() }}
                <x-adminlte-button type="submit" class="mr-auto" theme="success" label="Ya"/>
                <x-adminlte-button theme="danger" label="Tidak" data-dismiss="modal"/>
            </form>
        </x-slot>
    </x-adminlte-modal>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
        $('.delete-soal').click(function (){
            $('#delete_soal').attr('action', window.location+'/delete/'+$(this).data('id'));
        })
    </script>
@stop
