@extends('layouts.app')


@section('slider')

    @include('layouts.slider', ['url'=>'img/banner_image.png', 'text'=>'screw dis'])

@endsection

@section('content')


    <div class="container mt-lg-4 mb-lg-4">
        <div class="row">
                <h4>Ja Hallo! Lieber {{Auth::user()->name}}</h4>
        </div>
        <div class="row">
            <form class="form" action="{{url('/address/create')}}" method="POST" style="width: 100%">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="street">Street</label>
                    <input tabindex="1" type="text" name="street" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address_additions">Address Addition</label>
                    <input tabindex="2" type="text" name="address_additions" class="form-control">
                </div>
                <div class="form-group">
                    <label for="house_number">House No.</label>
                    <input tabindex="3" type="text" name="house_number" class="form-control">
                </div>
                <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input tabindex="4" type="text" name="zip_code" class="form-control">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input tabindex="5" type="text" name="city" class="form-control">
                </div>
                <div class="form-group">
                    <input tabindex="6" type="radio" name="address_type_id" value="1" required> - Gewerbe
                    <input tabindex="7" type="radio" name="address_type_id" value="2" required> - Privat
                </div>
                <div class="form-group">
                    <select name="address_type_id" id="" class="form-control">
                        <option value="1">Gewerbe</option>
                        <option value="2">Privat</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block">
                    Submit
                </button>
            </form>
        </div>
    </div>


@endsection