<?php

$sql = "SELECT * FROM banners";
$qry = mysqli_query($con, $sql) or die("Erro ao consultar!");
$dadosArray = [];
$i = 0;
while($dados = mysqli_fetch_assoc($qry)){
    $dadosArray[$i] = $dados;
    $i++;
};

/* $data =[ 
    [ "title" => "Dois filhotes",
    "description" => "Dois filhotes lindos da minha gata.",
    "img" => "doisgatos.jpg",
    // "mobile" => "doisgatosM.jpg",
],
    [ "title" => "Um filhote",
    "description" => "Um dos filhotes da minha gata dormindo.",
    "img" => "gatobarriga.jpg"],
    [ "title" => "Mamãe",
    "description" => "Mamãe dos outros gatitos.",
    "img" => "gatocama.jpg"],
    [ "title" => "Minoca",
    "description" => "Mamãe dormindo na cama.",
    "img" => "gatocama1.jpg"],
    [ "title" => "Luxana",
    "description" => "Gatinha da minha namorada.",
    "img" => "gatocolo.jpg"],
    [ "title" => "Minoca",
    "description" => "Minoca dormindo na antiga estante.",
    "img" => "gatoestante.jpg"],
    [ "title" => "Minoca",
    "description" => "Minoca pensativa, aproveitando o sol.",
    "img" => "gatopensativo.jpg"]
] */
?>

<div id="carouselExampleCaptions" class="carousel carousel-dark slide mt-4">
    <div class="carousel-inner">
        <?php
            foreach($dadosArray as $ch => $b){
                $active = ($ch == 0) ? 'active' : '';
                $img = ($isMobile) ? $b["mobile"] : $b["img"]
        ?>
            <div class="carousel-item <?php echo $active?>">
                <img src="<?php echo URL_SITE."img/".$b["img"] ?>" class="d-block w-50 mx-auto" alt="...">
                <div class="carousel-caption d-flex flex-column">
                    <h5 class="bg-light d-inline-block mx-auto rounded px-2"><?php echo $b["title"] ?></h5>
                    <p class="bg-light d-inline-block mx-auto rounded px-2"><?php echo $b["description"] ?></p>
                    <a href="#" class="btn btn-success mx-auto">Veja mais aqui</a>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- STACKS -->

<?php
    $stacks = [
        [
            "title" => "Alguma coisa",
            "description" => "Alguma coisa",
            "img" => "doisgatos.jpg",
            "btnAction" => "https://www.google.com.br/?hl=pt-BR",
            "btnLabel" => "Visitar Site",
        ],
        [
            "title" => "Sem criatividade",
            "description" => "Alguma coisa",
            "img" => "gatopensativo.jpg",
            "btnAction" => "https://www.google.com.br/?hl=pt-BR",
            "btnLabel" => "Visitar Site",
        ],
        [
            "title" => "Só passar o tempo",
            "description" => "Alguma coisa",
            "img" => "gatoestante.jpg",
            "btnAction" => "https://www.google.com.br/?hl=pt-BR",
            "btnLabel" => "Visitar Site",
        ]
    ]
?>

<div class="container my-4">
    <div class="row mx-auto">
        <?php
            foreach($stacks as $stack){
                $url_site = URL_SITE;

                echo <<<HTML
                <div class="col col-12-sm col-md-4">
                    <div class="card w-100">
                        <img src="{$url_site}img/{$stack['img']}" class="card-img-top object-fit-cover" alt="..." style="height: 230px">
                        <div class="card-body">
                            <h5 class="card-title">{$stack['title']}</h5>
                            <p class="card-text">{$stack['description']}</p>
                            <a href="{$stack['btnAction']}" class="btn btn-primary">{$stack['btnLabel']}</a>
                        </div>
                    </div>
                </div>
                HTML;
            }
        ?>
    </div>
</div>