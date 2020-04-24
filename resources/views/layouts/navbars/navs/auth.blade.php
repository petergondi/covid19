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
            <a class="navbar-brand" href="#">{{ $page ?? __('KENYA COVID 19') }}</a>
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="search-bar input-group">
                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                        <span class="d-lg-none d-md-block">{{ __('Search') }}</span>
                    </button>
                </li>
               
              <li>
              <a href="/globe" class="nav-item nav-link" title="world covid 19 map"><i class="fa fa-globe"></i></a>
             
              </li>
                
            </ul>
        </div>
    </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
         
            <div class="modal-header">
            <button type="button" class="btn btn-xs close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                    <i class="tim-icons icon-simple-remove"></i>Close
              </button>
            <select style="background-color:#212327;color:white;" class="form-control" id="inlineFormInputGroup">
            <option value="">Select County</option>
            </select>
                
                
            </div>
           
        </div>
    </div> 
</div>
