@extends("Master")
@section("My_Content")

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
            <h4 class="text-center text-primary my-4"> Login Form </h4>
                <form action="Log_Con" method="POST">
                    @csrf()
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        <input type="email" name="Log_Email" class="form-control" placeholder="Enter Username">
                    </div>
                    
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        <input type="text" name="Log_Pass" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="row">
                        <button class="btn btn-warning col-md-4 mx-auto"> Login </button>
                    </div>
                    <p class="text-center"> You don't have an account?<a href="/MySubmit" class="btn btn-link">Click Here</a></p>
                </form>

            </div>
        </div>
    </div>

@endsection