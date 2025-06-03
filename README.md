

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
