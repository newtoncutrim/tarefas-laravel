<x-layout pageTitle="login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}">

            <x-form.text_input type="text" name="title" label="Titulo da Tarefa" placeholder="digite o titulo da tarefa" required="required" value="{{$task->title}}"/>

            <x-form.text_input type="datetime-local" name="due_date" label="Data da Realização" required="required" value="{{$task->due_date}}"/>

            <x-form.select_input name="category_id" label="Categoria" required="required" value="{{}}">
            @foreach ($categories as $category )
                <option value="{{$category->id}}"
                    @if ($category->id == $task->category_id)
                    selected
                    @endif
                    >{{$category->title}}</option>
            @endforeach
            </x-form.select_input>

            <x-form.check name="is_done" label="Tarefa Realizada?" checked="{{$task->is_done}}"/>

            <x-form.textArea_input name="description" label="Descrição da Tarefa" value="{{$task->description}}"/>


            <x-form.form_button resetText="Resetar" submitText="Atualizar"/>
        </form>
    </section>
</x-layout>
