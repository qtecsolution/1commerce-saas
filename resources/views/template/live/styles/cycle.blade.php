<style>
    .header_section {
        background-image: linear-gradient(-13deg, #ffffff 30%, {{ $hero_area['background_color'] }} 20%) !important;
    }

    .box_main_3:after {
        background-color: {{ $feature_area['background_color'] }} !important;
    }

    .about_section {
        background-color: {{ $about_area['background_color'] }} !important;
    }

    .contact_section {
        background-color: {{ $order_area['background_color'] }} !important;
    }

    .footer_section {
        background-color: {{ $order_area['background_color'] }} !important;
    }

    .buy_bt a {
        background-color: {{ $feature_area_button['color'] }} !important;
        color: {{ $feature_area_button['text_color'] }} !important;
        border-color: {{ $feature_area_button['border_color'] }} !important;
    }

    .buy_bt a:hover {
        background-color: {{ $feature_area_button['hover_color'] }} !important;
        color: {{ $feature_area_button['hover_text_color'] }} !important;
        border-color: {{ $feature_area_button['hover_border_color'] }} !important;
    }

    .send_btn button {
        background-color: {{ $order_area_button['color'] }} !important;
        color: {{ $order_area_button['text_color'] }} !important;
    }

    .send_btn button:hover {
        background-color: {{ $order_area_button['hover_color'] }} !important;
        color: {{ $order_area_button['hover_text_color'] }} !important;
    }
</style>
