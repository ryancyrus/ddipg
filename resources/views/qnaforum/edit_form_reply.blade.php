    <!-- Temporary -->
   {{--  {!! Form::hidden('user_id', 1) !!} --}}
    <div class="form-group">
        {!! Form::label('Question:') !!}
        {!! Form::textarea('question', null, ['class'=>'form-control', 'readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Subject:') !!}
        {!! Form::text('subject', null, ['class'=>'form-control', 'readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Creator:') !!}
        {!! Form::text('origin',  null, ['class'=>'form-control', 'readonly']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Destination:') !!}
        {!! Form::text('destination', null, ['class'=>'form-control', 'readonly']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Reply') !!}
        {!! Form::textarea('reply', null, ['class'=>'form-control']) !!}
    </div>

    

    <div class="form-group">
        {!! Form::submit($SubmitButton, ['class' => 'btn btn-primary form-control'])!!}
    </div>



