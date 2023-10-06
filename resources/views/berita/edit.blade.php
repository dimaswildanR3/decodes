@extends('layouts.master')

@section('content')

<section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        @if(session('sukses'))
        <div class="callout callout-success alert alert-success alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-check"></i> Sukses :</h5>
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if(session('warning'))
        <div class="callout callout-warning alert alert-warning alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-info"></i> Informasi :</h5>
            {{session('warning')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($errors->any())
        <div class="callout callout-danger alert alert-danger alert-dismissible fade show">
            <h5><i class="fas fa-exclamation-triangle"></i> Peringatan :</h5>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form action="/berita/{{$berita->id}}/update" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Edit Data berita</h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="judul">Judul</label>
                    <input value="{{$berita->judul}}" name="judul" type="text" class="form-control" id="judul" placeholder="judul" >
                    <label for="isi">Isi</label>
                    <textarea name="isi" id="isi" placeholder="isi">{{$berita->isi}}</textarea>
                    
                    <label for="publikasi">publikasi</label>
                    <input value="{{$berita->publikasi}}" name="publikasi" type="date" class="form-control" id="publikasi" placeholder="publikasi" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
               {{-- <label for="publish">Status</label>
                    <select name="publish" id="publish" class="form-control bg-light" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                        <option value="{{$berita->publish}}">{{$berita->publish}}</option>
                        <option value="ya">Publish</option>
                        <option value="tidak">Non Publish</option>
                    </select> --}}
                    <label for="cover">cover</label>
                    <input value="{{$berita->cover}}" name="cover" type="file" class="form-control" id="cover"placeholder="{{$berita->cover}}">
                    <img src="{{ asset('foto_upload/'.$berita->cover) }}" alt="" title=""style="height: 150px;width:100px;">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/berita/index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
<script>
    ClassicEditor
        .create(document.querySelector('#isi'))
        .catch(error => {
            console.error(error);
        });
        CKEDITOR.replace('editor1', {
        height: 400, // Mengatur tinggi editor ke 400 piksel
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] }
        ]
    });
</script>
@endsection