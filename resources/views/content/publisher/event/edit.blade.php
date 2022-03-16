@extends('layouts.main2')

@section('container')
<br><br>

<form action="/edit/{{ $event->slug }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PUT') }}
    
    <div class="card" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="card-dialog">
        <div class="card-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Events</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama </label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ $event->name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal </label>
                    <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ $event->date }}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Syarat</label>
                    <input type="text" name="syarat" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ $event->syarat }}">
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="formFileMultiple" class="form-label">Gambar</label>
                            <input class="form-control" name="gambar" type="file" value="{{ $event->name }}" id="formFileMultiple" multiple>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" style="width: 13rem;">
                                <img src="{{ Storage::url($event->gambar) }}" alt="rusak">
                            </div>
                        </div>
                    </div>
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