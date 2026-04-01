<li class="dropdown"><a href="#">Home</a>
    <ul>
        <li><a href="{{ route('home') }}">Home Restauran</a></li>
        <li><a href="{{ route('indexTwo') }}">Home Pizza</a></li>
        <li><a href="{{ route('indexThree') }}">Home Burger</a></li>
        <li><a href="{{ route('indexFour') }}">Home Chiken</a></li>
        <li><a href="{{ route('indexFive') }}">Juice & Drinks</a></li>
        <li><a href="{{ route('indexSix') }}">Home Grill</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">Menu</a>
    <ul>
        <li><a href="{{ route('menuRestaurant') }}">Menu Restaurant</a></li>
        <li><a href="{{ route('menuPizza') }}">Menu Pizza</a></li>
        <li><a href="{{ route('menuGrill') }}">Menu Gril</a></li>
        <li><a href="{{ route('menuBurger') }}">Menu Burger</a></li>
        <li><a href="{{ route('menuSea') }}">Menu Sea Food</a></li>
        <li><a href="{{ route('menuChicken') }}">Menu Chicken</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">pages</a>
    <ul>
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('history') }}">Our History</a></li>
        <li><a href="{{ route('faqs') }}">faqs</a></li>
        <li class="dropdown"><a href="#">chefs</a>
            <ul>
                <li><a href="{{ route('chef') }}">Our chefs</a></li>
                <li><a href="{{ route('chefDetails') }}">chef Details</a></li>
            </ul>
        </li>
        <li><a href="{{ route('gallery') }}">Gallery</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">blog</a>
    <ul>
        <li><a href="{{ route('blog') }}">blog standard</a></li>
        <li><a href="{{ route('blogDetails') }}">blog details</a></li>
    </ul>
</li>
<li class="dropdown"><a href="#">shop</a>
    <ul>
        <li><a href="{{ route('shop') }}">Products</a></li>
        <li><a href="{{ route('productDetails') }}">Product Details</a></li>
        <li><a href="{{ route('cart') }}">Shopping Cart</a></li>
        <li><a href="{{ route('checkout') }}">Checkout Page</a></li>
    </ul>
</li>
<li><a href="{{ route('contact') }}">Contact</a></li>