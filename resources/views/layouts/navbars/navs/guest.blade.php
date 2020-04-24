<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div style="background-color:#212327;border-style: dotted;" class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#">{{ $page ?? __('WORLD COVID 19') }}</a>
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
               
               
              <li>
               <a href="/" class="nav-item nav-link" title="Kenya covid 19 map"><i class="fa fa-angle-double-left">Kenya</i></a>
              </li>
                
            </ul>
        </div>
    </div>
</nav>



