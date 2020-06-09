<div class="col-6 col-12-xsmall">
    <label for="name">Name:</label>
    {!! Form::text('name', ($user !== null) ? $user->name : old('name'), ['id' => 'name']) !!}
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall">
    <label for="email">Email:</label>
    {!! Form::text('email', ($user !== null) ? $user->email : old('email'), ['id' => 'email']) !!}
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall">
    <label for="mobile">Mobile Number:</label>
    {!! Form::text('mobile', ($user !== null) ? $user->mobile : old('mobile'), ['id' => 'mobile']) !!}
    @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall">
    <label for="birthday">Date of Birth:</label>
    {!! Form::date('birthday', ($user !== null) ? $user->birthday->format('Y-m-d') : old('birthday'), ['id' =>
    'birthday']) !!}
    @error('birthday')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall">
    <label for="state_id">State:</label>
    {!! Form::select('state_id', $states, ($user !== null) ? $user->state_id : old('state_id')) !!}
    @error('state_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall">
    <label for="city_id">City:</label>
    {!! Form::select('city_id',$cities, ($user !== null) ? $user->city_id : old('city_id')) !!}
    @error('city_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-12">
    <label>Gender:</label>
</div>
<div class="col-4 col-12-small">
    {!! Form::radio('gender', 'male', ($user !== null && $user->gender === 'male') ? true : false, ['id' => 'male']) !!}
    <label for="male">Male</label>
</div>
<div class="col-4 col-12-small">
    {!! Form::radio('gender', 'female', ($user !== null && $user->gender === 'female') ? true : false, ['id' =>
    'female']) !!}
    <label for="female">Female</label>
</div>
@error('gender')
<div class="col-12">
    <div class="alert alert-danger">{{ $message }}</div>
</div>
@enderror
<div class="col-12">
    <label for="profile_picture">Profile Picture:</label>
    {!! Form::file('profile_picture') !!}
</div>
@error('profile_picture')
<div class="col-12">
    <div class="alert alert-danger">{{ $message }}</div>
</div>
@enderror