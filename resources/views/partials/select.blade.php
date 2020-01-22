<div class="column is-3 has-text-centered" style="margin: 0.5rem">
    <div class="box">
        <h5 class="title is-5">{{$category->name}}</h5>
        <div class="select">
            <select name="{{$category->name}}">
                <option>Choose</option>
                @foreach($category->product as $product)
                    <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>
        <hr>
        <button class="button is-fullwidth is-outlined is-dark" data-category="{{$category->name}}" style="border-radius: 0">ADD</button>
    </div>
</div>



