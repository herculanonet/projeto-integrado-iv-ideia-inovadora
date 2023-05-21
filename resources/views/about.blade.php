@extends('layout')
@section('title', 'Sobre a Empresa')
@section('content')
<div class="container px-4 py-2">
   <h1 class="display-5 fw-bold">Sobre as Idéias Inovadoras:</h1>
</div>
<div class="container px-4 py-2" id="icon-grid">
   <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-4">
      <div class="col d-flex align-items-start">
         <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#bootstrap" />
         </svg>
         <div>
            <h3 class="fw-bold mb-0 fs-4">Bootstrap</h3>
            <p>O Bootstrap é mantido por uma pequena equipe de desenvolvedores no GitHub.</p>
         </div>
      </div>
      <div class="col d-flex align-items-start">
         <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#cpu-fill" />
         </svg>
         <div>
            <h3 class="fw-bold mb-0 fs-4">ChatGPT</h3>
            <p>Sua fonte de informações é um imenso banco de dados com informações de até 2021.</p>
         </div>
      </div>
      <div class="col d-flex align-items-start">
         <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#calendar3" />
         </svg>
         <div>
            <h3 class="fw-bold mb-0 fs-4">Pagamentos Online</h3>
            <p>Com a facilidade dos pagamentos online, por aproximação e do queridinho PIX, ficou bem mais prática.</p>
         </div>
      </div>
      <div class="col d-flex align-items-start">
         <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#home" />
         </svg>
         <div>
            <h3 class="fw-bold mb-0 fs-4">Sensor de Presença</h3>
            <p>Lâmpada com sensor de presença nos ajuda a economizar dinheiro e evitar desperdício.</p>
         </div>
      </div>
      <div class="col d-flex align-items-start">
         <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#speedometer2" />
         </svg>
         <div>
            <h3 class="fw-bold mb-0 fs-4">Smartwatch</h3>
            <p>Funcionam como um Smartphone, mas em formato de relógio de pulso.</p>
         </div>
      </div>
      <div class="col d-flex align-items-start">
         <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#toggles2" />
         </svg>
         <div>
            <h3 class="fw-bold mb-0 fs-4">Telemedicina</h3>
            <p>Um dos avanços mais recentes que podemos ver da tecnologia no cotidiano que se tornou muito popular na pandemia.</p>
         </div>
      </div>
      <div class="col d-flex align-items-start">
         <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#geo-fill" />
         </svg>
         <div>
            <h3 class="fw-bold mb-0 fs-4">GPS</h3>
            <p>O Global Positioning System ou sistema de posicionamento global é outro exemplo da tecnologia no cotidiano.</p>
         </div>
      </div>
      <div class="col d-flex align-items-start">
         <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
            <use xlink:href="#tools" />
         </svg>
         <div>
            <h3 class="fw-bold mb-0 fs-4">Portas Automáticas</h3>
            <p>A primeira versão foi criada há dois mil anos atrás, na Alexandria!</p>
         </div>
      </div>
   </div>
</div>
@endsection
