<?php

namespace App\DataFixtures;


use Faker;
use App\Entity\Teclado;
use App\Entity\Categoria;
use App\Entity\UserMgr\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\TecladoUsuario;


class AppFixtures extends Fixture {

    public function load(ObjectManager $manager) {
        // 
        for ($i = 0; $i < 20; $i++) {
            $tecladoFaker = Faker\Factory::create();

            $usuario = new Usuario();
            $usuario->setUsername("usuario_$i");
            $usuario->setPassword("4Vientos");
            $usuario->setEmail("usuario_$i@gmail.com");
            
            
            $categoria = new Categoria();      
            $categoria->setNombre("Categoria_$i");
            $categoria->setDescripcion($tecladoFaker->sentence);
            
            
            $teclado = new Teclado();
            $teclado->setNombre("Teclado_$i");
            $teclado->setImagen($tecladoFaker->imageUrl($width = 640, $height = 480));
            $teclado->setDescripcion($tecladoFaker->sentence);    
            $teclado->setCategoria($categoria);
            $teclado->setPrecio($tecladoFaker->numberBetween(1,255));
            
            $tecladoUsuario = new TecladoUsuario();
            $tecladoUsuario->setUsuario($usuario);
            $tecladoUsuario->setTeclado($teclado);
               
            $manager->persist($categoria);
            $manager->persist($usuario);
            $manager->persist($teclado);  
            $manager->persist($tecladoUsuario);
            
        }

        $manager->flush();
    }

}
