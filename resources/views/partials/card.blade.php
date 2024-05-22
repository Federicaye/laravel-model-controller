<div >
    <img src="{{$item->image ? $item->image : $item->cover_image}}" class="card-img-top" alt="{{$item->title}}">
    <div class="card-body">
        <h5 class="card-title">{{$item->title}}</h5>
        @if($item->plot)
            <p class="card-text">{{$item->plot}}</p>
        @else
            <div>Original Title: {{$item->original_title}}</div>
        @endif
       
    </div>
</div>