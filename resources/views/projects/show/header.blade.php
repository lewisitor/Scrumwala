<h2 class="project-title">Project: {{$project->name}}</h2>

<div class="row container-fluid">
    <div class="col-md-4">
        <h5 class="group-heading">Navigate</h5>
        <button type="button" class="btn btn-default">
            <a href="/projects/{{$project->id}}/plan">
                <img width="18" height="18" alt="navigate to plan mode"
                     src="{{asset('css/icons/ic_arrow_back_grey600_36dp.png')}}" />
                Plan
            </a>
        </button>
    </div>
    <div class="col-md-4">
        @if($sprint)
            <h3><span class="grey">Sprint:</span> {{$sprint->name}}</h3>
        @endif
    </div>
    <div class="col-md-4 date-range">
        @if($sprint)
            @if($sprint->to_date)
                <img width="18" height="18" src="{{asset('css/icons/ic_schedule_black_36dp.png')}}"/>
                <span class="grey">Deadline: </span> {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $sprint->to_date)->diffForHumans()}}
            @endif
        @endif
    </div>
</div>