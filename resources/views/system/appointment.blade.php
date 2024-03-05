@include('system.header') 

   <!-- Single Page Header start -->
   <div class="container-fluid page-header py-5">
            <h1 class="text-center text-uppercase text-white display-6"> Agendamento Online </h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Páginas</a></li>
                <li class="breadcrumb-item active text-white"> Agendamento Online </li>
            </ol>
        </div>
        <!-- Single Page Header End -->
      
          <!-- Contact Start -->
        <div  class="container-fluid contact py-5">
            <div class="container">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                       
                       
                        <div class="col-lg-8">
                            <form action="{{ url('/appointment') }}" method="get">
                                <input type="text" name="name" class="w-100 form-control border-0 py-3 mb-4" placeholder="Digite o seu nome">
                                <input type="text" name="phone" class="w-100 form-control border-0 py-3 mb-4" placeholder="Digite o seu contacto">
                                <button style="" class="w-100 text-uppercase btn form-control border-secondary py-3 bg-secondary text-white text-primary " type="submit"> Agendar agora</button>
                           
                        </div>

                        <div class="col-lg-4">
                             
                        <input name="date" type="date" class="w-100 form-control border-0 py-3 mb-4">
                        <input name="time" type="time" class="w-100 form-control border-0 py-3 mb-4">
                                        
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
         
@include('system.footer')