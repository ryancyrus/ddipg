    <!-- Temporary -->
   {{--  {!! Form::hidden('user_id', 1) !!} --}}
   <div class="row">
        <div class="input-field col s12 ">
            {!! Form::label('Document ID:') !!}
            {!! Form::text('notesheet_id', null) !!}
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 ">
            {!! Form::label('Subject:') !!}
            {!! Form::text('subject', null) !!}
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 ">
            {!! Form::label('Creator:') !!}
            {!! Form::text('origin',  Auth::user()->identif, ['class'=>'form-control', 'readonly']) !!}
        </div>
     </div>   
    
        <div class="row">
        <div class="input-field col s12 ">
            {!! Form::label('Destination:') !!}
            {!! Form::text('destination', null) !!}
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 ">
            {!! Form::label('Status') !!}
            {!! Form::text('status', null) !!}
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 ">
            {!! Form::label('Current Holder:') !!}
            {!! Form::text('holder', null) !!}
        </div>
    </div>
    <div class="row">
        <div class="input-field">
            {!! Form::submit($SubmitButton, ['class' =>  'btn'])!!}
        </div>
    </div>


