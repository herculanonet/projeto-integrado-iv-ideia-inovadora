@extends('layout')
@section('title', 'Consulte nossos Planos')
@section('content')
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Nossos Planos</h1>
    <p class="fs-5 text-body-secondary">Criado rapidamente uma tabela de preços para nossos clientes em potencial. Ele é construído com componentes Bootstrap padrão e utilitários com pouca personalização.</p>
</div>
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">R$0<small class="text-body-secondary fw-light">/mensal</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>10 usuários inclusos</li>
                    <li>2 GB de armazenamento</li>
                    <li>Suporte via Email</li>
                    <li>Centro de Ajuda</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Inscrição Grátis</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Pro</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">R$15<small class="text-body-secondary fw-light">/mensal</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>20 usuários inclusos</li>
                    <li>10 GB de armazenamento</li>
                    <li>Prioridade no Suporte via Email</li>
                    <li>Centro de Ajuda</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">Iniciar</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
                <h4 class="my-0 fw-normal">Enterprise</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">R$29<small class="text-body-secondary fw-light">/mensal</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>30 usuários inclusos</li>
                    <li>15 GB de armazenamento</li>
                    <li>Suporte via Fone e Email</li>
                    <li>Centro de Ajuda</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-primary">Contacte-nos</button>
            </div>
        </div>
    </div>
</div>

@endsection