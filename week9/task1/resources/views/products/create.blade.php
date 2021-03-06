@extends('layouts.app')

@section('title')
  Products Index
@endsection

@section('content')

      <h1>Create</h1>
      @if (count($errors) > 0)
        <div class="alert">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif
      
      <form method="POST" action = "/product">
          {{csrf_field()}}
          <p><label>Name: </label><input type="text" name="name" value="{{ old('name')}}"></p>
          <p><label>Price: </label><input type="text" name="price" value="{{ old('price')}}"></p>
          <p> <select name = "manufacturer">
              @foreach ($mans as $man)
                @if ($man->id == old('manufacturer'))
                  <option value="{{$man->id}}" selected="selected">{{$man->name}}</option>
                @else
                 <option value="{{$man->id}}">{{$man->name}}</option>
                @endif
              @endforeach
          </select></p>
          <input type="submit" value="Create">
      </form>
   
@endsection

