<x-layout>
    <x-slot:btn>
        <a href="{{route('task.new')}}" class="btn btn-primary">Criar tarefa</a>

    </x-slot:btn>


    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia - {{$authUser->name}}</h2>
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
        @foreach ($tasks as $task)
        <x-task :data=$task/>
        @endforeach


    </section>
</x-layout>

