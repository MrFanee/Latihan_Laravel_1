
@extends ('layout/main')

{{-- template engine laravel /jika isi hanya satu baris --}}
@section ('title', 'Web Programing laravel')

{{-- template engine laravel /jika isi lebih dari 1 baris kasih @endsection --}}
@section ('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h3 class="mt-2">Halaman Utama</h3>
        </div>
    </div>
</div>
@endsection
