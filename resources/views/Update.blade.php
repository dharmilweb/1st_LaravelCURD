@extends("Master")
@section("My_Content")

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto">

                <h2 class="text-center text-warning mt-3"> This is Update Form </h2>            
                <form action="/Update" method="post" enctype="multipart/form-data">
        
                    @csrf()
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-address-book"></i>  </span>
                        <input type="text" name="UpPrId" value="{{ $UpSels['id'] }}" class="form-control" placeholder="Enter Product Name">
                    </div>
                    
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-address-book"></i>  </span>
                        <input type="text" name="UpPrname" value="{{ $UpSels['name'] }}" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-info"></i>  </span>
                        <input type="text" name="UpPrDisc" value="{{ $UpSels['disc'] }}" class="form-control" placeholder="Enter Product Discription">
                    </div>
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-copyright"></i>  </span>
                        <input type="text" name="UpPrbrand" value="{{ $UpSels['brand'] }}" class="form-control" placeholder="Enter Product Brand">
                    </div>
                    <div class="input-group my-3">
                        <span class="input-group-text"> <i class="fa fa-cubes"></i>  </span>
                        <input type="text" name="UpPrTPrice" value="{{ $UpSels['total_price'] }}" class="form-control" placeholder="Enter Product Total Price">
                    </div>
                    <div class="input-group my-3">
                        <input type="file" name="UpPrfile" value="{{ $UpSels['photo'] }}" id="Pr_file" class="form-control">
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