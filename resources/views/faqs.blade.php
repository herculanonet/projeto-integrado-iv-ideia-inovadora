@extends('layout')
@section('title', 'Perguntas mais Frequentes')
@section('content')

   <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Perguntas mais frequentes:</h1>
      <p class="col-md-12 fs-4">Então, confira algumas perguntas mais frequentes e por onde começaremos nossa jornada, pensando principalmente na criação de um novo negócio de sucesso.</p>
      <div class="accordion" id="accordionExample">
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
               <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <strong>1. Como identificar oportunidades de Mercado?</strong>
               </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <p>Será importante <strong>identificar e capitalizar</strong> oportunidades empreendedoras, esse é exatamente o primeiro passo do nosso negócio!</p>
                  <p>Escolher uma área mais ampla na qual se tenha interesse e proficiência em se aprofundar, buscando entender os pontos problemáticos e os comportamentos dos consumidores desse segmento.</p>
                  <p>A partir disso, poderemos identificar possíveis nichos de mercado inexplorados e desenhar soluções para suprir necessidades ainda não bem atendidas.</p>
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <strong>2. Como criar um Plano de Negócios?</strong>
               </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <p>Uma vez identificado o nicho de mercado, elaboraremos um plano robusto para o negócio, identificando os produtos ou serviços que irá oferecer, os canais de venda que utilizaremos e os principais objetivos que irá perseguir.</p>
                  <p>Outro ponto muito importante é estudar a concorrência e construir os diferenciais da sua solução. São essas vantagens competitivas que irão diferenciar nossa empresa no mercado.</p>
                  <p>Para verificar a viabilidade da nossa ideia, vale também conversar com outros empreendedores mais experientes e pessoas de confiança. Essa etapa pode levar mais tempo, mas é fundamental para garantir o sucesso do empreendimento.</p>
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <strong>3. Como formalizar um Negócio?</strong>
               </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <p>Para garantir a regularização da empresa, vamos nos certificar de regularizá-la obtendo um CNPJ ou MEI. Isso permitira que a empresa fature e colete impostos corretamente com base no tamanho e setor do nosso negócio.</p>
                  <p>Além disso, ter um CNPJ também garante acesso a soluções diferenciadas do mercado, como linhas de crédito e financiamentos especiais, melhores condições com fornecedores e formas de pagamento online.</p>
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                  <strong>4. Planejamento Financeiro Estrutural, como criar?</strong>
               </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <p>Começar um negócio requer um planejamento financeiro cuidadoso para colocar um negócio em funcionamento. Listando todos os custos e investimentos necessários e avaliando as necessidades de crédito levando em consideração o orçamento disponível.</p>
                  <p>Também é importante seguir as boas práticas de gestão financeira, apostar na precificação estratégica, acompanhar as obrigações fiscais e acompanhar de perto métricas como fluxo de caixa e capital de giro daqui para frente.</p>
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                  <strong>5. Como se atualizar sempre?</strong>
               </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <p>Nunca parar de se aprofundar em conhecimentos! Para o sucesso de todo negócio, é fundamental estar a par das principais tendências e estratégias do mercado.</p>
                  <p>Existem diversos conteúdos que podem nos ajudar nisso, como livros, podcasts, blogs e cursos online.</p>
                  <p>Infinitas são as possibilidades!!</p>
               </div>
            </div>
         </div>
         <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                  <strong>6. Como tomar Decisões Baseadas em Dados?</strong>
               </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                  <p>Começar um negócio envolve tomar decisões diárias para uma empresa. Para evitar riscos e garantir decisões mais decisivas, é imprescindível contar com dados confiáveis ​​sobre o nosso negócio.</p>
                  <p>Para fazer isso, iremos definir os principais indicadores de desempenho e monitorando-os regularmente. Assim, poderemos entender o desempenho do nosso negócio e desenvolver o melhor plano de ação para nossos objetivos.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection