# API de Usuários.

Ao clonar o projeto, para executa-lo e efetuar algumas requisições, é necessário executar algumas etapas:

1 – Execute “composer update” na raiz do projeto.
2 – Execute o DUMP sql que está na raiz do projeto com o nome de “dump_finnet_user_api.sql” no seu gerenciador de banco de dados.
3 – Copie e cole o arquivo “env-example.sql” na raiz do projeto, renomeando-o como “env.php” e preencha as informações de conexão do banco de dados como: (Host, DBName, User, Password e Port).

4 –Para executa-lo, rode o comando na raiz do projeto: php -S localhost:8000

Exemplo de Requisições:

GET : localhost:8000/ – Retorna todos os usuários
GET: localhost:8000/user/:id – Retorna o usuário do ID.
POST: localhost:8000/user/ - Cria Usuário.
PUT: localhost:8000/user/ - Atualiza Usuário.
DELETE: localhost:8000/user/ - Deleta Usuário.
