<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/your-username/social-connect-api/actions"><img src="https://github.com/your-username/social-connect-api/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/your-username/social-connect-api"><img src="https://img.shields.io/packagist/dt/your-username/social-connect-api" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/your-username/social-connect-api"><img src="https://img.shields.io/packagist/v/your-username/social-connect-api" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/your-username/social-connect-api"><img src="https://img.shields.io/packagist/l/your-username/social-connect-api" alt="License"></a>
</p>

---

# 🧠 SocialConnect API

**SocialConnect API** adalah backend RESTful API berbasis Laravel untuk membangun aplikasi jejaring sosial modern. Didesain modular, fleksibel, dan siap integrasi dengan frontend web atau mobile seperti React, Vue, atau Flutter.

---

## ✨ Fitur Utama

- 🔐 Autentikasi menggunakan Laravel Sanctum / JWT
- 👤 Manajemen pengguna & profil
- 📝 CRUD Postingan (teks + media)
- ❤️ Like & 💬 Komentar
- ➕ Follow / Unfollow
- 🔔 Notifikasi real-time (dengan broadcasting)
- 📄 Dokumentasi Swagger/OpenAPI

---

## 🚀 Teknologi

- PHP 8.3+
- Laravel 11.x
- Laravel Sanctum / JWT Auth
- MySQL / PostgreSQL
- Redis + Queue (optional)
- Pusher / WebSocket Broadcasting (optional)
- Swagger UI (via L5-Swagger)

---

## ⚙️ Instalasi

```bash
git clone https://github.com/your-username/social-connect-api.git
cd social-connect-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
