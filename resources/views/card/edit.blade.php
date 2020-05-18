@extends('layouts.app')
@section('content')
<div class="editCardPage">
    <div class="container">
  <!-- バリデーションエラーの場合に表示 --> 
  @include('common.errors')
  <form action="{{ url('/card/edit')}}" method="POST" >
    {{csrf_field()}} 
      <div class="form-group"> 
        <label for="card" class="control-label">タイトル</label> 
        <div class=""> 
          <!-- リスト名 --> 
          <input type="text" name="card_title" value="{{ old('card_name', $card->title) }}" class="form-control " required autofocus> 
        </div>
        <input type="hidden" name="id" value="{{ old('id', $card->id) }}"> 
      </div>
      <div class="form-group"> 
        <label for="card" class="control-label">メモ</label> 
        <div class=""> 
          <!-- リスト名 --> 
          <textarea name="card_memo" class="form-control"  required >{{ old('card_name', $card->memo) }}</textarea>
          
        </div>
      </div>
      <div class="form-group">
          <label for="card" class="control-label">リスト名</label>
          <select name="list_name" id="">
              @foreach($lists as $list)
                  <option value="{{ $list->id }}">{{ $list->title }} </option>
              @endforeach
          </select>
          
           
      </div>
      <div class="form-group"> 
        <div class="text-center"> 
          <input type="submit" name="" value="更新する" class="updateBtn" data-disable-with="更新中">
        </div>
      </div>
    </form>
    </div>
</div>
@endsection