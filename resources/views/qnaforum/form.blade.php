    <!-- Temporary -->
   {{--  {!! Form::hidden('user_id', 1) !!} --}}
  <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Question:') !!}
        {!! Form::textarea('question', null, ['class' => 'materialize-textarea']) !!}
    </div>
  </div>  
   <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Subject:') !!}
        {!! Form::text('subject', null) !!}
    </div>
     </div>  
     <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Enquirer:') !!}
        {!! Form::text('origin',  Auth::user()->identif, ['readonly']) !!}
    </div>
     </div>  
     <div class="row"> 
    <div class="input-field col s12">
        {!! Form::label('Faculty:') !!}
        {!! Form::text('destination', null) !!}
    </div>
     </div>  


    
     <div class="row"> 
    <div class="input-field col s12">
        {!! Form::submit($SubmitButton, ['class' => 'btn'])!!}
    </div>
 </div>  


