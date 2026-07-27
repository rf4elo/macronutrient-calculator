# PHP Macronutrient Calculator

[![licence mit](https://img.shields.io/badge/licence-MIT-blue.svg)](./LICENSE)

## Project Structure
- `pages/` - All pages of the project.
- `styles/` - The css files.
- `index.php` - Router file.
- `favicon.ico` - Application favicon.

## How to use

### Dependencies
To run the app, you only need to have Docker Desktop installed.

- [Docker Desktop](https://www.docker.com/products/docker-desktop/)

### Instalation and run

- Clone repository
```bash
$ git clone https://github.com/rf4elo/macronutrient-calculator.git
```
- Build the docker image
```bash
docker build -t <project-name> .
```
- Run the project
```bash
docker run -p 8000:8000 <project-name>
```
- Stop project
```bash
docker stop <project-name-or-id>
```

For more information about Docker, visit the documentation.
- [Docker Documentation](https://docs.docker.com/)

# Project License
- [MIT License](./LICENSE)

# Profissional Contact
- [Linkedin](https://www.linkedin.com/in/rafael-j-rocha/)
- [Github](https://github.com/rf4elo)
