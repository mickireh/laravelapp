{{-- messages template for errors and messages 
    gets included in the app.blade.php (every page)
    $errors session('') are defined within laravel already --}}

@if (count($errors) > 0)
{{-- errors is an object, so errors->all() --}}
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif