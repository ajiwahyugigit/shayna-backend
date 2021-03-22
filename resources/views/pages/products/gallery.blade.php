@extends('layouts.default')

@section('content')
<div class="orders">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Foto Barang <small>{{$product->name}}</small></h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">ID</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Is Default</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($galleries as $gallerie)
                                    <tr>
                                        <td>{{$gallerie->id}}</td>
                                        <td>{{$gallerie->product->name}}</td>
                                        <td>
                                            <img src="{{url($gallerie->photo)}}" alt=""/>
                                        </td>
                                        <td>{{$gallerie->is_default ? 'Ya' : 'Tidak'}}</td>
                                        <td>
                                            <form action="{{route('product-galleries.destroy', $gallerie->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm" onclick="executeExample('warningConfirm')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                      <td colspan="6" class="text-center pt-3">
                                        Maaf Data Kosong
                                      </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div> <!-- /.card -->
        </div>  <!-- /.col-lg-8 -->
@endsection