<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li @click="menu=0" class="nav-item">
                <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Panel Administrador</a>
            </li>
            <li class="nav-title">
              Panel Administrador Web
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i>Blogs</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=1" class="nav-item">
                        <a  class="nav-link" href="#"><i class="icon-wallet"></i>Categorias</a>
                    </li>
                    <li @click="menu=2" class="nav-item">
                        <a  class="nav-link" href="#"><i class="icon-wallet"></i>Blog</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i>Comunidad</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=3" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-basket-loaded"></i> Eventos</a>
                    </li>
                    <li @click="menu=4" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-basket-loaded"></i> Noticias</a>
                    </li>
                </ul>
            </li>

           
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Comunicados</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=5" class="nav-item">
                        <a  class="nav-link" href="#"><i class="icon-wallet"></i>Comunicados</a>
                    </li>
                </ul>
            </li>
      
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Testimonios</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=6" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-basket-loaded"></i> Testimonio</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i>Plana Docente</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=7" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-basket-loaded"></i>Profesores</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i>Contactanos</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=8" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-basket-loaded"></i>Formulario-Contactos</a>
                    </li>
                    <li @click="menu=9" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-basket-loaded"></i>Ficha de Admision</a>
                    </li>
                </ul>
            </li>
     
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Configuraciones</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=13" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-basket-loaded"></i> Institución</a>
                    </li>                
                </ul>
            </li>         
        
        
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>