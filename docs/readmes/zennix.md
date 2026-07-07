# Zennix Web

Sistema Web para Gestão de Chamados e Suporte Técnico desenvolvido em ASP.NET MVC como parte do Projeto Integrado Multidisciplinar (PIM) da Universidade Paulista (UNIP).

O objetivo do sistema é centralizar o gerenciamento de chamados de suporte técnico, permitindo que colaboradores registrem solicitações, acompanhem seu andamento e interajam com a equipe responsável. Além disso, o sistema conta com uma integração com Inteligência Artificial para auxiliar usuários na resolução de dúvidas relacionadas ao próprio sistema e a problemas comuns de tecnologia.

---

## Sobre o projeto

O Zennix foi desenvolvido para atender empresas que necessitam de um ambiente organizado para gerenciamento de solicitações de suporte.

A aplicação possui controle de usuários, setores, cargos e chamados, permitindo que todo o processo de atendimento seja acompanhado desde a abertura até sua conclusão.

Este projeto faz parte do PIM (Projeto Integrado Multidisciplinar) da Universidade Paulista (UNIP), sendo composto por três aplicações que compartilham o mesmo banco de dados:

- Sistema Web (principal)
- Aplicação Desktop
- Aplicativo Mobile

---

## Funcionalidades

### Autenticação

- Login de usuários
- Controle de sessão
- Alteração de senha
- Controle de permissões por perfil

### Gestão de Chamados

- Abertura de chamados
- Consulta de chamados
- Edição de informações
- Alteração de status
- Comentários
- Histórico de alterações
- Upload de anexos
- Definição de prioridade

### Gestão de Usuários

- Cadastro de usuários
- Alteração de informações
- Ativação e desativação
- Controle de cargos
- Controle de setores

### Dashboard

- Indicadores de chamados
- Chamados por status
- Chamados por prioridade
- Ranking de atendentes
- Indicadores gerais

### Inteligência Artificial

O sistema possui integração com a API da OpenAI, utilizada para disponibilizar um chatbot capaz de responder dúvidas relacionadas ao funcionamento do sistema e fornecer orientações básicas de suporte técnico.

---

## Tecnologias utilizadas

- ASP.NET MVC
- C#
- Entity Framework
- SQL Server
- Bootstrap
- JavaScript
- jQuery
- HTML5
- CSS3
- Font Awesome
- OpenAI API

---

## Estrutura do projeto

```
Controllers/
Data/
Models/
Repositories/
Services/
ViewModels/
Views/
wwwroot/
```

---

## Perfis de acesso

### Administrador

Possui acesso completo ao sistema, incluindo gerenciamento de usuários, setores, cargos e chamados.

### Gestor

Responsável pelo acompanhamento dos chamados da equipe, podendo realizar alterações conforme as permissões do perfil.

### Colaborador

Pode abrir chamados, acompanhar solicitações, adicionar comentários e consultar seu histórico de atendimento.

---

## Banco de dados

O sistema utiliza o Microsoft SQL Server como banco de dados.

Entre as principais entidades estão:

- Usuários
- Chamados
- Comentários
- Histórico de Chamados
- Anexos
- Setores
- Cargos
- Prioridades

---

## Como executar o projeto

### Pré-requisitos

- Visual Studio 2022
- .NET
- SQL Server

### 1. Clone o repositório

```bash
git clone https://github.com/tavareesdev/ZennixWeb.git
```

### 2. Acesse a pasta do projeto

```bash
cd ZennixWeb
```

### 3. Configure a conexão com o banco

Abra o arquivo **appsettings.json** (ou **Web.config**, dependendo da versão do projeto) e informe sua Connection String do SQL Server.

Exemplo:

```json
"ConnectionStrings": {
    "DefaultConnection": "Server=localhost;Database=ZennixDB;Trusted_Connection=True;TrustServerCertificate=True;"
}
```

### 4. Execute a aplicação

Pelo Visual Studio:

```
F5
```

Ou utilizando o .NET CLI:

```bash
dotnet restore
dotnet build
dotnet run
```

Após iniciar, a aplicação estará disponível em:

```
https://localhost:xxxx
```

---

## Segurança

O sistema possui controle de autenticação e autorização por perfil de usuário, restringindo funcionalidades de acordo com o nível de acesso de cada colaborador.

---

## Integração com o aplicativo Mobile

O aplicativo Android consome uma API disponibilizada por esta aplicação para realizar autenticação de usuários e abertura de chamados diretamente pelo dispositivo móvel.

---

## Projeto acadêmico

Este sistema foi desenvolvido como parte do Projeto Integrado Multidisciplinar (PIM) da Universidade Paulista (UNIP), aplicando conceitos de desenvolvimento web, banco de dados, engenharia de software, arquitetura de sistemas e integração com Inteligência Artificial.

---

## Autor

**Gabriel Tavares Xavier**

GitHub: https://github.com/tavareesdev

LinkedIn: https://linkedin.com/in/tavareesdev