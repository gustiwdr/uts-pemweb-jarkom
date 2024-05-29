@extends('layouts.frontend')
@section('title', 'HOME')

@section('content')
<body>

  <!-- food section -->
  <section class="food_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2><br>Our Menu</h2>
        </div>

        <ul class="filters_menu">
            <li class="active" data-filter="*">All</li>
            @foreach($categories as $category)
                <li data-filter=".{{ strtolower($category->name) }}">{{ $category->name }}</li>
            @endforeach
        </ul>

        <div class="filters-content">
            <div class="row grid">
                @php
                    $categoryIcons = [
                        'burger' => [
                          'storage/1/66574cde81b38_beef-burger.jpg',
                          'storage/3/66574ef50cf46_chicken-burger.jpg',
                          'storage/8/66575274d046f_cheese-burger.jpg',
                        ],
                        'pizza' => [
                            'storage/5/665750ee84593_mushroom-pizza.jpg',
                            'storage/9/665752de716e6_sausage-pizza.jpg',
                        ],
                        'fries' => 'storage/6/6657514b70810_french-fries.jpg',
                    ];
                @endphp

                @foreach($categories as $category)
                    @foreach($category->menus as $menuIndex => $menu)
                        @php
                            // Ambil ikon kategori
                            $categoryName = strtolower($category->name);
                            $categoryIcon = $categoryIcons[$categoryName];
                            if (is_array($categoryIcon)) {
                                $menuIcon = $categoryIcon[$menuIndex % count($categoryIcon)];
                            } else {
                                $menuIcon = $categoryIcon;
                            }
                        @endphp
                        <div class="col-sm-6 col-lg-4 all {{ $categoryName }}">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        @if($menuIcon)
                                            <img src="{{ asset($menuIcon) }}" alt="{{ $menu->name }}" style="width: 100%; object-fit:cover">
                                        @endif
                                    </div>
                                    <div class="detail-box">
                                        <h5>{{ $menu->name }}</h5>
                                        <p>{{ $menu->description }}</p>
                                        <div class="options">
                                            <h6>IDR {{ number_format($menu->price, 0, ',', '.') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</section>




  <!-- end food section -->

</body>

</html>
@endsection