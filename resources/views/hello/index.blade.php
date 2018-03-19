@extends('layouts.helloapp')
@section('title','index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます</p>
    
    @each('components.item',$data,'item')
    
@endsection

@section('footer')
copyright 2018 suzuki
@endsection