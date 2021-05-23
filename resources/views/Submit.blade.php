@extends("Master")
@section("My_Content")

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h4 class="text-center text-primary my-4"> Submit Form </h4>
                <form action="Sub_Con" method="POST" enctype="multipart/form-data">

                    @csrf()
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        <input type="text" name="Sub_User" class="form-control" placeholder="Enter Your Username">
                    </div>
                    
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        <input type="email" name="Sub_Email" class="form-control" placeholder="Enter Email Id">
                    </div>
                    
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        <input type="text" name="Sub_Phone" class="form-control" placeholder="Enter Phone No">
                    </div>
                    
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        <input type="password" name="Sub_Pass" class="form-control" placeholder="Enter Your Password">
                    </div>
                    <div class="row">
                        <button class="btn btn-warning col-md-4 mx-auto"> Submit </button>
                    </div>
                    <p class="text-center"> You have an account?<a href="/MyLogin" class="btn btn-link">click Here </a> </p>
                </form>

            </div>
        </div>
    </div>

@endsection