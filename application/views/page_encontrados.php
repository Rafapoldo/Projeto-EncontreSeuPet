<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo base_url('assets/css/style_encontrados.css')?>">
    <title>Encontre seu Pet</title>
    <title>Document</title>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="d-flex justify-content-start" href="<?php echo site_url('welcome') ?>">
                        <img class="header-logo d-flex mt-2 " src="<?php echo base_url('assets/images/doglogo.png')?>" alt="Logo">
                    </a>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                    <a href="<?php echo site_url('perdidos') ?>"><button id="perdido" type="button" class="btn btn-outline-secondary" >Perdido</button></a>
                </div>
                <div class="col d-flex align-items-center">
                    <a href="<?php echo site_url('encontrados') ?>"><button id="encontrado" type="button" class="btn btn-outline-secondary ">Encontrado</button></a>
                </div>
            
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th >#</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Porte</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Descrição</th>
                        <th class="text-center">Encontrou?</th>
                    </tr>
                </thead>
                <tbody>

                <?php if(count($dados) ==0):?>
                    <p>Nao exite registros</p>
                    <?php else : ?>
                    <?php foreach($dados as $contatos) : ?>

                    <tr>        
                        <td><?php echo $contatos['id_pet']?></td>
                        <td><?php echo $contatos['foto']?></td>
                        <td><?php echo $contatos['nome']?></td>
                        <td><?php echo $contatos['porte']?></td>
                        <td><?php echo $contatos['tipo']?></td>
                        <td style="max-width: 162px;"><?php echo $contatos['descricao']?></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    
                        <?php endforeach?>
                         <?php endif;?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary btn-sm ">Caso Resolvido</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col footer-logo d-flex">
                    <a class="d-flex justify-content-start" href="<?php echo site_url('welcome') ?>">
                        <img src="<?php echo base_url('assets/images/doglogo.png')?>" alt="">
                    </a>
                    <label class="d-flex align-items-center m-10" for="">Projeto voluntário para encontrar seu Pet</label>
                </div>
                <div class="col"></div>
                <div class="col">
                    <ul class="d-flex justify-content-center ">
                        <li><a href=""><img src="<?php echo base_url('assets/images/facebook.png')?>" alt=""> </a></li>
                        <li><a href=""><img src="<?php echo base_url('assets/images/twitter.png')?>" alt=""> </a></li>
                        <li><a href=""><img src="<?php echo base_url('assets/images/carta.png')?>" alt=""> </a></li>
                    </ul>
                </div>

            </div>

        </div>
    </footer>


























<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>