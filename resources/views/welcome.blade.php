@extends('layout')
@section('title', 'Seja Bem-vindo a Ideia Inovadora')
@section('content')
<div class="p-5 mb-2 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
        @guest
        @else
        <h1>Bemvindo, {{ auth()->user()->name }}!</h1>
        @endguest
        <h1 class="display-5 fw-bold">Jornada Empreendedora</h1>
        <p class="col-md-12 fs-4"> Junto com alguns sócios, decidimos criar um Negócio a partir da ideia de uma aplicação inovadora. Esta aplicação precisou de um ambiente de TI com recursos computacionais de alto desempenho e ambiente de nuvem devido à redução de cursos e abstração da complexidade da infraestrutura.</p>
        <a href="/faqs"><button class="btn btn-primary btn-lg" type="button">Leia mais...</button></a>
    </div>
</div>
@endsection