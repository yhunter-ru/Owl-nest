    </main>
    <footer>
        <div class="copyright">
        © OWL-nest WordPress starter theme by <a href="https://yhunter.ru">Yuri Baranov</a><?php echo ', '.date('Y') ?>        </div>
   
    </footer>
    </div>


                <link rel="stylesheet" type="text/css"  >

    <?php 
        //Resolve html compiler error
        $href = 'href="'.get_template_directory_uri().'/style.css?0.12973046260937648"';
        echo '<link rel="stylesheet" type="text/css" '.$href.'>';

        $href = 'src="'.get_template_directory_uri().'/js/main.js?0.12973046260937648"';
        echo '<script '.$href.'></script>';
    ?>

    <?php wp_footer(); ?>  
 
    
    </body>
    </html>