@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form class="form" method="POST" action="{{url('/companies/create')}}">
                @csrf
                    <h3 class="card-header">Create a company account</h3>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="sr-only" for="name">Company Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="domain">Domain Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">https://</div>
                                </div>
                                <input class="form-control" type="text" id="domain" name="domain" placeholder="domain.com">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Create Company</button>
                        <a href="{{url('/companies')}}" class="pull-right btn btn-light">Cancel and Go Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pageScripts')
<script type="text/javascript">
</script>
@endsection
@section('pageStyles')
<style type="text/css">
#domain {
    text-transform: lowercase;
}
</style>
@endsection
