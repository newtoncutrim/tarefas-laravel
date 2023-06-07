<x-layout pageTitle="login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            <div class="inputArea">
                <label for="title">
                    Titulo da Tarefa
                </label>
                <input type="text" name="title" required placeholder="digite titulo da tarefa">
            </div>
            <div class="inputArea">
                <label for="title">
                    Titulo da Tarefa
                </label>
                <input type="text" name="title" required placeholder="digite titulo da tarefa">
            </div>
        </form>
    </section>
</x-layout>
