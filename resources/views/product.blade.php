@extends("Main")
@section("My_Content")

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
            
                <h4 class="text-center text-primary my-3"> This is Product Page </h4>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> No </th>
                            <th scope="col"> Product </th>
                            <th scope="col"> Disc </th>
                            <th scope="col"> Brand </th>
                            <th scope="col"> Price </th>
                            <th scope="col"> Photo </th>
                            <th scope="col" colspan="2"> Operation </th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($Data as $Mydata)      
                                <tr>
                                    <th scope="row"> {{ $Mydata["id"] }} </th>
                                    <td> {{ $Mydata["name"] }}  </td>
                                    <td> {{ $Mydata["disc"] }} </td>
                                    <td> {{ $Mydata["brand"] }} </td>
                                    <td> ${{ $Mydata["total_price"] }} </td>
                                    <td> <img src='{{ asset("Upload/DBProduct/". $Mydata->photo)}}' alt="Image is Proccess" width="100px" height="100px">  </td>
                                    <td> <a href="/DB_UpSel/{{$Mydata->id}}" class="btn btn-warning"> Update </a> </td>
                                    <td> <a href="/DB_Del/{{$Mydata->id}}" class="btn btn-primary"> Delete </a> </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


@endsection