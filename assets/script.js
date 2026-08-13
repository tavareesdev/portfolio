(function(){
'use strict';
/* ano */
document.getElementById('year').textContent = new Date().getFullYear();

/* tema */
var root = document.documentElement;
var themeBtn = document.getElementById('theme-toggle');
var themeIcon = themeBtn.querySelector('i');
function applyTheme(mode){
    root.setAttribute('data-theme', mode);
    themeIcon.className = mode === 'light' ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
}
applyTheme('dark');
themeBtn.addEventListener('click', function(){
    var current = root.getAttribute('data-theme') === 'light' ? 'dark' : 'light';
    applyTheme(current);
});

/* menu mobile */
var menuToggle = document.getElementById('menu-toggle');
var mobileMenu = document.getElementById('mobile-menu');
menuToggle.addEventListener('click', function(){
    var isActive = mobileMenu.classList.toggle('active');
    menuToggle.classList.toggle('active');
    menuToggle.setAttribute('aria-expanded', isActive);
});
mobileMenu.querySelectorAll('a').forEach(function(link){
    link.addEventListener('click', function(){
    mobileMenu.classList.remove('active');
    menuToggle.classList.remove('active');
    });
});

/* scroll progress */
var progressBar = document.getElementById('scroll-progress');
function updateProgress(){
    var scrollTop = window.scrollY;
    var docHeight = document.documentElement.scrollHeight - window.innerHeight;
    var pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    progressBar.style.width = pct + '%';
}
window.addEventListener('scroll', updateProgress, { passive:true });
updateProgress();

/* active nav */
var navLinks = document.querySelectorAll('.nav-links a');
var sections = Array.prototype.slice.call(document.querySelectorAll('section[id]'));
var navObserver = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
    if(entry.isIntersecting){
        var id = entry.target.getAttribute('id');
        navLinks.forEach(function(link){
        link.classList.toggle('active', link.getAttribute('href') === '#' + id);
        });
    }
    });
}, { rootMargin: '-45% 0px -45% 0px' });
sections.forEach(function(sec){ navObserver.observe(sec); });

/* reveal */
var revealEls = document.querySelectorAll('.reveal, .reveal-stagger');
var revealObserver = new IntersectionObserver(function(entries, obs){
    entries.forEach(function(entry){
    if(entry.isIntersecting){
        entry.target.classList.add('in-view');
        obs.unobserve(entry.target);
    }
    });
}, { threshold: 0.15 });
revealEls.forEach(function(el){ revealObserver.observe(el); });

/* typewriter */
var roles = ['Desenvolvedor Full-Stack Júnior', 'Arquiteto de Software (em formação)', 'Automação com Python'];
var twText = document.getElementById('tw-text');
var roleIndex = 0, charIndex = 0, deleting = false;
function typeLoop(){
    var current = roles[roleIndex];
    if(!deleting){
    charIndex++;
    twText.textContent = current.slice(0, charIndex);
    if(charIndex === current.length){
        deleting = true;
        setTimeout(typeLoop, 1600);
        return;
    }
    } else {
    charIndex--;
    twText.textContent = current.slice(0, charIndex);
    if(charIndex === 0){
        deleting = false;
        roleIndex = (roleIndex + 1) % roles.length;
    }
    }
    setTimeout(typeLoop, deleting ? 35 : 65);
}
typeLoop();

/* terminal */
var terminalLines = [
    { prompt: '$', text: 'whoami' },
    { out: 'Gabriel Tavares — Desenvolvedor Full-Stack Júnior' },
    { prompt: '$', text: 'cat formacao.txt' },
    { out: 'Análise e Desenvolvimento de Sistemas (UNIP)' },
    { out: 'Pós-graduação em Arquitetura de Software — em andamento' },
    { prompt: '$', text: 'ls empresas/' },
    { tag: 'ItPower · EasyTech · SejaNow · Eicon' },
    { prompt: '$', text: 'echo $STATUS' },
    { out: 'disponível para novos desafios ✓' }
];
var terminalLog = document.getElementById('terminal-log');
var lineIdx = 0;
function printLine(){
    if(lineIdx >= terminalLines.length) return;
    var item = terminalLines[lineIdx];
    var div = document.createElement('div');
    div.className = 'line';
    if(item.prompt){
    div.innerHTML = '<span class="prompt">' + item.prompt + '</span> ' + item.text;
    } else if(item.tag){
    div.innerHTML = '<span class="tag">' + item.tag + '</span>';
    } else {
    div.innerHTML = '<span class="out">' + item.out + '</span>';
    }
    terminalLog.appendChild(div);
    lineIdx++;
    setTimeout(printLine, item.prompt ? 380 : 260);
}
setTimeout(printLine, 700);

/* ===== NÓS DO FUNDO ===== */
var bgContainer = document.getElementById('global-bg');
if(bgContainer){
    for(var i = 0; i < 22; i++){
    var node = document.createElement('div');
    node.className = 'global-node';
    var size = 3 + Math.random() * 6;
    node.style.width = size + 'px';
    node.style.height = size + 'px';
    node.style.top = (Math.random() * 98 + 1) + '%';
    node.style.left = (Math.random() * 98 + 1) + '%';
    node.style.animationDelay = (Math.random() * 6) + 's';
    bgContainer.appendChild(node);
    }
}

/* ============================================================
    MODAL README — Carregar README.md de cada projeto via fetch
    ============================================================ */
var modalOverlay = document.getElementById('project-modal');
var modalTitle = document.getElementById('modal-title');
var modalBody = document.getElementById('modal-body');
var modalClose = document.getElementById('modal-close');

// Cache para os READMEs já carregados (apenas na sessão atual)
var readmeCache = {};

// Função para carregar o README
function loadReadme(projectId) {
    // Se já estiver em cache NA SESSÃO ATUAL, usa
    if (readmeCache[projectId]) {
    renderReadme(projectId, readmeCache[projectId]);
    return;
    }

    // Mostra loading
    modalBody.innerHTML = `
    <div class="loading">
        <i class="fa-solid fa-spinner"></i>
        <span>Carregando README...</span>
    </div>
    `;

    // Adiciona timestamp para evitar cache
    var timestamp = new Date().getTime();
    var url = `docs/readmes/${projectId}.md?t=${timestamp}`;

    // Faz o fetch do arquivo .md com headers anti-cache
    fetch(url, {
    cache: 'no-store',
    headers: {
        'Cache-Control': 'no-cache, no-store, must-revalidate',
        'Pragma': 'no-cache',
        'Expires': '0'
    }
    })
    .then(function(response) {
        if (!response.ok) {
        throw new Error('README não encontrado');
        }
        return response.text();
    })
    .then(function(markdown) {
        readmeCache[projectId] = markdown;
        renderReadme(projectId, markdown);
    })
    .catch(function(error) {
        console.error('Erro ao carregar README:', error);
        modalBody.innerHTML = `
        <div style="color: var(--accent-warm); padding: 20px 0; text-align: center;">
            <i class="fa-solid fa-triangle-exclamation" style="font-size: 2rem; margin-bottom: 12px; display: block;"></i>
            <p>Erro ao carregar o README do projeto.</p>
            <p style="font-size: 0.85rem; color: var(--text-faint); margin-top: 8px;">
            Verifique se o arquivo <code>docs/readmes/${projectId}.md</code> existe.
            </p>
        </div>
        `;
    });
}

// Função para renderizar o Markdown
function renderReadme(projectId, markdown) {
    var titles = {
    portfolio: 'Meu Portfólio',
    zennix: 'Zennix',
    'crud-react': 'CRUD React'
    };
    modalTitle.textContent = titles[projectId] || 'Sobre o Projeto';

    try {
    var html = marked.parse(markdown);
    modalBody.innerHTML = html;
    } catch (e) {
    console.error('Erro ao renderizar Markdown:', e);
    modalBody.innerHTML = '<p style="color: var(--accent-warm);">Erro ao renderizar o conteúdo. Por favor, tente novamente.</p>';
    }
}

// Abrir modal README
function openModal(projectId) {
    modalOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
    loadReadme(projectId);
}

// Fechar modal README
function closeModal() {
    modalOverlay.classList.remove('active');
    document.body.style.overflow = '';
}

// Event listeners para botões "Sobre"
document.querySelectorAll('.project-link-about').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
    e.stopPropagation();
    var project = this.getAttribute('data-project');
    openModal(project);
    });
});

// Fechar modal README com o X
modalClose.addEventListener('click', closeModal);

// Fechar modal README clicando fora
modalOverlay.addEventListener('click', function(e) {
    if (e.target === modalOverlay) {
    closeModal();
    }
});

// Fechar modal README com ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modalOverlay.classList.contains('active')) {
    closeModal();
    }
});

/* ============================================================
    MODAL PDF — Visualizar PDF com PDF.js
    ============================================================ */
var pdfModal = document.getElementById('pdf-modal');
var pdfModalClose = document.getElementById('pdf-modal-close');
var pdfRender = document.getElementById('pdf-render');
var pdfLoading = document.getElementById('pdf-loading');
var pdfError = document.getElementById('pdf-error');
var pdfDownloadLink = document.getElementById('pdf-download-link');
var pdfOpenLink = document.getElementById('pdf-open-link');
var pdfModalTitle = document.getElementById('pdf-modal-title');

// Configurar o worker do PDF.js
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

function renderPdf(pdfUrl) {
    // Mostra loading, esconde erro e render
    pdfLoading.style.display = 'flex';
    pdfError.style.display = 'none';
    pdfRender.innerHTML = '';

    // Configura os links
    pdfDownloadLink.href = pdfUrl;
    pdfOpenLink.href = pdfUrl;

    // Extrai o nome do arquivo
    var fileName = pdfUrl.split('/').pop();
    pdfModalTitle.textContent = '📄 ' + fileName;

    // Carrega o PDF
    pdfjsLib.getDocument(pdfUrl).promise
    .then(function(pdf) {
        pdfLoading.style.display = 'none';
        
        // Renderiza todas as páginas
        var totalPages = pdf.numPages;
        var renderPromises = [];

        for (var pageNum = 1; pageNum <= totalPages; pageNum++) {
        renderPromises.push(
            pdf.getPage(pageNum).then(function(page) {
            var scale = 1.2;
            var viewport = page.getViewport({ scale: scale });
            
            // Cria container para a página
            var pageContainer = document.createElement('div');
            pageContainer.className = 'pdf-page';
            
            // Cria canvas
            var canvas = document.createElement('canvas');
            var context = canvas.getContext('2d');
            canvas.height = viewport.height;
            canvas.width = viewport.width;
            
            pageContainer.appendChild(canvas);
            pdfRender.appendChild(pageContainer);
            
            // Renderiza a página
            var renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            return page.render(renderContext).promise;
            })
        );
        }

        // Aguarda todas as páginas renderizarem
        return Promise.all(renderPromises);
    })
    .then(function() {
        pdfLoading.style.display = 'none';
    })
    .catch(function(error) {
        console.error('Erro ao carregar PDF:', error);
        pdfLoading.style.display = 'none';
        pdfError.style.display = 'block';
        pdfRender.innerHTML = '';
    });
}

function openPdfModal(pdfPath) {
    // Abre a modal
    pdfModal.classList.add('active');
    document.body.style.overflow = 'hidden';
    
    // Renderiza o PDF
    renderPdf(pdfPath);
}

function closePdfModal() {
    pdfModal.classList.remove('active');
    document.body.style.overflow = '';
    // Limpa o render
    setTimeout(function() {
    pdfRender.innerHTML = '';
    pdfLoading.style.display = 'flex';
    pdfError.style.display = 'none';
    }, 300);
}

// Event listeners para botões "Visualizar PDF"
document.querySelectorAll('.project-link-pdf').forEach(function(btn) {
    btn.addEventListener('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    var pdfPath = this.getAttribute('data-pdf');
    openPdfModal(pdfPath);
    });
});

// Fechar modal PDF com o X
pdfModalClose.addEventListener('click', closePdfModal);

// Fechar modal PDF clicando fora
pdfModal.addEventListener('click', function(e) {
    if (e.target === pdfModal) {
    closePdfModal();
    }
});

// Fechar modal PDF com ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && pdfModal.classList.contains('active')) {
    closePdfModal();
    }
});

})();