@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 text-white">

            <form action="{{route('admin.posts.store')}}" method="POST">
                @csrf
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Image URL:
                    </label>
                    <input class="ps-3 form-control" type="text" id="image" name="image">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Title:
                    </label>
                    <input class="ps-3 form-control" type="text" id="title" name="title">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       Frontend:
                    </label>
                    <input class="ps-3 form-control" type="text" id="front_ender" name="front_ender">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Backend:
                    </label>
                    <input class="ps-3 form-control" type="text" id="back_ender" name="back_ender">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        User Interface:
                    </label>
                    <input class="ps-3 form-control" type="text" id="ui" name="ui">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       User Experience:
                    </label>
                    <input class="ps-3 form-control" type="text" id="ux" name="ux">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Illustrator:
                    </label>
                    <input class="ps-3 form-control" type="text" id="illustrator" name="illustrator">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       Description:
                    </label>
                    <textarea class="ps-3 form-control" type="text" id="description" name="description"></textarea>
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Link:
                    </label>
                    <input class="ps-3 form-control" type="text" id="link" name="link">
                </div>
                <div class="col-12 d-flex justify-content-center py-4">
                    <button type="submit" class="btn btn-md btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection