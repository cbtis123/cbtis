<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('materias')->insert([
    ['nombre' => 'Álgebra'],
    ['nombre' => 'Inglés I'],
    ['nombre' => 'Química I'],
    ['nombre' => 'Tecnologías de la información y la comunicación'],
    ['nombre' => 'Ciencia, tecnología, sociedad y valores I'],
    ['nombre' => 'Lectura, expresión oral y escrita I'],
    ['nombre' => 'Geometría y trigonometría'],
    ['nombre' => 'Inglés II
    '],
    ['nombre' => 'Química II'],
    ['nombre' => 'Lectura, expresión oral y escrita II'],
    ['nombre' => 'Geometría analítica'],
    ['nombre' => 'Inglés III'],
    ['nombre' => 'Biología'],
    ['nombre' => 'Ciencia, tecnología, sociedad y valores II'],
    ['nombre' => 'Cálculo'],
    ['nombre' => 'Inglés IV'],
    ['nombre' => 'Física I'],
    ['nombre' => 'Ecología'],
    ['nombre' => 'Física II'],
    ['nombre' => 'Ciencia, tecnología, sociedad y valores III'],
    ['nombre' => 'Probabilidad y estadística'],
    ['nombre' => 'Inglés V'],
    ['nombre' => 'Matemática Aplicada'],
    ['nombre' => 'Administración'],
    ['nombre' => 'Temas de Física'],
    ['nombre' => 'Dibujo Técnico'],
    //Modulo 1 Electromecanica
    ['nombre' => 'Mantiene maquinas eléctricas rotativas'],
    ['nombre' => 'Realiza planos y diagramas eléctricos'],
    ['nombre' => 'Realiza y mantiene instalaciones eléctricas residenciales, comerciales e industriales'],
    //Modulo 2 Electromecanica
    ['nombre' => 'Suelda y corta piezas metálicas'],
    ['nombre' => 'Elabora piezas mecánicas en torno y fresadora'],
    ['nombre' => 'Mantiene mecanismos de transmisión de potencia'],
    //Modulo 3 Electromecanica
    ['nombre' => 'Mantiene mecanismos de transmisión de potencia'],
    ['nombre' => 'Instala y Programa PLC'],
    ['nombre' => 'Instala y programa PICs
    '],
    //Modulo 4 Electromecanica
    ['nombre' => 'Manufactura piezas en torno CNC'],
    ['nombre' => 'Manufactura piezas en fresadora CNC'],
    ['nombre' => 'Dibuja piezas mecánicas empleando CAD'],
    //Modulo 5 Electromecanica
    ['nombre' => 'Mantiene equipos hidráulicos'],
    ['nombre' => 'Mantiene equipos neumáticos'],
    ['nombre' => 'Mantiene equipos de refrigeración'],


    //Modulo 1 Mecatronica
    ['nombre' => 'Prueba circuitos eléctricos y electrónicos para sistemas de control'],
    ['nombre' => 'Mide e interpreta las variables de los sistemas eléctrico, electrónico y mecánico de sistemas mecatrónicos'],
    ['nombre' => 'Prueba circuitos electrónicos digitales para sistemas de control'],
    //Modulo 2 Mecatronica
    ['nombre' => 'Dibuja planos mecánicos de sistemas mecatrónicos'],
    ['nombre' => 'Instala circuitos neumáticos e hidráulicos en dispositivos mecatrónicos'],
    ['nombre' => 'Selecciona e instala mecanismos en sistemas mecatrónicos'],
    //Modulo 3 Mectronica
    ['nombre' => 'Programa controladores lógicos programables'],
    ['nombre' => 'Diagnóstica el estado de los componentes de fuerza y actuadores en sistemas mecatrónicos'],
    ['nombre' => 'Construye circuitos hidráulicos y neumáticos de sistemas mecatrónicos'],
    //Modulo 4 Mecatronica
    ['nombre' => 'Modifica elementos mecánicos de un robot'],
    ['nombre' => 'Programa robots de acuerdo al proceso'],
    //Modulo 5 Mecatronica
    ['nombre' => 'Mantiene sistemas mecatrónicos de acuerdo al manual del fabricante'],
    ['nombre' => 'Integra e implementa dispositivos en sistemas mecatrónicos'],


    //Modulo 1 Programacion
    ['nombre' => 'Desarrolla software utilizando programación estructurada'],
    ['nombre' => 'Diseña y administra bases de datos simples'],
    //Modulo 2 Mecatronica
    ['nombre' => 'Dibuja planos mecánicos de sistemas mecatrónicos'],
    ['nombre' => 'Desarrolla software de aplicación utilizando programación orientada a
    objetos'],
    ['nombre' => 'Diseña y administra bases de datos avanzadas'],
    //Modulo 3 Programacion
    ['nombre' => 'Desarrolla aplicaciones web'],
    ['nombre' => 'Desarrolla aplicaciones móviles'],
    //Modulo 4 Programacion
    ['nombre' => 'Administra sistemas operativos'],
    ['nombre' => 'Instala y configura aplicaciones y servicios'],
    //Modulo 5 Programacion
    ['nombre' => 'Administra y configura plataformas de e – learning'],
    ['nombre' => 'Desarrolla soluciones de comercio electrónico'],


    //Modulo 1 Mantenimiento Automotriz
    ['nombre' => 'Mantiene el sistema eléctrico del automóvil con base en el manual del fabricante'],
    ['nombre' => 'Mantiene al sistema electrónico del automóvil'],
    //Modulo 2 Mantenimiento Automotriz
    ['nombre' => 'Realiza mantenimiento preventivo y correctivo al motor de gasolina y de diesel'],
    ['nombre' => 'Elabora mantenimiento preventivo y correctivo a la calefacción y aire acondicionado del automóvil'],
    ['nombre' => 'Realiza mantenimiento preventivo y correctivo a los sistemas de enfriamiento y lubricación del motor'],
    //Modulo 3 Mantenimiento Automotriz
    ['nombre' => 'Corrige fallas de los sistemas de inyección electrónica de los motores de gasolina y diesel'],
    ['nombre' => 'Diagnostica el funcionamiento de los sistemas de encendido electrónico y computarizado del motor'],
    ['nombre' => 'Construye circuitos hidráulicos y neumáticos de sistemas mecatrónicos'],
    //Modulo 4 Mantenimiento Automotriz
    ['nombre' => 'Realiza servicio de mantenimiento al sistema de transmisión transeje manual según especificaciones del fabricante'],
    ['nombre' => 'Mantiene al sistema de transmisión y transeje automático según especificaciones del fabricante'],
    //Modulo 5 Mantenimiento Automotriz
    ['nombre' => 'Mantiene los sistemas de suspensión y dirección del automóvil'],
    ['nombre' => 'Mantiene los sistemas de frenos en condiciones de operación'],


    //Modulo 1 Mantenimiento Computadoras
    ['nombre' => 'Ensambla equipo de cómputo de acuerdo con las características técnicas de componentes y dispositivos periféricos'],
    ['nombre' => 'Instala controladores del equipo de cómputo y dispositivos periféricos'],
    ['nombre' => 'Instala y configura software de acuerdo con las especificaciones y requerimientos del usuario'],
    //Modulo 2 Mantenimiento Computadoras
    ['nombre' => 'Realiza mantenimiento preventivo'],
    ['nombre' => 'Realiza mantenimiento correctivo'],
    ['nombre' => 'Establece la seguridad informática en el equipo de cómputo'],
    //Modulo 3 Mantenimiento Computadoras
    ['nombre' => 'Brinda soporte técnico de manera presencial'],
    ['nombre' => 'Brinda soporte técnico a distancia'],
    //Modulo 4 Mantenimiento Computadoras
    ['nombre' => 'Diseña la red LAN de acuerdo a las condiciones y requerimientos de la organización'],
    ['nombre' => 'Instala y mantiene redes LAN de acuerdo a estándares oficiales'],
    //Modulo 5 Mantenimiento Computadoras
    ['nombre' => 'Administra una red LAN de acuerdo a los recursos disponibles y requerimientos de la organización'],
    ['nombre' => 'Actualiza los recursos de la red LAN con base a las condiciones y requerimientos de la organización'],


    //Modulo 1 Administracion de Recursos Humanos
    ['nombre' => 'Elabora documentación administrativa'],
    ['nombre' => 'Gestiona documentación administrativa'],
    //Modulo 2 Administracion de Recursos Humanos
    ['nombre' => 'Realiza el proceso de admisión y empleo'],
    ['nombre' => 'Contribuye a la integración y desarrollo del personal en la organización'],
    ['nombre' => 'Diseña y administra bases de datos avanzadas'],
    //Modulo 3 Administracion de Recursos Humanos
    ['nombre' => 'Asiste en las actividades de capacitación para el desarrollo del capital humano'],
    ['nombre' => 'Evalúa el desempeño de la organización utilizando herramientas de calidad'],
    //Modulo 4 Administracion de Recursos Humanos
    ['nombre' => 'Supervisa el cumplimiento de las medidas de higiene y seguridad en la organización'],
    ['nombre' => 'Supervisa el cumplimiento de tareas y procesos para evaluar la productividad en la organización'],
    //Modulo 5 Administracion de Recursos Humanos
    ['nombre' => 'Determina la nómina del personal de la organización tomando en cuenta la normatividad laboral'],
    ['nombre' => 'Determina remuneraciones del personal en situaciones extraordinarias'],


    //Modulo 1 Administracion de Recursos Humanos
    ['nombre' => 'Solicita la documentación referente a la exportación e importación de productos'],
    ['nombre' => 'Identifica el proceso completo de abastecimiento de bienes para la empresa'],
    //Modulo 2 Administracion de Recursos Humanos
    ['nombre' => 'Controla los movimientos de bienes en el almacén'],
    ['nombre' => 'Organiza operaciones y espacios del almacén'],
    ['nombre' => 'Supervisa movimientos de mercancías del almacén'],
    //Modulo 3 Administracion de Recursos Humanos
    ['nombre' => 'Integra la secuencia de documentos para el transporte de mercancías'],
    ['nombre' => 'Apoya la coordinación de la operación del transporte entre origen y destino'],
    //Modulo 4 Administracion de Recursos Humanos
    ['nombre' => 'Proporciona servicio y atención al cliente sobre el estado que guardan los envíos'],
    ['nombre' => 'Elabora reportes para proporcionar servicio de información de la carga al cliente'],
    //Modulo 5 Administracion de Recursos Humanos
    ['nombre' => 'Recopila la información necesaria para el cálculo de costos de la cadena'],
    ['nombre' => 'Produce informes de la liquidación de los servicios logísticos']


]);




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
