@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form class="form" method="POST" action="{{url('/teams/create')}}">
                @csrf
                    <h3 class="card-header">Create a new Team</h3>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="sr-only" for="name">Team Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Team Name">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Create Team</button>
                        <a href="{{url('/teams')}}" class="pull-right btn btn-light">Cancel and Go Back</a>
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
