My Custom WordPress Theme
This is a lightweight, custom WordPress theme built from scratch to understand the fundamentals of WordPress theme development. It contains all the required files for a working theme and follows WordPress best practices.
---
## 🚀 Features

✅ Responsive design (works on desktop & mobile)

✅ Custom header & footer

✅ Single post & page templates

✅ Search form integration

✅ Comment section support

✅ Basic accessibility support

✅ Theme screenshot preview
---
## 📂 File Structure
```
my-theme/
│── style.css            # Theme metadata & global styles
│── functions.php        # Registers theme features (menus, scripts, styles)
│── header.php           # Header template (logo, menu, etc.)
│── footer.php           # Footer template
│── index.php            # Main template file (fallback)
│── single.php           # Single blog post template
│── page.php             # Static page template
│── searchform.php       # Custom search form
│── comments.php         # Comment section template
│── screenshot.png       # Theme preview image
│── assets/
│   └── js/
│       └── accessibility.js  # Accessibility improvements (skip links, etc.)
```
## ⚙️ Installation
Download or clone this theme into your WordPress themes folder:
```
wp-content/themes/my-theme/

````
Log in to your WordPress dashboard → Appearance → Themes.

Find My Custom WordPress Theme and click Activate.

Done 🎉 Your site now runs on this theme!
---
## 🛠️ How It Works
style.css → Defines the theme and adds global styles.

functions.php → Registers menus, loads CSS/JS files, and sets up theme support.

index.php → Default fallback template for posts/pages.

single.php → Used when viewing a single blog post.

page.php → Used for static pages (About, Contact, etc.).

header.php & footer.php → Wraps the site with header/footer layout.

comments.php → Handles user comments.

searchform.php → Provides a custom search form.

assets/js/accessibility.js → Adds accessibility features like keyboard navigation.
---
## 🧑‍💻 Contribution
If you want to extend this theme:

Add more templates (e.g., archive.php, category.php)

Improve the CSS for a modern look

Add widget areas in functions.php
---
##  📜 License

This theme is open-source. You can modify and use it for learning or real projects.
