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
    //MATERIAS GENERALES
    ['nombre' => 'Administracion I'],
    ['nombre' => 'Administracion II'],
    ['nombre' => 'Administracion III'],
    ['nombre' => 'Administración de recursos humanos I'],
    ['nombre' => 'Administración de recursos humanos II'],
    ['nombre' => 'Auditoría financiera I'],
    ['nombre' => 'Auditoría financiera II'],

    ['nombre' => 'Comunicacion organizacional'],

    ['nombre' => 'Derecho administrativo'],
    ['nombre' => 'Derecho constitucional'],
    ['nombre' => 'Derecho laboral'],

    ['nombre' => 'Economía'],
    ['nombre' => 'Economía internacional'],
    ['nombre' => 'Estadistica I'],
    ['nombre' => 'Estadistica II'],

    ['nombre' => 'Finanzas I'],
    ['nombre' => 'Finanzas II'],

    ['nombre' => 'Inglés I'],
    ['nombre' => 'Inglés II'],
    ['nombre' => 'Inglés III'],
    ['nombre' => 'Inglés IV'],
    ['nombre' => 'Informatica para contabilidad II'],
    ['nombre' => 'Introduccion al derecho'],

    ['nombre' => 'Informática I'],
    ['nombre' => 'Informática II'],

    ['nombre' => 'Matematicas'],
    ['nombre' => 'Matematicas I'],
    ['nombre' => 'Matematicas II'],
    ['nombre' => 'Microeconomía'],
    ['nombre' => 'Macroeconomía'],
    ['nombre' => 'Matematicas financieras'],
    ['nombre' => 'Mejora continua'],
    ['nombre' => 'Metodología de la investigación'],

    ['nombre' => 'Planeación estratégica'],
    ['nombre' => 'Presupuestos'],

    ['nombre' => 'Relaciones públicas'],
    ['nombre' => 'Seminario de tesis I'],
    ['nombre' => 'Seminario de tesis II'],

    //>>>>>>>ING. EN SISTEMAS<<<<<<<<<
    //1° CUATRIMESTRE SISTEMAS
    ['nombre' => 'Diseño estructurado de algoritmos'],
    ['nombre' => 'Contabilidad'],
    ['nombre' => 'Introducción a las ciencias computacionales'],
    //2 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Programación I'],
    ['nombre' => 'Matemáticas discretas'],
    ['nombre' => 'Administración'],
    ['nombre' => 'Electromecanica basica'],
    //3° CUATRIMESTRE SISTEMAS
    ['nombre' => 'Programación II'],
    ['nombre' => 'Matemáticas III'],
    ['nombre' => 'Administración de recursos humanos'],
    ['nombre' => 'Estructura de datos I'],
    ['nombre' => 'Arquitectura de computadoras'],
    //4° CUATRIMESTRE SISTEMAS
    ['nombre' => 'Programación orientada a objetos'],
    ['nombre' => 'Matemáticas IV'],
    ['nombre' => 'Estructura de datos II'],
    ['nombre' => 'Investigación de operaciones I'],
    //5° CUATRIMESTRE SISTEMAS
    ['nombre' => 'Análisis y diseño de sistemas de información I'],
    ['nombre' => 'Estadística y probabilidad'],
    ['nombre' => 'Fundamentos básicos de administración'],
    ['nombre' => 'Base de datos I'],
    ['nombre' => 'Investigación de operaciones II'],
    ['nombre' => 'Inglés V'],
    //6 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Análisis y diseño de sistemas de información II'],
    ['nombre' => 'Métodos numéricos'],
    ['nombre' => 'Ingeniería económica'],
    ['nombre' => 'Base de datos II'],
    ['nombre' => 'Redes de computadoras I'],
    ['nombre' => 'Inglés VI'],
    //7 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Ingeniería de software I'],
    ['nombre' => 'Software de sistemas'],
    ['nombre' => 'Administración de la función informática'],
    ['nombre' => 'Sistemas operativos'],
    ['nombre' => 'Redes de computadoras II'],
    ['nombre' => 'Inglés técnico I'],
    //8 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Ingeniería de software II'],
    ['nombre' => 'Sistemas cliente servidor y para internet'],
    ['nombre' => 'Bases de datos distribuidas'],
    ['nombre' => 'Simulación'],
    ['nombre' => 'Sistemas abiertos'],
    ['nombre' => 'Inglés técnico II'],
    //9 CUATRIMESTRE SISTEMAS
    ['nombre' => 'Comercio electrónico'],
    ['nombre' => 'Auditoria de sistemas'],
    ['nombre' => 'Administración de bases de datos'],
    ['nombre' => 'Inteligencia artificial'],
    ['nombre' => 'Robótica'],
    ['nombre' => 'Inglés técnico III'],

         //>>>>ADMINISTRACION<<<<<<

    //1°CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Contabilidad básica'],
    ['nombre' => 'Introducción al derecho'],
    ['nombre' => 'Matemáticas básicas'],
    //2°CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Contabilidad financiera'],
    ['nombre' => 'Matemáticas para administración'],
    //3°CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Contabilidad de costos'],
    ['nombre' => 'Matemáticas financieras'],
    //4° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Administración del factor humano I'],
    ['nombre' => 'Contabilidad para administración'],
    ['nombre' => 'Estadística'],
    ['nombre' => 'Economía de la empresa'],
    //5° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Administración del factor humano II'],
    ['nombre' => 'Lectura y redacción'],
    ['nombre' => 'Derecho privado I'],
    ['nombre' => 'Administración financiera I'],
    ['nombre' => 'Estadística para administración I'],
    ['nombre' => 'Seguridad social'],
    //6° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Psicología de las organizaciones'],
    ['nombre' => 'Derecho privado II'],
    ['nombre' => 'Marketing I'],
    ['nombre' => 'Administración financiera II'],
    ['nombre' => 'Estadística para administración II'],
    ['nombre' => 'Administración estratégica'],
    //7° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Derecho mercantil I'],
    ['nombre' => 'Comportamiento organizacional'],
    ['nombre' => 'Marketing II'],
    //8° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Derecho mercantil II'],
    ['nombre' => 'Administración de la producción'],
    ['nombre' => 'Liderazgo'],
    ['nombre' => 'Etica de las organizaciones'],
    //9° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Comercio internacional I'],
    ['nombre' => 'Elaboración de proyectos'],
    ['nombre' => 'Administración de la pequeña y mediana empresa'],
    ['nombre' => 'Administración de calidad'],
    //10° CUATRIMESTRE ADMINISTRACION
    ['nombre' => 'Simulador de negocios'],
    ['nombre' => 'Evaluación de proyectos'],
    ['nombre' => 'Comercio internacional II'],
    ['nombre' => 'Logística'],



    //>>>>>CIENCIAS POLITICAS Y DERECHO<<<<<<
    //1° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Introducción al estudio del derecho'],
    ['nombre' => 'Sociología jurídica'],
    ['nombre' => 'Procesos básicos del pensamiento'],
    ['nombre' => 'Matemáticas'],
    //2° CUATRIMESTRE CIENCIAS POLITICAS

    //3° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Teoría del Estado'],
    ['nombre' => 'Estadística I'],
    ['nombre' => 'Informática III'],
    //4° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Estadística II'],
    ['nombre' => 'Sistemas políticos contemporáneos'],
    ['nombre' => 'Informática IV'],
    //5° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Garantías individuales y sociales'],
    ['nombre' => 'Derecho público'],
    ['nombre' => 'SSistema político mexicano'],
    ['nombre' => 'Razonamiento verbal para la toma de decisiones'],
    ['nombre' => 'Finanzas públicas I'],
    //6° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Derecho privado'],
    ['nombre' => 'Administración pública I'],
    ['nombre' => 'Ciencia política I'],
    ['nombre' => 'Liderazgo estratégico'],
    ['nombre' => 'Finanzas públicas II'],
    //7° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Derecho económico'],
    ['nombre' => 'Administración pública II'],
    ['nombre' => 'Ciencia política II'],
    ['nombre' => 'Comunicación'],
    ['nombre' => 'Expresión oral y escrita'],
    //8° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Derecho municipal'],
    ['nombre' => 'Política pública II'],
    //9° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Políticas públicas II'],
    ['nombre' => 'Derecho internacional público'],
    ['nombre' => 'Administración de recursos gubernamentales'],
    ['nombre' => 'Finanzas internacionales'],
    ['nombre' => 'Manejo de grupos'],
    //10° CUATRIMESTRE CIENCIAS POLITICAS
    ['nombre' => 'Derecho internacional privado'],
    ['nombre' => 'Dinámica psicosocial'],
    ['nombre' => 'Auditoria gubernamental'],
    ['nombre' => 'Derecho electoral'],
    ['nombre' => 'Etica'],



    //>>>>>CONTADURIA<<<<<<
    //1° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Contabilidad I'],
    //2° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Contabilidad II'],
    ['nombre' => 'Derecho constitucional y administrativo'],
    ['nombre' => ''],
    //3° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Contabilidad de costos I'],
    ['nombre' => 'Matemáticas financieras'],
    ['nombre' => 'Informática para contabilidad I'],
    //4° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Contabilidad de costos II'],
    ['nombre' => 'Derecho mercantil'],
    ['nombre' => 'Informática para contabilidad II'],
    //5° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Informática para contabilidad II'],
    ['nombre' => 'Derecho fiscal'],
    ['nombre' => 'Contabilidad superior'],
    //6° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Impuestos I'],
    ['nombre' => 'Liderazgo y gestión'],
    ['nombre' => 'Administración de las inversiones'],
    //7° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Impuestos II'],
    ['nombre' => 'Contabilidad de sociedades'],
    ['nombre' => 'Sociología de las organizaciones'],
    ['nombre' => 'Costos para la toma de decisiones'],
    //8° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Impuestos III'],
    ['nombre' => 'Cultura organizacional'],
    ['nombre' => 'Sistema organizacional y ambiente global'],
    ['nombre' => 'Finanzas III'],
    //9° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Comercio internacional'],
    ['nombre' => 'Manejo de equipos de trabajo'],
    ['nombre' => 'Auditoría fiscal'],
    //10° CUATRIMESTRE CONTADURIA
    ['nombre' => 'Grupos y relaciones interpersonales'],
    ['nombre' => 'Sistemas organizacionales'],
    ['nombre' => 'Liderazgo organizacional'],



    //>>>>>>>HISTORIA<<<<<<<<<
    //1° CUATRIMESTRE HISTORIA
      ['nombre' => 'Antropología cultural I'],
      ['nombre' => 'México prehispánico I'],
      ['nombre' => 'Investigación histórica y documental I'],
      ['nombre' => 'Epistemología de las ciencias sociales'],
      ['nombre' => 'Lectura y redacción I'],
    //2° CUATRIMESTRE HISTORIA
      ['nombre' => 'Antropología cultural II'],
      ['nombre' => 'Historia antigua universal I'],
      ['nombre' => 'México prehispánico II'],
      ['nombre' => 'Investigación histórica y documental II'],
      ['nombre' => 'Lectura y redacción II'],
    //3° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia antigua universal II'],
      ['nombre' => 'México prehispánico III'],
      ['nombre' => 'Historia de América Latina I'],
      ['nombre' => 'Historia universal I'],
      ['nombre' => 'Investigación histórica y documental III'],
    //4° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia medieval universal I'],
      ['nombre' => 'Historiografía de México I'],
      ['nombre' => 'México colonial I'],
      ['nombre' => 'Historia económica I'],
      ['nombre' => 'Historia de Oaxaca I'],
    //5° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia medieval universal II'],
      ['nombre' => 'México colonial II'],
      ['nombre' => 'Historiografía de México II'],
      ['nombre' => 'Geografía humana I'],
      ['nombre' => 'Sociología I'],
    //6° CUATRIMESTRE HISTORIA
      ['nombre' => 'México colonial III'],
      ['nombre' => 'Historia moderna universal I'],
      ['nombre' => 'Historia de América latina II'],
      ['nombre' => 'Historia económica II'],
      ['nombre' => 'Historiografía universal II'],
    //7° CUATRIMESTRE HISTORIA
      ['nombre' => 'México independiente I'],
      ['nombre' => 'Historia moderna universal II'],
      ['nombre' => 'Patrimonio cultural I'],
      ['nombre' => 'Geografía humana II'],
      ['nombre' => 'Sociología II'],
      ['nombre' => 'Historia de Oaxaca II'],
    //8° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia y medios de comunicación I'],
      ['nombre' => 'Historia contemporánea universal I'],
      ['nombre' => 'México independiente II'],
      ['nombre' => 'Historia de América latina III'],
      ['nombre' => 'Patrimonio cultural II'],
      ['nombre' => 'Didáctica de historia I'],
    //9° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia contemporánea universal II'],
      ['nombre' => 'México revolucionario I'],
      ['nombre' => 'Patrimonio cultural III'],
      ['nombre' => 'Historia y medios de comunicación II'],
      ['nombre' => 'Didáctica de historia II'],
    //10° CUATRIMESTRE HISTORIA
      ['nombre' => 'Historia contemporánea universal III'],
      ['nombre' => 'México revolucionario II'],
      ['nombre' => 'Patrimonio cultural IV'],
      ['nombre' => 'Historia y medios de comunicación III'],
      ['nombre' => 'Didáctica de historia III'],



      //>>>>>>>CIENCIAS Y TECNICAS DE LA COMUNICACION<<<<<<<<<
      //1° CUATRIMESTRE CTC
      ['nombre' => 'Historia de los medios'],
      ['nombre' => 'Proceso creativo de la comunicación'],
      ['nombre' => 'Expresión oral'],
      ['nombre' => 'Redacción'],
      ['nombre' => 'Fotografía I'],
      ['nombre' => 'Principios de economía'],
      //2° CUATRIMESTRE CTC
      ['nombre' => 'Filosofía de la comunicación'],
      ['nombre' => 'Sociología de la comunicación'],
      ['nombre' => 'Arte y comunicación'],
      ['nombre' => 'Periodismo I'],
      ['nombre' => 'Fotografía II'],
      ['nombre' => 'Radio I'],
      //3° CUATRIMESTRE CTC
      ['nombre' => 'Lenguaje cinematográfico'],
      ['nombre' => 'Psicología de la comunicación'],
      ['nombre' => 'Periodismo II'],
      ['nombre' => 'Radio II'],
      ['nombre' => 'Televisión I'],
      ['nombre' => 'Producción audiovisual'],
      //4° CUATRIMESTRE CTC
      ['nombre' => 'Mercadotecnia'],
      ['nombre' => 'Comunicación en pequeños grupos'],
      ['nombre' => 'Diseño grafico'],
      ['nombre' => 'Cultura musical'],
      ['nombre' => 'Televisión II'],
      ['nombre' => 'Técnicas de producción en vivo'],
      //5° CUATRIMESTRE CTC
      ['nombre' => 'Teoría social I'],
      ['nombre' => 'Teoría de la comunicación I'],
      ['nombre' => 'Psicología del mexicano'],
      ['nombre' => 'Investigación de la comunicación'],
      ['nombre' => 'Gobierno y proceso político en México'],
      ['nombre' => 'Introducción a la contabilidad'],
      //6° CUATRIMESTRE CTC
      ['nombre' => 'Teoria de la comunicacion II'],
      ['nombre' => 'Teoría social II'],
      ['nombre' => 'Introducción al derecho'],
      ['nombre' => 'Publicidad y propaganda'],
      ['nombre' => 'Comunicación y literatura I'],
      ['nombre' => 'Administración de los medios'],
      //7° CUATRIMESTRE CTC
      ['nombre' => 'Opinión pública'],
      ['nombre' => 'Derecho y comunicación'],
      ['nombre' => 'Comunicación y literatura II'],
      ['nombre' => 'Historia y crítica cinematográfica'],
      ['nombre' => 'Radio cultural'],
      //8° CUATRIMESTRE CTC
      ['nombre' => 'Prensa comparada'],
      ['nombre' => 'Derecho y etnias'],
      ['nombre' => 'Didáctica de la comunicación'],
      ['nombre' => 'Investigación de mercados'],
      ['nombre' => 'Televisión educativa'],
      //9° CUATRIMESTRE CTC
      ['nombre' => 'Telemática'],
      ['nombre' => 'Proyecto profesional'],


      //>>>>>PSICOLOGIA<<<<<<<
      //1° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Bases biológicas de la conducta'],
      ['nombre' => 'Historia de la psicología I'],
      ['nombre' => 'Teorías y sistemas'],
      ['nombre' => 'Sensopercepción'],
      //2° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Anatomía del sistema nervioso'],
      ['nombre' => 'Historia de la psicología II'],
      ['nombre' => 'Motivación y emoción'],
      ['nombre' => 'Aprendizaje y memoria'],
      //3° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Fisiología del sistema nervioso'],
      ['nombre' => 'Pensamiento y lenguaje'],
      ['nombre' => 'Desarrollo psicológico I Estadística descriptiva'],
      ['nombre' => 'Teoría del aprendizaje'],
      //4° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Psicología fisiológica'],
      ['nombre' => 'Psicopatología'],
      ['nombre' => 'Desarrollo humano'],
      ['nombre' => 'Desarrollo psicológico II'],
      ['nombre' => 'Estadística inferencial'],
      ['nombre' => 'Psicología diferencial'],
      //5° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Teorías dela personalidad I'],
      ['nombre' => 'Psicología clínica'],
      ['nombre' => 'Psicología industrial I'],
      ['nombre' => 'Psicología educativa'],
      ['nombre' => 'Métodos de investigación'],
      ['nombre' => 'Aprendizaje'],
      //6° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Teorías de la personalidad II'],
      ['nombre' => 'Teoría y técnica de la entrevista'],
      ['nombre' => 'Psicología industrial II'],
      ['nombre' => 'Sociología de la educación'],
      ['nombre' => 'Antropología social'],
      ['nombre' => 'Laboratorio de aprendizaje'],
      //7° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Trastornos mentales orgánicos'],
      ['nombre' => 'Psicometría I'],
      ['nombre' => 'Psicología del trabajo'],
      ['nombre' => 'Modelos psicopedagógicos'],
      ['nombre' => 'Psicología social'],
      ['nombre' => 'Psicología experimental'],
      //8° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Trastornos mentales neuróticos'],
      ['nombre' => 'Psicometría II'],
      ['nombre' => 'Psicodinámica de grupos'],
      ['nombre' => 'Pruebas psicopedagógicas'],
      ['nombre' => 'Comunicación social'],
      ['nombre' => 'Rehabilitación conductual'],
      //9° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Trastornos mentales psicóticos'],
      ['nombre' => 'Psicoterapia I'],
      ['nombre' => 'Orientación vocacional'],
      ['nombre' => 'Problemas de aprendizaje'],
      ['nombre' => 'Psicología comunitaria'],
      ['nombre' => 'Psicofarmacología'],
      //10° CUATRIMESTRE DE PSICOLOGIA
      ['nombre' => 'Supervisión de casos'],
      ['nombre' => 'Psicoterapia II'],
      ['nombre' => 'Seminario de tesis'],
      ['nombre' => 'Técnicas de educación especial'],
      ['nombre' => 'Etica profesional'],
      ['nombre' => 'Integración de estudios'],


      //>>>>>>>>PEDAGOGIA<<<<<<<<<<<
      //1° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Conocimiento de la infancia I'],
      ['nombre' => 'Teoría pedagógica I'],
      ['nombre' => 'Sociología de la educación I'],
      ['nombre' => 'Antropología pedagógica I'],
      ['nombre' => 'Psicología de la educación I'],
      ['nombre' => 'Iniciación a la investigación pedagógica I'],
      //2° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Conocimiento de la infancia II'],
      ['nombre' => 'Teoría pedagógica II'],
      ['nombre' => 'Sociología de la educación II'],
      ['nombre' => 'Antropología pedagógica II'],
      ['nombre' => 'Psicología de la educación II'],
      ['nombre' => 'Iniciación a la investigación pedagógica II'],
      //3° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Historia general de la educación I'],
      ['nombre' => 'Psicotécnica pedagógica I'],
      ['nombre' => 'Didáctica general I'],
      ['nombre' => 'Problemas contemporáneos de la pedagogía I'],
      ['nombre' => 'Conocimiento de los adolescentes I'],
      ['nombre' => 'Estadística aplicada a la educación I'],
      //4° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Historia general de la educación II'],
      ['nombre' => 'Psicotécnica pedagógica II'],
      ['nombre' => 'Didáctica general II'],
      ['nombre' => 'Problemas contemporáneos de la pedagogía II'],
      ['nombre' => 'Estadística aplicada a la educación II'],
      //5° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Historia dela educación en México I'],
      ['nombre' => 'Evaluación escolar I'],
      ['nombre' => 'Orientación educativa, vocacional y profesional I'],
      ['nombre' => 'Auxiliares de la comunicación I'],
      ['nombre' => 'Psicología del aprendizaje I'],
      ['nombre' => 'Prácticas escolares I'],
      //6° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Historia dela educación en México II'],
      ['nombre' => 'Evaluación escolar II'],
      ['nombre' => 'Orientación educativa, vocacional y profesional II'],
      ['nombre' => 'Auxiliares dela comunicación II'],
      ['nombre' => 'Psicología del aprendizaje II'],
      ['nombre' => 'Prácticas escolares II'],
      //7° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Filosofía de la educación I'],
      ['nombre' => 'Didáctica y práctica de la especialidad I'],
      ['nombre' => 'Legislación educativa mexicana I'],
      ['nombre' => 'Organización, administración y supervisión escolar I'],
      ['nombre' => 'Laboratorio psicopedagógico I'],
      ['nombre' => 'Política educativa en México I'],
      //8° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Filosofía de la educación II'],
      ['nombre' => 'Didáctica y práctica de la especialidad II'],
      ['nombre' => 'Legislación educativa mexicana II'],
      ['nombre' => 'Organización, administración y supervisión escolar II'],
      ['nombre' => 'Laboratorio psicopedagógico II'],
      ['nombre' => 'Política educativa en México II'],
      //9° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Seminario sobre métodos de investigación y asesoría de tesis I'],
      ['nombre' => 'Expresión artística I'],
      ['nombre' => 'Pedagogía monográfica I'],
      //10° CUATRIMESTRE DE PEDAGOGIA
      ['nombre' => 'Seminario sobre métodos de investigación y asesoría de tesis II'],
      ['nombre' => 'Expresión artística II'],
      ['nombre' => 'Pedagogía monográfica II'],
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
