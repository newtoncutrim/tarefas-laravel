<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarefas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="/asset/css/style.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="/asset/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Criar tarefa</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do dia</h2>
                        <div class="graph_header_line">
                        </div>
                        <div class="graph_header_date">
                            <img src="/asset/images/icon-prev.png" alt="">
                            13 de Dez
                            <img src="/asset/images/icon-next.png" alt="">
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
            </main>
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
</body>
</html>
