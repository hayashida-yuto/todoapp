@extends('layouts.app')

@section('content')
@include('common.errors')
<div class="newCardPage">
  <div class="cantainer">
    
    <form class="new_card" id="new_card" action="{{ url('/card/add',$listing_id)}}" accept-charset="UTF-8" method="post">
    {{ csrf_field() }}
      <div class="form-group">
        <label for="card_title">タイトル</label><br>
        <input id="title" type="text" class="form-control" name="card_title" required autofocus>
        
      </div>

      <div class="form-group">
        <label for="card_memo">メモ</label><br>
        <textarea id="memo" name="card_memo" required>メモ</textarea>

      <div class="form-groupe text-center">
        <input type="submit" name="" value="作成する" class="addBtn" data-disable-with="作成中">
      </div>
      
    </form>
  </div>
</div>
@endsection