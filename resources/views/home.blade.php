{{-- @php
dump($pastaArray); //legame con pasta.php

@endphp --}}
@extends('layout.uno')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  @include('component.header')
  <div class="container">
  <main class="main-home">
    <div>
      <section>
        <h3>LE LUNGHE</h3>
          @foreach ($pastaArray as $key => $listaPasta )
            @if ($listaPasta['tipo'] === 'lunga')
            <a href="/product/{{$key + 1}}">
              <img src="{{$listaPasta['src'] }}" alt="">
            </a>
            @endif
          @endforeach
        </section>
      </div> 
      <div>   
        <section>
          <h3>LE CORTE</h3>
          @foreach ($pastaArray as $key => $listaPasta )
            @if ($listaPasta['tipo'] === 'corta')
                <a href="/product/{{$key + 1}}">
                <img src="{{$listaPasta['src'] }}" alt="">
              </a>
            @endif
          @endforeach
        </section>
      </div>
      <div>
        <section>
          <h3>LE CORTISSIME</h3>
          @foreach ($pastaArray as $key => $listaPasta )
                @if ($listaPasta['tipo'] === 'cortissima')
                    <a href="/product/{{$key + 1}}">
                    <img src="{{$listaPasta['src'] }}" alt="">
                  </a>
                @endif
            @endforeach
        </section>
      </div>
  </main>
</div>
  @include('component.footer')
</body>
</html>



