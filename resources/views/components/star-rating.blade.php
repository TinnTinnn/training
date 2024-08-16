@if($rating)
    @for($i = 1; $i <= 5; $i++)
        @if($i <= floor($rating))
            <img src="{{ asset('images/star-on.png') }}" alt="Filled Star" width="20" height="20">
        @elseif($i == ceil($rating) && $rating - floor($rating) >= 0.5)
            <img src="{{ asset('images/star-half.png') }}" alt="Half Star" width="20" height="20">
        @else
            <img src="{{ asset('images/star-off.png') }}" alt="Off Star" width="20" height="20">
        @endif
    @endfor
@else
    No rating yet
@endif
