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
                <input type="text" id="title" name="title" required placeholder="digite titulo da tarefa">
            </div>
            <div class="inputArea">
                <label for="due_date">
                    Data da Realização
                </label>
                <input type="date" id="due_date" name="due_date" required placeholder="digite titulo da tarefa">
            </div>
            <div class="inputArea">
                <label for="category">
                    Categoria
                </label>
                <select id="category" name="category" required>
                    <option selected disabled>Selecione a Categoria</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="inputArea">
                <label for="description">
                    Descrição da Tarefa
                </label>
                <textarea id="description" name="description" placeholder="Digite a descrição da Tarefa" ></textarea>
            </div>
        </form>
    </section>
</x-layout>
