# 📋 Task API - Laravel 11

RESTful API для управления задачами (To-Do List), разработанное на Laravel 11.

---

## ✨ Особенности

- ✅ Полноценный CRUD (Create, Read, Update, Delete)
- ✅ Валидация данных (required, max:255, in:...)
- ✅ Пагинация результатов
- ✅ RESTful архитектура
- ✅ Обработка ошибок (404, 422)
- ✅ MySQL база данных
- ✅ HTTP статусы по стандарту REST (201, 204, 404, 422)

---

## 📡 API Endpoints

| Метод | URL | Описание | Статус |
|-------|-----|----------|--------|
| **GET** | `/api/tasks` | Список всех задач | 200 |
| **POST** | `/api/tasks` | Создать задачу | 201 |
| **GET** | `/api/tasks/{id}` | Получить задачу | 200 |
| **PUT/PATCH** | `/api/tasks/{id}` | Обновить задачу | 200 |
| **DELETE** | `/api/tasks/{id}` | Удалить задачу | 204 |

---

## 🔧 Параметры

### Создание/Обновление задачи

| Поле | Тип | Обязательное | Описание |
|------|-----|--------------|----------|
| `title` | string | ✅ Да | Заголовок, макс. 255 символов |
| `description` | string | ❌ Нет | Описание задачи |
| `status` | string | ❌ Нет | `pending`, `done`, `cancelled` (по умолчанию: `pending`) |

### Пагинация (GET /api/tasks)

| Параметр | Значение по умолчанию | Описание |
|----------|----------------------|----------|
| `page` | 1 | Номер страницы |
| `per_page` | 10 | Записей на странице |

---

## 🛠️ Технологии

- **PHP 8.2+**
- **Laravel 11**
- **MySQL 5.7+**
- **RESTful API**
- **Composer**

---

## 💻 Локальный запуск

Рекомендуется использовать **Open Server Panel** для локальной разработки:

## 📁 Структура проекта

```
laravel-task-api/
├── app/
│   ├── Http/Controllers/TaskController.php
│   └── Models/Task.php
├── database/migrations/
├── routes/api.php
├── .env.example
└── README.md
```

---

## 🔐 Безопасность

- Валидация всех входящих данных
- Защита от массового присваивания (`$fillable`)
- Файл `.env` исключён из репозитория

---

## 👨‍💻 Автор

**StreetL1fter**

GitHub: [@StreetL1fter](https://github.com/StreetL1fter)
