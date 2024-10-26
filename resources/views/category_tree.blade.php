{{-- <ul>
    @foreach ($categories as $category)
        <li>
            <a href="#">{{ $category->name }}</a>
            @if ($category->children->isNotEmpty())
                <ul>
                    @include('category_tree', ['categories' => $category->children])
                </ul>
            @endif
        </li>
    @endforeach
</ul> --}}



<ul>
     @foreach($categories as $category)
     <li>
        <a href="#">{{$category->name}}</a>
        @if($category->children->isNotEmpty())
        <ul>
            @include('category_tree',['categories'=>$category->children])
        </ul>
        @endif

            
   
    </li>
     @endforeach
     
  
</ul>