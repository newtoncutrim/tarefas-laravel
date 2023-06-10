
<x-layout pageTitle="login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">Rgistre-se</a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Login</h1>
        <form method="POST" action="{{route('user.login_action')}}">
            @csrf

            <x-form.text_input type="email" name="email" label="Email" placeholder="digite seu email" required="required"/>

            <x-form.text_input type="password" name="password" label="Senha" placeholder="digite sua senha" required="required"/>


            <x-form.form_button resetText="Limpar" submitText="Login"/>
        </form>
    </section>
</x-layout>
