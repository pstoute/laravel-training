@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form class="form" method="POST" action="{{url('/team-members/create')}}">
                @csrf
                    <h3 class="card-header">Create a new Team Member</h3>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="sr-only" for="first_name">First Name</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="last_name">Last Name</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Create Team Member</button>
                        <a href="{{url('/team-members')}}" class="pull-right btn btn-light">Cancel and Go Back</a>
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
