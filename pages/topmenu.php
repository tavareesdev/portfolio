
<head>
  <style><?php include 'css/topmenu.css'; ?></style>
  <?php 
    include '../links.php'; 
    include '../conexao.php'; 
  ?>
</head>

<header>
  <div class="menu-container">
    <div class="menu-left">
    <a href="#welcome"><img src="<?php echo $baseURL?>/img/logo.png" alt="Logo"></a>
    </div>    
    <div class="menu-center">
      <a href="#about">Sobre</a>
      <a href="#experience">Experiências</a>
      <a href="#projects">Projetos</a>
      <a href="#services">Serviços</a>
      <a href="#skills">Conhecimentos</a>
    </div>   
    <!-- Ícone de menu hambúrguer visível no mobile -->
    <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
    <!-- Menu responsivo (visível apenas em dispositivos móveis) -->
    <div class="menu-responsive">
      <a href="#about">Sobre</a>
      <a href="#experience">Experiências</a>
      <a href="#projects">Projetos</a>
      <a href="#services">Serviços</a>
      <a href="#skills">Conhecimentos</a>
    </div>
  </div>
</header>

<script>
  function toggleMenu() {
    const menuItems = document.querySelector('.menu-responsive');
    menuItems.classList.toggle('active');
  }
  function toggleIcon(input) {
    const icon = input.nextElementSibling;
    icon.classList.toggle("hidden-icon", input.value.length > 0);
  }
</script>
