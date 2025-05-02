#  LEMP + Blade + larevel 12 LOGISTICA 

Este repositorio contiene la configuración completa para levantar un entorno de desarrollo **LEMP** (Linux CentOS 7, Nginx, MariaDB, PHP 8.2) con **Laravel 12**,  **phpMyAdmin (HeidySQL)**, usando **Docker Compose** sobre **WSL 2**.

## 🛠️ Requisitos previos

- Windows 11 con WSL 2 habilitado
- Ubuntu (u otra distro Linux en WSL)
- Docker y Docker Compose instalados en WSL
- Git instalado
- Permisos de administrador en Windows para editar `hosts`
- Cambios dentro (como lo es puertos(3308) y administradores)

## ⚙️ Instalación de Docker y Docker Compose en WSL

```bash
wsl --install
sudo apt update && sudo apt upgrade
sudo apt install docker.io docker-compose
sudo usermod -aG docker $USER
newgrp docker
docker --version
docker-compose --version
```

## 📂 Clonar el repositorio

```bash
git clone https://github.com/ArmandoRodas/Project-2parcial-ingenieriasoftware/tree/master
cd lemp
```

## 🚀 Levantar el entorno con Docker Compose

```bash
./start-docker.bat
```

Esto ejecuta los servicios definidos en `docker-compose.yml`: webserver (Nginx + PHP 8.2), MariaDB y phpMyAdmin.

---

## 🌐 Acceso a los servicios

- **Laravel**: [http://localhost](http://localhost)
- **phpMyAdmin**: [http://localhost:8080](http://localhost:8080)

---

## 🔧 Migraciones y Seeders

```bash
docker exec -it app bash
php artisan migrate
php artisan db:seed  # opcional
```
## Error de conexión a base de datos
- Verifica el contenedor `db` y el archivo `.env`

BIEN !!!! ¡Tu entorno Laravel 12 con Docker está listo para desarrollar!
