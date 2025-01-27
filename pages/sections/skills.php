<link rel="stylesheet" href="<?php echo $baseURL?>/font-awesome-4.7.0/css/font-awesome.min.css">
<style><?php include 'css/skills.css' ?></style>

<section id="skills" class="skills section">
    <h1>Conhecimentos</h1>
    <br>
    <div class="card-container">
        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="card-icon">
                        <i class="fab fa-html5"></i>
                    </div>
                    <h3 class="card-subtitle" style="color: white;">HTML</h3>
                    <p style="color: white!important; font-size: 10px">Clique para saber mais</p>
                </div>
                <div class="card-back">
                    <p>Linguagem de marcação usada para estruturar o conteúdo de páginas web. Define elementos como títulos, parágrafos e links.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="card-icon">
                        <i class="fa-brands fa-css3-alt"></i>
                    </div>
                    <h3 class="card-subtitle" style="color: white;">CSS</h3>
                    <p style="color: white!important; font-size: 10px">Clique para saber mais</p>
                </div>
                <div class="card-back">
                    <p>Linguagem de estilo para personalizar a aparência de páginas web, como cores, fontes e layouts responsivos.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="card-icon">
                        <i class="fa-brands fa-js"></i>
                    </div>
                    <h3 class="card-subtitle">JavaScript</h3>
                    <p style="color: white!important; font-size: 10px">Clique para saber mais</p>
                </div>
                <div class="card-back">
                    <p style="color: white!important;">Linguagem de programação que adiciona interatividade a páginas web, como animações, validação de formulários e manipulação de eventos.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="card-icon">
                        <img src="<?php echo $baseURL;?>/img/coldfusion.png" alt="coldfusion" style="width: 14%;" />
                    </div>
                    <h3 class="card-subtitle">ColdFusion</h3>
                    <p style="color: white!important; font-size: 10px">Clique para saber mais</p>
                </div>
                <div class="card-back">
                    <p style="color: white!important;">Plataforma de desenvolvimento que combina uma linguagem de script e um servidor para criar aplicações web dinâmicas.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="card-icon">
                        <i class="fa-brands fa-php"></i>
                    </div>
                    <h3 class="card-subtitle">PHP</h3>
                    <p style="color: white!important; font-size: 10px">Clique para saber mais</p>
                </div>
                <div class="card-back">
                    <p style="color: white!important;">Linguagem de script server-side usada para criar páginas web dinâmicas e interagir com bancos de dados.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="card-icon">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h3 class="card-subtitle">Banco de Dados</h3>
                    <p style="color: white!important; font-size: 10px">Clique para saber mais</p>
                </div>
                <div class="card-back">
                    <p style="color: white!important;">Sistema que armazena, organiza e gerencia informações de forma estruturada, acessadas por aplicações.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="card-icon">
                        <i class="fa-brands fa-python"></i>
                    </div>
                    <h3 class="card-subtitle">Python</h3>
                    <p style="color: white!important; font-size: 10px">Clique para saber mais</p>
                </div>
                <div class="card-back">
                    <p style="color: white!important;">Linguagem de programação versátil, usada para desenvolvimento web, automação, análise de dados e inteligência artificial.</p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-inner">
                <div class="card-front">
                    <div class="card-icon">
                        <i class="fa-brands fa-wordpress-simple"></i>
                    </div>
                    <h3 class="card-subtitle">WordPress</h3>
                    <p style="color: white!important; font-size: 10px">Clique para saber mais</p>
                </div>
                <div class="card-back">
                    <p style="color: white!important;">Sistema de gerenciamento de conteúdo (CMS) que facilita a criação e manutenção de sites e blogs, sem necessidade de programação avançada.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  document.querySelectorAll('.card').forEach((card) => {
    card.addEventListener('click', function() {
      // Alterna a classe 'flip' para o card clicado
      this.classList.toggle('flip');
    });
  });
</script>