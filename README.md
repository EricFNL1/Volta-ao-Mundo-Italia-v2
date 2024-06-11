# Projeto Itália - Pontos Turísticos,Clima,Curiosidades...

Este projeto é uma aplicação web construída com Laravel para mostrar pontos turísticos na Itália e informações climáticas usando a API do OpenWeatherMap.

## Funcionalidades

- Exibição de pontos turísticos na Itália.
- Integração com a API do OpenWeatherMap para exibir dados climáticos em tempo real para múltiplas cidades.

## Instalação

1. Clone o repositório;
2. Instale as dependências do PHP;
3. Instale as dependências do NPM;
4. Configure o arquivo `.env`;
5. Execute as migrações;
6. Compile os ativos front-end;
7. Inicie o servidor;
 

## Uso

- Acesse a rota `/pontturisticos` para ver os pontos turísticos e as informações climáticas das cidades configuradas.

## Estrutura do Projeto

- **App/Services/WeatherService.php:** Serviço para integração com a API do OpenWeatherMap.
- **App/Http/Controllers/TouristController.php:** Controlador para buscar dados meteorológicos e exibir a página de pontos turísticos.
- **resources/views/pontturisticos.blade.php:** View para exibir pontos turísticos e dados meteorológicos.
- **routes/web.php:** Definição de rotas para a aplicação.
- Dentre todas as outras rotas de acesso do sistema.

---

Feito por EricFNL1, Todo trabalho gera reconhecimento...
