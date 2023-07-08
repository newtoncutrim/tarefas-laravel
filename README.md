## Guia de Instalação e Execução do Projeto de App de Tarefas

Este guia fornece instruções detalhadas sobre como baixar, instalar e executar o projeto de app de tarefas em sua máquina a partir do GitHub.

### Requisitos

Antes de prosseguir, certifique-se de que sua máquina atenda aos seguintes requisitos:

- Docker instalado. Se você ainda não tem o Docker, faça o download e instale a partir do site oficial do Docker (https://www.docker.com/).

### Passo 1: Baixar o código do GitHub

1. Acesse o repositório do projeto no GitHub: [link para o repositório do projeto].


### Passo 2: Configurar o ambiente

1. Abra um terminal ou prompt de comando.
2. Navegue até a pasta raiz do projeto que você baixou do GitHub.

### Passo 3: Configurar o arquivo .env

1. Faça uma cópia do arquivo `.env.example` e renomeie-a para `.env`.
2. Abra o arquivo `.env` em um editor de texto.
3. Configure as variáveis de ambiente no arquivo `.env` de acordo com suas preferências e configurações do banco de dados.

### Passo 4: Executar o projeto com Docker Compose

1. No terminal ou prompt de comando, execute o seguinte comando:

   ```shell
   docker-compose up --build -d
   ```

   Isso criará os contêineres necessários para o projeto, incluindo o contêiner do aplicativo Laravel e o contêiner do banco de dados.
   
2. Aguarde até que todos os contêineres sejam criados e iniciados com sucesso.

### Passo 5: Configurar o banco de dados

1. Execute o seguinte comando para executar as migrações do banco de dados e criar as tabelas necessárias:

   ```shell
   docker-compose exec app php artisan migrate
   ```

### Passo 6: Acessar o aplicativo

1. Abra um navegador da web.
2. Acesse o seguinte URL para visualizar o aplicativo de tarefas: `http://localhost:8000`.

