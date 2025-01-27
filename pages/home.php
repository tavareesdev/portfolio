<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Portfólio</title>
        <style><?php include 'css/home.css' ?></style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php include 'topmenu.php' ?>

        <?php include 'sections/welcome.php' ?>

        <?php include 'sections/sobre.php' ?>

        <?php include 'sections/experience.php' ?>

        <?php include 'sections/projects.php' ?>

        <?php include 'sections/services.php' ?>

        <?php include 'sections/skills.php' ?>        
    </body>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const sections = document.querySelectorAll(".section");

            const observerOptions = {
                threshold: 0.2, // 20% da seção visível na janela
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            }, observerOptions);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
</html>
