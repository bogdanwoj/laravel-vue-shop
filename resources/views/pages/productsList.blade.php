@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row mt-60 text-center">
            @foreach($products as $product)
                <div class="col-4 ">
                    <div class="card mt-20" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $product->image_name }}" alt="Product Image" style="height: 250px">
                        <div class="card-body m-1">
                            <h4 class="card-title">{{ $product->name }}</h4>
                            <p class="card-text">{{ Str::limit($product->description, 10) }}</p>
                            <p class="card-text">Price: {{ $product->price }}</p>
                            <p class="card-text">Final price: {{ $product->sale_price }}</p>
                            <add-to-cart product-id="{{$product->id}}" user-id="{{auth()->user()->id ?? 0}}"/>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<script>
    import AddToCart from "../../js/components/AddToCart";
    export default {
        components: {AddToCart}
    }
</script>
