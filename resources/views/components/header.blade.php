{{-- HEADER --}}
<header>
  <div class="container">

      {{-- menu --}}
      <div class="menu">   
          <ham-menu           
              :login = "'{{ route("login") }}'"
              :register = "'{{ route("register") }}'"
              >
          </ham-menu>      
      </div> 

      {{-- logo --}}
      <a href="{{route('index')}}" class="logo">
          <img src="storage/img/logo-teal.svg" alt=""> 
      </a>

      {{-- search bar --}}
      <input type="text" 
            placeholder="Piatti, ristoranti o tipi di cucina"
            class="search">

      {{-- cart --}}
      <a href="#" class="cart">
          <svg height="24" width="24" viewBox="0 0 24 24" class="cart">
              <path d="M14 15V13H10V15H14ZM15 15H19.1872L19.7172 13H15V15ZM14 12V10H15V12H19.9822L20.5122 10H3.48783L4.01783 12H9V10H10V12H14ZM14 18V16H10V18H14ZM15 18H18.3922L18.9222 16H15V18ZM9 15V13H4.28283L4.81283 15H9ZM9 18V16H5.07783L5.60783 18H9ZM7 8V3H17V8H23L20 20H4L1 8H7ZM9 8H15V5H9V8Z"></path>
          </svg>
      </a>
      
  </div>
</header>