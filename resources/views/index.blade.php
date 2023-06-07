<x-layout>

    <x-slot:btn>
        <a href="#" class="btn btn-primary">Criar tarefa</a>

    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header_line">
            </div>
            <div class="graph_header_date">
                Data
            </div>
        </div>
        <div class="graph_header_subititle">
            Tarefas: 3/6
        </div>
        <div class="graph_placeholder">

        </div>
        <div class="tasks_left_footer">
            <img src="/asset/images/icon-info.png" alt="">
            Restam 3 tarefas a serem realizadas
        </div>

    </section>
    <section class="lista">
        <div class="list-header">
            <select class="list-header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        @php
            $tasks = [
                ['id' => 1, 'title' => 'minha primeira task', 'done' => false, 'category' => 'minha 1 categoria', 'delete_url' => 'https://www.google.com.br/', 'edit_url' => 'https://www.google.com.br/'],
                ['id' => 2, 'title' => 'minha 2 task', 'done' => true, 'category' => 'minha 2 categoria', 'delete_url' => 'https://www.google.com.br/', 'edit_url' => 'https://www.google.com.br/'],
                [
                'id' => 3,
                'title' => 'minha 3 task',
                'done' => false,
                'category' => 'minha 3 categoria',
                'delete_url' => 'https://www.google.com.br/', 'edit_url' => 'https://www.google.com.br/'
                ]
            ];
        @endphp

        <x-task :data=$tasks[0]/>
        <x-task :data=$tasks[1]/>
        <x-task :data=$tasks[2]/>


    </section>
</x-layout>

