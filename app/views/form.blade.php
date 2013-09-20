<h1>Registration to Phill's Parks!</h1>
{{ Form::open(array('url' => 'registration')) }}

  {{-- Username field. -----------------------}}
  {{ Form::label('username', 'Username') }}
  {{ Form::text('username') }}

  {{ $errors->first('username', '<span class="error">&lt;- :message</span>')}}
  <br />
  {{-- Email address field. ------------------}}
  {{ Form::label('email',' Email address')}}
  {{ Form::email('email')}}
  <br />
  {{-- Password field. -----------------------}}
  {{ Form::label('password', 'Password') }}
  {{ Form::password('password') }}
  <br />
  {{-- Password confirmation field. ----------}}
  {{ Form::label('password_confirmation', 'Password confirmation') }}
  {{ Form::password('password_confirmation') }}
  <br />
  {{-- Form submit button. -------------------}}
  {{ Form::submit('Register') }}

{{ Form::close() }}