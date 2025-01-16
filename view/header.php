<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/styles/styleheader.css">
    <title>cat hub</title>
</head>
<body>
  <nav class="navbar" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="collapse" id="navbarColor01">
        <a href="?page=acceuil">
          <img src="view/images/Cathublogo.png" alt="logo cat hub">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn" href="?page=acceuil">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="btn" href="?page=contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="btn" href="?page=video">Video</a>
          </li>
          <li class="nav-item">
            <a class="btn" href="?page=faq">FAQ</a>
          </li>
        </ul>
        <div class="menu">
          <a class="btn" href="?page=login">
            <img src="view/images/icon.jpg" alt="">
          </a>
          <div class="dropdown">
            <a href="?page=profile">Inscription</a>
            <a href="?page=login">Connexion</a>
            <a href="?page=logout">Logout</a>
            <a href="?page=help">Help</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
<!--
<script>
  const menuHamburger = document.querySelector(".hamburguer");
  const navLinks = document.querySelector(".nav-links");

  menuHamburger.addEventListener('click', () => {
    navLinks.classList.toggle('mobile-menu');
  });
</script>
-->