<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
</head>

<body>
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'タイトル'を埋め込む --}}
@section('title', 'Mutter')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h2>Mutter</h2>

                <form action="{{ url('admin/sns/index') }}" method="post" enctype="multipart/form-data">


                   @if (count($errors) > 0)
                       <ul>
                           @foreach($errors->all() as $e)
                               <li>{{ $e }}</li>
                           @endforeach
                       </ul>
                   @endif
                   
                   <div class="mb-3">
                       <label for="body" class="form-label">本文</label>
                       <textarea class="form-control" name="body" rows="1" id="body">{{ old('body') }}</textarea>
                   </div>


                   {{ csrf_field() }}
                   <div class="text-end">
                   <button type="submit" class="btn btn-primary mt-2 text-center px-3 py-2">つぶやく</button>
                   </div>


               </form>
            </div>
        </div>
    </div>

   
@endsection
</body>
</html>