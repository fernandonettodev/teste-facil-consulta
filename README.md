**Teste de API Facil Consulta**

Este documento descreve o teste de API desenvolvido usando o Laravel Sail para listar, adicionar e atualizar informações relacionadas a cidades, médicos e pacientes.

### Configuração do Ambiente

1. Certifique-se de que você possui o Docker e Docker Compose instalados em sua máquina.
2. Clone este repositório em sua máquina local.
3. Crie um arquivo `.env` na raiz do projeto e configure suas variáveis de ambiente, incluindo as configurações de banco de dados para o Laravel Sail.
4. No terminal, navegue até a pasta do projeto e execute o comando `./vendor/bin/sail up` para iniciar os containers do Laravel Sail.
5. Lembre de gerar o token do JWT usando o comando `php artisan jwt:secret` no console.
6. Execute as migrações do banco de dados com `./vendor/bin/sail artisan migrate`.
7. Tambem execute os seeders para popular o banco de dados com dados de exemplo: `./vendor/bin/sail artisan db:seed`.

### Rotas

As rotas estão disponíveis na coleção do Postman disponibilizada, que pode ser acessada clicando no seguinte link: [Collection do Postman](https://www.postman.com/nova-versao-fc-teste/workspace/teste-facil-consulta/collection/23818071-1ee3f4ef-d351-45e2-a38f-1b4940c3ad58?action=share&creator=23818071).

### Considerações Finais

Este é um teste de API básico, desenvolvido usando o Laravel Sail, para listar, adicionar e atualizar informações relacionadas a cidades, médicos e pacientes. 
Sinta-se à vontade para testar e explorar os diferentes endpoints disponíveis.

Se você tiver alguma dúvida ou precisar de assistência adicional, por favor, entre em contato.

Agradeço a oportunidade.
*Att: Fernando Netto*
