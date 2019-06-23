@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 style="text-align: center;">Admin Panel</h1>

<div class="container-fluid">
    <div class="row" style="margin-top:40px">
        <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <h1>Show Table</h1>
                    <div class="card-body">
                        <p class="card-text">Click the Button below to show all the tables</p>
                        <a href="{{url('/showtable')}}">
                        <button class="btn btn-primary">Show Table</button></a>
                    </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <h1>Insert Data</h1>
                    <div class="card-body">
                        <p class="card-text">Click the Button below to insert data</p>
                        <a href="{{url('/insert')}}">
                        <button class="btn btn-primary">Insert Data</button></a>
                    </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <h1>Update Data</h1>
                    <div class="card-body">
                        <p class="card-text">Click the Button below to update data</p>
                        <a href="{{url('/update')}}"> 
                        <button class="btn btn-primary">Update Data</button></a>
                    </div>
                </div>
        </div>
    
    </div>
    <div class="row" style="margin-top:80px">
        <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <h1>Delete Data</h1>
                    <div class="card-body">
                        <p class="card-text">Click the Button below to Delete data</p>
                        <a href="{{url('/delete')}}">
                        <button class="btn btn-primary">Delete Data</button></a>
                    </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <h1>BackUp Data</h1>
                    <div class="card-body">
                        <p class="card-text">Click the Button below to show backup data</p>
                        <a href="{{url('/showBackUpData')}}">
                        <button class="btn btn-primary">BackUp Data</button></a>
                    </div>
                </div>
        </div>
        <div class="col-sm-4">
                <div class="card" style="width:400px">
                    <h1>Book Listing</h1>
                    <div class="card-body">
                        <p class="card-text">Click the Button below to show book listing</p>
                        <a href="{{url('/bookListing')}}">
                        <button class="btn btn-primary">BackUp Data</button></a>
                    </div>
                </div>
        </div>
    </div>
    <div class="row" style="margin-top:120px;text-align:center;">
        <div class="col-sm-6">
                <div class="card" style="width:600px">
                    <h1>Book Counting</h1>
                    <div class="card-body">
                        <p class="card-text">Click the Button below to show book counting</p>
                        <a href="{{url('/bookCount')}}">
                        <button class="btn btn-primary">Book Count</button></a>
                    </div>
                </div>
        </div>
        <div class="col-sm-6">
                <div class="card" style="width:600px">
                    <h1>Search Genre</h1>
                    <div class="card-body">
                        <p class="card-text">Click the Button below to search genre</p>
                        <a href="{{url('/searchGenre')}}">
                        <button class="btn btn-primary">Search Genre</button></a>
                    </div>
                </div>
        </div>

    </div>

</div>


</div>

@endsection
