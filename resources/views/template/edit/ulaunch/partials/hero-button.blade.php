<div>
    <div class="form-group mb-2">
        <label for="text" class="form-label">Button Text:</label>
        <input type="text" placeholder="Get Started" v-model="hero_button_title" class="form-control">
    </div>

    <div class="form-group mb-2">
        <label for="text" class="form-label">Button Color:</label>
        <input type="text" placeholder="transparent" v-model="hero_button_color" class="form-control">
    </div>

    <div class="form-group mb-2">
        <label for="text" class="form-label">Button Border Color:</label>
        <input type="text" placeholder="white" v-model="hero_button_border_color" class="form-control">
    </div>

    <div class="form-group mb-2">
        <label for="text" class="form-label">Button Hover Color:</label>
        <input type="text" placeholder="white" v-model="hero_button_hover_color" class="form-control">
    </div>

    <div class="form-group mb-2">
        <label for="text" class="form-label">Button Hover Border Color:</label>
        <input type="text" placeholder="white" v-model="hero_button_hover_border_color" class="form-control">
    </div>

    <div class="form-group mb-2 text-end">
        <button class="btn btn-primary" @click="closeModal">Save</button>
    </div>
</div>