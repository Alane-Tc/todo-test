<x-layouts.app>
    <h1>Nueva Tarea</h1>

    <form method="POST" action="{{ route('todo.store') }}">
        @csrf
        <!-- Title Input -->
        <div>
            <x-forms.input label="Title" name="title" type="text" placeholder="Enter task title" />
        </div>

        <!-- Description Input -->
        <div>
            <x-forms.input label="Description" name="description" type="text" placeholder="Enter task description" />
        </div>

        <!-- Completed Checkbox -->
        <div>
            <x-forms.checkbox label="Completed" name="completed" />
        </div>

        <!-- Submit Button -->
        <x-button type="primary" class="w-full">{{ __('Create Task') }}</x-button>
    </form>
</x-layouts.app>