 
# 🍽️ QuickServe Hub

A simple web app that connects **street food vendors** with **raw material suppliers**.  
Made for the **Tutedude Web Development Hackathon 1.0 🚀**

---

## 🧠 Problem We Solved

Street food vendors in India often struggle to get **affordable, trusted raw materials**.  
There’s no proper system to find nearby suppliers, compare prices, or place orders.

---

## 💡 Our Solution

**QuickServe Hub** is a web platform where:

- **Suppliers** can add raw materials (like vegetables, oil, spices) with price and quantity.
- **Vendors** can browse all available items from all suppliers in real-time and make better choices.

---

## 👥 User Roles

### 🛒 Vendor
- Signup/Login
- See available raw materials from all suppliers
- Compare price and quantity

### 👨‍🍳 Supplier
- Signup/Login
- Add raw materials (name, price, quantity)
- Manage their own inventory

---

## 🔧 Tech Stack

- **Frontend:** HTML, CSS, JavaScript (vanilla)
- **Backend:** PHP
- **Database:** MySQL
- **Security:** Password hashing, PHP sessions, prepared SQL statements

---

## 📁 Project Structure

```

root/
│
├── index.php             # Login / Signup logic
├── dashboard\_vendor.php  # Vendor dashboard
├── dashboard\_supplier.php# Supplier dashboard
│
├── pages/                # Frontend pages loaded using JS
├── pages\_sec/            # Protected (role-based) pages
├── db/                   # Database connection
├── scripts/              # JS fetch logic
├── assets/               # CSS, JS, images
└── includes/             # Common PHP files like header/footer

```

---

## 🔐 Security Features

- Passwords are **hashed** before saving to the database.
- Sessions used to manage login and role-based access.
- All SQL queries use **prepared statements** to prevent SQL injection.

---

## 🛠️ How to Run Locally

1. Clone the repo  
2. Set up a local server using XAMPP / WAMP  
3. Import the SQL file into MySQL  
4. Update `db/connection.php` with your DB config  
5. Start Apache + MySQL and visit `localhost/project-folder`

---

## 🌐 Live Demo

🔗 [Add your hosted link here]

---

## 👨‍💻 Built By

Hackathon team for **Tutedude Web Development Hackathon 1.0**

| Name              | Role                            | Contribution                                                                 |
|-------------------|----------------------------------|------------------------------------------------------------------------------|
| Kajal Rajput      | Frontend Developer               | Designed and developed the complete frontend, UI structure, and dashboard layouts.  |
| Ansh Madanpuriya  | Backend Developer & Integrator   | Developed backend using PHP & MySQL, and integrated it with the frontend. |
| Prakash Samanta           | Project Presenter & Deployment   | Deployed the final project, managed GitHub setup, and presented the solution to selectors. |

---

### 🔗 GitHub Profiles:
- Kajal Rajput: [github.com/kajal768](https://github.com/kajal768)  
- Ansh Madanpuriya: [github.com/AnshMadanpuriya](https://github.com/AnshMadanpuriya)  
- Prakash Samanta: [github.com/itsmepraksh](https://github.com/itsmepraksh)

---

### 📧 Contact Emails:
- Kajal Rajput: **Kajal097856kumari@gmail.com**  
- Ansh Madanpuriya: **anshmadanpuriya16@gmail.com**  
- Prakash Samanta: **premkisafar@gmail.com**

---

Thanks for checking out **QuickServe Hub**! 🍴
 