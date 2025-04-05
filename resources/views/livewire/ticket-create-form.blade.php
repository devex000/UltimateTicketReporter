<div>

    @if (session()->has('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit">
        <div>
            <label for="problem_since">Problem since</label><br>
            <input type="datetime-local" wire:model="problem_since" id="problem_since">
        </div>

        <div>
            <label for="description">Description</label><br>
            <textarea wire:model="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="priority_id">Priority</label><br>
            <select wire:model.live="priority_id" id="priority_id">
                <option value="">-- select priority --</option>
                @foreach ($priorities as $priority)
                    <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="category_id">Category</label><br>
            <select wire:model.live="category_id" id="category_id">
                <option value="">-- select category --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <hr>
        <p>Info</p>
        <p style="font-style: italic; color: #555;">Category info: {{$category_description}}</p>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>