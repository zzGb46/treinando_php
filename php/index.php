<?php


echo '<pre>';
// $names = ['gabriel', 'ele', 'elas'];

// // foreach($names as $key => $name){
// //     echo $key . '=>' . $name;
// // }

// $i = 0;
// for($i = 0; $i < count($names); $i++){
//     if($i === 0){
//          continue;
//     }
//     echo $names[$i];
// }

// function connection(){
//     $pdo = new PDO('mysql:host=smpsistema.com.br;dbname=u283879542_gabriel_m',
//     'u283879542_gabriel_m',
//     'Gabriel_m@tipi02');
//     return $pdo;
// }
if(isset($_POST['email']) && $_POST['senha']){
    var_export($_POST['email']);
    var_export($_POST['senha']);
}else{
    echo 'suma';
}



// function getData($table){
//     $query = connection()->query("select * from {$table}");
//     $query->execute();
//     return $query->fetch();
// }

// print_r(getData('tbl_gabrielm_cliente'));


// class User{
//     public function teste(){
//         return 'teste';
//     }
// }


//call_user_func serve para conseguir atribuir uma determinada
//característica á uma determinada função.
// function teste($vulgo){
//     return 'meu nome é ' . $vulgo;
// }

// echo call_user_func ("teste", "ele");


//CHAMAR PRIMEIRO PARÂMETRO COM ARRAY CASO FOR UM OBJETO COM MÉTODO ESTÁTICO OU NÃO E QUEIRA USAR UM MÉTODO DELE.

// class User{

//     public static function teste(){
//         return 'foi';
//     }
// }



// echo User::teste();

// class teste{
//     public static function soma($a,$b){
//         return $a*$b;
//     }
// }

//CALL_USER_FUNC SERVE PARA QUE FUNÇÕES E MÉTODOS SEJAM CHAMADO DE FORMA DINÂMICA
// class teste{
//     public function chamada($nome, $setor){
//         return 'chamando ' . $nome . ' no setor ' . $setor;
//     }
// }

// $resposta = new teste();
// echo call_user_func([$resposta, 'chamada'], 'ele', '21');




// class teste2{
//     public static function chamado($foi, $foi2){
//         return 'chamando aqui ' . $foi . ' e ali ' . $foi2;
//     }
// }

// echo teste2::chamado('insano', 'tambem');

// echo teste::soma(6,5);



//FAZENDO UMA FUNÇÃO ESTÁTICA COM CALL_USER_FUNC (static)


// class resp{
//     public static function sim($primeiro, $segundo){
//         return 'ali foi ' . $primeiro . ' no outro foi ' . $segundo;
//     }
// }

// echo call_user_func(['resp', 'sim'], 'um', 'aquele');


// class alien{
//     public static function foi($a, $b){
//         return 'meu primeiro ' . $a . ' e meu segundo ' . $b;
//     }
// }

// echo call_user_func(['alien', 'foi'], 'carro', 'foguete');

//UTILIZANDO O MÉTODO __INVOKE QUE PERMITE COM QUE UM OBJETO SEJA 
//COMO UMA FUNÇÃO

// class foi{
//     public function __invoke($primeiro, $segundo){
//         return 'testando ' . $primeiro . ' e aqui' . $segundo;
//     }
// }

// $resposta = new foi();

// echo call_user_func($resposta, 'aqui', ' too');


//USAR CALL_USER_FUNC DENTRO DE OUTRAS FUNÇÕES

// function teste($nome){
//     return 'chamando ' . $nome;
// }

// function teste2($callback){
// return call_user_func($callback, 'todos');
// }

// echo teste2('teste');

//USANDO COLCHETES [ ] PARA EXPLICAR QUAL MÉTODO SERÁ UTILIZADO:
// class Pessoa {
//     public function cumprimentar($nome) {
//         return "Oi, $nome!";
//     }

//     public function despedir($nome) {
//         return "Tchau, $nome!";
//     }
// }

// $obj = new Pessoa();

// // Chamando métodos específicos com call_user_func
// echo call_user_func([$obj, 'cumprimentar'], 'Ana') . PHP_EOL;
// // Saída: Oi, Ana!

// echo call_user_func([$obj, 'despedir'], 'Carlos') . PHP_EOL;
// // Saída: Tchau, Carlos!


//CLOSURES SÃO VARIÁVEIS QUE ARMAZENAM CONSIGO VALORES DE FUNÇÕES QUE
//PODEM SER USADAS COMO ARGUMENTO PARA OUTRAS FUNÇÕES.


// $armazena= function ($foi){
//     return 'aqui se tem ' . $foi;
// };

// echo $armazena('resultado');


//Superglobal $_SESSION
//ABRINDO SEÇÃO:




// require './teste.php';
// require './teste2.php';

// $_SESSION['ida']=['nome'=>'gabriel', ' idade'=>55];
// $_SESSION['pessoa']= ['vulgo'=>'biel', 'idade'=>77];

//Fechando seção:
// unset($_SESSION['ida']);

//EXCLUINDO TODAS AS SEÇÕES
//DE UMA VEZ:
// session_destroy();


//CRIAR SUAS PRÓPRIAS VARIÁVEIS DE AMBIENTE
//QUE SÃO IMPORTANTES PARA CONEXÃO COM O BANCO DE DADOS




echo '</pre>';


