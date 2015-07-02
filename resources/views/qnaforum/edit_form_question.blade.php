    <!-- Temporary -->
   {{--  {!! Form::hidden('user_id', 1) !!} --}}
    <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Question:') !!}
        {!! Form::textarea('question', null, ['class'=>'materialize-textarea']) !!}
    </div></div>

    <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Subject:') !!}
        {!! Form::text('subject', null, [ 'readonly']) !!}
    </div></div>

    <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Creator:') !!}
        {!! Form::text('origin',  null, [ 'readonly']) !!}
    </div></div>

    <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Destination:') !!}
        {!! Form::text('destination', null, [ 'readonly']) !!}
    </div></div>


  {{--   <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Reply') !!}
        {!! Form::textarea('reply', null, [, 'readonly']) !!}
    </div></div>
 --}}
    

    <div class="row"> 
    <div class="input-field col s12">
        {!! Form::submit($SubmitButton, ['class' => 'btn'])!!}
    </div></div>



