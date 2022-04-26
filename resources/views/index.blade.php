@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

            <div class="row mt-3 mb-3">
                <div class="col-6">
                    
                    <form action="search">
                        <select name="type" id="">

                        <option selected>Állat</option>
                        <option>cica</option>
                        <option>kutya</option>
                        <option>kiskecske</option>
                        </select>

                        <button class="btn btn-primary" type="submit">Keresés</button>
                    </form>

                </div>
                <div class="col-6">
                    <a class="btn btn-outline" href="/register">Regisztráció</a>
                    <a class="btn btn-outline" href="/login">Bejelentkezés</a>
                    <a class="btn btn-outline" href="/logout">Kijelentkezés</a>
                </div>
            </div>
                <div class="card">
                    <div class="card-header">Pets</div>
                    <div class="card-body">
                        <a href="create" class="btn btn-primary btn-sm" title="Add New Pet">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Pet</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Műveletek</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pets as $pet)
                                    <tr>
                                        <td>{{ $pet->id }}</td>
                                        <td>{{ $pet->pet }}</td>
                                        <td>{{ $pet->type }}</td>
                                        <td>{{ $pet->price }}</td>
                                        <td>
                                            
                                            <a href="/edit/{{$pet->id}}" class="btn btn-primary"> Edit</a>
                                            <a href="/delete/{{$pet->id}}" class="btn btn-danger"> Delete</a>
                                            
                                               
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection