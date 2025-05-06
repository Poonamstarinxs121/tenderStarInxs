@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
        <h1>Welcome to TenderStarInx</h1>
        <p class="lead">Manage your users, companies, and OEMs efficiently</p>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">Manage system users and their roles</p>
                        <a href="/users" class="btn btn-primary">Go to Users</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Companies</h5>
                        <p class="card-text">Manage company information</p>
                        <a href="/companies" class="btn btn-primary">Go to Companies</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">OEMs</h5>
                        <p class="card-text">Manage OEM information</p>
                        <a href="/oems" class="btn btn-primary">Go to OEMs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 