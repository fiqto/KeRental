@extends('layouts.appIndex')

@section('content')
<div class="jumbotron">
    <div class="container">
        <div class="jumborow row align-items-center text-center">
            <div class="col">
                <p>Terbaik / Nyaman / Murah / Terpercaya</p>
                <h1>Rental Mobil Termurah dan Terpecaya <br> di Yogyakarta</h1>
                <div class="mt-4">
                    <button type="button" class="btn btn-dark mx-1">Rental Mobil</button>
                    <button type="button" class="btn btn-outline-dark mx-1">Kontak</button>
                </div>
                
            </div>
        </div>    
    </div>
</div>
<div class="about">
    <div class="container">
        <div class="aboutrow row align-items-start">
            <div class="col-5">
                <h1>About Kerental</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet rerum a obcaecati atque error minima odio qui iste placeat cum, recusandae quos est necessitatibus accusantium distinctio. Veniam, expedita? Suscipit, maiores.</p>
                <button type="button" class="btn btn-dark">About</button>
            </div>
            <div class="col-7 text-center text-muted">
                {{-- <p>Gambar Perusahaan</p> --}}
            </div>
        </div>    
    </div>
</div>
<div class="harga">
    <div class="container">
        <div class="row align-items-center">
            <div class="text-center mb-3">
                <h1>Daftar Kendaraan</h1>
                <p>Berikut Kendaraan dan Tarif Harga Murah yang Tersedia.</p>
            </div>
            <div class="col-4 my-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">Nama Mobil</h5>
                        <h6 class="card-subtitle mb-2">Harga Sewa</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Rental Mobil</a>
                    </div>
                </div>
            </div>
            <div class="col-4 my-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">Nama Mobil</h5>
                        <h6 class="card-subtitle mb-2">Harga Sewa</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Rental Mobil</a>
                    </div>
                </div>
            </div>
            <div class="col-4 my-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">Nama Mobil</h5>
                        <h6 class="card-subtitle mb-2">Harga Sewa</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Rental Mobil</a>
                    </div>
                </div>
            </div>
            <div class="col-4 my-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">Nama Mobil</h5>
                        <h6 class="card-subtitle mb-2">Harga Sewa</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Rental Mobil</a>
                    </div>
                </div>
            </div>
            <div class="col-4 my-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">Nama Mobil</h5>
                        <h6 class="card-subtitle mb-2">Harga Sewa</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Rental Mobil</a>
                    </div>
                </div>
            </div>
            <div class="col-4 my-2">
                <div class="card">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">Nama Mobil</h5>
                        <h6 class="card-subtitle mb-2">Harga Sewa</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Rental Mobil</a>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<div class="cta mb-5">
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Segera Rental Mobil di KeRental Sebelum Kehabisan</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore totam assumenda, officia perspiciatis neque pariatur facilis corporis, alias ex, delectus perferendis asperiores modi molestiae mollitia vel eveniet sequi iste aliquid!</p>
                        <div class="mt-3">
                            <a href="#" class="btn btn-dark mx-1">Rental Mobil</a><a href="#" class="btn btn-outline-dark mx-1">Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<div class="footer bg-dark text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-start my-3">
                <h1>Footer</h1>
                <h4>KeRental</h4>
                <p>Isi Page</p>
                <p>- Jumbotron</p>
                <p>- About</p>
                <p>- Daftar Harga Mobil</p>
                <p>- CTA Rental Mobil</p>
                <p>- Footer</p>
            </div>
        </div>
    </div>
</div>

@endsection
