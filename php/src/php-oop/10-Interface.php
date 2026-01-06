<?php
/*Interface é um conjunto de métodos.*/

interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud {

    public function create() {
        // lógica para criar uma noticia
    }
    public function read() {
        // lógica para ler uma noticia
    }
    public function update() {
        // lógica para atualizar uma noticia
    }
    public function delete() {
        // lógica para deletar uma noticia
    }
   
}