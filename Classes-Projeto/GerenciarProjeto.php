<?php
class GerenciarProjetos {
  private $projeto;

  function __construct() {
    $this->projeto = [];
  }
  
  public function addProjetos($id, $nome , $descripcion, $TAG) {

    $projeto = ['id'=>$id, 'nome' => $nome,'descripcion' => $descripcion,'TAG' => $TAG];
    $this->projeto[] = $projeto;
  }

  public function MostrarProjetos() {
    foreach ($this->projeto as $projeto) {
      echo "<p><strong>Nome:</strong> {$projeto['nome']}</p>";
      echo "<p><strong>Descrição:</strong> {$projeto['descripcion']}</p>";
      echo "<p><strong>Tag:</strong> {$projeto['TAG']}</p><hr>";
  }
}

  public function editProjetos($id,$newnome, $newdescripcion, $newtag){
    if (isset($this->projeto[$id])){
      $this->projeto[$id]['nome'] = $newnome;
      $this->projeto[$id]['descripcion'] = $newdescripcion;
      $this->projeto[$id]['TAG'] = $newtag;

      echo "Projeto editado <br>";
    
  }
  }
  
  public function delProjetos($id){
    if (isset($this->projeto[$id])){
      unset($this->projeto[$id]);

      echo "Projeto removido <br>";
  }
}

}
$gerenciador = new GerenciarProjetos();
$gerenciador->addProjetos(1,"introdução na música", "A aula de música para crianças é divertida, com jogos, dança, canto e instrumentos coloridos.", "#Aula de Música");
$gerenciador->addProjetos(2,"Futebol", "Aprender a jogar futebol, desenvolver habilidades em grupo e se divertirem", "#Esportes");
$gerenciador->addProjetos(3,"bricadeiras","espaço e tempo para as crianças brincarem, se desenvolverem socialmente e se divertirem", "#DiversãoInfantil");

$gerenciador->editProjetos(0,"Aprendendo sobre música classica", "aula de música para aprender mais sobre músicas classicas, sua importância e composição melódica.", "#Aula de Música");

$gerenciador->delProjetos(2);

$gerenciador->MostrarProjetos();