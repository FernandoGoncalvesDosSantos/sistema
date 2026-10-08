# 📚 Estudos de CodeIgniter 4

Repositório de estudos da disciplina **ADS209 – Desenvolvimento Web II**. O projeto parte do framework CodeIgniter 4 e registra o passo a passo das aulas, nas quais aprendi a trabalhar com o padrão MVC, models, views, banco de dados, CSS e menu de navegação.

> O CodeIgniter 4 não é de minha autoria. Este repositório contém o framework com as alterações feitas ao acompanhar as aulas.

## 🛠️ Tecnologias

- PHP
- CodeIgniter 4
- Composer
- MySQL (gerenciado pelo phpMyAdmin)
- HTML5 e CSS3

## 📖 Aulas acompanhadas

| Aula | Tema |
| ---- | ---- |
| 00 | Fluxo de trabalho do CodeIgniter |
| 01 | Introdução ao CodeIgniter: instalação, arquitetura e configuração |
| 02 | Introdução aos Models (parte 01) |
| 03 | Exibindo os dados do banco de dados na página |
| 04 | Inserindo o CSS no CodeIgniter |
| 05 | Criando o menu (parte 01) |

## 🧩 O que aprendi

- Entender como é a instalação, a arquitetura e a configuração do CodeIgniter 4
- Entender o padrão MVC (Model, View, Controller) e a função de cada pasta
- Criar models para acessar o banco de dados
- Exibir os dados do banco em uma página
- Incluir arquivos CSS no projeto
- Criar um menu de navegação

## 📂 Estrutura do projeto

```
sistema/
├── app/
│   ├── Config/
│   ├── Controllers/
│   ├── Database/
│   ├── Filters/
│   ├── Helpers/
│   ├── Language/
│   ├── Libraries/
│   ├── Models/
│   ├── ThirdParty/
│   └── Views/
├── public/
│   ├── assets/
│   ├── favicon.ico
│   └── index.php
├── tests/
├── writable/
├── composer.json
└── spark
```

## 🖥️ Ambiente de execução

O projeto foi executado no servidor disponibilizado pelo professor da disciplina, com PHP e MySQL (phpMyAdmin). Não foi executado localmente.

## 🚀 Executar em outra máquina (referência)

Passos gerais do CodeIgniter 4, não testados neste projeto:

1. Instale o PHP 8.2 ou superior (com as extensões `intl`, `mbstring` e `mysqlnd`) e o [Composer](https://getcomposer.org/download/).
2. Na pasta do projeto, rode `composer install`.
3. Configure a conexão com o banco em `app/Config/Database.php` ou no `.env`.
4. Rode `php spark serve` e abra o endereço que aparecer no terminal.

> A pasta `vendor/` não está no repositório: ela é criada pelo `composer install`.

## 📜 Licença e créditos

- Framework: [CodeIgniter 4](https://codeigniter.com/), licença MIT. Veja o arquivo [LICENSE](LICENSE).
- Passo a passo baseado no material de apoio da disciplina ADS209 – Desenvolvimento Web II.

## 👤 Autor

Fernando Gonçalves dos Santos — [GitHub](https://github.com/FernandoGoncalvesDosSantos)
