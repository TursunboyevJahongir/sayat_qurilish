<?php
/**
 * @var \App\Models\Category[] $categories
 */
    ?>
<div class="sidebar">
    <div class="widget">
        <h6 class="widget-title">KATEGORIYALAR</h6>
        <ul class="categories">
            @foreach($categories as $category)
                <li class="active"><a href="{{route('catalog.category', ['id' => $category->id])}}">{{$category->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>
