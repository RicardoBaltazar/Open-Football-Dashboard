# Open Football Dashboard

Um dashboard open source de dados esportivos desenvolvido com Laravel, focado em fornecer análises e visualizações de dados de futebol de forma simples e eficiente.

## Sobre o Projeto

O Open Football Dashboard é construído seguindo boas práticas arquiteturais do Laravel, utilizando o padrão MVC com Services para regras de negócio. O objetivo é criar uma base sólida e evolutiva para análise de dados esportivos.

### Tecnologias Principais

- **Laravel 12+** - Framework PHP
- **Filament** - Interface administrativa
- **PostgreSQL** - Banco de dados principal
- **Redis** - Cache e filas
- **Docker** - Containerização via Laravel Sail

## Instalação Local

### Pré-requisitos

- **WSL2** (Windows Subsystem for Linux)
- **Docker Desktop** com integração WSL2
- **Git**

### Passos de Instalação

1. **Clone o repositório:**
   ```bash
   git clone <repository-url>
   cd open-football-dashboard
   ```

2. **Copie o arquivo de ambiente:**
   ```bash
   cp .env.example .env
   ```

3. **Instale as dependências do PHP:**
   ```bash
   docker run --rm \
       -v $(pwd):/var/www/html \
       -w /var/www/html \
       laravelsail/php83-composer:latest \
       composer install --ignore-platform-reqs
   ```

4. **Suba os containers:**
   ```bash
   ./vendor/bin/sail up -d
   ```

5. **Gere a chave da aplicação:**
   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

6. **Execute as migrações:**
   ```bash
   ./vendor/bin/sail artisan migrate
   ```

7. **Instale as dependências do frontend:**
   ```bash
   ./vendor/bin/sail npm install
   ./vendor/bin/sail npm run build
   ```

### Acessando a Aplicação

- **Aplicação:** [http://localhost](http://localhost)
- **Banco de dados:** PostgreSQL na porta `5432`
- **Redis:** Porta `6379`

### Comandos Úteis

```bash
# Parar os containers
./vendor/bin/sail down

# Ver logs da aplicação
./vendor/bin/sail logs laravel.test

# Executar comandos Artisan
./vendor/bin/sail artisan <command>

# Executar testes
./vendor/bin/sail test
```

## Desenvolvimento

Este projeto utiliza SQLite para desenvolvimento local, mas pode ser facilmente configurado para PostgreSQL editando o arquivo `.env`:

```env
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=football_dashboard
DB_USERNAME=sail
DB_PASSWORD=password
```

## Contribuições

Contribuições são sempre bem-vindas! Sinta-se à vontade para abrir issues e pull requests.

## Licença

Este projeto está licenciado sob a **MIT License** - veja o arquivo [LICENSE](LICENSE) para mais detalhes.
