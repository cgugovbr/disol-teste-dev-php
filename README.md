#Relatório do Teste de PHP para Desenvolvedores

##Configuração do Banco de Dados

O primeiro passo foi instalar e configurar o banco de dados MariaDB/MySQL para a aplicação. A configuração do banco de dados é um passo crucial no desenvolvimento de qualquer aplicação web, pois é onde os dados dos usuários serão armazenados.

##Clonagem do Repositório

Após a configuração do banco de dados, o repositório foi clonado a partir do GitHub usando o comando:

git clone https://github.com/cgugovbr/disol-teste-dev-php.git

##Criação do Modelo

O próximo passo foi criar o modelo Client. Este modelo representa a entidade Client na base de dados e define os atributos que podem ser preenchidos:

PHP

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";
    protected $fillable = [
        'nome', 'telefones', 'cpf', 'data_aniversario', 'endereco', 'emails'
    ];
    use HasFactory;
}

##Criação do Controlador

Após a criação do modelo, o próximo passo foi criar o controlador ClienteController. Este controlador é responsável por gerenciar as operações CRUD para os clientes.

##Criação das Views

Após a criação do controlador, foram criadas quatro views: index, create, edit e show. Essas views são responsáveis por exibir a interface do usuário para as operações CRUD.

##Criação das Rotas

Finalmente, as rotas para a aplicação foram criadas. As rotas são responsáveis por mapear as URLs da aplicação para os métodos do controlador ClienteController.

##Resolução de Problemas com a Renderização das Views

Depois de configurar o banco de dados e clonar o repositório do GitHub, você criou o modelo, o controlador, as views e as rotas. No entanto, ao tentar acessar a view create, você percebeu que as views não estavam sendo renderizadas corretamente. Em vez de exibir os formulários, as páginas estavam em branco.

Este problema ocorreu porque o arquivo disol-teste-dev-php/resources/views/layouts/app.blade.php não estava disponível no repositório do GitHub. Este arquivo é o layout principal da aplicação, que é estendido pelas outras views. A ausência deste arquivo fez com que as páginas não fossem renderizadas corretamente.

A resolução desse problema envolveu a criação do arquivo app.blade.php no diretório correto. Isso permitiu que as views fossem renderizadas corretamente.