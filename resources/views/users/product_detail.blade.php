@extends('layouts.navbar')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('/product')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/product')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $nani->title}}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{url('products')}}/{{ $nani->file}}" class="rounded mx-auto d-block " width="100%" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $nani->title}}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td> :</td>
                                        <td>Rp. {{number_format($nani->price)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td> :</td>
                                        <td>{{number_format($nani->stock)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td> :</td>
                                        <td>{{($nani->description)}}</td>
                                    </tr>
                                <form action="" method="post">
                                @csrf
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td> :</td>
                                        <td>
                                           
                                            <input type="number" name="jumlah" class="form-control" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pelanggan</td>
                                        <td> :</td>
                                        <td><input type="text" name="nama_pelanggan" class="form-control" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>No hp</td>
                                        <td> :</td>
                                        <td> <input type="text" name="no_hp" class="form-control" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                        </td>
                                    </tr>
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
