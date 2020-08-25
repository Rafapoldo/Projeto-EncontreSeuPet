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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Style.css')?>">
  
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
        <div class="container d-flex justify-content-center">
            <div class="box-central ">
                <div class="endereço-busca">
                      <form action="<?php echo site_url('welcome/tratarFormulario'); ?>" method="POST">
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Endereço de Email</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@exemplo.com" name="email" required>
                        </div>
                        <div class="form-row">
                              <div class="col">
                                <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                              </div>
                              <div class="col">
                                <input type="text" id="telefone_contato" class="form-control" placeholder="Telefone de Contato" name="telefone" id="telefone" >
                              </div>
                            </div>
                            <br>
                            <hr>
                            
                            
                            
                          
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Nome do Pet" name="nome_pet" required>
                          </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Porte</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="porte" required>
                            <option>Pequeno</option>
                            <option>Médio</option>
                            <option>Grande</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="tipo" required>
                              <option>Cão</option>
                              <option>Gato</option>
                              <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <input type="radio"  name="perdido" value="perdido" >
                          <label for="encontrado">Perdido</label>
                          <input type="radio"  name="encontrado" value="encontrado" >
                          <label for="encontrado">Encontrado</label><br>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Descrição</label>
                          <textarea cols="5" rows="3" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Caracteristicas, Situação do Pet, Localização, Datas " name="descricao" required></textarea>
                        </div>
                      
                      
                        <label for="exampleFormControlFile1">Foto</label>
                        <div class="form-group d-flex">  
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
                          <button type="submit" class="btn btn-primary registrar">Registrar</button>
                        </div>
                      </form>

                    
                </div>

            </div>

        </div>
    </section>
    <br>
    
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
                        <li><a href=""><img src="<?php echo base_url('assets/images/facebook.png')?>"> </a></li>
                        <li><a href=""><img src="<?php echo base_url('assets/images/twitter.png')?>"> </a></li>
                        <li><a href=""><img src="<?php echo base_url('assets/images/carta.png')?>"> </a></li>
                    </ul>
                </div>

            </div>

        </div>
    </footer>
    








































<script type="text/javascript" src="<?php echo base_url('assets/js/first_page.js')?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>