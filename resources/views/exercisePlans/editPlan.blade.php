@extends('layouts.app')

@section('content')
<div class="card" style="padding:10px;">
        {!! Form::open(['action' => ['ExercisePlansController@update', $plan->id], 'method' => 'POST']) !!}
        <center><h3 style="margin-top:10px;margin-bottom:20px;">Edit Training Plan
                {{ Form::submit('Update Plan', ['class' => 'btn btn-primary', 'style' => 'float:right;align:right;margin-right:10px;']) }}
                {{ Form::submit('Delete Plan', ['class' => 'btn btn-danger', 'style' => 'float:right;align:right;margin-right:10px;']) }}
                </h3></center>
    <hr style="margin:10px;"></hr>


    <div class="form-group">
            {{ Form::label('title', 'Name') }}
            {{ Form::text('title', $plan->name, ['class' => 'form-control', 'placeholder' => 'title']) }}
    </div>
    
        {{ Form::label('plan', 'Calender Plan') }}<br/>
        <div class="col-md-2" style="padding:0px 10px 0px 0px;flex:0%;width:14.22%;">
            <div class="card" style="padding:10px;background-color:#c7e0fc;">
                <h3 style="margin-bottom:3px;">
                    <center>Monday</center>
                    <hr style="margin:10px;"></hr>
                </h3>

                <!--Iterate through exercises in the plan!-->  
                @foreach($plan->exercises as $exercise)
                    @if($exercise->day=="Monday")
                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <?$ran=rand(10,10000)?>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$ran}}">
                                        <!--Iterate through exercises in user plans for Monday!-->  
                                        @foreach($exercise->exercise as $exercises)
                                            {{$exercises->name}}</a>
                                        @endforeach
                                    </h4>
                                </div>
                                <div id="collapse{{$ran}}" class="collapse">
                                    <div class="panel-body">
                                      
                                            <div class="form-group">    
                                                {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('description', 'Exercise Description') }} <br/>
                                                    <a class="card-link"  href="./exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                    {{ Form::text('reps', $exercise->reps) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                    {{ Form::text('sets', $exercise->sets) }} <br/>
                                            </div>
                                            <div class="form-group">    
                                                    {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                    {{ Form::text('weight', $exercise->weight) }} <br/>
                                            </div>     
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    
            <div class="col-md-2" style="padding:0px;flex:0%;width:14.22%;">
                <div class="card" style="padding:10px;background-color:#c7e0fc;">
                    <h3 style="margin-bottom:3px;">
                        <center>Tuesday</center>
                        <hr style="margin:10px;"></hr>
                    </h3>
        
                    <!--Iterate through exercises in the plan!-->  
                    @foreach($plan->exercises as $exercise)
                        @if($exercise->day=="Tuesday")
                            <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                                            <!--Iterate through exercises in user plans for Monday!-->  
                                            @foreach($exercise->exercise as $exercises)
                                                {{$exercises->name}}</a>
                                            @endforeach
                                        </h4>
                                    </div>
                                    <div id="collapse{{$loop->iteration}}" class="collapse">
                                        <div class="panel-body">
                                   
                                                <div class="form-group">    
                                                    {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                    {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('description', 'Exercise Description') }} <br/>
                                                        <a class="card-link"  href="./exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                        {{ Form::text('reps', $exercise->reps) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                        {{ Form::text('sets', $exercise->sets) }} <br/>
                                                </div>
                                                <div class="form-group">    
                                                        {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                        {{ Form::text('weight', $exercise->weight) }} <br/>
                                                </div>     
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
      


            <div class="col-md-2" style="padding-left:10px;flex:0%;width:14.22%;">
                    <div class="card" style="padding:10px;background-color:#c7e0fc;">
                        <h3 style="margin-bottom:3px;">
                            <center>Tuesday</center>
                            <hr style="margin:10px;"></hr>
                        </h3>
            
                        <!--Iterate through exercises in the plan!-->  
                        @foreach($plan->exercises as $exercise)
                            @if($exercise->day=="Tuesday")
                                <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                                                <!--Iterate through exercises in user plans for Monday!-->  
                                                @foreach($exercise->exercise as $exercises)
                                                    {{$exercises->name}}</a>
                                                @endforeach
                                            </h4>
                                        </div>
                                        <div id="collapse{{$loop->iteration}}" class="collapse">
                                            <div class="panel-body">
                                       
                                                    <div class="form-group">    
                                                        {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                        {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('description', 'Exercise Description') }} <br/>
                                                            <a class="card-link"  href="./exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                            {{ Form::text('reps', $exercise->reps) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                            {{ Form::text('sets', $exercise->sets) }} <br/>
                                                    </div>
                                                    <div class="form-group">    
                                                            {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                            {{ Form::text('weight', $exercise->weight) }} <br/>
                                                    </div>     
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-md-2" style="padding-left:10px;flex:0%;width:14.22%;">
                        <div class="card" style="padding:10px;background-color:#c7e0fc;">
                            <h3 style="margin-bottom:3px;">
                                <center>Tuesday</center>
                                <hr style="margin:10px;"></hr>
                            </h3>
                
                            <!--Iterate through exercises in the plan!-->  
                            @foreach($plan->exercises as $exercise)
                                @if($exercise->day=="Tuesday")
                                    <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                                                    <!--Iterate through exercises in user plans for Monday!-->  
                                                    @foreach($exercise->exercise as $exercises)
                                                        {{$exercises->name}}</a>
                                                    @endforeach
                                                </h4>
                                            </div>
                                            <div id="collapse{{$loop->iteration}}" class="collapse">
                                                <div class="panel-body">
                                           
                                                        <div class="form-group">    
                                                            {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                            {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                <a class="card-link"  href="./exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                                {{ Form::text('reps', $exercise->reps) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                                {{ Form::text('sets', $exercise->sets) }} <br/>
                                                        </div>
                                                        <div class="form-group">    
                                                                {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                                {{ Form::text('weight', $exercise->weight) }} <br/>
                                                        </div>     
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    
                    <div class="col-md-2" style="padding-left:10px;flex:0%;width:14.22%;">
                            <div class="card" style="padding:10px;background-color:#c7e0fc;">
                                <h3 style="margin-bottom:3px;">
                                    <center>Tuesday</center>
                                    <hr style="margin:10px;"></hr>
                                </h3>
                    
                                <!--Iterate through exercises in the plan!-->  
                                @foreach($plan->exercises as $exercise)
                                    @if($exercise->day=="Tuesday")
                                        <div class="panel-group" id="accordion">
                                                <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                                                        <!--Iterate through exercises in user plans for Monday!-->  
                                                        @foreach($exercise->exercise as $exercises)
                                                            {{$exercises->name}}</a>
                                                        @endforeach
                                                    </h4>
                                                </div>
                                                <div id="collapse{{$loop->iteration}}" class="collapse">
                                                    <div class="panel-body">
                                               
                                                            <div class="form-group">    
                                                                {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                                {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                    <a class="card-link"  href="./exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                                    {{ Form::text('reps', $exercise->reps) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                                    {{ Form::text('sets', $exercise->sets) }} <br/>
                                                            </div>
                                                            <div class="form-group">    
                                                                    {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                                    {{ Form::text('weight', $exercise->weight) }} <br/>
                                                            </div>     
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        
                        <div class="col-md-2" style="padding-left:10px;flex:0%;width:14.22%;">
                                <div class="card" style="padding:10px;background-color:#c7e0fc;">
                                    <h3 style="margin-bottom:3px;">
                                        <center>Tuesday</center>
                                        <hr style="margin:10px;"></hr>
                                    </h3>
                        
                                    <!--Iterate through exercises in the plan!-->  
                                    @foreach($plan->exercises as $exercise)
                                        @if($exercise->day=="Tuesday")
                                            <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                                                            <!--Iterate through exercises in user plans for Monday!-->  
                                                            @foreach($exercise->exercise as $exercises)
                                                                {{$exercises->name}}</a>
                                                            @endforeach
                                                        </h4>
                                                    </div>
                                                    <div id="collapse{{$loop->iteration}}" class="collapse">
                                                        <div class="panel-body">
                                                   
                                                                <div class="form-group">    
                                                                    {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                                    {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                        <a class="card-link"  href="./exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                                        {{ Form::text('reps', $exercise->reps) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                                        {{ Form::text('sets', $exercise->sets) }} <br/>
                                                                </div>
                                                                <div class="form-group">    
                                                                        {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                                        {{ Form::text('weight', $exercise->weight) }} <br/>
                                                                </div>     
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            
                            <div class="col-md-2" style="padding-left:10px;flex:0%;width:14.22%;">
                                    <div class="card" style="padding:10px;background-color:#c7e0fc;">
                                        <h3 style="margin-bottom:3px;">
                                            <center>Tuesday</center>
                                            <hr style="margin:10px;"></hr>
                                        </h3>
                            
                                        <!--Iterate through exercises in the plan!-->  
                                        @foreach($plan->exercises as $exercise)
                                            @if($exercise->day=="Tuesday")
                                                <div class="panel-group" id="accordion">
                                                        <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}">
                                                                <!--Iterate through exercises in user plans for Monday!-->  
                                                                @foreach($exercise->exercise as $exercises)
                                                                    {{$exercises->name}}</a>
                                                                @endforeach
                                                            </h4>
                                                        </div>
                                                        <div id="collapse{{$loop->iteration}}" class="collapse">
                                                            <div class="panel-body">
                                                       
                                                                    <div class="form-group">    
                                                                        {{ Form::label('exerciseList', 'Exercise') }} <br/>
                                                                        {{ Form::select('exerciseList', $exerciseList) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('description', 'Exercise Description') }} <br/>
                                                                            <a class="card-link"  href="./exercise/{{$exercise->id}}">Exercise Details</a><br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('reps', 'Number of Reps') }} <br/>
                                                                            {{ Form::text('reps', $exercise->reps) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('sets', 'Number of Sets') }} <br/>
                                                                            {{ Form::text('sets', $exercise->sets) }} <br/>
                                                                    </div>
                                                                    <div class="form-group">    
                                                                            {{ Form::label('weight', 'Weight (kg)') }} <br/>
                                                                            {{ Form::text('weight', $exercise->weight) }} <br/>
                                                                    </div>     
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                

        
            <center>
            {{ Form::hidden('_method', 'PUT') }}
            </center>
        {!! Form::close() !!}
        
   
@endsection
