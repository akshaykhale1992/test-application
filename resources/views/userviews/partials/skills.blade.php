<div class="col-6 col-12-small skills-block">
    <label for="skill">Skill:</label>
    {!! Form::text('skill', ($user !== null) ? $user->skill : old('skills'), ['id' => 'skill']) !!}
    @error('skill')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="col-6 col-12-small skills-block">
    <label for="certificate">Certificate:</label>
    {!! Form::file('certificate_file') !!}
    @error('certificate_file')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>