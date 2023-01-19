@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{ route('store') }}" method="POST" class="col-6 m-auto mt-3">
                        @csrf
                        <h5>Add contact info</h5>
                        <div class="form-group p-2">
                            <input type="text" class="form-control" name="fio" placeholder="Enter Full Name" value="{{ old('fio') }}">
                            @error('fio')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group p-2">
                            <input type="number" class="form-control" name="phone" placeholder="Enter Phone" value="{{ old('phone') }}">
                            @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group p-2">
                            <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}">
                            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group p-2 pb-5">
                            <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{ old('address') }}">
                            @error('address')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <h6>Add next delivery data</h6>
                        <div class="row">
                            <div class="form-group w-25">
                                <input type="number" class="form-control" name="width" placeholder="width" value="{{ old('width') }}">
                                @error('width')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group w-25">
                                <input type="number" class="form-control" name="height" placeholder="height" value="{{ old('height') }}">
                                @error('height')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group w-25">
                                <input type="number" class="form-control" name="length" placeholder="length" value="{{ old('length') }}">
                                @error('length')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                            <div class="form-group w-25 pb-3">
                                <input type="number" class="form-control" name="weight" placeholder="weight" value="{{ old('weight') }}">
                                @error('weight')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <h6>Choice delivery service</h6>
                        <div class="form-group p-2">
                            <label>Nova Poshta</label><br>
                            <input type="checkbox" value="1" name="delivery">
                            @error('delivery')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group p-2">
                            <input type="submit" class="btn btn-success" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
