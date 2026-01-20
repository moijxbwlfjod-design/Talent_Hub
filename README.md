# Talent HUB — Plateforme de Recherche d’Emploi

Talent HUB est une plateforme de mise en relation entre **candidats**, **recruteurs** et **administrateurs**, développée en **PHP 8 orienté objet (OOP)** en suivant une **architecture MVC (Modèle–Vue–Contrôleur) sans framework**, avec **Twig** comme moteur de templates.

Le projet a été réalisé dans un cadre pédagogique, en **travail collaboratif (Squad)**, avec une gestion des tâches via **Scrum Board (Jira)**.

---

## 📌 Référentiel
**[2026] Développeur Web et Web Mobile**

---

## 🧠 Contexte du projet

- **Application** : Talent HUB  
- **Objectif principal** : Construire une base d’authentification multi-rôles réutilisable puis l’étendre vers une plateforme d’emploi complète.
- **Durée** : 5 jours  
- **Mode de travail** : En Squad  

---

## 🎓 Objectifs d’apprentissage

- Architecture MVC claire et maintenable
- Repository Pattern
- PDO + requêtes préparées
- Authentification multi-rôles from scratch
- Gestion des sessions et cookies
- Soft delete
- AJAX
- Upload sécurisé de fichiers

---

## 🛠️ Stack technique

- PHP 8 (OOP)
- MVC sans framework
- Twig
- PDO / MySQL
- JavaScript natif
- HTML5 / CSS3
- Git / GitHub
- Jira

---

## 👥 Rôles utilisateurs

### Administrateur
- Gestion catégories, tags, rôles
- Archivage et restauration des offres
- Dashboard statistiques

### Recruteur
- Gestion des offres
- Consultation des candidatures

### Candidat
- Consultation et postulation aux offres
- Upload CV sécurisé
- Jobs recommandés

---

## 🗂️ Architecture

### Structure du projet
```
talenthub/
│
├── app/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   ├── CandidateController.php
│   │   ├── RecruiterController.php
│   │   └── AdminController.php
│   │
│   ├── Models/
│   │   ├── User.php
│   │   └── Role.php
│   │
│   ├── Views/
│   │   ├── auth/
│   │   │   ├── login.php
│   │   │   └── register.php
│   │   │
│   │   ├── candidate/
│   │   │   └── dashboard.php
│   │   │
│   │   ├── recruiter/
│   │   │   └── dashboard.php
│   │   │
│   │   ├── admin/
│   │   │   └── dashboard.php
│   │   │
│   │   └── errors/
│   │       ├── 403.php
│   │       └── 404.php
│   │
│   └── Core/
│       ├── Router.php
│       ├── Controller.php
│       └── Database.php
│
├── config/
│   ├── config.php
│   └── routes.php
│
├── public/
│   ├── index.php          
│   ├── css/
│   └── js/
│
├── database/
│   └── schema.sql
│
├── uml/
│   ├── use_case_diagram.png
│   └── class_diagram.png
│
├── README.md
└── .gitignore

```
---

## 🔒 Sécurité

- PDO préparé
- Protection SQL Injection
- Protection XSS
- Validation frontend & backend
- Upload sécurisé

---

## 📊 Livrables

- Scrum Board Jira
- Repo GitHub
- UML (Classes, Use Case, ERD)
- Présentation

---

## 👨‍💻 Équipe :

- **MOHAMED SEHRAN** — Développeur Backend
- **OTMAN MELLOUKI** — Scrum Master
- **MOHAMED AIT LFQIH** — Team Leader 
- **AZIZ BOUJAADA** — Développeur Full Stack


---

## 🚀 Installation

1. Cloner le projet
2. Installer Twig
3. Importer la base SQL
4. Lancer serveur local

---

## 📅 Dates

- Lancement : 19/01/2026
- Soumission : 25/01/2026

---

Talent HUB — Learning by building together.
