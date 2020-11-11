@extends('/layouts/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form class="form" method="POST" action="{{url('/teams/create')}}">
                @csrf
                    <h3 class="card-header">Create a team</h3>
                    <div class="card-body">
                        <input class="form-control" type="text" name="name" placeholder="Team Name">
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" type="submit">Create Team</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
