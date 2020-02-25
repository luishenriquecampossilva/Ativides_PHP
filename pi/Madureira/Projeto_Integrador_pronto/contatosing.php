<?php include('partes/InicioIng.inc.php'); ?>

<div class="row">
    <div class="col px-0">
    <?php include('partes/inicio_breadcrumb.inc.php'); ?>
        <li class="breadcrumb-item"><a href="index.php" tabindex="22">Home</a></li>
        
        <li class="breadcrumb-item active" tabindex="23">Contatos</li>
    <?php include('partes/fim_breadcrumb.inc.php'); ?>
    </div>
</div>

<!--Início da página -->
<div class="container">
<div class="row">
            
        <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
            <div class="col-lg-12 col-md-12">
            <h1 class="text-center espacamentobaixo" tabindex="24" id="content">Contacts</h1>
            </div>
            <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="text-center row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2329845809722!2d-43.21491568540048!3d-22.904775843556816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f02baf0fd23%3A0x9c1bd1c5535394db!2sR.+Gotemburgo+-+S%C3%A3o+Crist%C3%B3v%C3%A3o%2C+Rio+de+Janeiro+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1556901025887!5m2!1spt-BR!2sbr" width="400" height="400" class="col-lg-12" tabindex="25" aria-label="Google Maps address the OS Madureiras, Gotemburgo street,211,São Cristovão. Rio de Janeiro.RJ" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <legend tabindex="26"><small>Rua Gotemburgo,211.São Cristovão. Rio de Janeiro.RJ</small></legend>
                    </div>
            </section>
            <section class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <form>
                <div class="form-group">
              <input type="text" name="nome" class="form-control" placeholder="Full Name" tabindex="27">
                </div>
                 <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="E-mail" tabindex="28">
                </div>
                <div class="form-group">
                <select class="form-control" tabindex="29" aria-label="pick list with 5 items to select">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
                    </div>
                <div class="form-group">
    
    <textarea class="form-control" name="mensagem" rows="6" placeholder="Write a Message" tabindex="30"></textarea>
  </div>
                <div class="form-group text-right">
                <button type="submit" class="btn btn-primary" tabindex="31">Send</button>
                    </div>
            </form>
                 <div class="text-center">
                <a class="sr-only sr-only-focusable text-dark" href="#inicio" tabindex="32">Volte para o menu de navegação</a>
    </div>
                </section>
                <section class="text-left col-lg-6 col-md-6 col-sm-12 col-xs-12 offsetcontatos offset-6">
                    <div class="espacamentoesquerda">
                   <h5 tabindex="33">
Press Attaché</h5> 
<ul class="list-group list-group-flush">
  <li class="list-group-item border-0" tabindex="34">Alexandre Epafras</li>
  <li class="list-group-item border-0" tabindex="35">(11)3891-9344/(11)3891-9300</li>
  <li class="list-group-item border-0" tabindex="36">e-mail: alepafra@music.com</li>
  <li class="list-group-item border-0" tabindex="37">Luis Henrique</li>
  <li class="list-group-item border-0" tabindex="38">(11)3891-9304/(11)3891-9300</li>
  <li class="list-group-item border-0" tabindex="39">e-mail: lh@grupoemusic.com.br</li>
    
</ul>
        </div>        
                </section>
        </div>
        </article>
            </div>
     <div class="text-center">
                <a class="sr-only sr-only-focusable text-dark" href="#inicio" tabindex="40">Volte para o menu de navegação</a>
    </div>
</div>

<!--Fim da página-->
<?php include('partes/fiming.inc.php'); ?>