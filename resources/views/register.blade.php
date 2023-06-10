<x-layout>
    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary">Já possui conta?Faça login</a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Criar Usuario</h1>
        <form method="POST" action="{{route('user.register_action')}}">
            @csrf
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <x-form.text_input type="text" name="name" label="Nome Completo" placeholder="digite seu nome" required="required"/>

            <x-form.text_input type="email" name="email" label="Email" placeholder="digite seu email" required="required"/>

            <x-form.text_input type="password" name="password" label="Senha" placeholder="digite sua senha" required="required"/>

            <x-form.text_input type="password" name="password_confirmation" label="Confirmar Senha" placeholder="confirme sua senha" required="required"/>


            <x-form.form_button resetText="Limpar" submitText="Registrar-se"/>
        </form>
    </section>
</x-layout>
