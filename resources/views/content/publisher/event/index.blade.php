@extends('layouts.main2')

@section('container')
<br><br>

<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <hr class="mt-4 mb-4">
    
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Event</button>
    <div class="row">
      @foreach ($events as $event)
        <div class="col-xl-6">
            <div class="card mb-4">
                <img src="{{ Storage::url($event->gambar)}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <a href="/show/{{ $event->slug }}" class="d-flex justify-content-end text-decoration-none">Lihat Detail</a>
                  </div>
                <div class="card-footer">
                    {{date("F j, Y",strtotime($event->date))}}
                </div>
            </div>
        </div>
      @endforeach  
    </div>
</div>

<!-- Modal -->
<form action="/event" method="post" enctype="multipart/form-data">
@csrf

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Events</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama </label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal </label>
                <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Syarat</label>
                <input type="text" name="syarat" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Gambar</label>
                <input class="form-control" name="gambar" type="file" id="formFileMultiple" multiple>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
        </div>
    </div>
    </div>
</div>
</form>

@endsection