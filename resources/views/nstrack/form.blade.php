    <!-- Temporary -->
   {{--  {!! Form::hidden('user_id', 1) !!} --}}
    <div class="form-group">
        {!! Form::label('Document ID:') !!}
        {!! Form::text('notesheet_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Subject:') !!}
        {!! Form::text('subject', null, ['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('Creator:') !!}
        {!! Form::text('origin',  Auth::user()->identif, ['class'=>'form-control', 'readonly']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('Destination:') !!}
        {!! Form::text('destination', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('Status') !!}
        {!! Form::text('status', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Current Holder:') !!}
        {!! Form::text('holder', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($SubmitButton, ['class' => 'btn btn-primary form-control'])!!}
    </div>



