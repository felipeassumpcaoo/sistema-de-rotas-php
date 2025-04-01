Sistema de Rotas em PHP com Orientação a Objetos
Este sistema de rotas foi desenvolvido em PHP utilizando os conceitos de Orientação a Objetos para gerenciar e rotear as requisições HTTP de forma eficiente e intuitiva. A solução implementa URLs amigáveis, facilitando a navegação e a compreensão das rotas na aplicação.

Funcionalidades
Rotas Dinâmicas: O sistema permite o mapeamento de URLs para funções específicas, permitindo que as requisições sejam tratadas adequadamente.

URLs Amigáveis: Utiliza o arquivo .htaccess para reescrever as URLs, tornando-as mais legíveis e amigáveis para o usuário e para os motores de busca (SEO).

Templates com Plates: A visualização das páginas é gerenciada com o Plates, um motor de templates leve e eficiente, permitindo uma separação clara entre lógica e apresentação.

Estrutura Orientada a Objetos: O sistema é construído de forma modular e escalável utilizando a orientação a objetos, facilitando a manutenção e extensibilidade.

Tecnologias Usadas
PHP: A linguagem principal utilizada para o desenvolvimento da aplicação.

HTACCESS: Usado para configurar as URLs amigáveis e realizar o roteamento das requisições de forma limpa.

Plates: Motor de templates que proporciona uma maneira simples e eficiente de trabalhar com a camada de apresentação.

Orientação a Objetos (OO): A arquitetura do sistema segue os princípios da orientação a objetos, promovendo organização e reutilização de código.

Como Funciona
Rotas: As rotas são registradas em um arquivo específico e associadas a métodos que irão processar as requisições.

HTACCESS: O arquivo .htaccess garante que todas as requisições sejam direcionadas para o arquivo index.php, onde o roteador processará a requisição.

Templates: O Plates carrega os templates correspondentes às rotas, permitindo que o conteúdo seja apresentado de maneira limpa e organizada.
