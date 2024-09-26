@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Notifications</h1>

        <ul>
            @foreach($notifications as $notification)
                <li class="{{ $notification->read_at ? 'read' : 'unread' }}">
                    <a href="{{ route('notifications.markAsRead', $notification) }}">
                        {{ $notification->title }}
                    </a>
                    <p>{{ $notification->body }}</p>
                    <span class="timestamp">{{ $notification->created_at->diffForHumans() }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection