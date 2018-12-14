<?php include 'components/header.php'; ?>

      <section class="topo">
         <div class="container">
            <h1>Contato</h1>

            <ol class="breadcrumb">
               <li><a href="#">Início</a></li>
               <li class="active">Contato</li>
            </ol>
         </div><!-- .container -->
      </section><!-- .topo -->

      <section class="pag-interna fale-conosco">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                  <form>
                     <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control" value="" />
                     
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <input type="text" name="email" id="email" placeholder="E-mail" class="form-control" value="" />
                        </div><!-- .md-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <input type="text" name="telefone" id="telefone" placeholder="Telefone" class="form-control" value="" />
                        </div><!-- .md-6 -->
                     </div><!-- .row -->

                     <textarea name="mensagem" id="mensagem" placeholder="Mensagem" class="form-control"></textarea>

                     <input type="submit" class="botao pull-right" value="Enviar" />
                  </form>
               </div><!-- .md-4 -->
               <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                  <div class="sidebar-contato">
                     <h3><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</h3>
                     <p>exemplo@exemplo.com.br</p>

                     <h3><i class="fa fa-phone" aria-hidden="true"></i> Telefone</h3>
                     <p>84 3333-3333</p>
   
                     <div class="redes-sociais">
                        <h3>Redes Sociais</h3>
                        <a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                     </div><!-- .redes-sociais -->                  
                  </div><!-- .sidebar -->
               </div><!-- .md-4 -->
            </div><!-- .row -->
         </div><!-- .container -->
      </section><!-- .fale-conosco -->

<?php include 'components/footer.php'; ?>   