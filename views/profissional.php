<div class="row my-4">
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo URL_SITE ?>img/eu.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-8">
        <h2>Gian Mateus da Silveira</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, vel, perspiciatis alias laudantium ipsam laboriosam quasi ea, accusamus dolor suscipit animi reprehenderit voluptates similique earum autem. Soluta quisquam optio laboriosam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, vel, perspiciatis alias laudantium ipsam laboriosam quasi ea, accusamus dolor suscipit animi reprehenderit voluptates similique earum autem. Soluta quisquam optio laboriosam.</p>
    </div>
</div>

<?php
    $atuacao = [
        ["titulo" => "PHP",
        "icon" => "bi bi-filetype-php",
        "text" => "Experiência de 6 meses com PHP."],
        ["titulo" => "JavaScript",
        "icon" => "bi bi-filetype-js",
        "text" => "Experiência de 6 meses com JavaScript, na criação de vários projetos com animações e responsividade."],
        ["titulo" => "Base de Dados",
        "icon" => "bi bi-database-fill-gear",
        "text" => "Experiência de 6 meses com Base de dados, incluindo MySQL, Postgre e MongoDB."]
    ]
?>

<div class="row my-4">
    <?php
    foreach($atuacao as $area){
        echo <<<HTML
            <div class="col-sm-12 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="{$area['icon']} fs-1"></i>
                        <h3>
                            {$area['titulo']}
                        </h3>
                        <p>{$area['text']}</p>
                    </div>
                </div>
            </div>
        HTML;
    };
    ?>
</div>