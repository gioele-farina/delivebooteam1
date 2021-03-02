@extends('layouts.layout-welcome')

@section('content')

  {{-- HEADER --}}
    <header>
        <div class="container">
            <div class="menu"> <!-- vue -->
                <a href="#">menu</a>
            </div> 
            <div class="logo">logo</div>
            <input type="text" placeholder="Piatti">
            <div class="cart">cart</div>
        </div>
    </header>

    {{-- MAIN --}}
    <main>

        <div class="container">
            
          <div id="app">
            <slider></slider>
          </div>
          

          <section>
              <h1>Ristoranti</h1>

              <div class="restaurants">

                  <div class="card">info che arrivano dal db</div> <!-- foreach componente ristorante-->
                  {{-- <div class="card">info</div>
                  <div class="card">info</div>
                  <div class="card">info</div>
                  <div class="card">info</div>
                  <div class="card">info</div> --}}

              </div>
          </section>

        </div>

    </main>

    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <nav>
                <ul>
                    <li>Scopri deliveroo</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

                <ul>
                    <li>FAQ</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

                <ul>
                    <li>Aiuto</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

            </nav>

            <div class="copyright">copyright</div>
        </div>
    </footer>
@endsection
