
@foreach ($products as $product )
    <div class="col s3">
        <div class="section">
            <img class="avatar-img" src="{{$product->image->url}}" alt="">
            <h6>{{$product->title}}</h6>
            <small><span class="icon-calendar"></span> {{$product->created_at}}</small>
            <small> | <span class="icon-bookmark"></span> <span class="category-txt" style="background: {{$product->category->color}}">{{$product->category->name}}</span></small>
            {!! $product->stract !!}
            <div style="margin: 5px 0px !important"> 
                <span class="icon-price-tags"></span>
                @foreach ($product->tags as $tag)
                    <span class="tag-txt" style="background: {{$tag->color}}"># {{$tag->name}} </span>
                @endforeach
            </div><br/>
            <div class="row">
                <div class="col s12">
                    <button class="btn detalle-btn"> Detalles </button>
                    <button class="btn"> <span class="icon-cart"></span></button>
                </div>
            </div>
        </div>
    </div>
@endforeach
