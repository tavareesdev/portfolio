# SIGA - Sistema Integrado de Gestão Administrativa

Sistema web desenvolvido para fins de estudo utilizando **Java**, **Spring Boot** e **Thymeleaf**, simulando um ambiente administrativo para gerenciamento de clientes, usuários, faturamento e notas fiscais.

O projeto foi criado com o objetivo de aprofundar conhecimentos em desenvolvimento backend com Spring Boot, arquitetura MVC, autenticação com Spring Security, persistência de dados utilizando JPA/Hibernate e construção de aplicações web completas.

---

## Sobre o projeto

O SIGA (Sistema Integrado de Gestão Administrativa) é uma aplicação web que simula funcionalidades comuns encontradas em sistemas ERP, permitindo o gerenciamento de diferentes entidades de forma organizada e segura.

Durante o desenvolvimento foram aplicados conceitos importantes do ecossistema Spring, como:

- Arquitetura MVC
- Spring Boot
- Spring Data JPA
- Spring Security
- Thymeleaf
- DTOs
- Camada de Serviços
- Controle de acesso por perfis
- Banco de dados em memória para desenvolvimento

O projeto foi desenvolvido exclusivamente para estudos e prática das tecnologias Java.

---

## Funcionalidades

### Autenticação

- Login de usuários
- Logout
- Controle de sessão
- Controle de acesso utilizando Spring Security
- Restrições de acesso por perfil

### Gestão de Usuários

- Cadastro
- Alteração
- Exclusão
- Controle de perfis

### Gestão de Clientes

- Cadastro de clientes
- Alteração de informações
- Consulta
- Exclusão

### Gestão de Faturas

- Cadastro de faturas
- Consulta
- Visualização detalhada
- Controle financeiro

### Gestão de Notas Fiscais

- Cadastro
- Consulta
- Visualização
- Associação com clientes

### Dashboard

- Tela inicial com indicadores
- Relatórios administrativos
- Consulta de informações do sistema

---

## Tecnologias utilizadas

### Backend

- Java 25
- Spring Boot 3
- Spring MVC
- Spring Security
- Spring Data JPA
- Hibernate

### Frontend

- Thymeleaf
- HTML5
- CSS3
- JavaScript

### Banco de Dados

- H2 Database

### Build

- Maven

---

## Estrutura do projeto

```
src
 ├── main
 │   ├── java
 │   │    └── com.exemplo.crud
 │   │
 │   │── config
 │   │── controller
 │   │── dto
 │   │── model
 │   │── repository
 │   │── service
 │   │── Application.java
 │   │
 │   └── resources
 │        ├── static
 │        ├── templates
 │        └── application.properties
 │
 └── test
```

---

## Controle de acesso

A aplicação utiliza o Spring Security para autenticação e autorização de usuários.

Entre os recursos implementados estão:

- Login seguro
- Sessão autenticada
- Restrições de acesso às páginas
- Controle por perfil de usuário

---

## Banco de Dados

Durante o desenvolvimento foi utilizado o banco de dados H2 em memória.

Isso permite executar a aplicação rapidamente sem necessidade de instalar um servidor de banco de dados.

As tabelas são criadas automaticamente durante a inicialização da aplicação através do Hibernate.

---

## Como executar o projeto

### Pré-requisitos

- Java JDK 25
- Maven 3.9+
- Git

---

### 1. Clonar o repositório

```bash
git clone https://github.com/tavareesdev/SIGA.git
```

---

### 2. Entrar na pasta

```bash
cd SIGA
```

---

### 3. Compilar o projeto

```bash
mvn clean install
```

---

### 4. Executar a aplicação

Linux / Mac

```bash
./mvnw spring-boot:run
```

Windows

```bash
mvnw.cmd spring-boot:run
```

ou

```bash
mvn spring-boot:run
```

---

### 5. Acessar no navegador

```
http://localhost:8080
```

---

## Configurações

As principais configurações da aplicação encontram-se no arquivo:

```
src/main/resources/application.properties
```

Entre elas:

- Porta da aplicação
- Configuração do banco H2
- Configuração do JPA
- Sessão
- Thymeleaf
- Logging

---

## Conceitos estudados

Durante o desenvolvimento deste projeto foram praticados diversos conceitos do ecossistema Spring, como:

- Injeção de Dependência
- MVC
- Beans
- DTO
- Repository Pattern
- Service Layer
- CRUD completo
- Segurança com Spring Security
- Persistência com JPA
- Relacionamentos entre entidades
- Templates com Thymeleaf

---

## Objetivos do projeto

Este projeto foi desenvolvido com foco em aprendizado e evolução no desenvolvimento backend Java.

Os principais objetivos foram:

- Consolidar conhecimentos em Spring Boot
- Desenvolver uma aplicação web completa
- Praticar autenticação e autorização
- Aplicar boas práticas de organização do código
- Utilizar arquitetura em camadas
- Trabalhar com persistência de dados utilizando JPA

---

## Melhorias futuras

Algumas melhorias que podem ser implementadas futuramente:

- API REST
- Docker
- PostgreSQL
- Testes unitários
- Testes de integração
- Paginação
- Upload de arquivos
- Geração de PDF
- Dashboard com gráficos
- Deploy em nuvem

---

## Autor

**Gabriel Tavares Xavier**

Desenvolvido como projeto pessoal para estudos em Java e Spring Boot.

GitHub: https://github.com/tavareesdev