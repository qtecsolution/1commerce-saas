<div class="price_card">
    <div class="price_section_card active">
        <div class="">
            <div class="price_section_card_header">
                <span class="plan">{{ $item->title }} </span>
                <div class="plan_price">
                    <h1 class="title">&#2547;{{ number_format($item->price, 0) }}</h1>
                    <h5 class="sub_title">{{ $item->price == 0 ? 'Free' : $item->duration . ' days' }}</h5>
                </div>
            </div>
            <ul class="price_section_card_list list-unstyled">
                @foreach (json_decode($item->features, true) as $feature)
                    <li class="item">
                        <figure class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M19.8367 8.43673L10.2367 18.0367C10.1531 18.1206 10.0538 18.1872 9.94438 18.2326C9.83498 18.2781 9.71769 18.3014 9.59924 18.3014C9.48079 18.3014 9.3635 18.2781 9.25411 18.2326C9.14471 18.1872 9.04535 18.1206 8.96174 18.0367L4.76174 13.8367C4.67802 13.753 4.61162 13.6536 4.56631 13.5442C4.521 13.4349 4.49768 13.3176 4.49768 13.1992C4.49768 13.0808 4.521 12.9636 4.56631 12.8542C4.61162 12.7448 4.67802 12.6454 4.76174 12.5617C4.84546 12.478 4.94485 12.4116 5.05423 12.3663C5.16361 12.321 5.28085 12.2977 5.39924 12.2977C5.51764 12.2977 5.63487 12.321 5.74425 12.3663C5.85364 12.4116 5.95302 12.478 6.03674 12.5617L9.59999 16.125L18.5632 7.16323C18.7323 6.99416 18.9616 6.89917 19.2007 6.89917C19.4398 6.89917 19.6692 6.99416 19.8382 7.16323C20.0073 7.33231 20.1023 7.56162 20.1023 7.80073C20.1023 8.03984 20.0073 8.26916 19.8382 8.43823L19.8367 8.43673Z"
                                    fill="#52474F" />
                            </svg>
                        </figure>

                        <p class="text">{{ $feature }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <a href="{{ route('web.select_package', $item->id) }}" class="plan_button w-100 justify-content-center ">
            চিরকাল ফ্রি প্ল্যান
        </a>
    </div>
</div>
