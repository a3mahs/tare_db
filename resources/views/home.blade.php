@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="bg-image"></div>

            <div class="bg-text">
                <h2>BIENVENIDOS A</h2>
                <h1 style="font-size:50px">BD TARE</h1>
                <p>Ayudando a crear sueños</p>
            </div>
        </div>
    </div>
@endsection

<style>
    body, html, .bg-image {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    /* * {
        box-sizing: border-box;
    } */

    .bg-image {
        /* The image used */
        background-image: url("https://www.orienteraiz.co/blog/wp-content/uploads/2014/04/invertir-propiedad-raiz-colombia.jpg");

        /* Add the blur effect */
        filter: blur(8px);
        -webkit-filter: blur(8px);

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Position text in the middle of the page/image */
    .bg-text {
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/opacity/see-through */
        color: white;
        font-weight: bold;
        border: 3px solid #f1f1f1;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 80%;
        padding: 20px;
        text-align: center;
    }
</style>
