<x-layout pageTitle="login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf

            <x-form.text_input type="text" name="title" label="Titulo da Tarefa" placeholder="digite o titulo da tarefa" required="required"/>

            <x-form.text_input type="datetime-local" name="due_date" label="Data da Realização" placeholder="digite o titulo da tarefa" required="required"/>

            <x-form.select_input name="category_id" label="Categoria" required="required">
                @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->title}}</option>

                @endforeach
            </x-form.select_input>

            <x-form.textArea_input name="description" label="Descrição da Tarefa" placeholder="Digite a descrição da Tarefa"/>


            <x-form.form_button resetText="Resetar" submitText="Criar"/>
        </form>
    </section>
</x-layout>
