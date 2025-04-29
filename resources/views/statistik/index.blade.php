@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Statistik Course</h1>

    <ul class="list-group">
        <li class="list-group-item">
            <strong>Jumlah user yang membuat course:</strong> {{ $jumlahUserBuatCourse }}
        </li>
        <li class="list-group-item">
            <strong>Jumlah user yang tidak memiliki course:</strong> {{ $jumlahUserTanpaCourse }}
        </li>
        <li class="list-group-item">
            <strong>Rata-rata jumlah course per user:</strong> {{ number_format($rataRataCoursePerUser, 2) }}
        </li>
        <li class="list-group-item">
            <strong>User yang mengikuti course terbanyak:</strong>
            @if ($userPalingBanyakCourse)
                {{ $userPalingBanyakCourse->name }} ({{ $userPalingBanyakCourse->courses_count }} course)
            @else
                Tidak ada data
            @endif
        </li>
        <li class="list-group-item">
            <strong>List user yang tidak mengikuti course sama sekali:</strong>
            <ul>
                @forelse ($userTanpaCourse as $user)
                    <li>{{ $user->name }}</li>
                @empty
                    <li>Tidak ada user</li>
                @endforelse
            </ul>
        </li>
    </ul>
</div>
@endsection
