
@extends ('layout/main')

{{-- template engine laravel /jika isi hanya satu baris --}}
@section ('title', 'About')

{{-- template engine laravel /jika isi lebih dari 1 baris kasih @endsection --}}
@section ('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h3 class="mt-2">Halaman About</h3>
        </div>
    </div>
</div>
@endsection

@section ('index')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h3 class="mt-2">Tutorial Ajax <button id="btn-clear" onclick="clearResult()">Clear</button></h3>
            <div id="hasil"></div>
            <button id="button" onclick="loadContent()">Load Content</button>

            <script>
                function loadContent() {
                    var xhr = new XMLHttpRequest();
                    var url = "https://api.github.com/users/petanikode";

                    xhr.onloadstart = function () {
                        document.getElementById("button").innerHTML = "Loading...";
                    }

                    xhr.onerror = function () {
                        alert("Gagal mengambil data");
                    };

                    xhr.onloadend = function () {
                        if (this.responseText !== "") {
                            var data = JSON.parse(this.responseText);
                            var img = document.createElement("img");
                            img.src = data.avatar_url;
                            var name = document.createElement("h4");
                            name.innerHTML = data.name;

                            document.getElementById("hasil").append(img, name);
                            document.getElementById("button").innerHTML = "Done";

                            setTimeout(function () {
                                document.getElementById("button").innerHTML = "Load Lagi";
                            }, 3000);
                        }
                    };

                    xhr.open("GET", url, true);
                    xhr.send();
                }

                function clearResult() {
                    document.getElementById("hasil").innerHTML = "";
                }
            </script>
        </div>
    </div>
</div>
@endsection
