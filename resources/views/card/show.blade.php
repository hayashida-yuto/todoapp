@extends('layouts.app')

@section('content')
<div class="showCardPage">
    <div class="container">
        <div class="show_group">
            <label for="card_content">タイトル</label>
            <h2 class="card_title">{{$card->title}}</h2>
        </div>
        <div class="show_group">
            <label for="card_content">メモ</label>
            <p class="card_title">{{$card->memo}}</p>
        </div>
        <div class="show_group">
            <label for="card_content">リスト名</label>
            <p class="card_title">{{$listing->title}}</p>
        </div>
        <div class="show_group text-center">
            <form action="{{ url('cardsedit',$card->id) }}" method="GET">
                <input type="submit" name="" value="編集する" class="editBtn" />
            </form>
        </div>    
        <div class="show_group text-center">
            <a onclick="return confirm('{{ $card->title }}を削除して大丈夫ですか？')" href="{{url('/cardsdelete',$card->id)}}">削除する</a>
        </div>
    </div>
</div>
@endsection