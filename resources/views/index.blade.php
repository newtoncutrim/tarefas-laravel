<x-layout>
    <x-slot:btn>
        <a href="#" class="btn btn-primary">Criar tarefa</a>
        <a href="#" class="btn btn-primary">Criar tarefa</a>
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
        <div class="task-list">
            <div class="task">
                <div class="title">
                    <input type="checkbox">
                    <div class="task_title">Titulo da tarefa</div>
                </div>
                <div class="priority">
                    <div class="sphere"></div>
                    <div>Titulo da tarefa</div>
                </div>
                <div class="actions">
                    <a href="#">
                        <img src="/asset/images/icon-edit.png" alt="">
                    </a>
                    <a href="#">
                        <img src="/asset/images/icon-delete.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>

