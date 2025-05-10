# 🧠 Arealtime Social Network Backend

This is the **modular backend** of a modern, scalable social network built with **Laravel**, designed for real-time interaction and easy extensibility. The application supports common social features such as posting, liking, and private messaging, all structured as independent modules.

## 🚀 Features

- ✅ Modular Architecture (Post, User, Chat, etc.)
- 📝 Post creation, editing, and deletion
- ❤️ Like and interaction system
- 💬 Real-time private chat (via Laravel Reverb & WebSockets)
- 🧩 Independent packages for each feature (e.g., `pkg-post`, `pkg-user`)
- 📁 Clean codebase with PSR standards
- 🔐 Authentication and authorization ready
- 📦 Easy to install & extend with custom modules

## 🛠 Tech Stack

| Layer          | Technology         |
|----------------|--------------------|
| Language       | PHP 8.3            |
| Framework      | Laravel 12         |
| Realtime       | Laravel Reverb     |
| Database       | MySQL / Redis      |
| Queue & Events | Laravel Queue + Broadcasting |
| Structure      | Domain-Driven + Modular Monolith |
| API            | REST (JSON) / WebSocket |


## 📦 Modular Design

Each feature in the project is built as a self-contained **Laravel package** hosted in its own repository under the [arealtime GitHub organization](https://github.com/arealtime). These packages are installed into the main backend project via `composer` as VCS repositories.

Examples:
- [`arealtime/pkg-post`](https://github.com/arealtime/pkg-post)
- [`arealtime/pkg-user`](https://github.com/arealtime/pkg-user)

## 🐳 Development Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/arealtime/backend.git


## 👥 Contributing
We follow clean coding, commit conventions, and a modular structure. Feel free to fork and contribute via pull requests.

## 📄 License
MIT License – free for personal and commercial use.