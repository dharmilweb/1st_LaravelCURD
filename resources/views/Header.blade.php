    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">        
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/MyProduct"> Product </a>
            </li>
            <li class="nav-item dropdown">
                @if(Session::get("UserData"))
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Session::get("UserData") }}
                    </a>    
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/AddMyProduct"> Add Product </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="MyLogData"> LogOut </a></li>
                    </ul>
                    
                @else
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>    
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/MyLogin"> Login </a></li>
                        <li><a class="dropdown-item" href="/MySubmit"> Submit </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"> LogOut </a></li>
                    </ul>
            
                @endif
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>