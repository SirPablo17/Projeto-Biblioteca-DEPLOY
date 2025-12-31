# 📚 Livraria Online — Laravel 11

Bem-vindo ao repositório da **Livraria Online**, uma aplicação de **e-commerce completa** desenvolvida com **Laravel 11**, focada na venda de livros 📖.

Este projeto foi construído do zero, aplicando **boas práticas de desenvolvimento web moderno**, incluindo autenticação, painel administrativo, gestão de produtos e fluxo de compras.

---

## 🚀 Funcionalidades Principais

### 🛒 Cliente (Front-end)

- 📚 **Catálogo de Livros**  
  Visualização de livros com paginação, imagens de capa e preços.

- 🎠 **Carrossel de Destaques**  
  Sliders dinâmicos na Home para livros marcados como *Destaque* no painel administrativo.

- 🔍 **Pesquisa Avançada**  
  Busca global por:
  - Título do livro  
  - Nome do autor  
  - Género  

- 🗂️ **Filtros por Categoria**  
  Navegação rápida por géneros (Fantasia, Romance, Terror, etc.).

- 🛍️ **Carrinho de Compras**  
  - Adicionar e remover itens  
  - Alterar quantidades  
  - Resumo de preços (armazenado em sessão)

- 💳 **Checkout Simulado**  
  Formulário completo de finalização de compra.

- ❤️ **Lista de Desejos (Favoritos)**  
  Salve livros para comprar depois (ícone de coração interativo).

- 📦 **Meus Pedidos**  
  Histórico completo de compras com status (*Pago*, *Pendente*) e detalhes.

---

## 🔐 Autenticação & Segurança

- 👤 **Login e Registo de Utilizadores**
- 🔑 **Recuperação de Senha**
  - Fluxo de *Esqueci a Senha* com envio de e-mail (Mailtrap ou Gmail)
- 🛡️ **Controlo de Acesso (ACL)**
  - Middleware personalizado para separar **Utilizadores Comuns** e **Administradores**

---

## ⚙️ Painel Administrativo (Back-end)

- 📊 **Dashboard Administrativo**
  - Acesso restrito a administradores

- 📦 **Gestão de Produtos (CRUD)**
  - Criar, editar, listar e excluir livros  
  - Campos disponíveis:
    - Título  
    - Autor  
    - Editora  
    - Género  
    - Preço  
    - Sinopse  
    - Imagem  
  - Checkbox para marcar livros como **Destaque**

- 👥 **Gestão de Utilizadores**
  - Listagem de utilizadores registados  
  - Alteração de status (*Ativo/Inativo*)

- 🔎 **Pesquisa Administrativa**
  - Busca rápida de produtos e utilizadores no painel admin

---

## 🛠️ Tecnologias Utilizadas

- **Framework:** Laravel 11 (PHP 8.2+)  
- **Banco de Dados:**  
  - PostgreSQL (Produção)  
  - SQLite (Desenvolvimento)  
- **Front-end:** Blade Templates, Tailwind CSS  
- **JavaScript:** Vanilla JS  
- **Estilização:** CSS Atômico (Atomic Design) + Tailwind Utility Classes  
- **Ícones:** FontAwesome  
- **Deploy:** Railway  

---

## 💻 Instalação e Configuração Local

### 1️⃣ Clonar o Repositório

```bash
git clone https://github.com/seu-usuario/projeto-biblioteca.git
cd projeto-biblioteca
