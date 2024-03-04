<!-- stylistpanel.blade.php -->
@extends('layouts.app') <!-- Предполагается, что у вас есть макет app.blade.php -->

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Stylist Panel</h1>

        @if(count($records) > 0)
            <!-- Вывод данных из таблицы records -->
            @foreach($records as $record)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $record->name }} - {{ $record->service }}</h5>
                        <p class="card-text"><strong>Stylist:</strong> {{ $record->stylist }}</p>
                        <p class="card-text"><strong>Phone:</strong> {{ $record->phone }}</p>
                        <p class="card-text"><strong>Date:</strong> {{ $record->date }}</p>
                        <p class="card-text"><strong>Time:</strong> {{ $record->time }}</p>
                        <p class="card-text"><strong>Message:</strong> {{ $record->message }}</p>
                    </div>
                    <form action="{{ route('records.destroy', $record->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </form>
                </div>
            @endforeach
        @else
            <p>No records found.</p>
        @endif
    </div>
@endsection
