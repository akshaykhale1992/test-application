<div class="col-6 col-12-xsmall">
    <label for="education">Education:</label>
    {!! Form::text('education', ($user !== null) ? $user->education : old('education'), ['id' => 'education']) !!}
    @error('education')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall">
    <label for="year_of_completion">Year of completion:</label>
    {!! Form::text('year_of_completion', ($user !== null) ? $user->year_of_completion : old('year_of_completion'), ['id' => 'year_of_completion']) !!}
    @error('year_of_completion')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-12 col-12-xsmall">
    <label for="profession">Profession:</label>
    {!! Form::select('profession',['salaried' => 'Salaried','self_employed' => 'Self Employed'], ($user !== null) ? $user->profession : old('profession')) !!}
    @error('profession')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall salaried-block" style="display: {{ ($user === null) ? 'block' : (($user->profession === 'salaried') ? 'block' : 'none') }}">
    <label for="company_name">Company Name:</label>
    {!! Form::text('company_name', ($user !== null && $user->company_name !== null) ? $user->company_name : old('company_name'), ['id' => 'company_name']) !!}
    @error('company_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall salaried-block" style="display: {{ ($user === null) ? 'block' : (($user->profession === 'salaried') ? 'block' : 'none') }}">
    <label for="joining_date">Date of Joining:</label>
    {!! Form::text('joining_date', ($user !== null && $user->joining_date !== null) ? $user->joining_date->format('Y-m-d') : old('joining_date'), ['id' => 'joining_date']) !!}
    @error('joining_date')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall self-employed-block" style="display: {{ ($user === null) ? 'block' : (($user->profession === 'salaried') ? 'none' : 'block') }}">
    <label for="business_name">Business Name:</label>
    {!! Form::text('business_name', ($user !== null && $user->business_name !== null) ? $user->business_name : old('business_name'), ['id' => 'business_name']) !!}
    @error('business_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-xsmall self-employed-block" style="display: {{ ($user === null) ? 'block' : (($user->profession === 'salaried') ? 'none' : 'block') }}">
    <label for="location">Location:</label>
    {!! Form::text('location', ($user !== null && $user->location !== null) ? $user->location : old('location'), ['id' => 'location']) !!}
    @error('location')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>