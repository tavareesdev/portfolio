<style><?php include 'css/projects.css' ?></style>

<section id="projects" class="projects section">
    <h1>Projetos</h1>
    <ul class="card2-list">
        
        <li class="card2">
            <a class="card2-image" href="https://gtavares.site" target="_blank" style="background-image: url(<?php echo $baseURL;?>/img/portfolio.jpg);" data-image-full="<?php echo $baseURL;?>/img/portfolio.jpg">
                <img src="<?php echo $baseURL;?>/img/portfolio.jpg" alt="Psychopomp" />
            </a>
            <a class="card2-description" href="https://gtavares.site" target="_blank">
                <h2>Meu Portfólio</h2>
            </a>
        </li>

        <li class="card2">
            <a class="card2-image" href="https://sejanow.com.br" target="_blank" style="background-image: url(<?php echo $baseURL;?>/img/sejanow.png);" data-image-full="<?php echo $baseURL;?>/img/sejanow.png">
                <img src="<?php echo $baseURL;?>/img/sejanow.png" alt="Psychopomp" />
            </a>
            <a class="card2-description" href="" target="_blank">
                <h2>Seja Now - Home</h2>
            </a>
        </li>

        <li class="card2">
            <a class="card2-image" href="" target="_blank" style="background-image: url(<?php echo $baseURL;?>/img/loading.gif);" data-image-full="<?php echo $baseURL;?>/img/loading.gif">
                <img src="<?php echo $baseURL;?>/img/portfolio.jpg" alt="Psychopomp" />
            </a>
            <a class="card2-description" href="" target="_blank">
                <h2>Em construção...</h2>
            </a>
        </li>
        
    </ul>
</section>

<script>
    // This is "probably" IE9 compatible but will need some fallbacks for IE8
    // - (event listeners, forEach loop)

    // wait for the entire page to finish loading
    window.addEventListener('load', function() {
        
        // setTimeout to simulate the delay from a real page load
        setTimeout(lazyLoad, 1000);
        
    });

    function lazyLoad() {
        var card2_images = document.querySelectorAll('.card2-image');
        
        // loop over each card2 image
        card2_images.forEach(function(card2_image) {
            var image_url = card2_image.getAttribute('data-image-full');
            var content_image = card2_image.querySelector('img');
            
            // change the src of the content image to load the new high res photo
            content_image.src = image_url;
            
            // listen for load event when the new photo is finished loading
            content_image.addEventListener('load', function() {
                // swap out the visible background image with the new fully downloaded photo
                card2_image.style.backgroundImage = 'url(' + image_url + ')';
                // add a class to remove the blur filter to smoothly transition the image change
                card2_image.className = card2_image.className + ' is-loaded';
            });
            
        });
        
    }
</script>