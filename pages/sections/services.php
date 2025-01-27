<style><?php include 'css/services.css' ?></style>

<section id="services" class="services section">
    <h1>Serviços</h1>
    <div class="panel">
        <div class="content">
            <div class="sidebar">
                <a href="#" data-target="development" class="active-sidebar">Desenvolvimento Web</a>
                <a href="#" data-target="automatic">Automatização de Processos com Python (RPA e OCR)</a>
            </div>

            <div class="conteudo">
                <div id="development" class="content2 active">
                    <h7>Tenho um pouco mais de 3 anos de experiência em Desenvolvimento Web. Ao longo desse tempo, pude trabalhar em diversos projetos, como ERP, sites B2B, B2C e até sistemas de pagamento, sempre buscando criar soluções funcionais e de qualidade, sempre com foco no usuário.</h7>
                </div>
                <div id="automatic" class="content2">
                    <h7>Automação de tarefas repetitivas e processos empresariais utilizando Python, com foco em Robotic Process Automation (RPA) e OCR (Reconhecimento Óptico de Caracteres). Desenvolvimento de soluções que aumentam a produtividade, reduzindo erros manuais e otimizando o fluxo de trabalho, incluindo extração de dados de documentos e integração entre sistemas.</h7>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Adiciona o comportamento de troca de conteúdo ao clicar nos links
    const menuLinks = document.querySelectorAll('.sidebar a');
    const contentSections = document.querySelectorAll('.content2');

    menuLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = e.target.getAttribute('data-target');

            // Remove a estilização de todos os itens da sidebar
            menuLinks.forEach(link => {
                link.classList.remove('active-sidebar');
            });

            // Adiciona a estilização ao item clicado
            e.target.classList.add('active-sidebar');

            // Exibe o conteúdo correspondente
            contentSections.forEach(section => {
                if (section.id === target) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        });
    });
</script>
