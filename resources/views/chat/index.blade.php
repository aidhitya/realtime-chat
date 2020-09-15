@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-7">
            <div class="chat-box">
                <chat-box/>
            </div>
            <div class="chat-form">
                <chat-form/>
            </div>
        </div>
        <div class="col-md-4">
            <chat-user-list/>
        </div>
    </div>
    </div>
@endsection
