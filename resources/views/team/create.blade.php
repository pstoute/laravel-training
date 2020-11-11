@extends('/layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h3 class="card-header">Create a team</h3>
                <div class="card-body">
                    <form class="form" method="POST" action="{{url('/teams/create')}}">
                        @csrf
                        <input class="form-control" type="text" name="name" placeholder="Team Name">
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success" type="submit">Create Team</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
