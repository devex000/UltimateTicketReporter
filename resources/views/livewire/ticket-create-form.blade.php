<div>

    @if (session()->has('message'))
        <div style="color: green;">{{ session('message') }}</div>
    @endif

    <form wire:submit.prevent="submit">
        <table>
            <tr>
                <td>
                    <label for="problem_since">Problem since</label>
                </td>
                <td>
                    <input type="datetime-local" wire:model="problem_since" id="problem_since">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="priority_id">Priority</label>
                </td>
                <td>
                    <select wire:model.live="priority_id" id="priority_id">
                        <option value="">-- select priority --</option>
                        @foreach ($priorities as $priority)
                            <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td> {{$priority_description}} </td>
            </tr>
            <tr>
                <td>
                    <label for="category_id">Category</label>
                </td>
                <td>
                    <select wire:model.live="category_id" id="category_id">
                        <option value="">-- select category --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td> {{$category_description}}</td>
            </tr>
            <tr>
                <td>
                    <label for="subcategory_id">Subcategory</label>
                </td>
                <td>
                    <select wire:model.live="subcategory_id" id="subcategory_id">
                        <option value="">-- select subcategory --</option>
                        @foreach ($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td> {{$subcategory_description}} </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="description">Description</label><br>
                    <textarea wire:model="description" id="description" cols="50" rows="10"></textarea>
                </td>
            </tr>
        </table>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>