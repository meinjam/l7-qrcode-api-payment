<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    <p>{{ $user->role['name'] }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Joined:') !!}
    <p>{{ $user->created_at->format('D, d M Y, h:ia') }}</p>
</div>

