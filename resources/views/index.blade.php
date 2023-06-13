<x-layout>
    <x-slot:btn>
        <a href="{{route('task.new')}}" class="btn btn-primary">Criar tarefa</a>

        <a href="{{route('user.logout')}}" class="btn btn-danger">Sair</a>

    </x-slot:btn>


    <section class="graph">
        <div class="graph_header">
            {{-- <h2>Progresso do dia - {{$authUser->name}}</h2> --}}
            <h2>Progresso do dia -</h2>

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

    <script>
            async function updateTask(el){
            let status = el.checked;
            let taskId = el.dataset.id;
            let url = '{{ route('taskUpdate') }}';

            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {'Content-Type': 'application/json', 'accept': 'application/json',

            },

                body: JSON.stringify({status, taskId, _token: '{{ csrf_token() }}'})
            });
            let result = await rawResult.json();
            console.log(result);

            if(result.success){
                window.alert('sucesso!');
            } else {
                el.checked = !status;
            }

        }
    </script>
</x-layout>

{{-- lucidchart --}}

