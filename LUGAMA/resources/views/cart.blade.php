<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carrito - LUGAMA</title>

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/landing-page.css')}}">
        <link rel="stylesheet" href="{{ asset('css/register.css')}}">
        <link rel="stylesheet" href="{{ asset('css/cart.css')}}">

    </head>


    <body>
      @include('header')


      @include('search-bar')

      <div class="container">
        <h2 style="margin-top: 10vh; font-weight: bold;">Mi carrito</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Producto</th>
              <th scope="col">Precio</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php $idcart = 1 ?>
            @forelse ($cart as $item)
              <tr>
                <th scope="row">{{$idcart}}<?php $idcart++; ?></th>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td><a href="/delete/{{$item->id}}">Eliminar</a></td>
              </tr>
            @empty
              <p style="font-size: 3vh;">Su carrito está vacío.</p>
            @endforelse
          </tbody>
        </table>

        <p style="font-size: 4vh;font-weight: bold; text-align: end;">Total: ${{$total}}</p>

        <form class="boton-comprar-form" action="/cartclose" method="post">
          @csrf
            <button class="boton-comprar" type="submit" class="btn btn-success">Comprar</button>
        </form>


      </div>



      @include('footer')

    </body>
</html>
