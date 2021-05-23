@extends("Main")
@section("My_Content")

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto"> 
                <h4 class="text-center text-warning mt-5"> Add Product Form </h4>

                <form action="/Add_Pro" method="post" enctype="multipart/form-data">
                <!-- enctype="multipart/form-data" -->
                
                    @csrf()
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-address-book"></i>  </span>
                        <input type="text" name="Prd_name" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-info"></i>  </span>
                        <input type="text" name="Prd_Disc" class="form-control" placeholder="Enter Product Discription">
                    </div>
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-copyright"></i>  </span>
                        <input type="text" name="Prd_brand" class="form-control" placeholder="Enter Product Brand">
                    </div>
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-cubes"></i>  </span>
                        <input type="text" name="Prd_TPrice" class="form-control" placeholder="Enter Product Total Price">
                    </div>
                    <div class="input-group my-3">
                        <input type="file" name="Prd_file" id="Pr_file" class="form-control">
                        <label for="Pr_file" class="input-group-text"> Upload </label>
                        </div>  
                    <div class="row">
                        <button class="btn btn-primary col-md-4 mx-auto mb-5"> Add Product </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection