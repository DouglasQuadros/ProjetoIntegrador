<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index</title>
    <link rel="stylesheet" href="style.css" />
  
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
		.whatsapp-link {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 1px 1px 2px #888;
			z-index: 1000;
		}
 
		.fa-whatsapp {
			margin-top: 16px;
		}
	</style>
	<style>
		/* SECTION GRID 3 */

h1 {
  text-align: center;
}

img {
  max-width: 100%;
  display: block;
  align: bottom;
}

.grid3 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 20px;
  margin: 0 auto;
  max-width: 500px;
  padding: 10px;
}

.grid3-item:nth-child(1) {
  grid-row: 1 / 3;
}

.grid3-item {
  display: grid;
}

.grid3-item img {
  grid-column: 1;
  grid-row: 1/3;
  align-self: end;
}

.grid3-item p {
  background: rgba(0, 0, 0, 0.6);
  padding: 10px;
  color: white;
  grid-column: 1;
  grid-row: 2;
  align-self: end;
}
	</style>
	
  
  </head>

  <body>
    <header>
      <nav>
        <a class="logo" >Fique Informado Sobre o Mundo dos Jogos!</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
		
        <ul class="nav-list">
          <li><a href="">Início</a></li>
          <li><a href="./sobre.php">Sobre</a></li>
          <li><a href="./formulario.php">Formulário</a></li>
          <li><a href="https://web.whatsapp.com/send?phone=5551984997266" target="_blank">Contato</a></li>
        </ul>
      </nav>
    </header>

    <main><br><br><br><br>

    <section class="grid3">
      <div class="grid3-item">
	  <a href="https://supermariorun.com/pt-br/" target="blank">
        <img src="mariorun.jpg" >
        <p>Sobre Super Mario Run</p>
      </div>
      <div class="grid3-item">
	  <a href="https://www.tecmundo.com.br/voxel/232968-sonic-frontiers-tera-gameplay-alta-fidelidade-velocidade-ps5.htm" target="blank">
        <img src="sonic.jpg">
        <p>Sonic Frontiers terá gameplay de 'alta fidelidade e velocidade' no PS5</p>
      </div>
      <div class="grid3-item">
	  <a href="https://canaltech.com.br/games/vicarious-visions-de-crash-bandicoot-e-absorvido-pela-blizzard-213848/" target="blank">
        <img src="chrash.jpg">
        <p>Vicarious Visions, de Crash Bandicoot, é absorvido pela Blizzard</p>
      </div>
    </section></main>
    <script src="mobile-navbar.js"></script>
  
	<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5551984997266" target="_blank">
		<i class="fa fa-whatsapp"></i>
	</a>
  
  </body>
</html>
