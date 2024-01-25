<ul class="header">
    <li class="header__list">
        <a class="header__link" href="{{ route('home') }}">{{ __('Главная') }}</a>
    </li>
    <li class="header__list">
        <a class="header__link" href="{{ route('about') }}">{{ __('О нас') }}</a>
    </li>
    <li class="header__list">
        <a class="header__link" href="{{ route('portfolio') }}">{{ __('Портфолио') }}</a>
    </li>
    <li class="header__list">
        <a class="header__link" href="{{ route('contact') }}">{{ __('Контакты') }}</a>
    </li>
    <li class="header__list">
        <a class="header__link" href="{{ route('price') }}">{{ __('Прайс') }}</a>
    </li>
    <li class="header__list">
        <a class="header__link" href="{{ route('article.index') }}">{{ __('блог') }}</a>
    </li>
    <li class="header__list">
        <a class="header__link" href="{{ route('category.index') }}">{{ __('все категории') }}</a>
    </li>
</ul>
