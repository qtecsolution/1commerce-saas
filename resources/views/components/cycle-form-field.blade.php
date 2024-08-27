<div class="form-group">
    {{-- <label :for="$field['name']" style="color: {{ @$styles['color'] }} !important">{{ $field['title'] }}</label> --}}

    @if (in_array($field['type'], ['text', 'number', 'date', 'time', 'datetime-local']))
        <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" class="email-bt"
            @if ($field['is_required']) required @endif
            placeholder="{{ ucfirst(str_replace('_', ' ', $field['name'])) }}"
            style="background-color: {{ @$styles['background_color'] }} !important;" />
    @elseif ($field['type'] === 'textarea')
        <textarea name="{{ $field['name'] }}" rows="2" class="form-control"
            @if ($field['is_required']) required @endif></textarea>
    @elseif ($field['type'] === 'select')
        <select name="{{ $field['name'] }}" class="form-control" @if ($field['is_required']) required @endif
            style="background-color: {{ @$styles['background_color'] }} !important;">
            @foreach (json_decode($field['options'], true) as $option)
                <option>{{ $option }}</option>
            @endforeach
        </select>
    @elseif ($field['type'] === 'radio')
        @foreach (json_decode($field['options'], true) as $index => $option)
            <div class="form-check">
                <input type="radio" name="{{ $field['name'] }}" id="{{ $field['name'] }}{{ $index }}"
                    value="{{ $option }}" class="form-check-input"
                    @if ($field['is_required']) required @endif />
                <label for="{{ $field['name'] }}{{ $index }}"
                    class="form-check-label">{{ $option }}</label>
            </div>
        @endforeach
    @elseif ($field['type'] === 'checkbox')
        @foreach (json_decode($field['options'], true) as $index => $option)
            <div class="form-check">
                <input type="checkbox" name="{{ $field['name'] }}[]" id="{{ $field['name'] }}{{ $index }}"
                    value="{{ $option }}" class="form-check-input"
                    @if ($field['is_required']) required @endif />
                <label for="{{ $field['name'] }}{{ $index }}"
                    class="form-check-label">{{ $option }}</label>
            </div>
        @endforeach
    @endif

    <div class="mt-1 d-flex justify-content-end">
        <!-- Edit and Delete buttons can be added here -->
    </div>
</div>
