@extends('layouts.main2')

@section('container')
<br><br>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <div class="card mb-4">
                    <img src="{{ Storage::url($doc->gambar)}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        Category
                    </div>
                    <div class="card-body">
                        <p class="text-secondary">Nama Acara</p>
                        <h4 class="card-title">{{ $doc->name }}</h4>
                        <p class="text-secondary">Tanggal Acara</p>
                        <h4>{{date("j, F Y",strtotime($doc->date))}}</h4>
                        <p class="text-secondary">Persyaratan Acara</p>
                        <h4 class="mb-3">{{ $doc->syarat }}</h4>
                    </div>
                    <div class="card-footer">
                        <p class="float-end">{{ $doc->created_at->diffForHumans() }}</p> 

                    <form action="/doc/{{ $doc->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        <a href="/edit/{{ $doc->slug }}"  name="update" type="button" class="btn btn-success btn-sm">Update</a>
                    </form> 

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection