<style>
    .call-to-btn {
        position: fixed;
        z-index: 99;
        bottom: 100px;
        right: 30px;
        padding: 10px 10px;
        background: {{ $footer_area['background_color'] }};
        border-radius: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: {{ $footer_area['color'] }};
        font-size: 17px;
    }

    .call-to-btn .material-icons-outlined {
        font-size: 17px;
    }

    @media only screen and (max-width: 575px) {
        .call-to-btn {
            bottom: 60px;
            right: 15px;
            padding: 5px 8px;
            font-size: 14px;
        }

        .call-to-btn .material-icons-outlined {
            font-size: 14px;
        }
    }

    #single1 .content .btn-order.btn1 {
        background-color: {{ $hero_area['button']['color'] }} !important;
        color: {{ $hero_area['button']['text_color'] }} !important;
        border-color: {{ $hero_area['button']['border_color'] }} !important;
    }

    #single1 .content .btn-order.btn1:hover {
        background-color: {{ $hero_area['button']['hover_color'] }} !important;
        color: {{ $hero_area['button']['hover_text_color'] }} !important;
        border-color: {{ $hero_area['button']['hover_border_color'] }} !important;
    }

    #single1 .content .btn-order.btn2 {
        background-color: {{ $hero_area['bottom_button']['color'] }} !important;
        color: {{ $hero_area['bottom_button']['text_color'] }} !important;
        border-color: {{ $hero_area['bottom_button']['border_color'] }} !important;
    }

    #single1 .content .btn-order.btn2:hover {
        background-color: {{ $hero_area['bottom_button']['hover_color'] }} !important;
        color: {{ $hero_area['bottom_button']['hover_text_color'] }} !important;
        border-color: {{ $hero_area['bottom_button']['hover_border_color'] }} !important;
    }

    #single1 .content .form-content .right .submit-btn {
        background-color: {{ $order_area['button']['color'] }} !important;
        color: {{ $order_area['button']['text_color'] }} !important;
        border-color: {{ $order_area['button']['border_color'] }} !important;
    }

    #single1 .content .form-content .right .submit-btn:hover {
        background-color: {{ $order_area['button']['hover_color'] }} !important;
        color: {{ $order_area['button']['hover_text_color'] }} !important;
        border-color: {{ $order_area['button']['hover_border_color'] }} !important;
    }

    .site_background_color {
        background-color: {{ $site_color['background_color'] }} !important;
    }

    .site_foreground_color {
        background-color: {{ $site_color['foreground_color'] }} !important;
    }

    .text_foreground_color {
        color: {{ $site_color['foreground_color'] }} !important;
    }

    .primary_text_color {
        color: {{ $site_color['primary_text_color'] }} !important;
    }

    .secondary_text_color {
        color: {{ $site_color['secondary_text_color'] }} !important;
    }
</style>
