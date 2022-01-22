<div>
    <h1>Form</h1>
    <form wire:submit.prevent="save">
        <label for="title">
            <input 
                wire:model="title"
                type="text" 
                placeholder="{{ __('Title') }}"
            >
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </label>
        <label for="content">
            <input 
                wire:model="content"
                type="text" 
                placeholder="{{ __('Content') }}"
            >
            @error('content') <span class="error">{{ $message }}</span> @enderror
        </label>
        <input type="submit" value="{{ __('Save') }}">
    </form>
</div>
